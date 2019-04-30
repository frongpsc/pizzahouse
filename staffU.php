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

$orderid = $_GET['orderid'];
$eiei = $_GET['sta'];
$email = $_GET['email'];
$pass = $_GET['pass'];

date_default_timezone_set("Asia/Bangkok");
$nt=date("His");


echo $nt;


error_reporting(E_ALL);
ini_set('display error', 1);
if ($eiei == "PREPARE")
{
    $servername = null;
    $username = "root";
    $password = "pizzahouse";

    $dbname = "pizzahouse";
    $port = null;
    $socket = "/cloudsql/pizzahousenew:asia-southeast1:pizzahouse";

$conn = new mysqli($servername, $username,$password, $dbname,$port,$socket);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
	$q = "UPDATE orders set  STATUS_ID= '0'  where ORDER_ID=$orderid";
	
	if(!$conn->query($q)){
		echo "Update failed: ". $conn->error;
	}else{
        
        header("Location: staff.php?email=$email&pass=$pass");

	}
}

if ($eiei == "SENT")
{
    $servername = null;
    $username = "root";
    $password = "pizzahouse";

    $dbname = "pizzahouse";
    $port = null;
    $socket = "/cloudsql/pizzahousenew:asia-southeast1:pizzahouse";

$conn = new mysqli($servername, $username,$password, $dbname,$port,$socket);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
	$q = "UPDATE orders set STATUS_ID= '1'  where ORDER_ID=$orderid";
	
	if(!$conn->query($q)){
		echo "Update failed: ". $conn->error;
	}else{
        
        header("Location: staff.php?email=$email&pass=$pass");

	}
}

if ($eiei == "COMPLETE")
{
    $servername = null;
            $username = "root";
            $password = "pizzahouse";
     
            $dbname = "pizzahouse";
            $port = null;
            $socket = "/cloudsql/pizzahousenew:asia-southeast1:pizzahouse";

        $conn = new mysqli($servername, $username,$password, $dbname,$port,$socket);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
	$q = "UPDATE orders set STATUS_ID= '2',CTIME=$nt  where ORDER_ID=$orderid";
	
	if(!$conn->query($q)){
		echo "Update failed: ". $conn->error;
	}else{
        
        header("Location: staff.php?email=$email&pass=$pass");

	}
}
//echo $eiei;
?>