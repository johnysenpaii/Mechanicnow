<?php
session_start();
include('C:\xampp\htdocs\Mechanicnow\Mechanicnow\config.php');
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
    <title>Mechanic Now</title>
</head>
<body>
    <?php
    include('Uheader.php');
    ?>
    
    <div class="master-container">
        
        <section>
            <div class="container">
                <div class="images">
                    <div class="card">
                        <div class="images-cd">
                            <img src="img/flat.jpg" class="img" alt="">
                        </div>
                        <div class="textarea">
                            <h3>Flat Tires</h3>
                            <br>
                            <a href="mechanicPage.php"><button >GO TO</button></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="images-cd">
                            <img src="img/engine2.jpg" class="img" alt="">
                        </div>
                        <div class="textarea">
                            <h3>Engine Failure</h3>
                            <br>
                            <a href="mechanicPage.php"><button >GO TO</button></a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="images-cd">
                            <img src="img/other.jpg" class="img" alt="">
                        </div>
                        <div class="textarea">
                            <h3>Others</h3>
                            <br>
                            <a href="mechanicPage.php"><button >GO TO</button></a>
                           <!--<div class="button">
                                <p>GO TO</p>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- <div class="bottom-nav">
            <div class="vehicle-logo">
                <a href="userDashboard.html"><img src="img/steering-wheel2.png" alt=""></a>
            </div>
            <div class="home-logo">
                <a href="userDashboard.html"><img src="img/house-black-silhouette-without-door.png" alt=""></a>
            </div>
            <div class="mech-logo">
                <a href="mechanicPage.html"><img src="img/mechtool.png" alt=""></a>
            </div>
        </div> -->
        <?php
        include('bottom-nav.php');
        ?>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
