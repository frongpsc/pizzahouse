 
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
    <link rel="stylesheet" href="css/style1.css">
    <title>T.PIZZA</title>
</head>
<body>  
        <div class="menubar">
                <div class="container">
            
                <?php
				require_once('dbcon.php');
				if(isset($_POST['page'])) {
				$name = $_POST["name"];
				$email = $_POST["email"];
				$subject = $_POST["subject"];
				$message = $_POST["message"];

				$page=$_POST['page'];
                if($page=='aboutus') 
                {
					$q="INSERT INTO feedback (EMAIL,FSUBJECT,COMMENT) 
					VALUES ('$name','$email','$subject','$message')";
					$result=$mysqli->query($q); 
				}
			}
			?>

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


        <header class="header">
                 <div class="container">
                       <div class="header_area">
                        <img src="slider_bg.png">

                       </div>
                    
                </div>
        </header>

</body>
</html>