<?php

$jared = "Jared";
$bo = "Bo";
$jack = "Jack";
$bobby = "Bobby";
$rick = "Rick";

/*
	Write an if/else statement that equates to true where both strings have the same length
	
	if(length of string == length of string){
	
	} else {
	
	}

	in php, the built in function is strlen to check the strings length
*/

echo "\n";

if(strlen($jared) == strlen($bobby)){
	echo "the length of both strings are the same";
} else {
	echo "the length of both string are not the same";
}

echo "\n";

/*
	Write an if/else if/else statement checking if a letter is in any of the
	strings above
	https://www.php.net/strpos
*/

$one = strpos($rick, "b");
$two = strpos($jared, "a");

if($one !== false){
	echo "b is not the word Rick";
} else if ($two !== false){
	echo "a is in the word Jared";
} else {
	echo "neither letters are in either word";
}

echo "\n";

?>