<?php
//http://www.informit.com/articles/article.aspx?p=1221430&seqNum=3

// =, simply an assignment operator
// saying $w equals "1"
$w = "1";
$x = 1;
$y = 2;
$z = 2;

// == Same value but not same datatype
echo var_dump($w == $x);
echo "\n";
echo var_dump($y == $z);
echo "\n";

// != not the same value 
echo var_dump($w != $x);
echo "\n";
echo var_dump($x != $y);
echo "\n";

// === Same value and same datatype
echo var_dump($w === $x);
echo "\n";
echo var_dump($y === $z);
echo "\n";

// re-assignment, $w now equals 2
$w = "2";
echo var_dump($w == $x);
echo "\n";
echo var_dump($w == $y);
echo "\n";
?>