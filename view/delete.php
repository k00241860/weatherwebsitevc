<?php
include 'connection.php';
if(isset($_GET['deleteID'])){
    $id = $_GET['deleteID'];

    $sql = "delete from weatherdetails where weatherID=$id";
    $result = mysqli_query($con, $sql);
    if($result) {
        header('location:WeatherDetails.php');
    }else{
        die(mysqli_error($con));
    }
}
?>