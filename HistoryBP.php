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



$cid = $_GET['customerid'];

$q = "SELECT * from customer where CUSTOMER_ID= '$cid' ";
$result = $conn->query($q);
if(!$result)
{
    echo "Select failed: ".$conn->error;
}
$urow = $result->fetch_array();


echo $cid;

?>

        <form action = "Profile.php" method="post">
        <input type="hidden" name="iemail"  value="<?=$urow['EMAIL']?>">
        <input type="hidden" name="ipass"  value="<?=$urow['CPASSWORD']?>">

        <script>
        document.getElementsByTagName("form")[0].submit();
        </script>
        </form>