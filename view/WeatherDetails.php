<?php
include 'connection.php';
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
                    <li><a href="HomePage.php">HOME</a></li>
                    <li><a href="WeatherDetails.php" class="currentPage">BROWSE WEATHER DATA</a></li>
                </ul>
            </nav>
        </header>
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
        $sql = "Select * from weatherdetails";
        $result = mysqli_query($con, $sql);
        if ($result) {
          while($row=mysqli_fetch_assoc($result)) {
            $id = $row['weatherID'];
            $address = $row['location'];
            $dateSpecified = $row['dateSpecified'];
            $date = $row['datetime'];
            $conditions = $row['conditions'];
            $description = $row['description'];
            $icon = $row['icon'];
            $sunrise = $row['sunrise'];
            $sunset = $row['sunset'];
            $tempmax = $row['tempmax'];
            $tempmin = $row['tempmin'];
            $dew = $row['dew'];
            $humidity = $row['humidity'];
            $pressure = $row['pressure'];
            $windspeed = $row['windspeed'];
            $visibility = $row['visibility'];


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
            <td>'.$visibility.'</td>
            <td>
            <button class="btn btn-primary"><a class="text-light" href="update.php?updateID='.$id.'"> Update</a></button>
            <button class="btn btn-danger"><a class="text-light" href="delete.php?deleteID='.$id.'">Delete</a></button>
          </td>
          </tr>';
          }
        }
        ?>

        </tbody>
      </table>

</body>
</html>