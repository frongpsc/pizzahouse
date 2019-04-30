<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700i" rel="stylesheet">
    <link rel="stylesheet" href="css/style8.css">
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
    <div class="loginbox2">
    <img src="avatar11.png" class="avatar">
        <h1>SignUp</h1>
        <form action = "inup.php" method="post">

            <p>Email</p>
            <input type="text" name="cemail" email="" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <p>FirstName</p>
            <input type="text" name = "firstname" fname="" placeholder="Enter Name">
            <p>LastName</p>
            <input type="text" name="lastname" lname="" placeholder="Enter LastName">
            <p>Telephone</p>
            <input type="text" name="telephone" tel="" placeholder="Enter telephoneNo.">
            <p>ADDRESS1</p>
            <textarea name="address1" id="" cols="30" rows="10" placeholder="Enter address"></textarea><br>
            <br>
            <p>ADDRESS2</p>
            <textarea name="address2" id="" cols="30" rows="10" placeholder="Enter address"></textarea><br>
            <br>
            <p>Birthday</p>
            
            <select id ="Month" name="month">
                <option value ="January">January</option>
                <option value ="February">February</option>
                <option value ="March">March</option>
                <option value ="April">April</option>
                <option value ="May">May</option>
                <option value ="June">June</option>
                <option value ="July">July</option>
                <option value ="August">August</option>
                <option value ="September">September</option>
                <option value ="October">Otober</option>
                <option value ="November">November</option>
                <option value ="December">December</option>   
            </select>

            <select id ="Date" name="date">
                    <option value ="1">1</option>
                    <option value ="2">2</option>
                    <option value ="3">3</option>
                    <option value ="4">4</option>
                    <option value ="5">5</option>
                    <option value ="6">6</option>
                    <option value ="7">7</option>
                    <option value ="8">8</option>
                    <option value ="9">9</option>
                    <option value ="10">10</option>
                    <option value ="11">11</option>
                    <option value ="12">12</option>   
                    <option value ="13">13</option>
                    <option value ="14">14</option>
                    <option value ="15">15</option>
                    <option value ="16">16</option>
                    <option value ="17">17</option>
                    <option value ="18">18</option>
                    <option value ="19">19</option>
                    <option value ="20">20</option>
                    <option value ="21">21</option>
                    <option value ="22">22</option>
                    <option value ="23">23</option>
                    <option value ="24">24</option>   
                    <option value ="25">25</option>
                    <option value ="26">26</option>
                    <option value ="27">27</option>
                    <option value ="28">28</option>
                    <option value ="29">29</option>
                    <option value ="30">30</option>
                    <option value ="31">31</option>
                </select>
            <p>Sex</p>
            <select id ="Sex" name = "sex">
                <option value ="Male">Male</option>
                <option value ="Female">Female</option>
            </select>

             <input  name="csubmit" type="submit" value="SIGN UP" >

            

            
        </form>
    </div>
</body>
</head>
</html>