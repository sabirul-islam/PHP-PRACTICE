<?php
#single quote is faster and everything inside single quote treated as plain text;
$name = "shimul";

echo "My Name is $name</br>";
echo "My Name is {$name}</br>";
echo 'My Name is $name</br>';

echo "My Name is 'Shimul'</br>";
echo "My Name is \"Shimul\"</br>";
echo 'My Name is "Shimul"</br>';
echo 'My Name is \'Shimul\'</br>';

?>