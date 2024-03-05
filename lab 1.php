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
$password = "";

echo "HEllo , we are learning to conncet database";
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  echo ("Connection failed: " . mysqli_connect_error());
}
echo "Connection success";


mysqli_close($conn);
?>
</body>
</html>