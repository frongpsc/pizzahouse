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
          
              
                    
            </div>
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <hr align="center" width="50%">
            <div class="profile1"></div>
            <br><br><br>
            <div align="center"class="profile1"style="background-color:rgb(0,0,0)">
                <h2>Profile</h2>
                <form action="ProfileU.php" method="post">
                    <table style = "padding:2px">
                    <tr>
                        <td >
                            <input type="hidden" name="customerid" value="<?=$urow['CUSTOMER_ID']?>">

                                <p>Name</p>
                                <input type="text" name="firstname" value="<?=$urow['FNAME']?>">
                            </td>
                        <td  >
                                <p>Lastname</p>
				                <input type="text" name="lastname" value="<?=$urow['LNAME']?>">

                            </td>
                    </tr>
                    <tr>
                            <td >
                                    <p>Email</p>
                                    <input type="text" name="iemail" value="<?=$urow['EMAIL']?>">                            
                                </td>
                            <td >
                                    <p>Password</p>
				                    <input type="text" name="ipass" value="<?=$urow['CPASSWORD']?>">
                                 </td>
                        </tr>
                        <tr>
                                <td >
                                        <p>Birthday</p>
                                        <?php echo '<span style="color:#ffffff;">'.$urow['DOB']." ".$urow['MOB'].'</span>'; ?>
                                     
                                    </td>
                                    <td >
                                        <p>Telephone No.</p>
                                        <input type="text" name="telephone" value="<?=$urow['TEL_NO']?>">
                                 
                                    </td>
                            </tr>
                            <tr>
                                <td >
                                        <p>ADDRESS 1</p>
                                        <input type="text" name="address1" value="<?=$urow['CADDRESS1']?>">
                            
                                </td>
                                <td >
                                        <p>ADDRESS 2</p>
                                        <input type="text" name="address2" value="<?=$urow['CADDRESS2']?>">
                         
                                </td>
                              
                            </tr>
                        
                    </table>
                    <input type="submit" name="submit" value="SUBMIT">
                </form>

                <br>
            </div>

        </html>
</body>