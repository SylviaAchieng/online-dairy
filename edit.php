<!DOCTYPE html>
<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update Staff</title>
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="farmer.css">
    <style media="screen">
    .delete-icon {
      position: absolute;
      padding: 4px 5px;
      border-radius: 5px;
      text-decoration: none;
      margin-left: 50px;
    }

    .delete-icon:hover {
      transform: scale(1.2);
      opacity: 0.8;
    }
    u{
      text-decoration: none;
    }

    </style>
  </head>
  <body>

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

        $id = $_GET['id'];

        $showquery = "SELECT * FROM staff WHERE id=$id";

        $showdata = mysqli_query($conn,$showquery);

        $arrdata = mysqli_fetch_array($showdata);



      if (isset($_POST['updatestaffdata'])) {
                $idupdate = $_GET['id'];
                $fullname  =  $_POST['fullname'];
                $phone =  $_POST['phone'];
                $address  =  $_POST['address'];
                $salary =  $_POST['salary'];
                $designation =  $_POST['designation'];
              }


$sql = "UPDATE staff SET id=$id, fullname='$fullname', phone='$phone', address='$address',salary='$salary',designation='$designation' WHERE id=$idupdate";


    $res  = mysqli_query($conn,$sql);


    if ($res) {
      header('Location: staff.php');

    }



    $conn->close();
    ?>
      <form class="modal-content animate" action="" method="POST">
      <h3>  <b> <u> Update Staff details</u></b>  <a class="delete-icon" href="staff.php">  <i class="fas fa-arrow-circle-left"></i></a></h3>
        <div class="container">
                <label for="fullname">Full Name <sup>*</sup> </label>
                <input type="text" name="fullname" value="<?php echo $arrdata['fullname']; ?>" placeholder="full name" required/>
                <br>
                <label for="phone">Phone number<sup>*</sup> </label>
                <input type="text" name="phone" value="<?php echo $arrdata['phone']; ?>" placeholder="Phone Number" required/>
                <br>
                <label for="address">Address<sup>*</sup> </label>
                <input type="text" name="address" value="<?php echo $arrdata['address']; ?>" placeholder="address" required/>
                <br>
                <label for="salary">Salary<sup>*</sup> </label>
                <input type="text" name="salary" value="<?php echo $arrdata['salary']; ?>" placeholder="salary" required/>
                <br>
                <label for="designation">Designation<sup>*</sup> </label>
                <input type="text" name="designation" value="<?php echo $arrdata['designation']; ?>" placeholder="Designation" required/>
                <br>

                <input type="submit" name="updatestaffdata" class="submit-btn-add" value="Update">
        </div>


  </body>
</html>
