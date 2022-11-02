 <?php
 $fname=$_GET["fname"];
 $lname=$_GET["lname"];
 $phnumber=$_GET["phnumber"];
 $email=$_GET["email"];
 $age=$_GET["age"];
 $distance=$_GET["distance"];
 $date=$_GET["date"];
 $anum=$_GET["anum"];
 $fileup=$_GET["fileup"];

echo $fname;
echo nl2br("\n");
echo $lname;
echo nl2br("\n");
echo $phnumber;
echo nl2br("\n");
echo $email;
echo nl2br("\n");
echo $age;
echo nl2br("\n");
echo $distance;
echo nl2br("\n");
echo $date;
echo nl2br("\n");
echo $anum;
echo nl2br("\n");
echo $fileup;
echo nl2br("\n");

if ($distance>=0 and $distance<=15) {
    $price = $distance*12;
    echo "your quote is:";
    echo $price;
    echo "/-";
    echo nl2br("\n");

  }
elseif ($distance>=15 and $distance<=45) {
    $price = $distance*15;
    echo "your quote is:";
    echo $price;
    echo "/-";
    echo nl2br("\n");

  }
elseif ($distance>=45 and $distance<=70) {
    $price = $distance*17;
    echo "your quote is:";
    echo $price;
    echo "/-";
    echo nl2br("\n");

  }
elseif ($distance>=70 and $distance<=100) {
    $price = $distance*21;
    echo "your quote is:";
    echo $price;
    echo "/-";
    echo nl2br("\n");

  }
else {
    $price = $distance*29 ;
    echo "your quote is:";
    echo $price;
    echo "/-";
    echo nl2br("\n");

  }


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myweb";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
    echo "connected successfully";
}

$sql = "INSERT INTO register (firstname,lastname,phone,email,age,distance,date,anum) VALUES ('$fname', '$lname', '$phnumber', '$email', '$age', '$distance', '$date', '$anum')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } 
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  echo "end";

  $conn->close();
  echo "this is a test print";


?> 
