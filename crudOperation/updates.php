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


<?php

include 'connection.php';

$ids = $_GET['id'];
$showquery = "select * from jobregistration where id={$ids}";
$showdata = mysqli_query($con,$showquery);
$arrdata = mysqli_fetch_array($showdata);



if(isset($_POST['submit'])){
    $idupdate = $_GET['id'];
    $name = $_POST['user'];
    $degree = $_POST['degree'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $refer = $_POST['refer'];
    $jobprofile = $_POST['jobprofile'];

    // $insertquery = " insert into jobregistration(name, degree,mobile, email, refer, jobpost) values('$name','$degree','$mobile','$email','$refer','$jobprofile') ";

    $query = " update jobregistration set id=$idupdate, name='$name', degree='$degree', mobile='$mobile', email='$email', refer='$refer', jobpost='$jobprofile' where id=$idupdate ";

    $res = mysqli_query($con,$query);

    if($res){
        ?>
        <script>
            alert("data updated properly");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data is not updated properly");
        </script>
        <?php
    }

}

?>

    <div class="col-md-4">
    <input class="mb-2" type="text" name="user" placeholder="enter your name" value="<?php echo $arrdata['name']; ?>" required>
    <input class="mb-2" type="text" name="degree" placeholder="enter your qualification" value="<?php echo $arrdata['degree']; ?>" required>
    <input class="mb-2" type="text" name="mobile" placeholder="mobile number" value="<?php echo $arrdata['mobile']; ?>" required>
    </div>

    <div class="col-md-4">
    <input class="mb-2" type="email" name="email" placeholder="email id" value="<?php echo $arrdata['email']; ?>" required>
    <input class="mb-2" type="text" name="refer" placeholder="Any references" value="<?php echo $arrdata['refer']; ?>" required>
    <input class="mb-2" type="text" name="jobprofile" value="<?php echo $arrdata['jobpost']; ?>" placeholder="Web Developer">
    </div>

    <div class="col-md-4">
    <button type="button" class="btn btn-info my-3"><a href="display.php">Check Form</a></button>
    <input type="submit" class="btn btn-primary mx-2" name="submit" value="Update">
    </div>
    
    
    

</div>
    
    
    
</form>

</body>
</html>

