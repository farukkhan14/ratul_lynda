<?php header("HTTP 1.1/404 Not Found"); ?>
<?php header(" X-Powered-By: none of your business"); ?>
<html>
<head>
	<title>Header</title>
</head>
<body>
	<?php 
		// This won't work.... unless you have output
		//header("HTTP 1.1/ 404 Not Found");		l
		// buffering turned on.
	 ?>
	 <pre>
	 <?php 
	 	var_dump(headers_list());

	  ?>
	  </pre>
	  <br>
	  <pre>
	  	<?php print_r(headers_list()); ?>
	  </pre>
</body>
</html>