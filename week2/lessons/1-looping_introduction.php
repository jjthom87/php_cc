<?php

/*
	https://www.w3schools.com/php/php_looping_for.asp

	You can loop through an array or object, and then write logic within the for loop
	A loop will go through each item a certain amount of times in a given data set

	An array is the most common datatype that is looped through
	you can also loop through a string

	Given the String "php"
	index 0 is p, index 1 is h, index 2 is p

	1. the first part of the for loop designates at what index you would like to start the loop: $i = 0 is saying that you would like to start the loop at index 0

	2. the second part of the for loop designates how long you would like to go through the loop: $i < sizeof($languages) is saying that you would like to end the loop at the length of the array - 1

	3. the third part of the for loop designates whether you want the increment or decrement from the start: $i++ is stating to increment from 0 until the loop ends

*/

//instantiating array
$languages = array("php", "java", "javascript");
$loopingString = "jeremiah was a bullfrog";
$newString = "";
//2 different ways of writing a for loop here
for($i = 0; $i < sizeof($languages); $i++){
	echo "\n";
	echo $languages[$i];
}

echo "\n";

foreach ($languages as $language) {
	echo "\n";
	echo $language;
}

echo "\n";

//see what happens when you change to $i to 1
//that means you're starting at the 1 index
for($i = 1; $i < sizeof($languages); $i++){
	echo "\n";
	echo $languages[$i];
}

echo "\n";

//use strlen for the length of a string
//we're starting at the 10th index of the string
//this is an example of appending to a string: https://www.tutorialrepublic.com/faq/how-to-append-a-string-in-php.php
for($i = 10; $i < strlen($loopingString); $i++){
	$newString .= $loopingString[$i];
}

echo "\n";
echo $newString;
echo "\n";

?>