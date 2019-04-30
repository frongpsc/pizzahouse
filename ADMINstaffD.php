<?php

$servername = null;
$username = "root";
$password = "pizzahouse";

$dbname = "pizzahouse";
$port = null;
$socket = "/cloudsql/pizzahousenew:asia-southeast1:pizzahouse";

$conn = new mysqli($servername, $username,$password, $dbname,$port,$socket);


if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

error_reporting(E_ALL);
ini_set('display error', 1);
	$sid = $_GET['sid'];
    echo $sid;

	if(isset($sid)) {
		$q="DELETE FROM staff where STAFF_ID=$sid";
		$q = strtolower($q);
			if(!$conn->query($q)){
				echo "DELETE failed. Error: ".$conn->error ;
           }

		   $conn->close();
		   //redirect
		   header("Location:ADMINstaff.php");
	}


?>
