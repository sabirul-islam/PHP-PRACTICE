<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "signup";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
        echo 'connection successful';
}else{
        echo "connection not successful";
}

?>