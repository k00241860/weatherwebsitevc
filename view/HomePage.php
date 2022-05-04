<?php
include("connection.php");
error_reporting(0);
$locationInput = $_GET['locationFormInput'];
$dateInput = $_GET['dateFormInput'];
//Retrieving data from Weather API
        $api_url = 'https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/'.$locationInput.'/'.$dateInput.'/?key=Y7SAJM7GK6EK5ZPJ8HQ3TVHP5&contentType=json';
        $weather_data = json_decode(file_get_contents($api_url), true);
        $address = $weather_data['address'];
        $date = $weather_data['days']['0']['datetime'];
        $icon = $weather_data['days']['0']['icon'];
        $conditions = $weather_data['days']['0']['conditions'];
        $description = $weather_data['days']['0']['description'];
        $sunrise = $weather_data['days']['0']['sunrise'];
        $sunset = $weather_data['days']['0']['sunset'];
        $tempmax = $weather_data['days']['0']['tempmax'];
        $tempmin = $weather_data['days']['0']['tempmin'];
        $dew = $weather_data['days']['0']['dew'];
        $humidity = $weather_data['days']['0']['humidity'];
        $pressure = $weather_data['days']['0']['pressure'];
        $windspeed = $weather_data['days']['0']['windspeed'];
        $visibility = $weather_data['days']['0']['visibility'];

if(isset($_POST['submitDB'])){

    $sql = "insert into weatherdetails (location, dateSpecified, datetime, conditions, description, icon, sunrise, sunset,
    tempmax, tempmin, dew, humidity, pressure, windspeed, visibility)
    values('$address', '$dateInput', '$date', '$conditions', '$description', '$icon', '$sunrise', '$sunset', '$tempmax', '$tempmin',
    '$dew', '$humidity', '$pressure', '$windspeed', '$visibility')";

    $result = mysqli_query($con,$sql);

    if($result) {
        echo "Data Inserted Successfully";
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
    <header>
            <img class="logo"  src="../images/logo.png" class="logo" alt="websiteLogo"/>
            <nav>
                <ul class="navLinks">
                    <li><a href="HomePage.php" class="currentPage">HOME</a></li>
                    <li><a href="WeatherDetails.php">BROWSE WEATHER DATA</a></li>
                </ul>
            </nav>
        </header>
        <div class="weatherInputForm">
            <form method="GET" action="HomePage.php">                   
                        <div class="formTitle"><h1>Search By: Location & Date</h1></div>
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
                </form>
            </div>

                        <form method="POST">
                        <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Location</th>
            <th scope="col">Date Specified</th>
            <th scope="col">Date From API</th>
            <th scope="col">Conditions</th>
            <th scope="col">Description</th>
            <th scope="col">Icon</th>
            <th scope="col">Sunrise</th>
            <th scope="col">Sunset</th>
            <th scope="col">Max Temperature</th>
            <th scope="col">Min Temperature</th>
            <th scope="col">Dew</th>
            <th scope="col">Humidity</th>
            <th scope="col">Pressure</th>
            <th scope="col">Wind Speed</th>
            <th scope="col">Visibility</th>
          </tr>
        </thead>

        <tbody>
        <?php
              echo '<tr>
              <th scope="row">'.$id.'</th>
              <td>'.$address.'</td>
              <td>'.$dateSpecified.'</td>
              <td>'.$date.'</td>
              <td>'.$conditions.'</td>
              <td>'.$description.'</td>
              <td>'.$icon.'</td>
              <td>'.$sunrise.'</td>
              <td>'.$sunset.'</td>
              <td>'.$tempmax.'</td>
              <td>'.$tempmin.'</td>
              <td>'.$dew.'</td>
              <td>'.$humidity.'</td>
              <td>'.$pressure.'</td>
              <td>'.$windspeed.'</td>
              <td>'.$visibility.'</td>';
        ?>
        </tbody>
      </table>
      <div class="form_Btns">
            <input type="submit" value="Upload" class="searchBtn" name="submitDB"/>
        </div>
                </form>

            </div>
            </div>
        </div>
        </div>
</div>
</body>
</html>