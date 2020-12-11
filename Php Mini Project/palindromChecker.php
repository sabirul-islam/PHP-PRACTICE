<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Palindrom Checker</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
            -o-font-smoothing: antialiased;
            -font-smoothing: antialiased;
            text-rendering: optimizeLegibility;
            font-family: 'Josefin Sans', sans-serif;
        }
        body{
            font-family: "Roboto", Arial, Helvetica, sans-serif;
            font-weight: 100;
            font-size: 12px;
            line-height: 30px;
            color: #fff;
            background: #498C3F ;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="" method="post" id="contact">
            <h3>Palindrom Checker</h3>
            <h4>
                <?php
                if(isset($_POST['submit'])){
                    $word = $_POST['plain'];
                    $revword = strrev($word);

                    if($word === $revword){
                        echo "Yes, This is a palindrom word.";
                    }else{
                        echo "No, This is not a palindrom word.";
                    }
                }
                ?>
            </h4>
            <fieldset>
                <textarea name="plain" placeholder="Type your word..." cols="30" rows="5" required></textarea>
            </fieldset>
            <fieldset>
                <button type="submit" name="submit" id="contact-submit">Submit</button>
            </fieldset>
            <p class="copyright">Designed by<a href="" target="_blank" title="Colorlib"> shimul</a></p>
        </form>
    </div>
</body>
</html>