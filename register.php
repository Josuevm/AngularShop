<?php
	

$servername= "localhost";
$DBusername="root";
$DBpassword="";
$dbname ="rentacar";

$Remail = $_POST["Remail"];
$Rusername = $_POST["Rusername"];
$Rpass = $_POST["Rpass"];

try{
    $conn = new PDO("mysql:host=$servername;dbname=rentacar",$DBusername, $DBpassword);
}catch(PDOException $e){
    echo "Connection failed";
}

$sqlInsert= "INSERT INTO User(email,username,pass) VALUES
('$Remail','$Rusername','$Rpass')";



$conn->query($sqlInsert);

$_SESSION['username'] = $Rusername;
$_SESSION["auth"]= "1";

$conn = null;

?>