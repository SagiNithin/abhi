<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logininfo";

$un=$_POST['un'];
$pw=$_POST['pw'];
$mail=$_POST['mail'];
$dob=$_POST['dob'];
$img=$_POST['img'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO userdata(un,pw,mail,dob,img)
VALUES ('$un','$pw','$mail','$dob','$img')";

if ($conn->query($sql) === TRUE) {
  echo "<h1>You are Successfully Registered...</h1>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>