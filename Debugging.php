<html>
<head>
	<title>Debugging</title>
</head>
<body>
<pre>
<?php 
	$number = 99 ;
	$string = "Bug?";
	$array = array('1' => "Homepage" , 2 => "About us", 3 => "Services" );

	var_dump($number);
	echo "<br>";
	var_dump($string);
	echo "<br>";
	var_dump($array);
	echo "<br>";

 ?>
 </pre>
 <pre>
 <?php 
 	print_r(get_defined_vars());

  ?>
  </pre>
  <pre>
  <?php 
  function say_hello_to($word){

  	echo "Hello {$word}! <br>";
  	var_dump(debug_backtrace());
  }

  say_hello_to('Everyone');

   ?>
   </pre>
</body>
</html>