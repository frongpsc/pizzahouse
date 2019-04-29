<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style4.css">
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


            <div class="create">
                <div class="container">
                    <form action="ordercustom.php" method="post">
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
                        </tr>>   
                        <tr>  
                                <td class="buttons">
                                        <div>
                                            <input type="radio" name="r" value="189" onclick="total(this.form);"/>189 ฿</div>
                                            
                                        
                                    </td>
                                    <td class="buttons">
                                        <div>
                                            <input type="radio" name="r" value="259" onclick="total(this.form);"/>259 ฿</div>
                                        
                                    </td>
                                    <td class="buttons">
                                        <div>
                                            <input type="radio" name="r" value="379" onclick="total(this.form);"/>379 ฿</div>
                                    </td>> 
                        </tr>      
                        </table>        
                    </p>    
                        </div>
                        <br>
                    <div class="crust" align = "center">
                            <B><label>CRUST</label></B>
                            <select name="crust">
                                <option value="Thick & Soft">Thick & Soft</option>
                                <option value="Thin & Crisp">Thin & Crisp</option>
                            </select>    
                    </div>
                    <br>

                    <div class="sauce" align = "center">
                            <B><label>SAUCE</label></B>
                            <select name="sauce">
                                <option value="Red sauce">Red sauce</option>
                                <option value="White sauce">White sauce</option>
                                <option value="BBQ sauce">BBQ sauce</option>
                                <option value="None">None</option>
                            </select>    
                    </div>
                    <br>

                    <div class="cheese" align = "center">
                            <B><label>CHEESE</label></B>
                            <select name="cheese">
                                <option value="Mozzarella Cheese">Mozzarella Cheese</option>
                                <option value="Cheddar Cheese">Cheddar Cheese</option>
                                <option value="None">None</option>
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
                if (frm.elements[i].checked) tot += Number(frm.elements[i].value);
                
            }
            if (frm.elements[i].type == "radio") {
                if (frm.elements[i].checked) tot += Number(frm.elements[i].value);
                
            }
        }
        document.getElementById("totalDiv").firstChild.data = tot + " Baht" ;
        type = "text/javascript" >    total(document.getElementById("theForm"));
    }
    </script>
    
    <form action="nextpage" method="post" id="theForm">
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
                <br>
                <tr>
                        <td class="buttons">
                            <div style="color:white;">
                                <input type="checkbox" name="r" value="25" onclick="total(this.form);"/>25 Baht</div>
                            
                        </td>
                        <td class="buttons">
                            <div style="color:white;">
                                <input type="checkbox" name="7" value="50" onclick="total(this.form);" />50 Baht</div>
                            
                        </td>
                        <td class="buttons">
                            <div style="color:white;">
                                <input type="checkbox" name="asd7" value="75" onclick="total(this.form);" />75 Baht</div>
                            
                        </td>
                        <td class="buttons">
                            <div style="color:white;">
                                <input type="checkbox" name="rasd7" value="100" onclick="total(this.form);" />100 Baht</div>
                            
                        </td>
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
                    <td class="buttons">
                        <div style="color:white;">
                            <input type="checkbox" name="r" value="25" onclick="total(this.form);" />25 Baht</div>
                        
                    </td>
                    <td class="buttons">
                        <div style="color:white;">
                            <input type="checkbox" name="7" value="50" onclick="total(this.form);" />50 Baht</div>
                        
                    </td>
                    <td class="buttons">
                        <div style="color:white;">
                            <input type="checkbox" name="asd7" value="75" onclick="total(this.form);" />75 Baht</div>
                        
                    </td>
                    <td class="buttons">
                        <div style="color:white;">
                            <input type="checkbox" name="rasd7" value="100" onclick="total(this.form);" />100 Baht</div>
                        
                    </td>
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
                        <td class="buttons">
                            <div style="color:white;">
                                <input type="checkbox" name="r" value="25" onclick="total(this.form);"/>25 Baht</div>
                            
                        </td>
                        <td class="buttons">
                            <div style="color:white;">
                                <input type="checkbox" name="7" value="50" onclick="total(this.form);" />50 Baht</div>
                            
                        </td>
                        <td class="buttons">
                            <div style="color:white;">
                                <input type="checkbox" name="asd7" value="75" onclick="total(this.form);" />75 Baht</div>
                            
                        </td>
                        <td class="buttons">
                            <div style="color:white;">
                                <input type="checkbox" name="rasd7" value="100" onclick="total(this.form);" />100 Baht</div>
                            
                        </td>
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
                    <td class="buttons">
                        <div style="color:white;">
                            <input type="checkbox" name="r" value="25" onclick="total(this.form);" />25 Baht</div>
                        
                    </td>
                    <td class="buttons">
                        <div style="color:white;">
                            <input type="checkbox" name="7" value="50" onclick="total(this.form);" />50 Baht</div>
                        
                    </td>
                    <td class="buttons">
                        <div style="color:white;">
                            <input type="checkbox" name="asd7" value="75" onclick="total(this.form);" />75 Baht</div>
                        
                    </td>
                    <td class="buttons">
                        <div style="color:white;">
                            <input type="checkbox" name="rasd7" value="100" onclick="total(this.form);" />100 Baht</div>
                        
                    </td>
                </tr>
            </table>
            <br>
            <br>
            <h1 style="color:white;">Total Price</h1>
        
            <div id="totalDiv" style="color:white;" align = "center"  >: 0</div>
            <div>
            <a href="inup.php"><h1 style="color:white;">Please Login First!!</h1></a>

                    
            
            </div>
        </fieldset>
    </form>