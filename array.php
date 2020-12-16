<?php
#Array -Variable that holds multipe values
/*
	-Indexed
	-Associative
	-Multi-Dimensional
	*/

	//Indexed
	$people=array('Ali','Shakoor', 'Ghafoor' );
	echo $people[1];

	$ids = array(12,23,34);
	echo $ids[2];

	$cars = ['Honda', 'Toyota', 'Mercedese'];
	echo $cars[1];
	$cars[3] = 'Cheverlet';
	$cars[] = 'BMW';

	echo count($cars);

	print_r($cars);

	//to see the datatype of an array 
	var_dump($cars);



	//Associative arrays
	//here we use key and value
	//ali => 43; ali==key 43 ==value
	$age = array('Ali' => 32, 'Shakoor' => 87, 'Ghafoor' => 54);
	echo $age['Ali'];

	$ids = [22 =>'Ali', 43 => 'Shakoor', 65=>'Ghafoor'];
	echo $ids[43];
	print_r($age);



	//Multi-Dimensional Array
	$cars = array(
		array('Honda', 20, 10),
		array('Toyota', 20 ,20 ),
		array('Ford', 23, 12),
	);
	echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";



//==================Sorting Array==========================
//Assending order
$numbers = array(40, 61, 2, 22, 13); 
sort($numbers); 
  print_r($numbers);

//decending order
$numbers = array(40, 61, 2, 22, 13); 
rsort($numbers); 
  print_r($numbers);

  // ==========================Merge Two Array==============================
  $array1 = [1,2,3,4,5];
  $array2 = [5,6,7,8,9];
  $res=array_merge($array1, $array2);
  print_r($res);


?>