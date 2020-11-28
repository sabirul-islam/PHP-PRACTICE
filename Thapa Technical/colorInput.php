<!DOCTYPE html>
<html lang="en">
<head>
    <title>color input</title>
</head>
<body>
    <form method="POST" action="">
        Enter your favourite color: <input type="text" name="favcolor">
        <input type="submit" name="submit" value="Check Now">
    </form>

<p>
<?php
if(isset($_POST['submit'])){
    $favColor = $_POST['favcolor'];
switch($favColor){
case 'blue': echo 'Your favourite color is blue';
break;
case 'green': echo 'Your favourite color is green';
break;
case 'yellow': echo 'Your favourite color is yellow';
break;
case 'red': echo 'Your favourite color is red';
break;
default: echo 'No color is here!';
}
}
?>
</p>
</body>
</html>