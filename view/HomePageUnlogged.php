<?php
session_start();
include("connection.php");
include("functions.php");
$user_data = check_login($con);

error_reporting(0);
$locationInput = $_GET['locationFormInput'];
$dateInput = $_GET['dateFormInput'];

if(array_key_exists('submit', $_GET)){
    //checking if input is empty
    if(!$_GET['locationFormInput'] && ['dateFormInput']) {
        $error = "Your input field is empty";
    }
    if($_GET['locationFormInput'] && ['dateFormInput']) {
        $api_url = 'https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/'.$locationInput.'/'.$dateInput.'/?key=EXTS6F6C5A6MSYSE8HLG89CMJ&contentType=json';
        $weather_data = json_decode(file_get_contents($api_url), true);
        $address = "<b>Location: </b>" . $weather_data['address'];
        $date = "<b>Date: </b>" . $weather_data['days']['0']['datetime'];
        $conditions = "<b>Conditions: </b>" . $weather_data['days']['0']['conditions'];
        $description = "<b>Description: </b>" . $weather_data['days']['0']['description'];
        $sunrise = "<b>Sunrise: </b>" . $weather_data['days']['0']['sunrise'];
        $sunset = "<b>Sunset: </b>" . $weather_data['days']['0']['sunset'];
        $tempmax = "<b>Max Temperature: </b>" . $weather_data['days']['0']['tempmax'];
        $tempmin = "<b>Min Temperature: </b>" . $weather_data['days']['0']['tempmin'];
        $dew = "<b>Dew: </b>" . $weather_data['days']['0']['dew'];
        $humidity = "<b>Humidity: </b>" . $weather_data['days']['0']['humidity'];
        $pressure = "<b>Pressure: </b>" . $weather_data['days']['0']['pressure'];
        $windspeed = "<b>Wind speed: </b>" . $weather_data['days']['0']['windspeed'];
    }
}

?>

<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Weather Website</title>
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
                    <li><a href="HomePageUnlogged.php" class="currentPage">HOME</a></li>
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
            <form method="GET" action="HomePageUnlogged.php">                   
                        <div class="formTitle"><h1>Details</h1></div>
                        <div class="inputField">
                            <label>Location</label>
                            <input type="text" class="input" name="locationFormInput"/>
                        </div>
                        <div class="inputField">
                            <label>Date</label>
                            <input type="text" class="input" name="dateFormInput"/>
                        </div>
                        <div class="form_Btns">
                            <input type="submit" value="Search" class="searchBtn" name="submit"/>
                        </div>
                        <?php
                            if($address && $date) {
                                echo $address .
                                '<br>' . $date . 
                                '<br>' .$conditions .
                                '<br>' . $description .
                                '<br>' . $sunrise .
                                '<br>' . $sunset .
                                '<br>' . $tempmax .
                                '<br>' . $tempmin .
                                '<br>' . $dew .
                                '<br>' . $humidity .
                                '<br>' . $pressure .
                                '<br>' . $windspeed;
                                }
                        if($error){
                            echo $error;
                        }
                        ?>
                        </form>
                    </div>
            </div>
        </div>
        </div>
</div>
</body>