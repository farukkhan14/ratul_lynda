<html>
<head>
	<title>Functions: Default Arguments Values</title>
</head>
<body>
<?php 

	function paint($room = "office", $color = "red"){

		return "The colord of the {$room} is $color. <br>";

	}

	echo paint();
	echo paint("bedroom", "blue");
	echo paint("bedroom", null);
	echo paint("bedroom");
	echo paint("blue");

 ?>
</body>
</html>