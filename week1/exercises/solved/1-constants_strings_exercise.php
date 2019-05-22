<?php

/*

	1. Create enough constants to construct a sentence
	2. Echo the constants as a sentence

*/

define("GREETING", "Hello");
define("COMMA", ",");
define("PREFIX", "My Name is");
define("NAME", "Jared");

echo "\n";
echo GREETING .COMMA ." " .PREFIX ." " .NAME;
echo "\n";

?>