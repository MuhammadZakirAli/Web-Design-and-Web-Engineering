<?php
	// Execute Code Set Number of Time
	
	/*
		types of loop
		For
		while 
		do while 
		foreach
	*/

		/*
		For
		it has 3 perameter ==> initialization, condition, increament/decreament
		*/
		// for(initialization; condition; increment){
		// // Code to be executed
		// }

		// for($i=0; $i<10; $i++)
		// {
		// 	echo "Number ". $i;
		// 	echo "<br>";	
		// }


		// Factorial of 4 using for loop is shown below.
		// $num = 5;  
		// $factorial = 1;  
		// for ($x=$num; $x>=1; $x--)   
		// {  
 		// 		$factorial = $factorial * $x;  
		// }  
		// echo "Factorial of $num is $factorial";

		 //========================While Loop=====================================
		//  $n = 1;

		// while($n <= 5) 
		// {
  //   		echo "The number is: $n \n";
  //   		echo "<br>";
  //   		$n++;
		// } 


// ====================================For Each loop==========================================
		// $people=["shakoor","Ghafoor","Manzoor","Ali"];
		// foreach ($people as $person) {
		// 	echo $person;
		// 	echo "<br>";	
		// }

		$people = array("shakoor"=>"shakoor@gmail.com", "Ghafoor" =>"Ghafoor@gmail.com", "Manzoor"=>"Manzoor@gmail.com");
		foreach ($people as $person => $email) {
			echo $person." : ".$email;
			echo "<br>";
		}

?>