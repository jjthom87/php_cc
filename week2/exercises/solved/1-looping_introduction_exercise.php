<?php

/*

	1. Create an array of at least 3 similar items:
		i.e. $animals = array("giraffe", "elephant", "bobcat");
	2. Loop through the array and echo the result

	3. Create a string that is a sentence of at least 5 words
	4. loop through the string starting at the 3rd word

	5. Create a one word string
	6. Reverse the word in the string using a loop & echo the result in one world,
		for example: $animal = "giraffe" should echo "effarig"
	
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

$anotherNewString;
$word = "giraffe";
for($i = strlen($word); $i > -1; $i--){
	$anotherNewString .= $word[$i];
}

echo $anotherNewString;

echo "\n";

?>