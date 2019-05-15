<?php
//http://www.informit.com/articles/article.aspx?p=1221430&seqNum=3

$v = 1;
$w = 1;
$x = 2;
$y = 2;
$z = 3;

// ! means that the statement will equate to false
echo var_dump(($w != $y) && ($v != $z));
echo "\n";
echo var_dump(($w != $y) && ($x != $y));
echo "\n";

?>