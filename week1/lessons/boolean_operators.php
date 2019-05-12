<?php
//http://www.informit.com/articles/article.aspx?p=1221430&seqNum=3

$w = 1;
$x = 1;
$y = 2;
$z = 3;

//greater than
echo var_dump($z > $y);
echo "\n";
echo var_dump($x > $y);
echo "\n";

//less than
echo var_dump($z < $y);
echo "\n";
echo var_dump($x < $y);
echo "\n";

//greater than or equal to
echo var_dump($y >= $z);
echo "\n";
echo var_dump($w >= $x);
echo "\n";

//less than or equal to
echo var_dump($z <= $y);
echo "\n";
echo var_dump($w <= $x);
echo "\n";

?>