<?php
// initializing arrays
$arr1 = [];
$arr2 = array(); 
// setting arrays with values (in one line)
$arr3 = ["This", "is", "an","index", "array"]; 
echo "<pre>";
var_dump($arr3);
echo "</pre>";
echo "<br>";
echo $arr3[0]; 
echo "<br>";
$arr4 = ["key1" => "value1", "key2" => "value2"]; 
echo "<pre>";
var_dump($arr4);
echo "</pre>";
echo "<br>";
echo $arr4["key1"]; 
echo "<br>";
//modifying
$arr3[5] = "added value";
$arr4["key4"] = "value4";
// multidimensional arrays
$arr5 = [$arr1, $arr2, $arr3, $arr4]; 
echo "<pre>";
var_dump($arr5);
echo "</pre>";