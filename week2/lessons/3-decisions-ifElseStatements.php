<?php

/*
	http://codeabcs.com/php/decisions.php

	Making decisions based on logic

	starts with "if": if the logic here is true, then the logic in that block will be executed

	can write multiple within the "if" with "elseif": the first elseif statement that 
	equates to true, then the logic in that block will be executed

	ends with "else": if no other statement equates to true, then the log in the
	else block --- else { IN HERE } --- will be executed

*/

$num = 3;
if($num > 2){
	echo "the number is greater than 2";
} else {
	echo "the number is less than or equal to 2";
}

echo "\n";

//you can use an if else statement
$age = 31;
if($age <= 10){
	echo "you're not even a teenager, you have plenty of time";
} elseif($age <= 20){
	echo "you're in your prime. enjoy it";
} elseif($age <= 30){
	echo "you're getting old";
} else {
	echo "you're old";
}

echo "\n";

//or you can use a switch statement
//https://www.w3schools.com/php/php_switch.asp
switch($age){
	case $age <= 10:
		echo "you're not even a teenager, you have plenty of time";
		break;
	case $age <=20:
		echo "you're in your prime. enjoy it";
		break;
	case $age <=30:
		echo "you're getting old";
		break;
	default:
		echo "you're old";
}

echo "\n";

/*
	Methods on Strings
	strlen and strpos
	https://www.php.net/manual/en/function.strlen.php
	https://www.php.net/strpos
*/

$string = "babaloo";
echo "Length of $string is: " .strlen($string);

echo "\n";

$isA = strpos($string, "a");
$isZ = strpos($string, "z");

echo "first position of 'a' in the string: " .$isA;

echo "\n";

echo "z is not in the string: " .$isZ;

echo "\n";

?>