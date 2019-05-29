<?php

/*

	1. Create an array of at least 3 similar items:
		i.e. $animals = array("giraffe", "elephant", "bobcat");
	2. Loop through the array and echo the result

	3. Create a string that is a sentence of at least 5 words
	4. loop through the string starting at the 3rd word
*/

$animals = array("giraffe", "elephant", "bobcat");
foreach ($animals as $animal) {
	echo "\n";
	echo $animal;
}

echo "\n";

$newString = "";
$sentence = "Hey now, you're an all star";
for($i = 16; $i < strlen($sentence); $i++){
	$newString .= $sentence[$i];
}
echo $newString;

echo "\n";

?>