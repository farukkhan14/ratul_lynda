
 <html>
 <head>
 	<title>Sring Function</title>
 </head>
 <body>
 	<?php 

 	$frist = "The quick brown fox jumped over the lazy dog.";
 	$second = "Rome was not built in a day";
 	echo $frist;
 	echo "<br/>";
 	echo $second;
 	echo "<br/>";
 	?>
 	<br>
 	#section 1

 	Lowercase : <?php echo strtolower($frist); ?><br/>
 	Uppercase : <?php echo strtoupper($frist); ?><br/>
 	Uppercase Frist : <?php echo ucfirst($second); ?><br/>
 	Uppercase Words : <?php echo ucwords($second); ?><br/>

 	<br>

 	#section 2
 	<br>
 	Length	: <?php echo strlen("$frist");?><br>
 	Trim	: <?php echo "A" . trim(" B C D ") . "E" ;?><br>
 	Find	: <?php echo strstr($second, "built");?><br>
	Replace	: <?php echo str_replace("quick", "superfast", $frist); ?><br>

	<br>

	#section 3
	<br>
	Repeat	: <?php echo str_repeat($second." . "." "."<br>" . "&nbsp", 3); ?><br>
	Make Substring: <?php echo substr($frist, 4, 11); ?><br>
	Find Position: <?php echo strpos($second, "in"); ?><br>
	Find Character: <?php echo strchr($second, "u"); ?>	<br>



 </body>
 </html>