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
        $pizzaid = $_GET['pizzaid'];

        echo $cid;
        echo "</br>";
        echo $pizzaid;

        $q = "SELECT * from pizza where PIZZA_ID= '$pizzaid' ";
        $result = $conn->query($q);
        if(!$result)
        {
            echo "Select failed: ".$conn->error;
        }
        $urow = $result->fetch_array();

        $l = "SELECT * from counts order by COUNT_ID DESC LIMIT 0,1  ";
        $result5 = $conn->query($l);    
        if(!$result5)
        {
            echo "Select failed: ".$conn->error;
        }
        $crow = $result5->fetch_array();

        echo $crow['COUNT_ID'];
        $orderid = $crow['COUNT_ID'];
        $pizzaid = $urow['PIZZA_ID'];
        $customerid = $_GET['customerid'];

        $sqli = "INSERT INTO orderlist (ORDER_ID,PIZZA_ID)
        VALUES ('$orderid','$pizzaid')";

        

        if ($conn->query($sqli) === TRUE) {
            ?>
            <script type="text/javascript">
    
    window.location.replace("https://pizzahousenew.appspot.com/ordered.php?customerid=<?php echo $cid;?>");
</script>
            <?php
            //header("Location: ordered.php?customerid=$cid");
        } 
        else{
		echo "Insert failed: ". $sqli->error;
	}
?>