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

        $p = "SELECT * from pizza ";
        $result = $conn->query($p);
        if(!$result)
        {
            echo "Select failed: ".$conn->error;
        }
        $prow = $result->fetch_array();


        ?>     
<html lang="en">
<head>
<title>HOME</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Your name">

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.css" rel="stylesheet">
<link href="css/flexslider.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
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

<div id="content">
  <img class='newparallax pepper' alt='' src='images/pepper.png' data-speed='3400' data-sizemode='nostretch' data-position='left'/>
  <img class='newparallax herb' alt='' src='images/herb.png' data-speed='3000' data-sizemode='nostretch' data-position='left'/>
  <img class='newparallax pasta' alt='' src='images/pasta.png' data-speed='3200' data-sizemode='nostretch' data-position='left'/>
  <img class='newparallax mushroom1' alt='' src='images/mushroom1.png' data-speed='3000' data-sizemode='nostretch' data-position='left'/>
  <img class='newparallax mushroom2' alt='' src='images/mushroom2.png' data-speed='2500' data-sizemode='nostretch' data-position='left'/>
  <img class='newparallax flour' alt='' src='images/flour.png' data-speed='3300' data-sizemode='nostretch' data-position='left'/>

  <img class='newparallax fork' alt='' src='images/mcvanil.png' data-speed='3200' data-sizemode='nostretch' data-position='left'/>

  <img class='newparallax knife2' alt='' src='images/garlic3.png' data-speed='1700' data-sizemode='nostretch' data-position='left'/>
  <img class='newparallax knife2' alt='' src='images/garlic.png' data-speed='3500' data-sizemode='nostretch' data-position='left'/>







  <div class="container">

    <div id="header_wrapper">
      <img src="images/slide_header.png" alt="" class="img-responsive slide_header">
      <div class="header_img"><img src="images/PizzaPic.jpg" alt="" class="img-responsive"></div>
    </div>



    <h1>Order our pizza</h1>
      <div class="title1">Enjoy your meal with Pizza House</div>

      <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
              <p class="text-center">
                  
              </p>
          </div>
      </div>
      <br><br>
      <div class="divider1"></div>
      <div class="clearfix"></div>
      <div class="margin"></div>
    <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12 marginer">

          <div class="online">
              <div class="online_inner">
              <form action="ordered.php?customerid=<?=$urow['CUSTOMER_ID']?>" method="post">
                  <figure><img src="images/hw.png" alt="" class="img-responsive"><em></em></figure>
                  <div class="txt1">Hawaiian</div>
                  <div class="txt2"><span>Pineapple</span><em></em><span>Ham</span><em></em><span>Bacon</span><em></em><span>Mozzarella Cheese</span></div>
                  <div class="txt3">Enjoy our all time most popular menu with classic taste.  </div>
                  <div class="txt4"><a href="flavorU.php?customerid=<?=$urow['CUSTOMER_ID']?>&pizzaid=1" class="btn-default btn2"><span><em>189 ฿</em>Order Now</span></a></div>
                </form>
              </div>
          </div>




      </div>
        <div class="col-md-4 col-sm-6 col-xs-12 marginer">

            <div class="online">
                <div class="online_inner">
                    <figure><img src="images/bbqc.png" alt="" class="img-responsive"><em></em></figure>
                    <div class="txt1">BBQ Chicken</div>
                    <div class="txt2"><span>Chicken</span><em></em><span>Red Pepper</span><em></em><span>BBQ Sauce</span></div>
                    <div class="txt3">Enjoy your meal with chicken and super BBQ Sauce </div>
                    <div class="txt4"><a href="flavorU.php?customerid=<?=$urow['CUSTOMER_ID']?>&pizzaid=2" class="btn-default btn2"><span><em>239 ฿</em>Order Now</span></a></div>
                </div>
            </div>




        </div>
        <div class="col-md-4 col-sm-6 col-xs-12 marginer">

            <div class="online">
                <div class="online_inner">
                    <figure><img src="images/sf.png" alt="" class="img-responsive"><em></em></figure>
                    <div class="txt1">Seafood </div>
                    <div class="txt2"><span>Shrimps</span><em></em><span>Crabstick</span><em></em><span>Green Pepper</span><em></em><span>Cheddar Cheese</span></div>
                    <div class="txt3">Delicious shrimps with real crabsticks </div>
                    <div class="txt4"><a href="flavorU.php?customerid=<?=$urow['CUSTOMER_ID']?>&pizzaid=3" class="btn-default btn2"><span><em>289 ฿</em>Order Now</span></a></div>
                </div>
            </div>




        </div>




        <div class="col-md-4 col-sm-6 col-xs-12 marginer">

            <div class="online">
                <div class="online_inner">
                    <figure><img src="images/ml.png" alt="" class="img-responsive"><em></em></figure>
                    <div class="txt1">Meat Lovers </div>
                    <div class="txt2"><span>Sausage</span><em></em><span>Bacon</span><em></em><span>Mozzarella Cheese</span></div>
                    <div class="txt3">Enjoy super meats and cheese with Meat Lovers! </div>

                    <div class="txt4"><a href="flavorU.php?customerid=<?=$urow['CUSTOMER_ID']?>&pizzaid=4" class="btn-default btn2"><span><em>259 ฿</em>Order Now</span></a></div>
                </div>
            </div>




        </div>

        <div class="clearfix"></div>
        <div class="margin"></div>
        <div class="divider1"></div>

        <br><br>
        <div class="col-sm-12">

            <div class="online">

                <div class="paginat">
                <div class="online_inner">
        
</div></div></div></div>
    </div>




  </div>
</div>




</div>
</body>
</html>