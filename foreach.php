<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>foreach loops</title>
</head>
<body>
	<?php 

		$ages = array(4,8,15,23,42);

		foreach($ages as $age){
			echo "Age: $age <br>";
		}
	 ?>

	 <br>
	 <?php // foreach using assoc. array

	 	$person = array(

	 			"first_name" => "Kevin",
	 			"last_name" => "Skoglund",
	 			"address" => "123 Main Street",
	 			"city" => "Beverly Hills",
	 			"state" => "CA",
	 			"zip_code" => "90210",
	 		);

	 	foreach ($person as $attribute => $data) {

	 		echo "$attribute: $data";
	 		echo "<br>";

	 	}
	 		echo "<br>";
		foreach ($person as $attribute => $data) {

			$attr_nice = ucwords(str_replace("_", " " , $attribute)); # here ucwords is for title case & str_replace for replacing "_" to "space"
			echo "$attr_nice: $data <br>";
		}
	 				
	 		 
	  ?>

</body>
</html> 