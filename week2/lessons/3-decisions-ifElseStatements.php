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

$age = 31;
if($age <= 10){
	echo "you're not even a teenage, you have plenty of time";
} elseif($age <= 20){
	echo "you're in your prime. enjoy it";
} elseif($age <= 30){
	echo "you're getting old";
} else {
	echo "you're old";
}

echo "\n";

?>