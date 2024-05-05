<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\I\n";

$recipient = "achiengsylvia157@gmail.com";

//mail($recipient, $subject, $message, $mailheader)
//or die("Error!");

echo '

<!DOCTYPE html>
<html>
    <head>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{
                text-align: center;
                background-color: #1b1c1e;
            }
            h1{
                font-family: sans-serif;
                font-size: 30px;
                font-weight: 600;
                color: #d2d2d2;
                padding-bottom: 20px;
            }
            p{
                color: #d2d2d2;
            }
            a{
               color: #828282; 
               font-style: italic;
            }
            a:hover{
               color: #fff; 
            }
        </style>
        <title>Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <h1>Thank you for reaching out. We will get back to you as soon as possible</h1>
            <p class="back">Go back to the <a href="main.php">homepage</a></p>
        </div>
    </body>
</html>

';


?>