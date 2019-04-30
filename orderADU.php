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
        $cid = $_POST['customerid'];
        $orderid = $_POST['orderid'];
        $staffn = $_POST['STAFFID'];
        $ss = "SELECT * from staff where STAFF_NAME= '$staffn' ";
        $result99 = $conn->query($ss);
        if(!$result99)
        {
            echo "Select failed: ".$conn->error;
        }
        $ttrow = $result99->fetch_array();
        $staff = $ttrow['STAFF_ID'];
        $statuss = $_POST["statuss"];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $price = $_POST['price'];
        date_default_timezone_set("Asia/Bangkok");
        $nt=date("His");
        $y = "SELECT * from orders where ORDER_ID= $orderid ";
        $result9 = $conn->query($y);
        if(!$result9)
        {
            echo "Select failed: ".$conn->error;
        }
        $frow = $result9->fetch_array();
        $add= $frow['ORDER_ADDs'];

        echo $cid;
        echo $staff;
        echo $statuss;
        echo $date;
        echo $time;
        echo $price;

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
    if($statuss==2)
    {
    $q = "UPDATE orders set CTIME=$nt where ORDER_ID=$orderid";
    
    if(!$conn->query($q)){
        echo "Update failed: ". $conn->error;
    
    }
    else
    {
        
        //header("Location: orderAD.php");
    }
}
	$q = "UPDATE orders set ORDER_DATEs='$date', ORDER_ADDs='$add' , ORDER_TIMEs='$time' , ORDER_PRICEs=$price , STATUS_ID= $statuss , STAFF_ID=$staff where ORDER_ID=$orderid";
	
	if(!$conn->query($q)){
		echo "Update failed: ". $conn->error;
    }
    else{
        
        header("Location: orderAD.php");

    }


?>
