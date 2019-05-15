<?php
//http://www.informit.com/articles/article.aspx?p=1221430&seqNum=3

$v = 1;
$w = 1;
$x = 2;
$y = 2;
$z = 3;

//this is a statement: ($x == $y)
//this is an expression: (($x == $y) and ($v == $w))

// &&, and - and expression. Both expressions have to equate to true
echo var_dump(($x == $y) && ($v == $w));
echo "\n";
echo var_dump(($x == $y) and ($v == $w));
echo "\n";

// ||, or - or expression. One expression has to equate to true
echo var_dump(($x == $y) || ($y == $z));
echo "\n";
echo var_dump(($x == $y) or ($y == $z));
echo "\n";

//xor, one is true but not both
echo var_dump(($x == $y) xor ($v == $w));
echo "\n";
echo var_dump(($x == $y) xor ($y == $z));
echo "\n";

?>