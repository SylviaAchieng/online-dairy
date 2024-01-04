<?php

      require_once 'connection.php';


      if (isset($_POST['savestaffdata'])) {
        $id=$_POST['id'];
        $ename  =  $_POST['fullname'];
        $phno =  $_POST['phone'];
        $salary  =  $_POST['salary'];
        $designation  =  $_POST['designation'];
        $address    =  $_POST['address'];
      }
      $sql = "INSERT INTO staff (id, fullname, phone, address, salary, designation)
      VALUES ('$id','$ename','$phno','$address', '$salary','$designation' )";

      if ($conn->query($sql) === TRUE) {

        header('Location: staff.php');
        //echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();
      ?>
