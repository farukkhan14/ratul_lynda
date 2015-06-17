<?php

$array = array('lastname', 'email', 'phone');
//$comma_separated = implode(" hello,", $array);
$comma_separated = implode($array,"hello,");

echo $comma_separated; // lastname,email,phone

echo "<br/>";

var_dump($comma_separated);

//var_dump(implode('hello', array()));


?> 
