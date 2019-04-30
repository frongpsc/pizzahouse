<?php
$mysqli = new mysqli('localhost','root','','pizzahouse');
if($mysqli->connect_errno){
  echo $mysqli->connect_errno.": ".$mysqli->connect_error;
}
   
?>
