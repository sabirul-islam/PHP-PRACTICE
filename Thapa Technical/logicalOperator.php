<?php
# And = $a and $b, $a && $b
# Or = $a or $b, $a || $b
# Xor = $a xor $b
$a = 3;
$b = 5;
$c = 5;

// if($a == $b || $a == $c){
// if($a == $b && $a == $c){
if($a == $b xor $a == $c){
    echo 'true';
}
else{
    echo 'false';
}


?>