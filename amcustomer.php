 
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



                <?php
				require_once('dbcon.php');
                if(isset($_POST['page'])) 
                {
				$email = $_POST["email"];
				$subject = $_POST["subject"];
				$message = $_POST["message"];

				$page=$_POST['page'];
                if($page=='aboutus') 
                {
					$q="INSERT INTO feedback (EMAIL,FSUBJECT,COMMENT) 
					VALUES ('$email','$subject','$message')";
                    $result=$mysqli->query($q); 
                    if(!$result){
						echo "INSERT failed. Error: ".$mysqli->error ;
				}
            }
        }
			?>




<style>
table {
    border-collapse: collapse;
    width: 100%;
    margin-left: 0px;
    
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
                <col width="3%">
                <col width="10%">
                <col width="10%">
                <col width="10%">
                <col width="10%">
                <col width="5%">
                <col width="5%">
                <col width="5%">
                <col width="15%">
                <col width="15%">
                <col width="6%">
                <col width="6%">
     
            <?php 
                echo'<tr>
                    <th>CUSTOMER_ID</th> 
                    <th>FNAME</th>
                    <th>LNAME</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>DOB</th>
                    <th>MOB</th>
                    <th>SEX</th>
                    <th>CADDRESS1</th>
                    <th>CADDRESS2</th>
                    <th>TEL_NO</th>
                    <th>EDIT</th>


     
                
                </tr>';
                ?>
                <?php
        
				 	$q="SELECT * from customer GROUP BY CUSTOMER_ID";
					$result=$mysqli->query($q);
				
				 while($row=$result->fetch_array()){ ?>
                 <tr>
                    <td align=center><?=$row['CUSTOMER_ID']?></td> 
                    <td align=center><?=$row['FNAME']?></td>
                    <td align=center><?=$row['LNAME']?></td>
                    <td align=center><?=$row['EMAIL']?></td>
                    <td align=center><?=$row['CPASSWORD']?></td>
                    <td align=center><?=$row['DOB']?></td>
                    <td align=center><?=$row['MOB']?></td>
                    <td align=center><?=$row['SEX']?></td>
                    <td align=center><?=$row['CADDRESS1']?></td>
                    <td align=center><?=$row['CADDRESS2']?></td>
                    <td align=center><?=$row['TEL_NO']?></td>
                    <td align=center><a href='amcustomerE.php?customerid=<?=$row['CUSTOMER_ID']?>'><img src='edit-512.png' weight='50px' height='50px'></a></td>

                        
            
                </tr>                               
				<?php } ?>

			<?php $count=$result->num_rows;
					echo "<tr><th colspan=12 align=right>Total $count records</th></tr>";
					$result->free();
		 
		 
		 ?>
            </table>
         
          

        </html>
</body>