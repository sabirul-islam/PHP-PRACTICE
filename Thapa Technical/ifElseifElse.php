<?php

// $age = '40';

// if ($age < 5){
//     echo 'You are baby';
// }
// elseif ($age < 15){
//     echo 'You are child';
// }
// elseif ($age < 20){
//     echo 'You are teenager';
// }
// elseif ($age < 40){
//     echo 'You are adult';
// }
// else{
//     echo 'You are elder person';
// }

$num = 19;
if($num % 2 == 0){
    echo "$num is multiple of 2";
}
elseif($num % 3 == 0){
    echo "$num is multiple of 3";
}
elseif($num % 4 == 0){
    echo "$num is multiple of 4";
}
elseif($num % 5 == 0){
    echo "$num is multiple of 5";
}
else{
    echo "$num is not multiple of any of them";
}

?>