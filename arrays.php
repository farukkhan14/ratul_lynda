<html>
<head>
	<title>Arrays</title>
</head>
<body>
<?php 
	$numbers =  array(4,6,7,8,9,45); 
	echo $numbers[0];
?>
<br>
<?php 
	$mixed = array(5,8,"dog", array(23,34,45,23)); echo "<br>";
	echo $mixed[2]; echo "<br>";
	echo $mixed[3]; echo "<br>";
	echo $mixed; echo "<br>";
	echo $mixed[3][2]; echo "<br>";
?>

	<pre>
	 <?php echo print_r($mixed); echo "<br>"; #here print_r used for array printing, if use pre tag, the array show in vertically.  ?> 
	</pre>


</body>
</html>