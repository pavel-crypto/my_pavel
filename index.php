<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$servername = "localhost";
$username = "root";
$password = "la_me_xx1985A";
$dbname = "darina_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id,Name,igrushka,Tsena FROM magazin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo " id: " .$row["id"]. " Name: " .$row["Name"]." , ".$row["igrushka"]."  ". $row["Tsena"] ."<br/>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>