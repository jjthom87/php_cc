<?php

/*
	Using these variables:
		1. Write an expression that makes 2 statements true
		2. Write an expression that makes 2 statements false
		3. Write an expression where only one statement is true. The whole expression equates to true

		You can only use each variable once in an expression
		You have to use the math operators in each statement
		echo the answers

		i.e. (((1 + 1) == (2 + 0)) && ((2 + 2) == (3 + 1))) will equate to true, as both statements are true

		this is a statement: ($x == $y)
		this is an expression: (($x == $y) and ($v == $w))
*/

$a = 1;
$b = 2;
$c = 3;
$d = 4;
$e = 5;
$f = 6;
$g = 7;
$h = 8;
$i = 9;
$j = 10;
$k = 0;

// 1
echo var_dump((($b + $d) == ($f + $k)) and (($a + $g) == ($c + $e)));
// and
echo var_dump((($a + $b) != ($c + $d)) and (($e + $f) != ($g + $h)));

//2
echo var_dump((($a + $b) == ($c + $d)) and (($e + $f) == ($g + $h)));

//3
echo var_dump((($a + $b) != ($c + $d)) or (($e + $f) == ($g + $h)));
// and
echo var_dump((($a + $b) != ($c + $d)) xor (($e + $f) == ($g + $h)));

?>