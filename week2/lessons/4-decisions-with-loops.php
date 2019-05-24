<?php

//instantiating array
$languages = array("php", "java", "javascript");

//looping through an array and making a decision based on our logic
foreach ($languages as $language) {
	if($language == "php"){
		echo "one of the languages that you have learned is PHP";
		echo "\n";
	} elseif($language !== "python"){
		//why does this echo twice in the loop?
		echo "you have not learned python";
		echo "\n";
	}
}

//say if you want to create a new array from a dataset
$names = array("bill", "bob", "jim", "jack", "george");
$namesThatStartWithJ = array();
//you only want an array wit the names that start with J
//we will also be learning a method on a string
//$name{0} = the first index of the string or the first letter in the string
//https://alvinalexander.com/php/php-charat-char_at-function-string
foreach ($names as $name) {
	if($name{0} == "j"){
		//if the first letter of the name is equal to j
		echo "\n";
		echo $name ." starts with J";
		//pushing the names that start with j to the appropriate array
		array_push($namesThatStartWithJ, $name);
	} else {
		//if the first letter of the name does not equal j
		echo "\n";
		echo $name ." does not start with J";
	}
}

echo "\n";

echo var_dump($namesThatStartWithJ);

echo "\n";

?>