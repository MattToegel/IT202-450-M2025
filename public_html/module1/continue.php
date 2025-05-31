<?php
$number = 0;
while ($number < 10) {
  $number++; 
  if ($number == 5) {
    continue; 
  }
  // See what happens if we move $number++; here
  //(don't forget to comment out the other `$number++;`)
  echo "Number: $number<br>\n"; 
}