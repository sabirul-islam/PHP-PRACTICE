<?php

$pass = "shimul";

// $option =['cost' => 12, 'salt' => 'mdsabirulislamshimulshumit'];

// $newpass = "sabirul";

// $str_pass = password_hash($pass,PASSWORD_BCRYPT,$option);
$str_pass = password_hash($pass,PASSWORD_BCRYPT);

echo $str_pass;

$pass_check = password_verify($pass, $str_pass);
// $pass_check = password_verify($newpass, $str_pass);

if($pass_check){
    echo "<br> login successful.";
}else{
    echo "<br> login not successful.";
}

?>