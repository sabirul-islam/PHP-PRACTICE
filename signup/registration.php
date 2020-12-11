<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Log in</title>
    <?php include 'css/style2.php' ?>
    <?php include 'links/links.php' ?>
</head>
<body>
<?php

include 'dbcon.php';

if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

    #password hashing
    $pass = password_hash($password, PASSWORD_BCRYPT);
    $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

    $token = bin2hex(random_bytes(15));

    #checking duplicate email
    $emailquery = " select * from registration where email='$email' ";
    $query = mysqli_query($con, $emailquery);
    $emailcount = mysqli_num_rows($query);

    if($emailcount>0){
        echo "<br>"."email already exist";
    }else{
        if($password === $cpassword){

        #data inserting
        $insertquery = "insert into registration( username, email, mobile, password, cpassword, token, status ) values( '$username', '$email', '$mobile', '$pass', '$cpass', '$token', 'inactive' )";

        $iquery = mysqli_query($con, $insertquery);

        if($iquery){

$subject = "Email Activation";
$body = "Hi, $username click here to activate your account http://localhost/PHP%20Basic%20Practice/signup/activate.php?token=$token";
$sender_email = "From: aborzona@gmail.com";

if(mail($email,$subject,$body,$sender_email)){
    $_SESSION['msg'] = "check mail to activate your account $email";
    header('location:login.php');
}else{
    echo "Email sending failed...";
}
           
           
            // echo "<br> inserted successful";
        
            // header('location:login.php');
        }else{
            
            echo "<br> not successful";
            
        }

    }else{
        
        echo "<br> password not matching";
        
    }

    }
}
?>


    <div class="card bg-light">
    <article class="card-body mx-auto" style="max-width: 400px;">
    <h4 class="card-title mt-3 text-center">Create Account</h4>
    <p class="text-center">Get started with your free account</p>
    <p>
    <a href="" class="btn btn-block btn-gmail"><i class="mr-3 fa fa-google"></i>Login via Gmail</a>
    <a href="" class="btn btn-block btn-facebook"><i class="mr-3 fa fa-facebook-f"></i>Login via Facebook</a>
    </p>
    <p class="divider-text">
        <span class="bg-light">OR</span>
    </p>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
            </div>
            <input type="text" name="username" class="form-control" placeholder="Full name" required>
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
            </div>
            <input class="form-control" type="email" name="email" placeholder="Email address" required>
        </div>
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-phone"></i></span>
            </div>
            <input type="number" name="mobile" class="form-control" placeholder="Phone number" required>
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
            </div>
            <input class="form-control" type="password" name="password" placeholder="Create password" required>
        </div>

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
            </div>
            <input class="form-control" type="password" name="cpassword" placeholder="Repeat password" required>
        </div>

        <div class="for-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
        </div>
        <p class="text-center">Have an account?<a href="login.php">Log in</a></p>



    </form>
    </article>
    </div>
</body>
</html>