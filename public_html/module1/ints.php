<?php
$x = 1; 
echo $x . "<br>";
var_dump($x); 
echo "<br>";
var_export($x); 
echo "<br>";
$x++; 
echo $x . "<br>";;
$x--; 
echo $x . "<br>";;
$x += 50; 
echo $x . "<br>";;

$x = PHP_INT_MAX; 
var_dump($x);
echo "<br>";

$x++; 
var_dump((int)$x);