 
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
                    
                    </li>
                    <li>
                    
                    </li>
                    <li>
                    
                    </li>
                    <li>
                    
                    </li>
                 
                    <li>
                    <a>       </a>
                    </li>
                     <li>
                        <a href="inup.php">LOGOUT</a>
                    </li>
                    <li>
                    <a >        </a>
                    </li>
                    <li>
                    <a s >     </a>
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
    margin-left: 0px;
    
}

th, td {
    
    padding: 10px;
    
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
                <col width="1%">
                <col width="1%">
                <col width="1%">
                <col width="10%">
                <col width="8%">
                <col width="20%">
                <col width="15%">
                <col width="5%">
                <col width="8%">
                <col width="8%">
                <col width="5%">
             
            <?php 
                echo'<tr>
                    <th>SATFF_ID</th>
                    <th>CUSTOMER_ID</th> 
                    <th>ORDER_ID</th> 
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>ORDERLIST</th>
                    <th>ADDRESS</th> 
                    <th>PRICE</th>
                    <th>TEL_NO</th>
                    <th>STATUS</th>
                    <th>UPDATE</th>


                    
                    
                </tr>';
                ?>

                <?php
                $loginemail = $_GET['email'];
                $loginPassword = $_GET['pass'];
                $q2 = "SELECT * FROM staff,statuss WHERE STAFF_NAME='$loginemail' and PASSWORDs='$loginPassword'";
                $result2=$conn->query($q2);
                    if(!$result2)
                    {
                        echo "Select failed: ".$conn->error;
                    }
				 $irow=$result2->fetch_array();
                    $sid=$irow['STAFF_ID'];
        
               
				 	$q="SELECT * from orders WHERE STAFF_ID=$sid ORDER BY ORDER_ID DESC";
					$result=$conn->query($q);
				
				 while($row=$result->fetch_array()){ ?>
                 <tr>
                    <td align=center><?=$irow['STAFF_ID']?></td> 
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
                    <td align=center><?=$row['ORDER_ADDs']?></td>

                    <td align=center><?=$row['ORDER_PRICEs']?></td>

                    <td align=center><?=$row['ORDER_PRICEs']?></td>

                    <?php
                    $checks =  $row['STATUS_ID'];
                    if($checks == 0)
                    {
                        $sc = "PREPARE";
                    }
                    elseif($checks == 1)
                    {
                        $sc = "SENT";
                    }
                    elseif($checks == 2)
                    {
                        $sc = "COMPELETE";
                    }

                    ?>
                    <td align=center><?=$sc?></td>
                    <td align=center>
                    <a href='staffU.php?orderid=<?=$row['ORDER_ID']?>&sta=PREPARE&email=<?=$loginemail?>&pass=<?=$loginPassword?>'><button ><b>PREPARE</b></button></a> 
                    <a href='staffU.php?orderid=<?=$row['ORDER_ID']?>&sta=SENT&email=<?=$loginemail?>&pass=<?=$loginPassword?>'><button ><b>SENT</b></button></a> 
                    <a href='staffU.php?orderid=<?=$row['ORDER_ID']?>&sta=COMPLETE&email=<?=$loginemail?>&pass=<?=$loginPassword?>'><button ><b>COMPELETE</b></button></a> 
                    </td>
					
                </tr>                               
				<?php } ?>

			<?php $count=$result->num_rows;
					echo "<tr><th colspan=11 align=right>Total $count records</th></tr>";
					$result->free();
		 
		 
		 ?>
            </table>

         
          

        </html>
</body>