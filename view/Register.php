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
        <div class="accountForm">
                    <form method="post">
                        <div class="accountTitle"><h1>REGISTER</h1></div>
                        <div class="inputField">
                            <label>Username</label>
                            <input type="text" class="input" name="username"/>
                        </div>
                        <div class="inputField">
                            <label>Password</label>
                            <input type="password" class="input" name="password"/>
                        </div>
                        <div class="account_Btns">
                            <input type="submit" value="Cancel" class="cancelBtn"/>
                            <input type="submit" value="Register" class="registerLink"/>
                        </div>
                            </form>
                    </div>
        </div>
</div>
</body>