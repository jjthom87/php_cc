<?php
//all your code goes within <?php and the end
//this is how you commend on code, using the double slashes
//to run this file in your terminal, "php variables.php"

//declaring variables here to be used later on
//variables are defined with a "$" before the variable
//have to end your lines with a semi-colon, as shown in each line of code here, except comments. Check to see what happens when you don't end a line in a semi-colon
$x=5;
$y=6;

//this is a new line character, 
//moves to the next line
//helps with better logging, but not with spacing in a webpage
echo "\n";

//this is a break character
//moves to the next line in html/webpage
//not used for logging
//you can inject html characters into php files to be used on the webpage
//echo "<br>";

//using those variables that i declared earlier on
//what should the answer be?
echo $x + $y;

//if you run this in your terminal, you see the use of the newline character
echo "\n";

//defining strings here
$firstName = "Jared";
$lastName = "Thomas";
echo "Hello, my name is $firstName $lastName";
echo "\n";

//you can re-assign variables values
$firstName = "Bob";
$lastName = "Smith";

echo "\n";
echo "Hello, my name is $firstName $lastName";
echo "\n";

?>