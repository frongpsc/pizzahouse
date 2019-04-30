 
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




     

                    
            </div>
        
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
                <col width="5%">
                <col width="15%">
                <col width="15%">
                <col width="20%">
                <col width="20%">
                <col width="5%">
                <col width="25%">
                <col width="5%">

            <?php 
                echo'<tr>
                    <th>CUSTOMER_ID</th> 
                    <th>ORDER_ID</th> 
                    <th>DATE</th>
                    <th>TIME</th>
                    <th>ORDERLIST</th>
                    <th>PRICE</th>
                    <th>STATUS</th>
                    <th>STAFF_NAME</th>


                    
                
                </tr>';
                ?>
                <?php
                
                $oid = $_GET['orderid'];
                $cid = $_GET['customerid'];

               
				 	$q="SELECT * from orders,statuss WHERE orders.STATUS_ID=statuss.STATUS_ID AND CUSTOMER_ID=$cid AND ORDER_ID=$oid ";
					$result=$conn->query($q);
                

                    if(!$result)
                    {
                        echo "Select failed: ".$conn->error;
                    }

				 $row=$result->fetch_array(); ?>
                 <tr>
                    <td align=center><?=$row['CUSTOMER_ID']?></td> 
                    <td align=center><?=$row['ORDER_ID']?></td> 
                    <td align=center><?=$row['ORDER_DATEs']?></td>
                    <td align=center><?=$row['ORDER_TIMEs']?></td>
                    <td align=center>
                    <form action="orderADU.php" method="post">
                    <input type="hidden" name="orderid"  value="<?=$oid?>">
                    <input type="hidden" name="customerid"  value="<?=$cid?>">
                    <input type="hidden" name="date"  value="<?=$row['ORDER_DATEs']?>">
                    <input type="hidden" name="time"  value="<?=$row['ORDER_TIMEs']?>">
                    <input type="hidden" name="price"  value="<?=$row['ORDER_PRICEs']?>">


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

                    $u = "SELECT * from orders where ORDER_ID= $oid ";
                    $result8 = $conn->query($u);
                    if(!$result8)
                    {
                        echo "Select failed: ".$conn->error;
                    }
                    $irow = $result8->fetch_array();

                    ?>
                    </td>
                    <td align=center><?=$row['ORDER_PRICEs']?></td>

                    <td align=right>

                    <?php 
                        $e='select STATUS_ID, STATUS from statuss;';
                        if($result6 = $conn->query($e)){
                            while($erow = $result6->fetch_array()){
                                ?>
                                <p></p>
                                <?=$erow[1]?><input type="radio" name="statuss" value="<?=$erow[0]?>">
                               <?php
                            }
                        }
                    ?>
                    </td>
                    <td align=center>
                        <?php

                        $e = "SELECT * from staff  ";
                        $result55 = $conn->query($e);
                        if(!$result55)
                        {
                            echo "Select failed: ".$conn->error;
                        }
                        while($eerow = $result55->fetch_array())
                        {   
                            $io=$eerow['STAFF_ID'];
                            $a = "UPDATE staff set STAFF_STATUS='FREE'  where STAFF_ID=$io";
                            if(!$conn->query($a)){
                                echo "Update failed: ". $conn->error;
                            }else{    
                                //header("Location: ADMINstaff.php");
                            }
                        }

                        $h = "SELECT * from orders where STATUS_ID= 1 OR STATUS_ID= 0 ";
                        $result77 = $conn->query($h);
                        if(!$result77)
                        {
                            echo "Select failed: ".$conn->error;
                        }
                        while($mmrow = $result77->fetch_array())
                        {   
                            $aa=$mmrow['STAFF_ID'];
                            $b = "UPDATE staff set STAFF_STATUS='NOTFREE'  where STAFF_ID=$aa";
	
                            if(!$conn->query($b)){
                                echo "Update failed: ". $conn->error;
                            }else{
                                
                                //header("Location: ADMINstaff.php");
                        
                            }
                        }




                        $h = "SELECT * from staff where STAFF_STATUS= 'FREE'  ";
                        $result3 = $conn->query($h);
                        if(!$result3)
                        {
                            echo "Select failed: ".$conn->error;
                        }

                        $q2 = "SELECT * from orders where ORDER_ID=$oid  ";
                        $resultt = $conn->query($q2);
                        if(!$resultt)
                        {
                            echo "Select failed: ".$conn->error;
                        }
                        $utrow = $resultt->fetch_array();
                        $aaaa=$utrow['STAFF_ID'];
                        //echo $aaaa;
                        $q3 = "SELECT * from staff where STAFF_ID=$aaaa  ";
                        $resulttt = $conn->query($q3);
                        if(!$resulttt)
                        {
                            echo "Select failed: ".$conn->error;
                        }
                        $uttrow = $resulttt->fetch_array();
                        //echo   $uttrow['STAFF_NAME'];

                    ?>    
                    <select name="STAFFID">
                    <option> <?=$uttrow['STAFF_NAME']?> </option>
                    <?php
                    while($hrow = $result3->fetch_array())
                    {
                        ?>
                        <p></p>
                        <option> <?=$hrow['STAFF_NAME']?> </option>

                        
                       <?php
                    }
                ?>     
                </select>
                    </td>

					
                </tr>                               

			

			<tr><th colspan=8 align=center class="foot"><input type="submit"  name="submit"  value="UPDATE"></th></tr>;
            </form>         
            </table>
         
          

        </html>
</body>