<?php
	
	function getPrograms(){
		//display php errors on page
		ini_set('display_errors', 1); 
		error_reporting(E_ALL);

		//get session variables
		if(!isset($_SESSION)) {
			session_start();
		}

		//connect to database
		include_once "db.php";
		db_connect();

		formatTable(getUserPrograms());
	}
	//retreive programs that the use has applied to
	function getUserPrograms(){

		$user_id = mysql_real_escape_string($_SESSION['user_id']);
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
		if (mysql_num_rows($result) == 0){
			$result = "false";
		}
		return $result;
	}
	
	//display mysql results in a table
	function formatTable($result){
		if($result == "false"){
			$table =  "
			<h2 id = \"searchHead\">
				It looks like you haven't selected any schools yet.
				Try searching for some now.
			</h2>
			<div id=\"searchArea\">
                        <form id=\"search\" action=\"../php/searchresults.php\">
                                Search for a school: <input name=\"school\" />
                                Pick a program:
                                <select name=\"degree\" size=\"1\">
                                        <option></option>
                                        <option>Biology</option>
                                        <option>Chemistry</option>
                                        <option>Computer Science</option>
                                        <option>Philosophy</option>
                                </select>
                        <input type=\"submit\" value=\"Search\"/>
                        </form>
                </div>";
			
			echo $table;
		}else{
		//column titles
		$table = "<div id='userPrograms'><form id='user_programs' onsubmit='return false;'>";
		$table .= "<table border='0'>";
		$table .= "<tr>";
		$table .= "<th> Program Name </th>";
		$table .= "<th> Due Date </th>";
		$table .= "<th> Fee </th>";
		$table .= "<th> Fee Paid? </th>";
		$table .= "<th> Transcript Required? </th>";
		$table .= "<th> Transcript Sent? </th>";
		$table .=  "<th> Recommendations Required </th>";
		$table .= "<th> Recommendations Sent </th>";
		$table .= "<th> Remove Program </th>";
		$table .= "</tr>";

		// printing table rows
		while($row = mysql_fetch_assoc($result)){
			
			$schoolID = $row['program_id'];

			$table .= "<tr id='tr".$schoolID."'>";
			
			$table .= "<td>".$row['program_name']."</td>";
			$table .= "<td>".$row['due_date']."</td>";
			$table .= "<td>".$row['fee']."</td>";
			$table .= "<td>".makeEditable($schoolID,'fee_paid',$row['fee_paid'],'select')."</td>";
			$table .= "<td>".$row['transcripts']."</td>";
			$table .= "<td>".makeEditable($schoolID,'transcript_sent',$row['transcript_sent'],'select')."</td>";
			$table .= "<td>".$row['recs']."</td>";
			$table .= "<td>".makeEditable($schoolID,'recommendations_sent',$row['recommendations_sent'],'number')."</td>";
			$table .= "<td> <input type='checkbox' name='".$schoolID."_remove' value='".$schoolID."'> remove <br></td>";
			$table .= "</tr>\n";
		}
		$table .= "</table>";
	
		$table .= "<div id='holdButton'><input type='submit' id='submitChanges' value='Submit Changes'/></div>";
		$table .= "</form></div>";
		
		echo $table;
		}
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
