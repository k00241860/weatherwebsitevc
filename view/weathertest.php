

<?php
include("connection.php");


if(isset($_POST['submit'])) {
$address = 'Limerick';
$tempmax =  21;
$tempmin = 12;

        $sql = "insert into weathertest (location, tempmax, tempmin)
        values ('$address', '$tempmax', '$tempmin')";
        $result = mysqli_query($con,$sql);
        if($result) {
            echo "Data Inserted Successfully";
        }else{
            die(mysqli_error($con));
        }
    }
?>
<form method="POST">
    <?php
    echo '<b>Location: </b>' . $address . '<br><b>Max Temperature: </b>' . $tempmax . '<br><b>Min Temperature: </b>' . $tempmin;
    ?>
    <input name=submit type=submit>
</form>


