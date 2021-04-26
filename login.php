<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "logininfo";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
session_start();
$uname = $_POST['uname'];
$pwd = $_POST['pwd'];
$sql = "SELECT * FROM userdata WHERE un = '$uname' and pw = '$pwd'";
  $result = $conn->query($sql);
  if($result->num_rows > 0) {
    $_SESSION['userlogin'] = $uname;
    header("location: http://localhost/mywebsite/mainpage.php");
}
else {
    echo "Your email or password is invalid";
}
   









?>