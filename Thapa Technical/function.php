<?php

// function sayMyName(){
//     echo "Shimul</br>";
//     $sum = 4 + 5;
//     echo "The sum of two number is ".$sum;
// }
// sayMyName();

// function sum(){
//     $a = 15;
//     $b = 10;
//     $sum = $a + $b;
//     echo $sum;
// }
// sum();

// # parameter and arguments
// function sum($a, $b){ # $a, $b is called parameter
//     $sum = $a + $b;
//     echo $sum;
// }
// sum(10, 15); # 10, 15 is called arguments

// # Default arguments
// function sum($a, $b = 10){
//     $multiplication = $a * $b;
//     echo $multiplication;
// }
// sum(35);
// sum(35, 20);

# Return Function
function sum($a, $b = 10){
    $multiplication = $a * $b;
    return $multiplication;
}

$output = sum(35, 20);

echo "Multiplication of two no. is {$output}"

?>