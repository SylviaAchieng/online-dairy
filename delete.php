<?php

require_once 'connection.php';  //connecting to database


//###########################
//This deletion is for staff id
if (isset($_GET['id'])) {
    $id = $_GET['id']; // get id through query string
}
$del = "DELETE FROM `staff` WHERE id='$id'"; // delete query

if ($conn->query($del) === TRUE) {

  header('Location: staff.php');
  //echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>