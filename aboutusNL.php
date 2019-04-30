

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/styleaboutus.css">
    <link rel="stylesheet" href="css/styleNL.css">

    <title>Document</title>
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
    <div class="branch">
        <ul class="b1">
            <div class="bname">
                <h1>NAVANAKORN</h1>
            </div>
            <div class="pic1">
                <img src="gg/b1.JPG" width="500px" height="500px">
            </div>
            <div class="dis">

                <p>Navanakorn road 5 Tambon Khlong Nung, kornglung Chang Wat Pathum Thani 12120</p>
                <hr>
            </div>

        </ul>


            <ul class="b2">
                <div class="bname">
                    <h1>BANG WA</h1>
                </div>
                <div class="pic2">
                    <img src="gg/b2.JPG" width="500px" height="500px">
                </div>
                <div class="dis">

                    <p>Leab Garden, Khwaeng Pak Khlong Phasi Charoen, Khet Phasi Charoen, Krung Thep Maha Nakhon 10160</p>
                    <hr>

                </div>
            </ul>

                <ul class="b3">
                    <div class="bname">
                        <h1>THANON CHAN</h1>
                    </div>
                    <div class="pic3">
                        <img src="gg/b3.JPG" width="500px" height="500px">
                    </div>
                    <div class="dis">
                        
                        <p>265/2 Thanon Chan, Khwaeng Thung Wat Don, Khet Sathon, Krung Thep Maha Nakhon 10120</p>
                        <hr>

                    </div>
                </ul>

                    <ul class="b4">
                        <div class="bname">
                            <h1>PINKLAO</h1>
                        </div>
                        <div class="pic4">
                            <img src="gg/b4.JPG" width="500px" height="500px">
                        </div>
                        <div class="dis">
                            <p>7/222 Borommaratchachonnani Rd, Khwaeng Arun Amarin, Khet Bangkok Noi, Krung Thep Maha Nakhon 10700</p>
                            <hr>    

                        </div>
                    </ul>
                        <ul class="b5">
                            <div class="bname">
                                <h1>HUAHIN</h1>
                            </div>
                            <div class="pic5">
                                <img src="gg/b5.JPG" width="500px" height="500px">
                            </div>
                            <div class="dis">
                                <p>200/3 Moo 1, Pak Nam Pran, Pranburi, Prachuap Kiri Khan, Huahin District Tambon Pak Nam Pran, Amphoe Pran Buri, Chang Wat Prachuap Khiri Khan 77220</p>
                                <hr>

                            </div>
                        </ul>
                    </div>


                    <section class="contact">
                            <div class="container">
                                <div class="contact_area">
  

                                    <hr>
                                    <h1>Contact Us</h1>
                                    <form action = "aboutus.php" method="post">

                                        <label>Your Name</label><br>
                                        <input type="text" name="name" placeholder="Your Name"><br>
                                        <label>Your Email</label><br>
                                        <input type="email" name="email" placeholder="Your Email"><br>
                                        <label>Your Subject</label><br>
                                        <input type="text" name="subject" placeholder="Your Subject"><br>
                                        <label>Your Message</label><br>
                                        <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message"></textarea><br>
                                        <div class="center">
						                <input class="submit" name="submit" type="submit" value="SEND" >			
					                    </div>
                                        <?php
                                        if(isset($_POST['submit'])) 
                                        {
                                                $email = $_POST["email"];
                                                $subject = $_POST["subject"];
                                                $message = $_POST["message"];
    
                                                $servername = null;
                                                $username = "root";
                                                $password = "pizzahouse";
                                         
                                                $dbname = "pizzahouse";
                                                $port = null;
                                                $socket = "/cloudsql/pizzahousenew:asia-southeast1:pizzahouse";
                                    
                                            $conn = new mysqli($servername, $username,$password, $dbname,$port,$socket);
                                    
                                                        // Check connection
                                                        if ($conn->connect_error) {
                                                            die("Connection failed: " . $conn->connect_error);
                                                        } 

                                                        $sql = "INSERT INTO feedback (EMAIL,FSUBJECT,COMMENT)
                                                        VALUES ('$email', '$subject', '$message')";

                                                        if ($conn->query($sql) === TRUE) {
                                                            echo "";
                                                        } else {
                                                            echo "Error: " . $sql . "<br>" . $conn->error;
                                                        }

                                                        $conn->close();
                                                    }
                                            ?>
                                        <br>
                                        <hr>
                                        <br>
                                    </form>
                                    
                                </div>
                            </div>
                        </section>
</body>
</html>