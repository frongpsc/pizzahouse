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
        $loginemail = $_GET["email"];
        $loginPassword = $_GET["pass"];

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