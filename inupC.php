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
        $loginemail = $_GET["email"];
        $loginPassword = $_GET["pass"];

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
        if($loginemail == 'ADMIN')
        {
            if($loginPassword == 'ADMIN')
            {
                header("Location:orderAD.php");

            }
        }
        else{
        echo $loginemail;
        ?>
        <form action = "Profile.php" method="post">
        <input type="hidden" name="iemail"  value="<?=$loginemail?>">
        <input type="hidden" name="ipass"  value="<?=$loginPassword?>">
        <script>
        document.getElementsByTagName("form")[0].submit();
        </script>
        </form>
    <?php
        }
?>