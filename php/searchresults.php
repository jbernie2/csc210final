<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Search for a grad program with Grad to Go</title>
		<link rel="stylesheet" type="text/css" href="../css/ourStyle.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<script src="../js/addProgram.js"></script>
		<script src="../js/login.js"></script>
		
	</head>
	
	<?php
		include 'db.php';
		if(!isset($_SESSION)){session_start();}
		$school = htmlspecialchars(mysql_real_escape_string($_REQUEST["school"]));
		$degree = mysql_real_escape_string($_REQUEST["degree"]);
		$ermessage = 0;
		$user_id = mysql_real_escape_string($_SESSION['user_id']);

		//connect to databse
		include_once 'db.php';
		db_connect();
		
		$proginfo_query = "SELECT school, link, due_date, degree_type, degree_name, fee, recs, gre , program_id FROM proginfo
								WHERE school LIKE \"%". $school . 
								"%\" AND degree_name LIKE \"%" . $degree .
								"%\" ORDER BY school ASC;";
		$results = mysql_query($proginfo_query);
		
		$ermessage = check($results);

		//collect all of the schools the user has added
		if($user_id == ""){
			$logged_in = false;
		}else{
			$program_query = "SELECT program_id FROM proglookup WHERE user_id=". $user_id . ";";
			$program_column = mysql_query($program_query);
			$user_programs = array();
			//put it in a 1-D array
			while($progId = mysql_fetch_array($program_column)){
				$user_programs[] = $progId[0];
			}
			$logged_in = true;
		}

	?>
	<body>
		<?php include('banner/banner.php')?>
		<?php
			if ($ermessage == 1){
		?>
		<p>Sorry, we could not find any schools called <?php echo "$school"?>.</p>
		<?php 
			}else{
		?>
		<p>Here are some programs we found that match your search</p>
		<table>
			<tr>
				<th>Program</th>
				<th>Due Date</th>
				<th>Fee</th>
				<th>Recommenders</th>
				<th>GRE</th>
				<th>Add to list</th>
			</tr>

			<!-- PHP loop to display table results -->
			<?php 
				while ($row = mysql_fetch_array($results)){
					if($logged_in == "true"){
					if(in_array($row["program_id"], $user_programs) ){
						$src = "../img/checkSign.png";
					}else{
						$src = "../img/addSign.png";
					}
					}else{ $src = "../img/addSign.png";}
			?>
			<tr >
				<td><?php echo $row["school"] ?> -  <?php echo $row["degree_type"]?> in <?php echo $row["degree_name"]?></a></td>
				<td><?php echo $row["due_date"] ?></td>
				<td><?php echo $row["fee"] ?></td>
				<td><?php echo $row["recs"] ?></td>
				<td><?php echo $row["gre"] ?></td>
				<td><img src="<?php echo $src ?>" width="18" height="18"  alt="click to add this program" class="add" id="<?php echo $row["program_id"] ?>"></td>
			</tr> 
			<?php
				}}
			?>
		</table>
	</body>
</html>
