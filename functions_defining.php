<html>
<head>
	<title>Define: Functions</title>
</head>
<body>
<?php 

 	function say_hello(){
 		echo  "Hello World! <br>";

 	}
 	say_hello();

 	function say_hello_to($r){
 		echo "Hello $r <br>" ;


 	}
 	say_hello_to("Man!");
 	say_hello_to("Woman!");

 	say_hello_loudly();
 	function say_hello_loudly(){
 		echo "Hello World! <br>";
 	}


 ?>
</body>
</html>