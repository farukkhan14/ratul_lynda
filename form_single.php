<?php require_once("included_functions.php"); ?>
<?php 
	if (isset($_POST['submit'])) {
		//form was submitted

		$username = $_POST['username'];
		$password = $_POST['password'];
		if ($username == "ratul" && $password == "1234") {
			// successfull logged in..
			redirect_to("basic.html");
		}else{

			$message = "There were some errors.";
	    }
	}
	else{
	
		
		$username = "";
		$message = "Please log in.";
	}


 ?>


<html>
<head>
	<title>Form</title>
</head>
<body>

	<?php echo $message; ?><br>
	<form action="form_single.php" method="post">
			<input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>"><br><br>
			<input type="password" name="password" value=""><br><br>
			<br>
			<input type="submit" name="submit" value="submit">
	</form>	
</body>
</html>