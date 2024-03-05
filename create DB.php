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
$db = "B5";
echo "HEllo , we are learning to conncet database";
$conn = mysqli_connect($servername, $username, $password, $db);

if (!$conn) {
  echo ("Connection failed: " . mysqli_connect_error());
}
echo "Connection success <br> <br>";

//$sql = "create database B5";

//$sql = "create table INFO (id int primary key, name varchar(50), email varchar (50))";
//mysqli_query($conn, $sql);

//$sql_insert = "Insert into INFO Values (3, 'hfsif', 'duch@gmail.com') ,(5, 'cskJD', 'iho@gmail.com')";
//mysqli_query($conn, $sql_insert);

$sql_select = "select name, email from INFO where id = 1";
$result = mysqli_query($conn, $sql_select);

if ($result -> num_rows > 0 )
{
  while ($row = $result-> fetch_assoc())
  {
    echo "<form>";
    echo "Name : <input type = 'text' name = 'fname' value =".$row['name'];
    echo ">  ";
    echo "email : <input type = 'text' name = 'femail' value =".$row['email'].">";
    echo "</form>";
  }
}
else
{
  echo " zero results";
}
mysqli_close($conn);
?>
</body>
</html>