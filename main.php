<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="html, css, js">
        <meta name="description" content="An online website for dairy farmers">
        <meta name="author" content="Sylvia Achieng">

        <link href="https://fonts.googleapis.com/css2?family=Overpass+Mono&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        
        <script src="practise.js"></script>
        <script src="practise1.js"></script>
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon" sizes="any">
        <style>



*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body
{
    background: rgba(0, 0, 0, 0.7) url('images/cow2.jpg') center center fixed;
    background-size: cover;
    background-blend-mode: darken;
    font-family: 'Overpass Mono', monospace;
    color: #f5f5f5;
}

a
{
    text-decoration: none;
    color: #f5f5f5;
}

a:hover
{
    color: #69f0ae;
}

.hide
{
    display: none;
}


.navbar{
    height: 10vh;
    display: flex;
    align-items: center;
    

}
.left-side{
    display: flex;
    align-items: center;
    flex: 1;
}
.logo{
    padding: 0 2%;
}
.logo img{
    height: 7vh;
}
ul{
    display: flex;
    align-items: center;
    justify-content: space-around;
    width: 50%;
}
li{
    list-style: none;
}
.left-side li
{
    height: 10vh;
    display: flex;
    align-items: center;
}
.right-side
{
    display: flex;
    justify-content: flex-end;
    align-items: center;
    flex: 0.1;
}

.account
{
    display: flex;
    align-items: center;
    margin-right: 30%;
}

.account:hover
{
    cursor: pointer;
}
.right-side img
{
    height: 5vh;
    border-radius: 50px;
    margin-right: 20%;
}
.dropdown-caret {
    border-top-style: solid;
    border-top-width: 4px;
    border-right: 4px solid transparent;
    border-bottom: 0 solid transparent;
    border-left: 4px solid transparent;
}
.dropdown{
    position: absolute;
    top: 8vh;
    right: 1vh;
    border: 0.5px solid;
    border-radius: 5px;
    border-color: #212121;
    padding: 0.5%;
    box-shadow: 0 0 10px #212121;
    background-color: black;
    z-index: 2;
    overflow: hidden;
}
.user-name
{
    margin-bottom: 5%;
    padding: 2%;
    width: 180px;
    border-bottom: 1px solid #212121;
    color: #757575;
}

.user-name:hover
{
    cursor: default;
}

.dropdown ul
{
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    width: 180px;
}
.dropdown li
{
    padding: 2%;
    width: 180px;
}

.dropdown li:hover
{
    background-color: #424242;
    border-radius: 3px;
}


/* Media query */

@media screen and (max-width: 1200px)
{
    .logo
    {
        flex: 1;
        display: flex;
        justify-content: center;
    }

    .burger-menu
    {
        flex: 0.1;
        padding-left: 2%;
    }

    .burger-menu:hover
    {
        cursor: pointer;
    }
    
    .line-1, .line-2, .line-3
    {
        width: 25px;
        height: 3px;
        background-color: #f5f5f5;
        margin: 5px;
    }

    .burger-menu-dropdown
	{
		display: flex;
		flex-direction: column;
		position: absolute;
		top: 10vh;
		left: 0;
		width: 100%;
		margin: auto;
		z-index: 1;
		background-color: rgba(0, 0, 0, 0.9); /* RGB of black */
	}

	.burger-menu-dropdown li
	{
		width: 90vw;
		display: flex;
		justify-content: center;
	}

	.burger-menu-dropdown li:hover
	{
		color: #69f0ae;
		background-color: rgba(66, 66, 66, 0.3);
		border-radius: 8px;
	}

	.hide-burger-menu
	{
		display: none;
	}
}
.content{
    position: absolute;
    color: #fff;
    top: 40%;
    left: 30%;
}
.content h3{
    font-family: sans-serif;
    font-size: 20px;
    margin-left: 30%;
}
.content h1{
    font-size: 50px;
}
.content p{
    text-align: center;
    margin-top: 17px;
}

.submit{
    position: absolute;
    margin-top: 22%;
    margin-left: 47%;
    border-radius: 20px;
}
.submit a{
    text-decoration: none;
    color: #fff;
    padding: 12px 25px;
    background-color: #69f0ae;
}
.submit a:hover{
    text-decoration: none;
    cursor: pointer;
}

.footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color:white;
    text-align: center;
    padding: 18px;
  }

  


        </style>

        <title>practise</title>
    </head>
    <body>
        <h1>Dairy Management System</h1>
        <nav class="navbar">
            <div class="left-side">
                <div class="burger-menu">
                    <div class="line-1"></div>
                    <div class="line-2"></div>
                    <div class="line-3"></div>
                </div>

                <div class="logo">
                    <a href="#"><img src="images/logo.png" alt="my image"></a>
                </div>
    
                <ul class="navbar-main-ul hide-burger-menu burger-menu-dropdown">
                    <a href="main.php"><li>Home</li></a>
                    <a href="about.html"><li>About</li></a>
                    <a href="service.php"><li>Services</li></a>
                    <a href="product.html"><li>Products</li></a>
                    <a href="order.php"><li>Make Order</li></a>
                    <a href="contact.html"><li>Contact Us</li></a>
                </ul>
            </div>

            <div class="right-side">
                <div class="account">
                    <img src="images/cow2.jpg" alt="SA">
                    
                    <div class="dropdown-caret"></div>
                </div>
                
                <div class="dropdown hide">
                    <div class="user-name">Staff </div>

                    <ul>
                        <a href="staff.php"><li>Staff Info</li></a>
                        <a href="staff.php"><li>Settings</li></a>
                        <a href="login.html"><li>Login</li></a>
                    </ul>
                </div>
            </div>
        </nav>
        <main>
            <section>
                <div class="content">
                    <h3>Welcome to Start Up Organization</h3>
                    <h1>Healty Milk Products at comfort</h1>
                    <p>Start Up Organization is a company located in East African Countries. It specializes on production of fresh milk products.</p>
                </div>

                <div class="submit">
                    <a href="about.html">FIND OUT MORE</a>
                </div>
            </section>
            <footer>
                <div class="footer">
                <p>&copy DIARY.com <sub>All Rigths Reserved</sub> </p>
                </div>
            </footer>
        </main>

    </body>
</html>