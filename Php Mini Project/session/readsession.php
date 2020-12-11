<?php

session_start();

echo $_SESSION['username']. "<br>";

echo $_SESSION['age']. "<br>";

if(isset($_SESSION['username'])){
    echo "My name is ".$_SESSION['username']." and my age is ".$_SESSION['age'];
}else{
    echo "No username is set.";
}

?>