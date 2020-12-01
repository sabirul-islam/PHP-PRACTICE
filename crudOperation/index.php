<!DOCTYPE html>
<html lang="en">
<head>
  <title>CRUD OPERATION</title>
  <?php include 'links.php' ?>
  <!-- <?php include 'css/style.css' ?> -->
</head>
<body>

<form action="" method="POST">
<h1 class="text-center">Apply For Web Developement Post</h1>

<div style="background-color: purple;" class="p-5 mt-5 d-flex justify-content-center align-items-center" >

    <div class="col-md-4">
    <input class="mb-2" type="text" name="user" placeholder="enter your name" required>
    <input class="mb-2" type="text" name="degree" placeholder="enter your qualification" required>
    <input class="mb-2" type="text" name="mobile" placeholder="mobile number" required>
    </div>

    <div class="col-md-4">
    <input class="mb-2" type="email" name="email" placeholder="email id" required>
    <input class="mb-2" type="text" name="refer" placeholder="Any references" required>
    <input class="mb-2" type="text" name="jobprofile" placeholder="Web Developer">
    </div>

    <div class="col-md-4">
    <button type="button" class="btn btn-info my-3"><a href="display.php">Check Form</a></button>
    <input type="submit" class="btn btn-primary mx-2" name="submit" value="Register">
    </div>
    
    
    

</div>
    
    
    
</form>

</body>
</html>

<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['user'];
    $degree = $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $jobprofile = $_POST['jobprofile'];

    $insertquery = " insert into jobregistration(name, degree,mobile, email, refer, jobpost) values('$name','$degree','$mobile','$email','$refer','$jobprofile') ";

    $res = mysqli_query($con,$insertquery);

    if($res){
        ?>
        <script>
            alert("data inserted properly");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data is not inserted properly");
        </script>
        <?php
    }

}

?>