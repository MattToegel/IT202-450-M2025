<?php
$test = 0.1 + 0.2; 
$check = 0.3;
if($test == $check) { 
    echo "They are equal <br>";
} else {
    echo "They are not equal <br>";
}

echo $test . "<br>"; // first attempt to inspect

var_dump($test); // second attempt
echo "<br>";
var_export($test); // third attempt
?>