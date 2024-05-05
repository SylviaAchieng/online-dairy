<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dairy";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if (isset($_POST['data'])) {
    $loginname  =  $_POST['username'];
    $loginpassword    =  $_POST['password'];
}

    
    $query=mysqli_query($conn,"select * from staff where id='".$loginname."'AND phone='".$loginpassword."' limit 1");
	$rows=mysqli_num_rows($query);
    
    if($rows == 1){
        echo " You Have Entered correct Password";
	   header("Location:main.php");
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
?>