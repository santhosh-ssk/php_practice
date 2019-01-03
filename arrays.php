<?php
	function print_array($a){
		foreach ($a as $car) {
		print("$car ");
	}
	print("<br>");
	}


	$cars=array("BMW","AUDI","HONDA","FIAT");
	print_array($cars);

	$change_cars=array("BMW","AUDI","HONDA","Maruthi");
	print_array($cars);

	//reverse a array
	$cars=array_reverse($cars);
	print_array($cars);

	//changing specfic values
	$cars[2]="FIAT";
	print_array($cars);
 ?>