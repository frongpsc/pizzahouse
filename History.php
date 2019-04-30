 
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


        ?>           
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style8.css">
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



                    <div class="profile">
                    <a href="HistoryBP.php?customerid=<?=$urow['CUSTOMER_ID']?>">  <img src="avatar11.png" class="avatar2"></a>
                    <img src="history.png" class="avatar3">
     

                    
            </div>
            <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
                   <br>
        
                   <br>
                   <br>
               
                   <br>
                   <br>
                   <br>
                   <br>
                   <head>
<style>
table {
    border-collapse: collapse;
    width: 70%;
    margin-left: 210px;
    
}

th, td {
    
    padding: 8px;
    
}

tr:nth-child(even){background-color: #f2f2f2}
tr:nth-child(odd){background-color: #D3D3D3}
th {
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
            <table>
                <col width="10%">
                <col width="15%">
                <col width="15%">
                <col width="50%">
                <col width="10%">
            <?php 
                echo'<tr>
                    <th>ORDER_ID</th> 
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>ORDERLIST</th>
                    <th>PRICE</th>
                    <th>STATUS</th>
                
                </tr>';
                ?>
                <?php
                
    
        
            $cid = $_GET['customerid'];
            echo $cid;
               
				 	$q="SELECT * from orders,statuss WHERE CUSTOMER_ID= '$cid' AND orders.STATUS_ID=statuss.STATUS_ID";
					$result=$conn->query($q);
				
				 while($row=$result->fetch_array()){ ?>
                 <tr>
                    <td align=center><?=$row['ORDER_ID']?></td> 
                    <td align=center><?=$row['ORDER_DATEs']?></td>
                    <td align=center><?=$row['ORDER_TIMEs']?></td>
                    
                    <td align=center>
                    <?php
                        $n = $row['ORDER_ID'];
                        $p = "SELECT * from pizza,orderlist where ORDER_ID= '$n' and pizza.PIZZA_ID=orderlist.PIZZA_ID ";
                        $result2 = $conn->query($p);
                        if(!$result2)
                        {
                            echo "Select failed: ".$conn->error;
                        }
        
                    while($prow = $result2->fetch_array())
                    {
                        echo $prow['PNAME'];
                    }
                    ?>
                    </td>
                    <td align=center><?=$row['ORDER_PRICEs']?></td>
                    <td align=center><?=$row['STATUS']?></td>
					
                </tr>                               
				<?php } ?>

			<?php $count=$result->num_rows;
					echo "<tr><th colspan=6 align=right>Total $count records</th></tr>";
					$result->free();
		 
		 
		 ?>
            </table>
         
          

        </html>
</body>