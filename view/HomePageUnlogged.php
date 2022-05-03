<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);

?>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>OPTUNES</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">

    </head>
<body>
<div class="all">   
    <header>
            <img class="logo"  src="../images/logo.png" class="logo" alt="websiteLogo"/>
            <nav>
                <ul class="navLinks">
                    <li><a href="/" class="currentPage">HOME</a></li>
                    <li><a href="#">WEATHER</a></li>
                    <li><a href="#">ABOUT</a></li>
                </ul>
            </nav>
            <div class="accountOptions">
            <a class="loginLink" href="Login.php"><button>LOG IN</button></a>
            <a class="signUpLink" href="Register.php"><button>SIGN UP</button></a>
            </div>
        </header>
        <div class="main">
        <div class="inputFormArea">
            <div class="inputFormAreaContent">
            <div class="weatherInputForm">
            <form method="POST">                   
                        <div class="formTitle"><h1>Details</h1></div>
                        <div class="inputField">
                            <label>Location</label>
                            <input type="text" class="input"/>
                        </div>
                        <div class="inputField">
                            <label>Latitude</label>
                            <input type="text" class="input"/>
                        </div>
                        <div class="inputField">
                            <label>Longitude</label>
                            <input type="text" class="input"/>
                        </div>
                        <div class="inputField">
                            <label>Date</label>
                            <input type="text" class="input"/>
                        </div>
                        <div class="form_Btns">
                            <input type="submit" value="Search" class="searchBtn"/>
                        </div>
                        </form>
                    </div>
            </div>
        </div>
        </div>
</div>
</body>