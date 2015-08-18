<html>
<head>
	<title>HTML Encoding</title>
</head>
<body>
	<?php 
		$linktext = "<click> & learn more";
	 ?>
	 <a href=""> <?php echo htmlspecialchars($linktext); ?></a>
	 <br>

	 <?php 
	 	$text = "™£.−℮";
	 	echo htmlentities($text);
	  ?>
	  <br>
	  <?php  # what to use when

	  		$url_page = "php/created/page/url.php";
	  		$param1 = "This is a string with <>";
	  		$param2 = "&#?*$[]+ are bad characters";
	  		$linktext = "<click> & learn more";

	  		$url = "htpp://localhost/";
	  		$url .= rawurlencode($url_page);
	  		$url .= "?" . "param1" . urlencode($param1);
	  		$url .= "&" . "param2" .urlencode($param2);


	   ?>

	   <a href=" <?php echo htmlspecialchars($url); ?>">
	   		<?php echo htmlspecialchars($linktext); ?>
	   </a>
</body>
</html>