<html>
<head>
	<title>Function Arguments</title>
</head>
<body>
<?php 

	function ratul($a){

		echo "Hey $a!";

	}
	$name = "Ratul";
	ratul($name);

 ?>
 <br>
 <?php 

 	function better_hello($greetings, $targets, $punct){
 		echo $greetings. " ". $targets. " ".$punct . "<br>";
 	}

 	$number = "1464163";
 	better_hello("Hello", $name, "!");
 	better_hello("Greetings", $name, "$number");
 	better_hello("Greetings", $name, null);

  ?>
</body>
</html>