<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
<div class="container register">
<div class="row">

<div class="col-md-3 registerleft">
<img src="images/crud.svg" alt="login now">
<h3>Welcome</h3>
<p>Please fill all the details carefuly. This form can change your life.</p>
<a href="selectdata.php">Check Form</a><br/>
</div>

<div class="col-md-9 register-right">
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<h3 class="register-heading">
Apply for Company placement
</h3>

<form action="" method="POST">
<div class="row register-form">

<div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Your Name" name="user" value="" required/>
    </div>
    
    <div class="form-group">
    <input type="tel" class="form-control" placeholder="Mobile number" name="mobile" value="" required/>
    </div>

    <div class="form-group">
    <input type="text" class="form-control" placeholder="Any references" name="refer" value="" required/>
    </div>
</div>

<div class="col-md-6">
    <div class="form-group">
    <input type="text" class="form-control" placeholder="Enter Your Qualification" name="degree" value="" required/>
    </div>
    
    <div class="form-group">
    <input type="email" class="form-control" placeholder="Email id" name="email" value="" required/>
    </div>

    <div class="form-group">
    <input type="text" class="form-control" placeholder="Prefered language" name="lang" value=""/>
    </div>
    <input type="submit" class="btnRegister" name="submit" value="Register"/>
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