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
        
        if(isset($_POST['ssubmit'])) 
        {
                $firstname = $_POST["sfirstname"];
                $lastname = $_POST["slastname"];
                $spassword = $_POST["spassword"];
                $phone = $_POST["sphone"];
                $sex = $_POST["ssex"];
                
        
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "pizzahouse";
                        
                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 
        
                        $sql = "INSERT INTO staff (STAFF_NAME,STAFF_SURNAME,PASSWORDs,SEX,STAFF_TEL,STAFF_STATUS)
                        VALUES ('$firstname', '$lastname', '$spassword', '$sex', '$phone','FREE')";
        
                        if ($conn->query($sql) === TRUE) {
                            echo "ooooooo0";
                        } 
                        
                        else {
        
                            //echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                        //$conn->close();
                    }



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





<style>
table {
    border-collapse: collapse;
    width: 70%;
    margin-left: 230px;
    
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
                <col width="30%">
                <col width="30%">
                <col width="30%">
     
            <?php 
          
            echo
            '<tr><th colspan=9 align=center class="foot">
            <form action="index.php">
                <input type="submit" value="ADD STAFF" />
            </form></th></tr>';
                echo
             
                '<tr>
                    <th>STAFF_ID</th> 
                    <th>STAFF_NAME</th>
                    <th>STAFF_SURNAME</th>
                    <th>PASSWORD</th>
                    <th>SEX</th>
                    <th>PHONE</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
     
                
                </tr>';
                
                ?>
                <?php
        
				 	$q="SELECT * from staff  GROUP BY STAFF_ID";
					$result=$conn->query($q);
				
				 while($row=$result->fetch_array()){ ?>
                 
                 <tr>
                    <td align=center><?=$row['STAFF_ID']?></td> 
                    <td align=center><?=$row['STAFF_NAME']?></td>
                    <td align=center><?=$row['STAFF_SURNAME']?></td>
                    <td align=center><?=$row['PASSWORDs']?></td>
                    <td align=center><?=$row['SEX']?></td>
                    <td align=center><?=$row['STAFF_TEL']?></td>
                    <td align=center><a href='ADMINstaffE.php?sid=<?=$row['STAFF_ID']?>'><img src="Edit-512.png" weight='50px' height='50px'></a></td>
                    <td align=center><a href='ADMINstaffD.php?sid=<?=$row['STAFF_ID']?>'><img src="close_delete-128.png" weight='50px' height='50px'></a></td>
                        
            
                </tr>                               
				<?php } ?>

			<?php $count=$result->num_rows;
					echo "<tr><th colspan=9 align=right>Total $count records</th></tr>";
					$result->free();
		 
		 
		 ?>
         
         
                       
            </table>
       
         
          

        </html>
</body>

