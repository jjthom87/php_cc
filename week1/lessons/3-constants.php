<?php
echo "\n";
define("GREETING", "Welcome to PHP");
echo GREETING;
echo "\n";

echo "\n";
//If you comment in this line, you'll see that it doesnt compile
//$GREETING = "Trying to change this"
echo GREETING;
echo "\n";

define("PS", "This is going to be fun!");

echo "\n";
//the . is used to concatenate the string
//the " " is used as a space
echo GREETING .", " .PS; 
echo "\n";

?>