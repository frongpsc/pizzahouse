<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzahouse";

$conn = new mysqli($servername, $username,$password, $dbname);

if($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
$tot=0;
$cid = $_GET['customerid'];
$crust = $_POST["crust"];
$sauce = $_POST["sauce"];
$cheese = $_POST["cheese"];


if($_POST["r"]==100){
    $size = "S";
    $tot=100;
}
elseif($_POST["r"]==120){
    $size = "M";
    $tot=120;
}
elseif($_POST["r"]==150){
    $size = "L";
    $tot=150;
}

$piname= "Custompizza size : ".$size." </br>crust: ".$crust." </br> sauce:".$sauce." </br> cheese:".$cheese." </br> meet:";

$q='select * from ingredients LIMIT 5,4;';
if($result = $conn->query($q)){
    while($urow = $result->fetch_array())
    {

        $in=$urow[2];
        if(!empty($_POST["$in"])) 
        {
            $piname= $piname." ".$_POST["$in"];

            $tot=$tot+$urow[2];
        }
    }
}
else
{
    echo "Select failed: ".$conn->error;
}

$q='select * from ingredients LIMIT 9,4;';
if($result = $conn->query($q)){
    while($urow = $result->fetch_array())
    {

        $in=$urow[2];
        if(!empty($_POST["$in"])) 
        {
            $piname= $piname." ".$_POST["$in"];

            $tot=$tot+$urow[2];
        }
    }
}
else
{
    echo "Select failed: ".$conn->error;
}

$piname= $piname."</br> topping:";

$q='select * from ingredients LIMIT 13,4;';
if($result = $conn->query($q)){
    while($urow = $result->fetch_array())
    {

        $in=$urow[2];
        if(!empty($_POST["$in"])) 
        {
            $piname= $piname." ".$_POST["$in"];

            $tot=$tot+$urow[2];
        }
    }
}
else
{
    echo "Select failed: ".$conn->error;
}


$q='select * from ingredients LIMIT 17,4;';
if($result = $conn->query($q)){
    while($urow = $result->fetch_array())
    {

        $in=$urow[2];
        if(!empty($_POST["$in"])) 
        {
            $piname= $piname." ".$_POST["$in"];

            $tot=$tot+$urow[2];
        }
    }
}
else
{
    echo "Select failed: ".$conn->error;
}






echo $tot;
echo "</br>";
echo $piname;
echo "</br>";
$sql = "INSERT INTO pizza (PNAME,PRICE)
VALUES ('$piname',$tot)";

if ($conn->query($sql) === TRUE) {
    echo "";
} 
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$d = "SELECT * from pizza where PNAME= '$piname' ";
$result5 = $conn->query($d);
if(!$result5)
{
    echo "Select failed: ".$conn->error;
}




$erow = $result5->fetch_array();

$pid = $erow["PIZZA_ID"];

header("Location:flavorU.php?customerid=$cid&pizzaid=$pid");

?>