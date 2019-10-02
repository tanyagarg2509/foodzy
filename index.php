<?php
 session_start();
 if(isset($_SESSION['u_id']))
 {
    include 'menu.php';
 }
 else{
     header("Location: login.php");
     
 }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- stylesheet -->
        <link href="index.css" type="text/css" rel="stylesheet">
        <style>

        </style>
        <!-- script -->
        <script src="index.js" type="text/javascript"></script>
    </head>

    <body data-spy="scroll" data-target=".navbar" data-offset="50">

        <header>
            <div class="container-fluid">
                <h1>
                    Foodzy
                </h1>
            </div>
        </header>
        <nav class="navbar" data-spy="affix" data-offset-top="195">
            <div class="container-fluid">
                <div class="navbar-header"><button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button><a class="navbar-brand" href="#">Foodzy</a></div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#veg">Veg Pizza</a></li>
                            <li><a href="#non-veg">Non-Veg Pizza</a></li>
                            <li><a href="#pz-mania">Pizza Mania</a></li>
                            
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Profile<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#section41"></a></li>
                                    <li><a href="#section42"></a></li>
                                </ul>
                            </li>
                            <li><a href="logout.php"><span class="far fa-circle"></span>&nbspLog Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <div class="body-wrap">
            <div class="container" id="veg">

                <div class="flex-wrapper">
                    <h1 class="menu-heading">Veg Pizzas</h1>
                    <?php $m=new menu;
                        $result=$m->getvegpizza();
                        while($row=$result->fetch_assoc())
                        {
                            $pid=$row['pid'];
                            echo '<div class="pizza-box flex-child">';
                            echo '<div class="inner-pizza-box">';
                            echo "<div class='label-left'>Crust : </div>";
                            echo "<div class='label-right blue'>Hand Tossed</div>";
                            echo '<br>';
                            echo '<div class="label-left">Size</div>';
                            echo "<div class='label-right' id='psize".$pid."'>";
                            echo '<div class="rounded-square-size-selected" onclick="changesize(this,'.$row['pricereg'].')">R</div>';
                            echo '<div class="rounded-square-size" onclick="changesize(this,'.$row['pricemed'].')">M</div>';
                            echo '<div class="rounded-square-size" onclick="changesize(this,'.$row['pricelar'].')">L</div>';
                            echo'</div>';
                            echo '<br>';
                            echo "<div class='label-left'>Price : </div>";
                            echo "<div class='label-right blue'>&#x20b9; <span id='pprice".$pid."'>".$row['pricereg']."</span></div>";
                            echo '<br>';
                            echo '<div class="label-left">Qty</div>';
                            echo '<div class="label-right">';
                            echo '<div class="rounded-square-qty" onclick="changeqty(this,1)">+</div>';
                            echo '<div class="rounded-square-qty pizza-qty" id="pqty'.$pid.'">1</div>';
                            echo '<div class="rounded-square-qty" onclick="changeqty(this,-1)">-</div>';
                            echo'</div>';
                            echo '<br>';
                            echo '<div class="addto" id="a2c'.$pid.'" onclick="addtocarts(this)">quick add</div>';
                            echo'</div>';
                            echo '<div class="pizza-name" id="pname'.$pid.'">'.$row['pname']."</div>";
                            echo '<img src="'.$row['pimage'].'"/>';
                            echo '<div class="p-toppings">'.$row['pdes'].'</div>';
                            echo '<div>';
                            echo '<div class="inner-price">R : &#x20b9; '.$row['pricereg'].'</div>';
                            echo '<div class="inner-price">M : &#x20b9; '.$row['pricemed'].'</div>';
                            echo '<div class="inner-price">L : &#x20b9; '.$row['pricelar'].'</div>';
                            echo '</div>';
                            echo '<div class="customise">Customise</div>';
                            echo '</div>';
                        }

                    ?>
                </div>
            </div>
            <div class="container" id="non-veg">
                <h1 class="menu-heading">Non-Veg Pizzas</h1>
                <div class="flex-wrapper">
                    <?php $m=new menu;
                        $result=$m->getnonvegpizza();
                        while($row=$result->fetch_assoc())
                        {
                            $pid=$row['pid'];
                            echo '<div class="pizza-box flex-child">';
                            echo '<div class="inner-pizza-box">';
                            echo "<div class='label-left'>Crust : </div>";
                            echo "<div class='label-right blue'>Hand Tossed</div>";
                            echo '<br>';
                            echo '<div class="label-left">Size</div>';
                            echo "<div class='label-right' id='psize".$pid."'>";
                            echo '<div class="rounded-square-size-selected" onclick="changesize(this,'.$row['pricereg'].')">R</div>';
                            echo '<div class="rounded-square-size" onclick="changesize(this,'.$row['pricemed'].')">M</div>';
                            echo '<div class="rounded-square-size" onclick="changesize(this,'.$row['pricelar'].')">L</div>';
                            echo'</div>';
                            echo '<br>';
                            echo "<div class='label-left'>Price : </div>";
                            echo "<div class='label-right blue'>&#x20b9; <span id='pprice".$pid."'>".$row['pricereg']."</span></div>";
                            echo '<br>';
                            echo '<div class="label-left">Qty</div>';
                            echo '<div class="label-right">';
                            echo '<div class="rounded-square-qty" onclick="changeqty(this,1)">+</div>';
                            echo '<div class="rounded-square-qty pizza-qty" id="pqty'.$pid.'">1</div>';
                            echo '<div class="rounded-square-qty" onclick="changeqty(this,-1)">-</div>';
                            echo'</div>';
                            echo '<br>';
                            echo '<div class="addto" id="a2c'.$pid.'" onclick="addtocarts(this)">quick add</div>';
                            echo'</div>';
                            echo '<div class="pizza-name" id="pname'.$pid.'">'.$row['pname']."</div>";
                            echo '<img src="'.$row['pimage'].'"/>';
                            echo '<div class="p-toppings">'.$row['pdes'].'</div>';
                            echo '<div>';
                            echo '<div class="inner-price">R : &#x20b9; '.$row['pricereg'].'</div>';
                            echo '<div class="inner-price">M : &#x20b9; '.$row['pricemed'].'</div>';
                            echo '<div class="inner-price">L : &#x20b9; '.$row['pricelar'].'</div>';
                            echo '</div>';
                            echo '<div class="customise">Customise</div>';
                            echo '</div>';
                        }

                    ?>
                </div>
            </div>
            <div class="container" id="pz-mania">
                <h1 class="menu-heading">Pizza Mania</h1>
                <div class="flex-wrapper">
                    <?php $m=new menu;
                        $result=$m->getpizzamania();
                        while($row=$result->fetch_assoc())
                        {
                            $pid=$row['pid'];
                            echo '<div class="pizza-box flex-child">';
                            echo '<div class="inner-pizza-box">';
                            echo "<div class='label-left'>Crust : </div>";
                            echo "<div class='label-right blue'>Hand Tossed</div>";
                            echo '<br>';
                            echo '<div class="label-left">Size</div>';
                            echo "<div class='label-right' id='psize.".$pid."'>";
                            echo '<div class="rounded-square-size-selected">R</div>';
                            echo'</div>';
                            echo '<br>';
                            echo "<div class='label-left'>Price : </div>";
                            echo "<div class='label-right blue'>&#x20b9; <span id='pprice".$pid."'>".$row['pricereg']."</span></div>";
                            echo '<br>';
                            echo '<div class="label-left">Qty</div>';
                            echo '<div class="label-right">';
                            echo '<div class="rounded-square-qty" onclick="changeqty(this,1)">+</div>';
                            echo '<div class="rounded-square-qty pizza-qty" id="pqty'.$pid.'">1</div>';
                            echo '<div class="rounded-square-qty" onclick="changeqty(this,-1)">-</div>';
                            echo'</div>';
                            echo '<br>';
                            echo '<div class="addto" id="a2c'.$pid.'" onclick="addtocarts(this)">quick add</div>';
                            echo'</div>';
                            echo '<div class="pizza-name" id="pname'.$pid.'">'.$row['pname']."</div>";
                            echo '<img src="'.$row['pimage'].'"/>';
                            echo '<div class="p-toppings">'.$row['pdes'].'</div>';
                            echo '<div>';
                            echo '<div class="inner-price">R : &#x20b9; '.$row['pricereg'].'</div>';
                            echo '</div>';
                            echo '<div class="customise">Customise</div>';
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
    
    </body>


    </html>