<?php

include 'dbcon.php';

$id = $_GET['id'];

$deletequery = "delete from registration where id=$id";

$query = mysqli_query($con, $deletequery);

if($query){
    ?>
    <script>
    alert("Deleted successfully");
    </script>
    <?php
    header('location:select.php');
}else{
    ?>
    <script>
    alert("Not Deleted");
    </script>
    <?php
}

?>