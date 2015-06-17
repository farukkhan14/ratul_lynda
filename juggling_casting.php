<html>
<head>
	<title>Type Juggling and Type Casting</title>			
</head>
<body>
	<strong>Type Juggling </strong><br>
	<?php $count = "2 cats"; ?>
	Type: <?php echo gettype($count); ?><br>

	<?php $count +=3; ?>
	Type: <?php echo gettype($count); ?><br>

	<?php $cats = "I have" ." ". $count ." ". "cats"." : ";  ?><br>

	<?php echo $cats; ?><?php echo gettype($cats); ?><br>
	Type Casting<br>
	<?php settype($count, "integer"); ?>
	count: <?php echo gettype($count); ?><br>
	<br>
	<br>
	<?php $count2 = (string) $count; ?>
	count: <?php echo gettype($count); ?><br>
	count2: <?php echo gettype($count2); ?><br>
	<br>
	<?php $test1 = 3; ?>
	<?php $test2 = 3; ?>
	<?php settype($test1, "string"); ?><br>
	<?php (string) $test2; ?>
	test1: <?php echo gettype($test1); ?><br>
	test2: <?php echo gettype($test2); ?><br>


	<?php  ?>
</body>
</html>