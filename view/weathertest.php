
<?php
error_reporting(0);
$locationInput = $_GET['locationFormInput'];
$dateInput = $_GET['dateFormInput'];

if(array_key_exists('submit', $_GET)){
    //checking if input is empty
    if(!$_GET['locationFormInput'] && ['dateFormInput']) {
        $error = "Your input field is empty";
    }
    if($_GET['locationFormInput'] && ['dateFormInput']) {
        $api_url = 'https://weather.visualcrossing.com/VisualCrossingWebServices/rest/services/timeline/'.$locationInput.'/'.$dateInput.'/?key=EM9MA57ZMBRCVK2R8DYX4UQ9X&contentType=json';
        $weather_data = json_decode(file_get_contents($api_url), true);
        $address = "<b>Location: </b><br>" . $weather_data['address'];
        $date = "<b>Date: </b><br>" . $weather_data['days']['0']['datetime'];
    }
}
?>

<form method="GET" action="weathertest.php">                   
            <div class="formTitle"><h1>Details</h1></div>
            <div class="inputField">
        <label>Location</label>
        <input type="text" class="input" name="locationFormInput"/>
        </div>
    <div class="inputField">
    <label>Date</label>
    <input type="text" class="input" name="dateFormInput"/>
    <div>
                        <div class="form_Btns">
                            <input type="submit" value="Search" class="searchBtn" name="submit"/>
                        </div>
                        </form>
                        <?php
                            if($address && $date) {
                                echo $address .
                                '<br>' . $date;
                                }
                        if($error){
                            echo $error;
                        }
                        ?>
