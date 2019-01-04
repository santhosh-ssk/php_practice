<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

//1) print capital and country
foreach($ceu as $country=>$city){
    echo "The capital of $country is $city <br>";
}

//2) reverse a string
$string1="hi how are you...";
$l=strlen($string1);

//$string1[0]='c';
print( "Before reversing: $string1<br>");
for($i=0;$i<$l/2;$i++){
    $tmp=$string1[$i];
    $string1[$i]=$string1[$l-$i-1];
    $string1[$l-$i-1]=$tmp;
    }
print( "After reversing: $string1<br>");


//3) insert element into an array
$a=array(1,2,3,4,5);
print "<br>before inserting array is ";
foreach($a as $x)  
	print("$x ");
print "<br>after inserting array is ";
$a= array_merge(array_slice($a, 0, 3), array('$'), array_slice($a, 3));
foreach($a as $x)  
	print("$x ");

//4) finding smallest and largest string length in a array
$x=array("zilker","tech","de","pvt","g","wer");
function find_max_min($a){
	$max=strlen($a[0]);
	$min=strlen($a[0]);
	for($i=1;$i<count($a);$i++){
		$l=strlen($a[$i]);
		if($l>$max) 
			$max=$l;

		if($l<$min) 
			$min=$l;
	}
	echo "<br> The shortest array length is $min. The longest array length is $max.";
}
find_max_min($x);

//5 i) String operations
$x="This is my company";
$l=strpos($x,'company');
echo "<br>position of company in $x is $l";

//5 ii) capitalize fisrt character of $x 
$x= "i love my country";
echo "<br>".ucfirst($x);

//5 iii) capitalize each word
echo "<br>". ucwords($x);

//5 iv) find boy in "I am boy, and 29 year old"
$x="I am boy, and 29 year old";

if (strpos($x, 'boy') !== false) 
    echo '<br>boy is present in '.$x;
else
	echo '<br>boy is not present in '.$x;


?>