<html>
<head>
	<title>Array Function</title>
</head>
<body>
	<?php $numbers = array(8,23,15,42,16,4); ?>
	Count: <?php echo count($numbers); ?><br>
	Max value: <?php echo max($numbers); ?><br>
	Min Value: <?php echo min($numbers); ?><br>
	<br>
	<pre>
		sort: <?php  sort($numbers);  print_r($numbers) ;?><br>
		Reverse Sort: <?php  rsort($numbers); print_r($numbers) ; ?><br>
	</pre>
	<br>
	Implode: <?php echo $num_string = implode(" * ", $numbers); #here implode is used for converting array into string ?><br> 
	<pre>
		Explode: <?php print_r($num_string = explode(" * ", $num_string)); #here explode is used for converting string into array.?><br>	
	</pre>
	15 in arry?: <?php echo in_array(15, $numbers); #returns T/F ?><br>
	19 in arry?: <?php echo in_array(19, $numbers); #returns T/F ?><br>
	
	<br>
</body>
</html>