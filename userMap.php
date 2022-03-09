<?php
session_start();
include('C:\xampp\htdocs\DEVGRU\Mechanicnow\config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Stick+No+Bills:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Mechanic Now</title>
    
</head>
<body>
    <?php
    include('Uheader.php');
    ?>
    <div class="master-container">
        <section class="mappage">
            <div class="container">
                <!-- <h1>FIND YOUR MECHANIC</h1>
                <h3 class="map-3">In here you can select the nearest mechanic you prefer.</h3> -->
                <div id="map">
                <!-- or map -->

                </div>
                <div id="info" class="info"></div>

            </div>
        </section>
        
        <?php
        include('bottom-nav.php');
        ?>
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB00oqGu_OZuWIbaPg1NIIgKMZGnQcFxXc&callback=initMap&libraries=places&v=weekly" async defer></script>
    <script src="js/main.js"></script>
</body>
</html>