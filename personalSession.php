<?php
$servername= "localhost";
$DBusername="root";
$DBpassword="";
$dbname ="rentacar";
session_start();

$fname= htmlspecialchars($_POST["fname"]);
$lname = htmlspecialchars($_POST["lname"]);
$email = htmlspecialchars($_POST["email"]);
$pnumber = htmlspecialchars($_POST["pnumber"]);

				 
				$_SESSION['fname'] = $fname;
				$_SESSION['lname']= $lname;
				 $_SESSION['email'] = $email;
				 $_SESSION['pnumber'] = $pnumber;


try{
    			$conn = new PDO("mysql:host=$servername;dbname=rentacar",$DBusername, $DBpassword);
			}catch(PDOException $e){
    		echo "Connection failed";
			}
			
			
			
			$sqlSELECT="SELECT carId FROM car 
			WHERE type ='".$_SESSION['carType']."'";

			 foreach ($conn->query($sqlSELECT) as $row) {
				 
				$carId = $row['carId'];
					
			 }

			
			$sqlINSERT = "INSERT INTO reservation(pickPlace,pickHour,returnPlace,returnHour,pickDate,returnDate,firstName,lastName,email,phoneNumber,carId) VALUES('".$_SESSION['pickup']."','".$_SESSION['pickupHour']."','".$_SESSION['returnLocation']."','".$_SESSION['returnHour']."','".$_SESSION['pickupDate']."','".$_SESSION['returndate']."','".$_SESSION['fname']."','".$_SESSION['lname']."','".$_SESSION['email']."','".$_SESSION['pnumber']."','$carId');";
			
			$conn->query($sqlINSERT);
				echo "datos insertados";
				
			$conn = null; 

?>