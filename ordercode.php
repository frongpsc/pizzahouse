<!DOCTYPE html>
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
        $oid = $_POST['orderid'];
        $pid = $_POST['price'];
        $aid = $_POST['Uaddress'];
        $cid = $_GET['customerid'];



        $q = "SELECT * from customer where CUSTOMER_ID= '$cid' ";
        $result = $conn->query($q);
        if(!$result)
        {
            echo "Select failed: ".$conn->error;
        }
        $urow = $result->fetch_array();
        $nd=date("Y-m-d");
        date_default_timezone_set("Asia/Bangkok");
        $nt=date("H:i:s");
        
        $query = "SELECT STAFF_ID FROM staff";
        $result = mysqli_query($conn,$query) or die(mysqli_error());
        $count = mysqli_num_rows($result);

        $n = "SELECT * from staff,orders where orders.STAFF_ID = staff.STAFF_ID ";
        $result3 = $conn->query($n);
        if(!$result3)
        {
            echo "Select failed: ".$conn->error;
        }
        while($nrow = $result3->fetch_array())
        {
        echo $nrow['STATUS_ID'];
         }

        $u = "INSERT INTO orders (ORDER_ID,ORDER_DATEs,ORDER_ADDs,ORDER_TIMEs,ORDER_PRICEs,CUSTOMER_ID,STATUS_ID,STAFF_ID,CTIME)
        VALUES ($oid,'$nd','$aid','$nt',$pid,$cid,0,1,99)";
                    if ($conn->query($u) === TRUE) {

                        //header("Location: ordered.php?customerid=$cid");
                } 
                 else{
                 echo "Insert failed: ". $conn->error;
                 }

        ?>   
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/stylecode.css">
    <title>T.PIZZA</title>
</head>
<body>  
        <div class="menubar">
                <div class="container">

                    <div class="logo">
                        <img src="logo.png" >
                    </div>
                    <ul class="menu">
                    <li>
                    <a href="home.php?customerid=<?=$urow['CUSTOMER_ID']?>">HOME</a>
                    </li>
                    <li>
                    <a href="aboutus.php?customerid=<?=$urow['CUSTOMER_ID']?>">ABOUT US</a>
                    </li>
                    <li>
                    <a href="order.php?customerid=<?=$urow['CUSTOMER_ID']?>">MENU</a>
                    </li>
                    <li>
                    <a href="ordered.php?customerid=<?=$urow['CUSTOMER_ID']?>">ORDER</a>
                    </li>
                    <li>
                    <a href="ProfileB.php?customerid=<?=$urow['CUSTOMER_ID']?>">PROFILE</a>
                    </li>
                    <li>
                        <a href="inup.php">LOGOUT</a>
                    </li>
                </ul>
                </div>
            </div>


            <div class="code">
                <div class="topic" style="color:lightgray">
                    <h1>Your order has been Confirmed!</h1>
                    <h2>Your order code is : #<?=$oid?></h2>
                    <h2>Your address  is : <?=$aid?></h2>
                    <br>

                    <h2>Your orderlist  is :</h2>
                    <?php       
                        $p = "SELECT * from pizza,orderlist where ORDER_ID= '$oid' and pizza.PIZZA_ID=orderlist.PIZZA_ID ";
                        $result2 = $conn->query($p);
                        if(!$result2)
                        {
                            echo "Select failed: ".$conn->error;
                        }
                        
                        while($prow = $result2->fetch_array()){
                        echo "<h2>";
                        echo $prow['PNAME'];
                        echo "</h2>";
                         }
                                
                     ?>
                     <br>
                    <p>please wait for 30 minute</p>
                    <p>If you have some problem or your data are not correct contact us : 084-354-7845</p>
                </div>
            </div>
            <div class="foot">
                    <a href="home.php?customerid=<?=$urow['CUSTOMER_ID']?>"><button>Return to Home</button></a><br>
            </div>
            <?php
            $sqli = "INSERT INTO counts (NONES)
        VALUES ('')";
            if ($conn->query($sqli) === TRUE) {

                    //header("Location: ordered.php?customerid=$cid");
            } 
             else{
             echo "Insert failed: ". $sqli->error;
             }
            ?>

</body>
</html>