<?php
    session_start();
    if(isset($_SESSION['u_id']))
    {
        header("Location: index.php");
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

    <body>

        <header>
            <div class="container-fluid">
                <h1>
                    Foodzy
                </h1>
            </div>
        </header>
        <nav class="navbar">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li onclick="signupform(1)"><a><span class="glyphicon glyphicon-user"></span>&nbspSign Up</a></li>
                    <li onclick="loginform(1)"><a><span class="glyphicon glyphicon-log-in"></span>&nbspLogin</a></li>
                </ul>
            </div>
        </nav>
        <div class="form-wrap">
            <div class="inner-form-wrap" id="signup-form">
                <div class="close-button" onclick="loginform(1)">&times;</div>
                <form action="register.php" enctype="multipart/form-data" method="POST">
                    <div class="profile-main">
                        <div class="profile-img-wrap">
                            <input type="file" id="profile-img" name="profile_img">
                        </div class="profile-img-wrap">
                    </div>
                    <br>
                    <label id="profile-label">Add Photo</label>
                    <br>
                    <label>Name</label>
                    <input type="fname" name="fname" id="fname" placeholder="First name" required pattern="[a-zA-Z]*$">
                    <input type="lname" name="lname" id="lname" placeholder="Last name" pattern="[a-zA-Z]*$">
                    <br>
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" required>
                    <br>
                    <label>Phone Number</label>
                    <input type="text" maxlength="10" name="phoneno" placeholder="Enter Your Number" pattern="[789][0-9]{9}">
                    <br>
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter Your Password" required title="Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)">
                    <br>
                    <label>Confirm Password</label>
                    <input type="password" name="cpassword" placeholder="Enter Your Password" required>
                    <br>
                    <input type="Submit">
                    <div onclick=loginform(1)  style="color:red;text-align:center;margin-top:5px;font-weight:500;cursor:pointer;">Already have an account ??</div>
                    <br>

                </form>
            </div>
            <div class="inner-form-wrap" id="login-form">
                <h1 style="text-align:center;margin-bottom:40px;">Login</h1>
                <form action="login.inc.php" method="POST">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Enter Your Email" required>
                    <br>
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter Your Password" required>
                    <br>
                    <input type="Submit" name="submit">
                    <div onclick=signupform(1) style="color:red;text-align:center;margin-top:5px;font-weight:500;cursor:pointer;">New User ??</div>
                    <br>

                </form>

            </div>
        </div>


    </body>

    </html>
    <!-- pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" -->