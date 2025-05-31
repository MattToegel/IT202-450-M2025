<?php
$days = ["Sunday", "Monday", "Tuesday", "Wednesday",
"Thursday", "Friday", "Saturday"]; 

foreach ($days as $day) { 
    echo "Today is $day <br>\n"; 
}
echo "<br>";
foreach ($days as $index => $day) { 
    $n = $index + 1;
    echo "Day $n is $day <br>\n"; 
}