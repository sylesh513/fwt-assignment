<?php
$uname = $_POST['username'];
$pass = $_POST['password'];
// echo "Your username is:";
// echo $uname;
// echo nl2br("\n");
// echo "Your password is : Secret";
// echo nl2br("\n");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myweb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "";
$sql = "INSERT INTO credentials (username,password)
VALUES ('$uname', '$pass')";

if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "Error: " . $sql . "<br/>" . $conn->error;
}
$conn->close();
if ($uname =='sylesh' and $pass =='5560')
    {
    valid();
    }
    else
    {
      echo 'You are not a valid user';
      include 'forpass.html';
    }

function valid(){
  include 'home.html';
  
}
?>








