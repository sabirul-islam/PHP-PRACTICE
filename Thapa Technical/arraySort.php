<?php

$students = array("Sabirul", "Islam", "Shimul");

// sort($students);
rsort($students); # revers order

echo "<ol>";
foreach($students as $value){
    echo "<li> $value </li>";
}
echo "</ol>";

?>