<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Switch</title>
</head>
<body>
	<?php 
	$a = 3;
	switch ($a) {
		case '0':
			echo "a equals to 0 <br>";
			break;
		case '1':
			echo "a equals to 1 <br>";
			break;	
		case '1':
			echo "a equals to 1 <br>";
			break;				
		default:
			echo "Wrong Input";
			break;
	}
	?>

	<br>	
	<br>	
	<?php 	

	// ChineseZodiac 
	// whitespace doesn't matter
	// colons, semicolons and breaks so 
	

	# I don't understand the switch statement (($year -4) % 12)  
	
	
	$year = 2013;
	switch (($year - 8) % 12) {
		case 0: $zodiac = 'Rat'; break;
		case 1: $zodiac = 'Ox'; break;
		case 2: $zodiac = 'Tiger'; break;
		case 3: $zodiac = 'Rabbit'; break;
		case 4: $zodiac = 'Dragon'; break;
		case 5: $zodiac = 'Snake'; break;
		case 6: $zodiac = 'Horse'; break;
		case 7: $zodiac = 'Goat'; break;
		case 8: $zodiac = 'Monkey'; break;
		case 9: $zodiac = 'Rooster'; break;
		case 10: $zodiac = 'Dog'; break;
		case 11: $zodiac = 'Pig'; break;
	}
	echo "$year is the year of the $zodiac."
   ?>
	<br>
	<br>

   <?php 
   // case with multiple values
   
   $user_type = 'customer';
   switch ($user_type){
   	case 'student';
   		echo "welcome!";
   		break;

   	case 'press':
   	case 'customer':
   	case 'admin':
   		echo "Hello";
   		break;


   }


    ?>
</body>
</html>