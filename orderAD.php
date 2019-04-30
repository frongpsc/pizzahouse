 
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
<div class="menubar1" >
                <div class="container">
            
               

                    <div class="logo">
                        <img src="logo.png" >
                    </div>
                    <ul class="menu">
                    <li>
                    <a href="orderAD.php">ORDER</a>
                    </li>
                    <li>
                    <a href="amcustomer.php">CUSTOMER</a>
                    </li>
                    <li>
                    <a href="FEEDBACK.php">FEEDBACK</a>
                    </li>
                    <li>
                    <a href="ADMINstaff.php" >STAFF</a>
                    </li>
            
                    <li>
                        <a href="inup.php">LOGOUT</a>
                    </li>
                </ul>
                </div>
            </div>






        
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
    width: 100%;
    margin-left: px;
    
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
                <col width="5%">
                <col width="5%">
                <col width="15%">
                <col width="15%">
                <col width="30%">
                <col width="5%">
                <col width="5%">
                <col width="5%">
             
            <?php 
                echo'<tr>
                    <th>CUSTOMER_ID</th> 
                    <th>ORDER_ID</th> 
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>ORDERLIST</th>
                    <th>PRICE</th>
                    <th>ADDRESS</th>
                    <th>STATUS</th>
                    <th>SATFF_ID</th>
                    <th>EDIT</th>
                    <th>DELETE</th>

                    
                
                </tr>';
                ?>
                <?php
                
    
        
               
				 	$q="SELECT * from orders,statuss WHERE orders.STATUS_ID=statuss.STATUS_ID ORDER BY ORDER_ID DESC";
					$result=$conn->query($q);
				
				 while($row=$result->fetch_array()){ ?>
                 <tr>
                    <td align=center><?=$row['CUSTOMER_ID']?></td> 
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
                    <td align=center><?=$row['ORDER_ADDs']?></td>
                    <td align=center><?=$row['STATUS']?></td>
                    <td align=center><?=$row['STAFF_ID']?></td>
                    <td align=center><a href='orderADE.php?customerid=<?=$row['CUSTOMER_ID']?>&orderid=<?=$row['ORDER_ID']?>'><img src='Edit-512.png' weight='50px' height='50px'></a></td>
                    <td align=center><a href='orderADD.php?customerid=<?=$row['CUSTOMER_ID']?>&orderid=<?=$row['ORDER_ID']?>'><img src='close_delete-128.png' weight='50px' height='50px'></a></td>

					
                </tr>                               
				<?php } ?>

			<?php $count=$result->num_rows;
					echo "<tr><th colspan=11 align=right>Total $count records</th></tr>";
					$result->free();
		 
		 
		 ?>
            </table>
         
          

        </html>
</body>