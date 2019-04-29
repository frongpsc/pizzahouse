<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/styleNL.css">

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