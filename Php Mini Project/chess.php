<!DOCTYPE html>
<html lang="en">
<head>
    <title>Chess</title>
    <style>
        table{
            border: 1px solid black;
            border-spacing: 0;
        }
        td{
          padding: 20px;
          border: 1px solid black;
        }
        .bgcolor{
            background-color: black;
        }
    </style>
</head>
<body>
<form action="" method="POST">
    <input type="text" name="cb">
    <input type="submit" name="submit" value="GenerateChessBoard" required>
</form><br>

<table>
<?php

if(isset($_POST['submit'])){
    $data = $_POST['cb'];

    for($row=1; $row<=$data; $row++){
        echo "<tr>";

        for($col=1; $col<=$data; $col++){
            if(($row + $col) % 2 ==0){
                echo "<td class='bgcolor'> </td>";
            }else{
                echo "<td> </td>";
            }
        }
        echo "<tr>";
    }
}

?>
</table>


</body>
</html>