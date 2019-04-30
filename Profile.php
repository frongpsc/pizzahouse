
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
        $loginemail = $_POST["iemail"];
        $loginPassword = $_POST["ipass"]; 
        echo $loginemail; 
        echo $loginPassword; 



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
                            <?php
                                    $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                                    $result = mysqli_query($conn, $query);
                                    $array=mysqli_fetch_array($result);
                                ?>
                                <a href="home.php?customerid=<?=$array["CUSTOMER_ID"]?>">HOME</a>
                            </li>
                            <li>
                            <?php
                                    $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                                    $result = mysqli_query($conn, $query);
                                    $array=mysqli_fetch_array($result);
                                ?>
                                <a href="aboutus.php?customerid=<?=$array["CUSTOMER_ID"]?>">ABOUT US</a>
                            </li>
                            <li>
                            <?php
                                    $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                                    $result = mysqli_query($conn, $query);
                                    $array=mysqli_fetch_array($result);
                                ?>
                                <a href="order.php?customerid=<?=$array["CUSTOMER_ID"]?>">MENU</a>
                            </li>
                            <li>
                            <?php
                                    $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                                    $result = mysqli_query($conn, $query);
                                    $array=mysqli_fetch_array($result);
                                ?>
                                <a href="ordered.php?customerid=<?=$array["CUSTOMER_ID"]?>">ORDER</a>

                            </li>
                            <li>
                        <a href="#">PROFILE</a>
                            </li>
                            <li>
                                <a href="inup.php">LOGOUT</a>
                            </li>
                        </ul>
                </div>
            </div>
                    <div class="profile">
                    <img src="avatar11.png" class="avatar2">
                    <a href="History.php?customerid=<?=$array["CUSTOMER_ID"]?>"><img src="history.png" class="avatar3" ></a>

                   
                    
            </div>
           <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <hr align="center" width="50%">
            <div class="profile1"></div>
            <br><br><br>
            <div align="left"class="profile1"style="background-color:rgb(0,0,0)">
                <h2>Profile</h2>
                    <table style = "padding:2px" >
                    <colgroup>
                    <col width="500">
                    </colgroup>
                    <tr>
                        <td >
                                <p>Name</p>
                                <?php
                                    $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                                    $result = mysqli_query($conn, $query);
                                    $array=mysqli_fetch_array($result);
                                    echo '<span style="color:#ffffff;">'.  $array["FNAME"]  .'</span>';
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";

                                ?>
                            </td>
                        <td  >
                                <p>Lastname</p>
                                <?php
                                    $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                                    $result = mysqli_query($conn, $query);
                                    $array=mysqli_fetch_array($result);
                                    echo '<span style="color:#ffffff; size=90px">'.  $array["LNAME"]  .'</span>';
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";                                 ?>
                            </td>
                    </tr>
                    <tr>
                            <td >
                                    <p>Email</p>
                                    <?php
                                    $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                                    $result = mysqli_query($conn, $query);
                                    $array=mysqli_fetch_array($result);
                                    echo '<span style="color:#ffffff;">'.  $array["EMAIL"]  .'</span>';
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";                                ?>                                
                                </td>
                            <td >
                                    <p>Password</p>
                                    <?php
                                    $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                                    $result = mysqli_query($conn, $query);
                                    $array=mysqli_fetch_array($result);
                                    echo '<span style="color:#ffffff;">'.  $array["CPASSWORD"]  .'</span>';
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";                                ?>                               
                                 </td>
                        </tr>
                        <tr>
                                <td >
                                        <p>Birthday</p>
                                        
                                        <?php
                                    $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                                    $result = mysqli_query($conn, $query);
                                    $array=mysqli_fetch_array($result);
                                    echo '<span style="color:#ffffff;">'.$array["DOB"]." ".$array["MOB"].'</span>';
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";                                ?>                                        
                                    </td>
                                    <td >
                                        <p>Telephone No.</p>
                                        
                                        <?php
                                    $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                                    $result = mysqli_query($conn, $query);
                                    $array=mysqli_fetch_array($result);
                                    echo '<span style="color:#ffffff;">'.  $array["TEL_NO"]  .'</span>';
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";                                ?>                                          
                                    </td>
                            </tr>
                            <tr>
                                <td >
                                        <p>ADDRESS 1</p>
                                        
                                        <?php
                                    $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                                    $result = mysqli_query($conn, $query);
                                    $array=mysqli_fetch_array($result);
                                    if (isset($array["CADDRESS1"])){
                                        $add1 = $array["CADDRESS1"];
                                        $wadd1 = wordwrap($add1,50," ");
                                        echo '<span style="color:#ffffff;">'.  $wadd1 .'</span>';
                                        echo "</br>";
                                        echo "</br>";
                                        echo "</br>";                                        }
                                ?>                                          
                                </td>
                                <td>
                                        <p>ADDRESS 2</p>
                                        
                                <?php
                                    $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                                    $result = mysqli_query($conn, $query);
                                    $array=mysqli_fetch_array($result);
                                    if (isset($array["CADDRESS2"])){
                                    $add2 = $array["CADDRESS2"];
                                    $wadd2 = wordwrap($add2,50," ");
                                    echo '<span style="color:#ffffff;">'.  $wadd2 .'</span>';
                                    echo "</br>";
                                    echo "</br>";
                                    echo "</br>";                                    }
                                ?>                                          
                                </td>
                              
                            </tr>
                        
                    </table>
                    <?php
                        $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                        $result = mysqli_query($conn, $query);
                        $array=mysqli_fetch_array($result);
                    ?>      
                   <td><a href="ProfileE.php?customerid=<?=$array["CUSTOMER_ID"]?>"><input type="submit" name="submit" value="EDIT"></a>

                <br>
            </div>

        </html>
</body>