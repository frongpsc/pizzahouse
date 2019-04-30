 
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




                  
      
<style>
table {
    border-collapse: collapse;
    width: 80%;
    margin-left: 150px;
    
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
                <col width="20%">
                <col width="10%">


            <?php 
                echo'<tr>
                <th>STAFF_ID</th> 
                <th>STAFF_NAME</th>
                <th>STAFF_SURNAME</th>
                <th>PASSWORD</th>
                <th>SEX</th>
                <th>TEL</th>

                </tr>';
                ?>
                <?php
                
                $sid = $_GET['sid'];
                echo $sid;
        
               
				 	$q="SELECT * from staff WHERE STAFF_ID=$sid ";
					$result=$conn->query($q);
                

                    if(!$result)
                    {
                        echo "Select failed: ".$conn->error;
                    }

				 $row=$result->fetch_array(); ?>
                 <tr>
                 <form action="ADMINstaffU.php" method="post">

                 <td align=center><?=$sid?></td>
                    <td align=center><input type="text" name="name" value="<?=$row['STAFF_NAME']?>"></td>
                    <td align=center><input type="text" name="surname" value="<?=$row['STAFF_SURNAME']?>"></td>
                    <td align=center><input type="text" name="pass" value="<?=$row['PASSWORDs']?>"></td>
                    <td align=right>Male<input type="radio" name="sex" value="Male">
                        Female<input type="radio" name="sex" value="Female"></td>
                        <td align=center><input type="text" name="tel" value="<?=$row['STAFF_TEL']?>"></td>

                    <input type="hidden" name="sid"  value="<?=$sid?>">



                        
                        <tr><th colspan=7 align=center class="foot"><input type="submit"  name="submit"  value="UPDATE"></th></tr>
            </form>         
            </table>
         
          

        </html>
</body>