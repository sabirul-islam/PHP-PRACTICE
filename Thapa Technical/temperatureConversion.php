<!DOCTYPE html>
<html lang="en">
<head>
    <title>Temperature Conversion App</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
    <style>
        *{margin: 0; padding: 0; box-sizing: border-box; font-family: 'Mulish', sans-serif;}
        
        h1{
            text-align: center;
            line-height: 20vh;
            color: #6c63ff;}

        .main-div{
            width: 100%;
            height: 80vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        .left-side{
            background-color: #dfe6e9;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        }
        .left-side img{
            max-width: 350px;
            height: auto;
        }
        .right-side{
            width: 400px;
            height: 300px;
            background-color: #dfe6e9;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .input1{
            width: 250px;
            height: 40px;
            padding: 5px;
            outline: none;
            border-radius: 1px solid grey;
            border-radius: 5px;
        }
        .selection{
            width: 100%;
            margin: 20px 0;
        }
        .btn{
            padding: 10px 16px;
            border-radius: 5px;
            outline: none;
            border: none;
            background-color: #6c63ff;
            color: white;
            font: .9rem;
        }
        p{
            margin: 20px 0 0 0;
        }
    </style>
</head>
<body>
    <h1>Temperature Conversion</h1>
    <div class="main-div">
        <div class="left-side">
            <img src="Capture.JPG" alt="images">
        </div>
        <div class="right-side">
            <form method="POST">
                <input type="text" name="num" placeholder="enter your number" class="input1">
                <div class="selection">
                    <label>Celc</label>
                    <input type="radio" name="units" value="cel">
                    <label>faren</label>
                    <input type="radio" name="units" value="feh">
                </div>
                <input type="submit" name="submit" value="Convert Now" class="btn">
            </form>
            <div>
                <p>
                    <?php

                        if(isset($_POST['submit'])){
                            $num = $_POST['num'];
                            $temp = $_POST['units'];

                            if($temp == "cel"){
                                $result = $num * 9 / 5 + 32;
                                echo "$num degree celcius is $result degree farenheit.";
                            }else{
                                $result = ($num - 32) * 5 / 9;
                                echo "$num degree farenheit is $result degree celcius.";
                            }

                        }

                    ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>