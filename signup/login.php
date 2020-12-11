<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include 'links/links.php' ?>
    <?php include 'css/style2.php' ?>
</head>
<body>

<?php

include 'dbcon.php';

if (isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $email_search = "select * from registration where email = '$email' && status='active'";
    $query = mysqli_query($con, $email_search);
    $email_count = mysqli_num_rows($query);

    if($email_count){
        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['password'];
        $_SESSION['username'] = $email_pass['username'];
        $pass_decode = password_verify($password, $db_pass);

        if($pass_decode){
            echo "login successful";
            // header('location:portfolio.php');
            ?>
            <script>
            location.replace("portfolio.php");
            </script>
            <?php
        }else{
            echo "password incorrect";
        }
    }else{
        echo"Invalid email";
    }
}

?>

    <div class="card bg-light">
        <article class="card-body mx-auto" style="max-width: 400px;">
        <h4 class="card-title mt-3 text-center">Log In Your Account</h4>
        <p class="text-center">And Get Unlimited Fun</p>
        <p>
            <a href="" class="btn btn-block btn-gmail"><i class="mr-3 fa fa-google"></i>Login via Gmail</a>

            <a href="" class="btn btn-block btn-facebook"><i class="mr-3 fa fa-facebook"></i>Login via facebook</a>
        </p>
        <p class="divider-text">
            <span class="bg-light">OR</span>
        </p>
        <div>
            <p class="bg-success text-white px-4"><?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
            }else{
                echo $_SESSION['msg'] = "You are logged out. Please login again.";
            }
             ?></p>
        </div>
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <input type="email" class="form-control" placeholder="Your email" type="email" name="email">
        </div>
        
        <div class="form-group input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-lock"></i>
                </span>
            </div>
            <input type="password" class="form-control" placeholder="Enter password" type="password" name="password" value="">
        </div>

        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <p class="text-center">Not have an account?<a href="registration.php"> Signup here</a></p>

        </form>

        </article>
    </div>
</body>
</html>