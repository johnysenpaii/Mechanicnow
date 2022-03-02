<?php
session_start();
include('C:\xampp\htdocs\MechanicNow\Mechanicnow\config.php');
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
            <h1>Request Information</h1>
            <div class="mechanic-table" style="overflow-y:auto;">
                <h3>Mechanic</h3>
                <br>
                <label>Profile</label>
                <p></p>
                <br>
                <label>Name</label>
                <p></p>
                <br>
                <label>Profile</label>
                <p></p>
            </div>
            <div class="mechanic-table" style="overflow-x:auto;">
                <h3>Mechanical Problem</h3>
                <br>
                <input type="checkbox" name="tireRepair">
                <label>Tire Repair</label>
                <p></p>
                <br>
                <input type="checkbox" name="tireRepair">
                <label>Chain Loosening Repair</label>
                <p></p>
                <br>
                <label style="margin-left: 20px">Others Specify</label>
                <br>
                <textarea placeholder="Specify here..." name="tireRepair" style="padding: 30px; font-size: 12px; font-family: var(--ff-primary);"></textarea>
                <br>
                <br>
                <button style="color: rgb(156, 28, 150); border-radius: 8%; padding: 10px; font-size: 16px"> <a href="">Send</a></button>
                <button style="color: rgb(156, 28, 150); border-radius: 8%; padding: 10px; font-size: 16px; margin-left: 40px;"><a  href="bike.php">Cancel</a></button>
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
