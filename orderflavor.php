<!DOCTYPE html>
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
                        <img src="PIZZALOGO.png" width="200px" height="100px">
                    </div>
                         <ul class="menu">
                         <li>
                        <a href="home.php">HOME</a>
                    </li>
                    <li>
                        <a href="aboutus.php">ABOUT US</a>
                    </li>
                    <li>
                        <a href="order.php">MENU</a>
                    </li>
                    <li>
                        <a href="ordered.php">ORDER</a>
                    </li>
                    <li>
                        <a href="inup.php">LOGOUT</a>
                    </li>
                </ul>
                     </div>
                   </div>
                   <header class="header">
                           <div class="container">
                                 <div class="header_area">
                                   <h1>TRUB TRUB</h1>
                                 </div>
                          </div>

            <div class="create">
                <div class="container">
                    <form action="ordercustom.php" method="post">
                    <div class="topic">
                        <b><h1>Choose your pizza</h1></b>
                        <br>
                    </div>
                    <div class="size">
                        <B><label>Hawaian</label></B>
                        <br>
                        <img src="gg/Pan_Hawaiian.png" width="300px" height="150px">
                        <p>Ham,Bacon,Pineapple,Red Tomato Sauce,Mozzarella Cheese</p>

                            <select name="size">
                               <option value="M">M</option>
                                <option value="L">L</option>
                            </select>  
                            <select name="crust">
                                    <option value="Thick & Soft">Thick & Soft</option>
                                    <option value="Thin & Crisp">Thin & Crisp</option>
                            </select>
                            <div class="submit">
                                    <B><button>Add to cart</button><br></B>
                            </div>

                        </div>
                        <br>
                        <div class="size">
                                <B><label>BBQ Chicken Pizza</label></B>
                                <br>
                        <img src="gg/cc.png" width="300px" height="150px">
                                <p>Grilled Chicken,Red Onions,Red Pepper,Barbeque Sauce,Mozzarella Cheese</p>

                                    <select name="size">
                                       <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>  
                                    <select name="crust">
                                            <option value="Thick & Soft">Thick & Soft</option>
                                            <option value="Thin & Crisp">Thin & Crisp</option>
                                    </select>
                                    <div class="submit">
                                            <B><button>Add to cart</button><br></B>
                                    </div>
        
                                </div>
                                <br>
                        <div class="size">
                                <B><label>Seafood</label></B>
                                <br>
                        <img src="gg/ss.png" width="300px" height="150px">
                                <p>Green Pepper,Red Onions,Shrimp,Crab,Red Tomato Sauce</p>

                                    <select name="size">
                                       <option value="M">M</option>
                                        <option value="L">L</option>
                                    </select>  
                                    <select name="crust">
                                            <option value="Thick & Soft">Thick & Soft</option>
                                            <option value="Thin & Crisp">Thin & Crisp</option>
                                    </select>
                                    <div class="submit">
                                            <B><button>Add to cart</button><br></B>
                                    </div>
        
                                </div>
                                <br> 
                        <div class="size">
                                <B><label>Meat Lovers</label></B>
                                <br>
                        <img src="gg/mm.png" width="300px" height="150px">
                                <p>Sausage,Red Onions,Black Olive,Red Tomato Sauce,Mozzarella Cheese</p>

                                        <select name="size">
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                        </select>  
                                        <select name="crust">
                                                <option value="Thick & Soft">Thick & Soft</option>
                                                <option value="Thin & Crisp">Thin & Crisp</option>
                                        </select>
                                         <div class="submit">
                                                <B><button>Add to cart</button><br></B>
                                        </div>
                
                                     </div>
                                    <br>      
                    
                <div class="submit">
                        <B><button>confirm</button><br></B>
                </div>
 
                </div>
            </div>
    
</body>
</html>