<?php

// Question
// 1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision


function check_even_odd($num) {
    if ($num % 2 == 0) {
      return "$num is an even number.";
    } else {
      return "$num is an odd number.";
    }
  }
  $num = 9;
echo check_even_odd($num);
// Output: 9 is an odd number.
echo "\n";
$num = 6;
echo check_even_odd($num);
// Output: 6 is an even number.

// Question :2 1+2+3...…….100  Write a loop to calculate the summation of the series
echo "\n";
echo "\n";

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "The sum of the series 1 + 2 + 3 + ... + 100 is: $sum";



?>