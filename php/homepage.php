<?php
	//display php errors on page
	ini_set('display_errors', 1); 
	error_reporting(E_ALL);
	
	//get session variables
	session_start();
	
	//connect to database
	include_once "db.php";
	db_connect();

	//extract session variables
	$first_name = $_SESSION['first_name'];
	$user_id = $_SESSION['user_id'];

	echo $first_name;
	echo $user_id;

	//retreive programs that the use has applied to
	//and display them in a table
	function getPrograms(){

		$user_id = $_SESSION['user_id'];
		$result = mysql_query("
			select * from proglookup pl

				left join proginfo pi
					ON pl.program_id = pi.program_id

				where
					(pl.user_id = '$user_id')
		");
		
		if (!$result) {
			die("Query to show fields from table failed");
		}

		//column titles
		$table = "<form id='user_programs' onsubmit='return false;'>";
		$table .= "<table>";
		$table .= "<tr>";
		$table .= "<th> Program Name </th>";
		$table .= "<th> Due Date </th>";
		$table .= "<th> Fee </th>";
		$table .= "<th> Fee Paid? </th>";
		$table .= "<th> Transcript Required? </th>";
		$table .= "<th> Transcript Sent? </th>";
		$table .=  "<th> Recommendations Required </th>";
		$table .= "<th> Recommendations Sent </th>";
		$table .= "</tr>";

		// printing table rows
		while($row = mysql_fetch_assoc($result)){
			
			$schoolID = $row['program_id'];

			$table .= "<tr>";
			
			$table .= "<td>".$row['program_name']."</td>";
			$table .= "<td>".$row['due_date']."</td>";
			$table .= "<td>".$row['fee']."</td>";
			$table .= "<td>".makeEditable($schoolID,'fee_paid',$row['fee_paid'],'select')."</td>";
			$table .= "<td>".$row['transcripts']."</td>";
			$table .= "<td>".makeEditable($schoolID,'transcript_sent',$row['transcript_sent'],'select')."</td>";
			$table .= "<td>".$row['recs']."</td>";
			$table .= "<td>".makeEditable($schoolID,'recommendations_sent',$row['recommendations_sent'],'number')."</td>";

			$table .= "</tr>\n";
		}
		$table .= "</table>";
	
		$table .= "<div id='inputButton'><input type='submit' id='inputButton' value='Submit Changes'/></div>";
		$table .= "</form>";
		
		echo $table;
	}

	//make fields in the table user editable
	function makeEditable($id,$fieldName,$value,$type){

		$formElement = "";

		$id = $id."_".$fieldName;
		if($type == 'select'){

			$formElement .= "<select name='".$id."'>
						<option value='1'".isSelected('Yes',formatBoolean($value))." >Yes</option>
						<option value='0'".isSelected('No',formatBoolean($value)).">No</option>
					   </select>";
		}
		else if($type == 'number'){
			$formElement .= "<input type='text' 
						id='".$id."' 
						name='".$id."'
						value='".$value."' 
						maxlength='2'
						size='2'/>";
		}

		return $formElement;
	}

	//set default value for selector
	function isSelected($default, $value){
		if($default == $value){
			return "selected='selected'";
		}
		else{
			return " ";
		}
	}
	//the boolean values in the mysql are 0 and 1, we want
	//them to be 'Yes' and 'No'
	function formatBoolean($num){
		if($num == 0){
			return "No";
		}
		else{
			return "Yes";
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<link rel="stylesheet" type="text/css" href="../css/ourStyle.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="../js/updatePrograms.js" type="text/javascript"></script>

	</head>
	<body>
		<p> hello <?php echo $_SESSION['first_name']; ?> </p>
		<?php getPrograms(); ?>
		<span id='response'></span>
	</body>
</html>
