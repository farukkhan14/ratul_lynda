<?php error_reporting(E_ALL); ?>
<html>
<head>
	<title>Constants</title>
</head>
<body>
<?php 
	//$max_width = 980;

	define("MAX_WIDTH", 980);
	echo MAX_WIDTH;
 	?>
 	<br>
 	<?php //can't even change it
 	 // MAX_WIDTH = MAX_WIDTH + 1;
 	 // echo MAX_WIDTH;
 	 ?>
 	 <?php // can't even redefine it
 	 define ("MAX_WIDTH", 981);
 	 echo MAX_WIDTH;
 	  ?>
</body>
</html>