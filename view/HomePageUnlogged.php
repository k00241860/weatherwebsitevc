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
        <link rel="stylesheet" href="css/style.css">

    </head>
<body>
<div className="all">   
    <header>
            <img class="logo"  src="./images/" className="logo" alt="websiteLogo"/>
            <nav>
                <ul className="navLinks">
                    <li><a href="/" className="currentPage">HOME</a></li>
                    <li><a href="#">WEATHER</a></li>
                    <li><a href="#">ABOUT</a></li>
                </ul>
            </nav>
            <div className="accountOptions">
            <a className="loginLink" href="/Login"><button>LOG IN</button></a>
            <a className="signUpLink" href="/Register"><button>SIGN UP</button></a>
            </div>
        </header>
        <div className="main">
        <div className="inputFormArea">
            <div className="inputFormAreaContent">
            <div className="weatherInputForm">
            <form method="POST">                   
                        <div className="formTitle"><h1>Details</h1></div>
                        <div className="inputField">
                            <label>Location</label>
                            <input type="text" class="input"/>
                        </div>
                        <div className="inputField">
                            <label>Latitude</label>
                            <input type="text" class="input"/>
                        </div>
                        <div className="inputField">
                            <label>Longitude</label>
                            <input type="text" class="input"/>
                        </div>
                        <div className="inputField">
                            <label>Date</label>
                            <input type="text" class="input"/>
                        </div>
                        <div className="form_Btns">
                            <input type="submit" value="Search" class="searchBtn"/>
                        </div>
                        </form>
                    </div>
            </div>
        </div>
        </div>
</div>
</body>