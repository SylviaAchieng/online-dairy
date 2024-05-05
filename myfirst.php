<!DOCTYPE html>
<html>
    <head>
        <title>Dairy Management System</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <style>
            body{
               margin:0;
               padding:0;
               
            }
            .header{
                background-color: black;
            }
            a{
                text-decoration: none;
            }
            .home-content{
                background-image:url(images/cow2.jpg);
                padding-bottom:5px;
                height:650px;
                background-repeat: no-repeat;
                background-size: cover;
                text-align:left;
                transition:-10px;
                color: white;
            }
            .footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color:white;
    text-align: center;
  }
  .text {
            position: absolute; /* Position the text absolutely */
            top: 50%; /* Center vertically */
            transform: translateY(-50%);
        }
        


            
    
        </style>
    </head>
    <body>
        <header class=header>
            <div>
            <img class="logo" src="images/logo.png">
            </div>
            <nav class="navigation">
                <a href="main.php"><i class='bx bx-home'></i>Home</a>
                <a href="about.html">About Us</a>
                <a href="service.php">Services</a>
                <a href="contact.html">Contact Us</a>
                <a href="login.html"><button class="btnLogin-popup">Login</button></a>
            </nav>
        </header>
            <div class="home-content">
                <div class="text">
            <h1>Dairy Management System</h1>
            <h2>Online milk purchase at comfort,<br> when and where you need it.</h2>
        </div>
            </div>


        <div class="footer">
        <p>&copy DIARY.com <sub>All Rigths Reserved</sub> </p>
        </div>
        <script src="script.js"></script>
    </body>
</html>