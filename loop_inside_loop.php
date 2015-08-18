	 <?php
	 //loop inside a loop with continue
		for($i=0; $i<=5; $i++){ 
	  	if ($i % 2 == 0) {
	  		continue;	
	  	}
	  	for($k=0; $k <=5; $k++) { 
	  		echo $i. "_". $k . "<br>";
	  	}
	  } 


	  ?>