<?php

$heads = 0;
$tails = 0;

for ($i = 1; $i <= 100; $i++){
    $randomNumber = rand(1, 2);

    if($randomNumber == 1){
        $heads++;
        // echo "Heads, I Win";
    }else{
        $tails++;
        // echo "Tails, You Win";
}
}

echo "There are {$heads} heads and {$tails} tails. ";

if($heads > $tails){
    echo "Heads, I win.";
}elseif($heads == $tails){
    echo "Draw.";
}
else{
    echo "Tails, You Win.";
}

?>