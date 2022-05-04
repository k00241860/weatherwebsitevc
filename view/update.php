<?php
include 'connection.php';
$id = $_GET['updateID'];
$sql = "Select * from weatherdetails where weatherID=$id";
$result = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($result);
$address = $row['location'];
$dateSpecified = $row['dateSpecified'];
$date = $row['datetime'];
$icon = $row['icon'];
$conditions = $row['conditions'];
$description = $row['description'];
$sunrise = $row['sunrise'];
$sunset = $row['sunset'];
$tempmax = $row['tempmax'];
$tempmin = $row['tempmin'];
$dew = $row['dew'];
$humidity = $row['humidity'];
$pressure = $row['pressure'];
$windspeed = $row['windspeed'];
$visibility = $row['visibility'];

if(isset($_POST['submit'])){
    $address = $_POST['location'];
    $dateSpecified = $_POST['dateSpecified'];
    $date = $_POST['datetime'];
    $icon = $_POST['icon'];
    $conditions = $_POST['conditions'];
    $description = $_POST['description'];
    $sunrise = $_POST['sunrise'];
    $sunset = $_POST['sunset'];
    $tempmax = $_POST['tempmax'];
    $tempmin = $_POST['tempmin'];
    $dew = $_POST['dew'];
    $humidity = $_POST['humidity'];
    $pressure = $_POST['pressure'];
    $windspeed = $_POST['windspeed'];
    $visibility = $_POST['visibility'];


    $sql = "update weatherdetails set weatherID=$id, location='$address', dateSpecified='$dateSpecified', datetime='$date', icon='$icon', conditions='$conditions',
    description='$description', sunrise='$sunrise', sunset='$sunset', tempmax='$tempmax', tempmin='$tempmin', dew='$dew', humidity='$humidity', pressure='$pressure',
    windspeed='$windspeed', visibility='$visibility' where weatherID=$id";

    $result = mysqli_query($con,$sql);

    if($result) {
        echo "Data Updated Successfully!";
    }else{
        die(mysqli_error($con));
    }
}


?>

<html>
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Weather Website</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    </head>
<body>
<div class="all">   
    <header>
            <img class="logo"  src="../images/logo.png" class="logo" alt="websiteLogo"/>
            <nav>
                <ul class="navLinks">
                    <li><a href="HomePage.php" class="currentPage">HOME</a></li>
                    <li><a href="WeatherDetails.php">WEATHER</a></li>
                </ul>
            </nav>
        </header>
               
        <div class="main">
        <div class="inputFormArea">
            <div class="inputFormAreaContent">
            <div class="weatherInputForm">
            <form method="POST" action="">    
                        <div class="formTitle"><h1>Details</h1></div>
                        <div class="inputField">
                            <label>Location</label>
                            <input type="text" class="input" name="location" value=<?php echo $address;?>>
                        </div>
                        <div class="inputField">
                            <label>Date Specified</label>
                            <input type="text" class="input" name="dateSpecified" value=<?php echo $dateSpecified;?>>
                        </div>
                        <div class="inputField">
                            <label>Date From API</label>
                            <input type="text" class="input" name="datetime" value=<?php echo $date;?>>
                        </div>
                        <div class="inputField">
                            <label>Conditions</label>
                            <input type="text" class="input" name="conditions" value=<?php echo $conditions;?>>
                        </div>
                        <div class="inputField">
                            <label>Description</label>
                            <input type="text" class="input" name="description" value=<?php echo $description;?>>
                        </div>
                        <div class="inputField">
                            <label>Icon</label>
                            <input type="text" class="input" name="icon" value=<?php echo $icon;?>>
                        </div>
                        <div class="inputField">
                            <label>Sunrise</label>
                            <input type="text" class="input" name="sunrise" value=<?php echo $sunrise;?>>
                        </div>
                        <div class="inputField">
                            <label>Sunset</label>
                            <input type="text" class="input" name="sunset" value=<?php echo $sunset;?>>
                        </div>
                        <div class="inputField">
                            <label>Max Temperature</label>
                            <input type="text" class="input" name="tempmax" value=<?php echo $tempmax;?>>
                        </div>
                        <div class="inputField">
                            <label>Min Temperature</label>
                            <input type="text" class="input" name="tempmin" value=<?php echo $tempmin;?>>
                        </div>
                        <div class="inputField">
                            <label>Dew</label>
                            <input type="text" class="input" name="dew" value=<?php echo $dew;?>>
                        </div>
                        <div class="inputField">
                            <label>Humidity</label>
                            <input type="text" class="input" name="humidity" value=<?php echo $humidity;?>>
                        </div>
                        <div class="inputField">
                            <label>Pressure</label>
                            <input type="text" class="input" name="pressure" value=<?php echo $pressure;?>>
                        </div>
                        <div class="inputField">
                            <label>Wind Speed</label>
                            <input type="text" class="input" name="windspeed" value=<?php echo $windspeed;?>>
                        </div>
                        <div class="inputField">
                            <label>Visibility</label>
                            <input type="text" class="input" name="visibility" value=<?php echo $visibility;?>>
                        </div>
                        <div class="form_Btns">
                            <input type="submit" value="Update" class="searchBtn" name="submit"/>
                        </div>
                </form>

                    </div>
            </div>
        </div>
        </div>
</div>
</body>
</html>