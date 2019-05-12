<?php
//http://www.informit.com/articles/article.aspx?p=1221430&seqNum=3

$x = 1;
$y = 2;
$z = 3;

// ++ incrementing, add by 1
echo var_dump($x == $y);
echo "\n";
$x++;
echo var_dump($x == $y);
echo "\n";

// -- decrementing, subtract by 1
echo var_dump($y == $z);
echo "\n";
$z--;
echo var_dump($y == $z);
echo "\n";

?>