<html>
<head>
	<title>Numbers part one Integers</title>
</head>
<body>
	<?php 
		$var1 = 3;
		$var2 = 4;
	?>
	Basic Math: <?php echo((1 + 2 + $var1) / 2 - 5); ?><br>
	<br>
	#section 1
	<br>
	<br>
	Absolute value: <?php echo abs(-500); ?><br>
	Exponential: <?php echo pow(3, 2); ?><br>
	Square root: <?php echo sqrt(16); ?><br>
	Modulo: <?php echo fmod(10, 3); ?><br>
	Random: <?php echo rand(); ?><br>
	Random (min, max): <?php echo rand(1,10); ?>
	<br>
	<br>
	#section 2
	<br>
	<br>
	+= : <?php $var2 += 6; echo $var2;  ?><br>
	-= : <?php $var2 -= 1; echo $var2;  ?><br>
	*= : <?php $var2 *= 5; echo $var2;  ?><br>
	/= : <?php $var2 /= 2; echo $var2;  ?><br>
	<br>
	<br>
	#section 3
	<br>
	<br>
	Increment: <?php $var2++; echo $var2 ?><br>
	Increment: <?php $var2--; echo $var2 ?><br>
	<br>
	<?php echo 1 - "3 houses" ?>
</body>
</html>