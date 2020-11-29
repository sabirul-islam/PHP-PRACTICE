<?php

$userName = "root";
$password = "";
$server = "localhost";
$db = "crudyoutube";
// $database = "crudyoutube";

$con = mysqli_connect($server,$userName,$password,$db);

// $db = mysqli_select_db($con,$database);

if($con){
    ?>
    <script>
        alert("connection successful");
    </script>
    <?php
    // echo "connection successful";
}else{
    echo "No connection";
    // die("No connection".mysqli_connect_error());
}

?>