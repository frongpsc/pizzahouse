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
        $sid = $_POST['sid'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $pass = $_POST["pass"];
        $sex = $_POST['sex'];
        $tel = $_POST['tel'];

        echo $sid;
        echo $name;
        echo $surname;
        echo $pass;
        echo $sex;
        echo $tel;


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
	$q = "UPDATE staff set STAFF_NAME='$name', STAFF_SURNAME='$surname' , PASSWORDs='$pass' , SEX='$sex', STAFF_TEL='$tel'  where STAFF_ID=$sid";
	
	if(!$conn->query($q)){
		echo "Update failed: ". $conn->error;
	}else{
        
        header("Location: ADMINstaff.php");

	}
?>
