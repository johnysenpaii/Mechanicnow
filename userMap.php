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
    <title>Mechanic Now</title>
</head>
<body>
    <?php
    include('C:\xampp\htdocs\DEVGRU\Mechanicnow\Uheader.php');
    ?>
    <div class="master-container">
        <section>
            <div class="container">
                <h1>FIND YOUR MECHANIC</h1>
                <h3 class="map-3">In here you can select the nearest mechanic you prefer.</h3>
                
                <div id="map">

                </div>
                
            </div>
        </section>
        
        <?php
        include('C:\xampp\htdocs\DEVGRU\Mechanicnow\bottom-nav.php');
        ?>
    </div>
    <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTcyQdBPjmXFByYN-t3CIxOfNwigVDxGo&callback=initMap&v=weekly"
    async
  ></script>
    <script src="js/main.js"></script>
</body>
</html>