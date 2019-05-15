<?php
//https://www.w3schools.com/php/php_datatypes.asp
//strings, integers, booleans

//string
$myName = "Jared Thomas";
echo "The String's value is $myName";
echo "\n";

//integer
$myFavoriteNumber = 13;
//this is another way to add a variable onto a string
echo "The Integer's value is " .$myFavoriteNumber;
echo "\n";

//floats
$myFavoriteFloat = 3.14;
echo "The Float's value is " .$myFavoriteFloat;
echo "\n";

//booleans
$trueBoolean = true;
$falseBoolean = false;
echo var_dump($trueBoolean);
echo var_dump($falseBoolean);
echo "\n";

//arrays
$languages = array("php", "java", "javascript");
echo var_dump($languages);
echo "\n";

//object
class Person {
	function Person($name, $age){
		$this -> name = $name;
		$this -> age = $age;
	}
}

$jared = new Person("Jared", 31);
echo $jared->name;
echo "\n";
echo $jared->age;
echo "\n";

//null - no value assigned
$null = null;




?>