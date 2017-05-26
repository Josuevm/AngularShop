<?php
	$servername= "localhost";
	$DBusername="root";
	$DBpassword="";
	$dbname ="rentacar";

$lusername = htmlspecialchars($_POST["lusername"]);
$lpassword = htmlspecialchars($_POST["lpass"]);

			try{
    			$conn = new PDO("mysql:host=$servername;dbname=rentacar",$DBusername, $DBpassword);
			}catch(PDOException $e){
    		echo "Connection failed";
			}
			
			$sqlSELECT = "SELECT username,email FROM User
			WHERE username='$lusername' AND pass='$lpassword'";

			 foreach ($conn->query($sqlSELECT) as $row) {
				 session_start();
				 if($lusername != "" && $lpassword != ""  ){
					 $_SESSION['username'] = $row['username'];
					 $_SESSION['useremail'] = $row['email'];
						$_SESSION["auth"]= "1";
				 }
				
				
			 }
		
				
		$conn = null; 

			header('Location: rentacarIndex.php');

?>