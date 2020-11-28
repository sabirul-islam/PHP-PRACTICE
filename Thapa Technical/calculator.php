<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <form method="POST">
    <input type="text" name ="number1" placeholder="Enter Number">
    <input type="text" name ="number2" placeholder="Enter Number">
    <select name="operation">
        <option value="add">ADD</option>
        <option value="sub">SUB</option>
        <option value="mult">MULT</option>
        <option value="div">DIV</option>
    </select>
    <input type="submit" name="submit" value="submit">
    </form>
    <p>
    <?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['number1'];
        $num2 = $_POST['number2'];
        // echo "{$num1} {$num2}";
        $operation = $_POST['operation'];
        switch($operation){
            case 'add': $sum=$num1+$num2;
            echo "Addition: {$sum}";
            break;
            case 'sub': $sub=$num1-$num2;
            echo "Subtraction: {$sub}";
            break;
            case 'mult': $mult=$num1*$num2;
            echo "Multiplication: {$mult}";
            break;
            case 'div': $div=$num1/$num2;
            echo "Division: {$div}";
            break;
            default: echo "not exist";
        }
        
    }
    ?>
    </p>
</body>
</html>