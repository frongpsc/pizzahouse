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
        $cid = $_GET['customerid'];

        $q = "SELECT * from customer where CUSTOMER_ID= '$cid' ";
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

        $n=$crow['COUNT_ID'];
        
        $p = "SELECT * from pizza,orderlist,counts where ORDER_ID = '$n' and pizza.PIZZA_ID = orderlist.PIZZA_ID ";
        $result2 = $conn->query($p);
        if(!$result2)
        {
            echo "Select failed: ".$conn->error;
        }
        $prow = $result2->fetch_array();
        ?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/stylekk.css">
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
            <div class="list">
                <div class="head">
                    <h1 style="color:azure" >Welcome, Your orders are</h1>
                </div>
                <div style="height:500px;width:1200px;overflow:auto ; background: url(bg2.jpg) ;color:rgb(82, 81, 81);font-size: 50px;scrollbar-base-color:gold;padding:10px;">
                <table>
                <colgroup>
                    <col width="1200">
                </colgroup>

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

        $l = "SELECT * from counts order by COUNT_ID DESC LIMIT 0,1  ";
        $result5 = $conn->query($l);    
        if(!$result5)
        {
            echo "Select failed: ".$conn->error;
        }
        $crow = $result5->fetch_array();

        $n=$crow['COUNT_ID'];
        $ttprice=0;

        $p = "SELECT * from pizza,orderlist where ORDER_ID= '$n' and pizza.PIZZA_ID=orderlist.PIZZA_ID ";
        $result2 = $conn->query($p);
        if(!$result2)
        {
            echo "Select failed: ".$conn->error;
        }
        
        while($prow = $result2->fetch_array()){
        echo "<tr>";
        echo "<td>";
        echo $prow['PNAME'];
        echo "<hr>";

        echo "</td>";
        echo "<td>";
        ?>
        <a href='orderedD.php?customerid=<?=$urow['CUSTOMER_ID']?>&orderid=<?=$prow['ORDERILST_ID']?>'><img src='close_delete-128.png' weight='50px' height='50px'></a>
        <?php
        echo "</br>";
        echo "</td>";
        echo "</tr>";
        $ttprice=$ttprice+$prow['PRICE'];
        }
                
        ?>
            </table>

                    </div>
                <div class="sumprice" style="color:azure" >

                    <p>pizza price <?=$ttprice?> bath</p>
                    <p>shipping price 50 bath</p>
                    <?php
                    $ttprice=$ttprice+50;
                    ?>
                    <h1>Total price <?=$ttprice?> bath</h1>
                </div>
            <hr>
            </div>
            <div class="address">
                <div class="topic">
                    <h1 style="color:azure">Choose your address</h1>
                </div>
                <div  class="listaddress"  style="color:azure" >
                    <form action="ordercode.php?customerid=<?=$urow['CUSTOMER_ID']?>" method="post">

                        <input type="hidden" name="orderid" value="<?=$n?>">
                        <input type="hidden" name="price" value="<?=$ttprice?>">
                        <input name="Uaddress" type="radio"  value="<?=$urow['CADDRESS1']?>"><?=$urow['CADDRESS1']?><br>
                        <input name="Uaddress" type= "radio"  value="<?=$urow['CADDRESS2']?>"><?=$urow['CADDRESS2']?><br>
                        <hr>
                        <div class="foot">
                        <h1 style="color:red">!!!You can't change your order after clicking confirm!!!</h1>
                        <h1 style="color:red">!!Please carefully check your order again!!</h1>

                        <input type="submit"  name="submit"  value="Confirm">
                        </div>
                    </form>
                    </div>

                </div>
            </div>

    
</body>
</html>