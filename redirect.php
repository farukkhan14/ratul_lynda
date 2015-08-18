<?php 
	function redirect_to($new_location){
		header("Location:". $new_location);
		exit;
	}

	$logged_in = $_GET['logged_in'];
	if ($logged_in == "1") {
		# code...
		redirect_to("basic.html");
	}
	else{

		redirect_to("http://www.lynda.com");
	}


 ?>