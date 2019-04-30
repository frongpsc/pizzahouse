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
        echo $cid;

        $q = "SELECT * from customer where CUSTOMER_ID= '$cid' ";
        $result = $conn->query($q);
        if(!$result)
        {
            echo "Select failed: ".$conn->error;
        }
        $urow = $result->fetch_array();

	    $customerid = $_POST['customerid'];
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $cemail = $_POST["iemail"];
        $cpassword = $_POST["ipass"];
        $date = $_POST["date"];
        $month = $_POST["month"];
        $address1 = $_POST["address1"];
        $address2 = $_POST["address2"];
        $telephone = $_POST["telephone"];
        

        
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
	$q = "UPDATE customer set FNAME='$firstname', LNAME='$lastname' , EMAIL='$cemail' , CPASSWORD='$cpassword' , CADDRESS1='$address1' , CADDRESS2='$address2' , TEL_NO='$telephone' where CUSTOMER_ID=$customerid";
	
	if(!$conn->query($q)){
		echo "Update failed: ". $conn->error;
	}else{
        ?>
        <form action = "Profile.php" method="post">
        <input type="hidden" name="iemail"  value="<?=$urow['EMAIL']?>">
        <input type="hidden" name="ipass"  value="<?=$urow['CPASSWORD']?>">
        <script>
        document.getElementsByTagName("form")[0].submit();
        </script>
        </form>
    <?php
    echo $urow['EMAIL'];
    echo $urow['CPASSWORD'];

	}
?>
