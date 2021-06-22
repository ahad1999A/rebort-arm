<?php
$servername = "localhost";
$username = "username";
$password = "";
$db = "Database1"

// Create connection
$conn = new mysqli($servername, $username, $password , $db );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$sql = " INSERT INTO table (myRange ,myRange1 , myRange2,myRange3,myRange4 ,myRange5 )
VALUES(".$POST['myRange']", ".$POST['myRange1']", ".$POST['myRange2']"
".$POST['myRange3']", ".$POST['myRange4']", ".$POST['myRange5']" )" ; 



if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>