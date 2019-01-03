<?php
	function is_even($number){
		if($number%2==0)
			return "Even";
		else
			return "ODD";
	}

	print "2 is a ".is_even(2)." number<br>";
	print "3 is a ".is_even(3)." number<br>";


	//String operations
	$learning="I am learning Php.";
	print(str_replace("Php","Java",$learning)."<br>");

	//loops
	$x=1;
	while($x<5){
		print("$x ");
		$x++;
	}

	print("<br>");
	
	//float to string conversation
	do{
		print("$x");
		}while($x<5);

	print("<br>".(0.5)."<br>");

	//add of two numbers using functions
	function addi($a,$b){
		return $a+$b;
	}
	print("sum of 2+3 is ".addi(2,3));
	
?>