<?php
session_start();
if (!isset($_SESSION['userlogin']))
{
   header("location: login1.html");
}

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
$una=$_SESSION['userlogin'];
$sql="SELECT img from userdata where un='$una'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<strong><em>Profile Picture: </em></strong>";
echo '<img src='.$row['img'].'/>';



    }
}





?>