<?php

# ++$a = pre increment
# $a++ = post increment
# --$a = pre decrement
# $a-- = post decrement

// $a = 5;
// echo ++$a; # 1 + 5 = 6 (return 1 then $a)
// echo $a++; # first return $a
// echo $a; # 5 + 1 = 6 (return $a then 1)
// echo --$a;
// echo $a--;
// echo $a;

// $a = 1;
// $b = 2;
// // $c = $a++ + ++$b;
// $c = ++$a + $b++;
// echo $c;

$a = 3;
// $b= ++$a + $a++; #(1+3) + 4
$b= $a++ + $a++ + ++$a; # 3 + 4 + 6
echo $b;

?>