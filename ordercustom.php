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
    <link rel="stylesheet" href="css/style4.css">
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


            <div class="create">
                <div class="container">
                    <form action="ordercumtomS.php?customerid=<?=$cid?>" method="post">
                    <div class="topic">
                        <b><h1>Create your pizza</h1></b>
                        <br>
                    </div>
                    <div class="size" align = "center">
                        <B><label>SIZE </label></B> 
                        
                        <table style="padding:2px" cellspacing="10">
                        <tr>
                            <td>
                                <p> S</p>
                            </td>
                            <td>
                                    <p> M </p>
                            </td>
                            <td>
                                    <p> L </p>
                            </td>
                        </tr>   
                        <tr>  
                        <?php 
                        $q='select SIZE_ID, SIZE, PRICE from sizes;';
						if($result = $conn->query($q)){
							while($urow = $result->fetch_array()){
                                echo '<td class = "buttons">';
                                echo '<div>';
                                echo '<input type="radio" name="r" onclick="total(this.form);" value="'.$urow[2].'">'.$urow[2]; echo'฿';
                                echo '</div>';
                                echo '</td>';   
                            }
                        }
                        else
                            {
                                echo "Select failed: ".$conn->error;
						    }
                        ?>          
                        </tr>      
                        </table>        
                    </p>    
                        </div>
                        <br>
                    <div class="crust" align = "center">
                            <B><label>CRUST</label></B>
                            <select name="crust">
                        <?php 
                        $q='select CRUST_ID,NAME from crust;';
						if($result = $conn->query($q)){
							while($urow = $result->fetch_array()){
                                echo '<option value="'.$urow[1].'">'.$urow[1].'</option>';
                            }   
                        }
                        else
                            {
                                echo "Select failed: ".$conn->error;
						    }
                    ?>
                            </select>    
                    </div>
                    <br>

                    <div class="sauce" align = "center">
                            <B><label>SAUCE</label></B>
                            <select name="sauce">
                        <?php 
                        $q='select * from ingredients LIMIT 0,3;';
						if($result = $conn->query($q)){
							while($urow = $result->fetch_array()){
                                echo '<option value="'.$urow[1].'">'.$urow[1].'</option>';
                            }
                        }
                        else
                            {
                                echo "Select failed: ".$conn->error;
						    }
                    ?>
                            </select>    
                    </div>
                    <br>

                    <div class="cheese" align = "center">
                            <B><label>CHEESE</label></B>
                            <select name="cheese">
                            <?php 
                        $q='select * from ingredients LIMIT 3,2;';
						if($result = $conn->query($q)){
							while($urow = $result->fetch_array()){
                                echo '<option value="'.$urow[1].'">'.$urow[1].'</option>';
                            }
                        }
                        else
                            {
                                echo "Select failed: ".$conn->error;
						    }
                    ?>
                            </select>    
                    </div>
                    <br>

                </div>
                
                

            
                <br>
                
 
                </div>
            </div>
    
</body>
</html>
<script type="text/javascript">
    function total(frm) {
        var tot = 0;
        for (var i = 0; i < frm.elements.length; i++) {
            if (frm.elements[i].type == "checkbox") {
                if (frm.elements[i].checked) tot += Number(frm.elements[i].name);
                
            }
            if (frm.elements[i].type == "radio") {
                if (frm.elements[i].checked) tot += Number(frm.elements[i].value);
                
            }
        }
        document.getElementById("totalDiv").firstChild.data = tot + " Baht" ;
        type = "text/javascript" >    total(document.getElementById("theForm"));
    }
    </script>
    
        <fieldset>
            <legend><h1 style="color:white;">Customize your meets</h1></legend>
            <table style="padding:2px" align = "center">
                <tr>
                    <td>
                    
                        <img src="picpiz/bacon.png" width="200" height="100" />
                        <br>
                        <p align = "center" style="color:white;">Bacon</p>
                    </td>
                    <td>
                        <img src="picpiz/beef.png" width="200" height="100"/>
                        <br>
                        <p align = "center" style="color:white;">Beef</p>
                    </td>
                    <td>
                            <img src="picpiz/hamm.png" width="300" height="150"/>
                            <br>
                            <p align = "center" style="color:white;">Ham</p>
                    </td>
                    <td>
                            <img src="picpiz/shrimp.png" width="200" height="100"/>
                            <br>
                            <p align = "center" style="color:white;">Shrimp</p>
                    </td>
                </tr>
                <br>
                <br>`
                <tr>
                <?php 
                        $q='select * from ingredients LIMIT 5,4;';
						if($result = $conn->query($q)){
							while($urow = $result->fetch_array()){
                                echo '<td class = "buttons">';
                                echo '<div style="color:white;">';
                                echo '<input type="checkbox" name="'.$urow[2].'" onclick="total(this.form);"  value="'.$urow[1].'">'.$urow[2]; echo'฿';
                                echo '</div>';
                                echo '</td>';
                            }
                        }
                        else
                            {
                                echo "Select failed: ".$conn->error;
						    }
                        ?>
                    </tr>
                <tr>
                    <td>
                            <img src="picpiz/chicken.png" width="200" height="100"/>
                            <br>
                            <p align = "center" style="color:white;">Chicken</p>
                    </td>
                    <td>
                            <img src="picpiz/sausage.png" width="200" height="100"/>
                            <br>
                            <p align = "center" style="color:white;">Sausage</p>
                    </td>
                    <td>
                            <img src="picpiz/Pepperroni.png" width="200" height="100"/>
                            <br>
                            <p align = "center" style="color:white;">Pepperroni</p>
                    </td>
                    <td>
                            <img src="picpiz/crabstick.png" width="200" height="100"/>
                            <br>
                            <p align = "center" style="color:white;">Crabstick</p>
                    </td>
                </tr>
                
                <tr>
                <?php 
                        $q='select * from ingredients LIMIT 9,4;';
						if($result = $conn->query($q)){
							while($urow = $result->fetch_array()){
                                echo '<td class = "buttons">';
                                echo '<div style="color:white;">';
                                echo '<input type="checkbox" name="'.$urow[2].'" onclick="total(this.form);" value="'.$urow[1].'">'.$urow[2]; echo'฿';
                                echo '</div>';
                                echo '</td>';
                            }
                        }
                        else
                            {
                                echo "Select failed: ".$conn->error;
						    }
                        ?>
                </tr>
            </table>
            <legend><h1 style="color:white;">Customize your toppings</h1></legend>
            <table style="padding:2px" align = "center">
                <tr>
                    <td>
                    
                        <img src="picpiz/bo.png" width="150" height="75" />
                        <br>
                        <p align = "center" style="color:white;">Black Olive</p>
                    </td>
                    <td>
                        <img src="picpiz/go.png" width="150" height="75"/>
                        <br>
                        <p align = "center" style="color:white;">Green Olive</p>
                    </td>
                    <td>
                            <img src="picpiz/ro.png" width="200" height="100"/>
                            <br>
                            <p align = "center" style="color:white;">Red Onion</p>
                    </td>
                    <td>
                            <img src="picpiz/rp.png" width="180" height="100"/>
                            <br>
                            <p align = "center" style="color:white;">Red Pepper</p>
                    </td>
                </tr>
                <tr>
                <?php 
                        $q='select * from ingredients LIMIT 13,4;';
						if($result = $conn->query($q)){
							while($urow = $result->fetch_array()){
                                echo '<td class = "buttons">';
                                echo '<div style="color:white;">';
                                echo '<input type="checkbox" name="'.$urow[2].'" onclick="total(this.form);" value="'.$urow[1].'">'.$urow[2]; echo'฿';
                                echo '</div>';
                                echo '</td>';
                            }
                        }
                        else
                            {
                                echo "Select failed: ".$conn->error;
						    }
                        ?>
                    </tr>
                <tr>
                    <td>
                            <img src="picpiz/gp.png" width="180" height="100"/>
                            <br>
                            <p align = "center" style="color:white;">Green Pepper</p>
                    </td>
                    <td>
                            <img src="picpiz/tmt.png" width="180" height="100"/>
                            <br>
                            <p align = "center" style="color:white;">Tomatoes</p>
                    </td>
                    <td>
                            <img src="picpiz/pa.png" width="200" height="100"/>
                            <br>
                            <p align = "center" style="color:white;">Pineapple</p>
                    </td>
                    <td>
                            <img src="picpiz/mr.png" width="180" height="100"/>
                            <br>
                            <p align = "center" style="color:white;">Mushroom</p>
                    </td>
                </tr>
                
                <tr>
                <?php 
                        $q='select * from ingredients LIMIT 17,4;';
						if($result = $conn->query($q)){
							while($urow = $result->fetch_array()){
                                echo '<td class = "buttons">';
                                echo '<div style="color:white;">';
                                echo '<input type="checkbox" name="'.$urow[2].'" onclick="total(this.form);" value="'.$urow[1].'">'.$urow[2]; echo'฿';
                                echo '</div>';
                                echo '</td>';
                            }
                        }
                        else
                            {
                                echo "Select failed: ".$conn->error;
						    }
                        ?>
                </tr>
            </table>
            <br>
            <br>
            <h1 style="color:yellow;">Total Price</h1>
            <div id="totalDiv" style="color:white;" align = "center"  >: 0</div>
            
            
            <div class="style7" align = "center">
            <input type=image src="picpiz/ob.png"  style="width: 250px; height: 150px" align = "center">
            </div>

            </form>
                   
            
            
        </fieldset>
    </form>