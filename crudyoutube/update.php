<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <?php include 'css/style.css' ?>
    <?php include 'links/links.php' ?>
</head>
<body>
<div class="container register">
<div class="row">

<div class="col-md-3 register-left">
<img src="images/crud.gif" alt="login now">
<h3>Welcome</h3>
<p>Please fill all the details carefuly. This form can change your life.</p>
<a href="select.php">Check Form</a><br/>
</div>

<div class="col-md-9 register-right">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<h3 class="register-heading">
Apply for Company placement
</h3>

<form action="" method="POST">
<div class="row register-form">


<?php
include 'dbcon.php';

$id = $_GET['id'];

$selectquery = " select * from registration where id=$id";

$query = mysqli_query($con, $selectquery);

$result = mysqli_fetch_assoc($query);

if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $name = mysqli_real_escape_string($con, $_POST['user']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $degree = mysqli_real_escape_string($con, $_POST['degree']);
    $refer = mysqli_real_escape_string($con, $_POST['refer']);
    $lang = mysqli_real_escape_string($con, $_POST['lang']);


$updatequery = " update registration set id=$id, name='$name', email='$email', mobile='$mobile', degree='$degree', refer='$refer', lang='$lang' where id=$id ";

$query = mysqli_query($con, $updatequery);

if($query){
    ?>
    <script>
    alert("upted successfully");
    </script>
    <?php
}else{
    ?>
    <script>
    alert("Not upted");
    </script>
    <?php
}
}
?>



<div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Your Name" name="user" value="<?php echo $result['name'] ?>" required/>
    </div>
    
    <div class="form-group">
    <input type="tel" class="form-control" placeholder="Mobile number" name="mobile" value="<?php echo $result['mobile'] ?>" required/>
    </div>

    <div class="form-group">
    <input type="text" class="form-control" placeholder="Any references" name="refer" value="<?php echo $result['refer'] ?>" required/>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Your Qualification" name="degree" value="<?php echo $result['degree'] ?>" required/>
    </div>
    
    <div class="form-group">
    <input type="email" class="form-control" placeholder="Email id" name="email" value="<?php echo $result['email'] ?>" required/>
    </div>

    <div class="form-group">
    <input type="text" class="form-control" placeholder="Prefered language" name="lang" value="<?php echo $result['lang'] ?>"/>
    </div>
    <input type="submit" class="btnRegister" name="submit" value="Update"/>
</div>

</div>
</form>
</div>
</div>
</div>
</div>
</div>
    
</body>
</html>

<?php