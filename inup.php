<!DOCTYPE html>

            <?php

if(isset($_POST['csubmit'])) 
{
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $cemail = $_POST["cemail"];
        $cpassword = $_POST["password"];
        $date = $_POST["date"];
        $month = $_POST["month"];
        $sex = $_POST["sex"];
        $address1 = $_POST["address1"];
        $address2 = $_POST["address2"];
        $telephone = $_POST["telephone"];

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

                $sql = "INSERT INTO customer (FNAME,LNAME,EMAIL,CPASSWORD,DOB,MOB,SEX,CADDRESS1,CADDRESS2,TEL_NO)
                VALUES ('$firstname', '$lastname', '$cemail', '$cpassword', '$date', '$month', '$sex', '$address1', '$address2', '$telephone')";

                if ($conn->query($sql) === TRUE) {
                    echo "";
                } 
                
                else {

                    //echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            }

    ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.ceom/css?family=Raleway:400,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style8.css">
    <link rel="stylesheet" href="css/styleNL.css">

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
                        <a href="homeNL.php">HOME</a>
                    </li>
                    <li>
                        <a href="aboutusNL.php">ABOUT US</a>
                    </li>
                    <li>
                        <a href="orderNL.php">MENU</a>
                    </li>
                    <li>
                        <a href="inup.php">LOGIN</a>
                    </li>
                </ul>
                </div>
            </div>
            <html>
    <div class="loginbox">
    <img src="avatar11.png" class="avatar">
        <h1>Login</h1>
        <form action = "Profile.php" method="post">
            <p>Email</p>
            <input type="text" name="iemail" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="ipass" placeholder="Enter Password">
            
            <input  name="loginButton" type="submit" value="LOGIN" >


        </form>
    
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "pizzahouse";

        $conn = new mysqli($servername, $username,$password, $dbname);

        if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
        }

        error_reporting(E_ALL);
        ini_set('display error', 1);

        if(isset($_POST["loginButton"])){
                $loginemail = $_POST["iemail"];
                $loginPassword = $_POST["ipass"];              
                $query = "SELECT * FROM customer WHERE EMAIL='$loginemail' and CPASSWORD='$loginPassword'";
                $result = mysqli_query($conn,$query) or die(mysqli_error());
                $count = mysqli_num_rows($result);
                if ($count == 1){
                        header("Location:Profile.php");
                }
                else
                {
                echo '<span style="color:#FFD700;">Invalid Email or Password!!</span>';
                }
        }
?>  
            <br>
            <a href="#">Lost your password?</a><br>
            <a href="register.php">Don't have an account?</a>

    </div>

</body>
</head>
</html>