<?php

$names = array("bill", "bob", "jim", "jack", "matt", "george", "rick", "jared", "barry");
$specificNamesOne = array();
$specificNamesTwo = array();
/*

	1. Loop through the $names array
	2. In the $specificNamesOne array, push only names that are 5 letters in length 
	3. In the $specificNamesTwo array, push only names that are 4 letters in length and contain the letter "a"

*/

foreach ($names as $name) {
	if(strlen($name) == 4){
		array_push($specificNamesOne, $name);
	} else if(strlen($name) == 5 && strpos($name, "a") !== false){
		array_push($specificNamesTwo, $name);
	}
}

echo "\n";

echo var_dump($specificNamesOne);

echo "\n";

echo var_dump($specificNamesTwo);

echo "\n";

?>