<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Search for a grad program with Grad to Go</title>
		<link rel="stylesheet" type="text/css" href="../css/ourStyle.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		
	</head>
	
	<?php
		ini_set('display_errors',1);
		ini_set('display_startup_errors',1);
		error_reporting(-1);
		/*
		include 'db.php';
		
		$school = htmlspecialchars(mysql_real_escape_string($_REQUEST["school"]));
		$degree = $_REQUEST["degree"];
		$ermessage = 0;
		
		db_connect();
		
		$proginfo_query = "SELECT school, degree_type, degree_name, fee, recs, gre FROM proginfo ORDER
								WHERE school LIKE \"%". $school . 
								"%\" AND degree_name =\"" . $degree .
								"\" ORDER BY school ASC;";
		$results = mysql_query($proginfo_query);
		
		$ermessage = check($results);
		//checks to make sure results were returned
		function check($result){
				if (mysql_num_rows($result) == 0){
					return 1;
				}else{
					return 0;
				}
			}
	
	?>
	<body>
	
		<?php
			if ($ermessage == 1){
		?>
		<p>Sorry, we could not find any schools called <?=$school?>.</p>
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
				$int = 1;
				$is_gray = "class=\"gray\"";
				while ($row = mysql_fetch_array($results)){
					if($int%2 == 1){ 
						$is_gray = "class=\"gray\"";
					}else{
						$is_gray = null;
					}
			?>
			<tr <?=$is_gray ?>>
				<td><?= $int ?></td>
				<td><?= $row["due_date"] ?></td>
				<td><?= $row["fee"] ?></td>
				<td><?= $row["recs"] ?></td>
				<td><?= $row["gre"] ?></td>
				<td>addme button</td>
			</tr>
			<?php
				$int++;
				}
			?>
		</table>
	</body>
</html>
*/

?>
<body>
<p>text</p>
</body>
</html>