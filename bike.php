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
            <center><h1>Available Bike Mechanics</h1></center>
                <div class="searchbar">
                    <input type="text" class="search-bar" placeholder="Search here...">
                    <div class="filter">
                        <img src="img/filter.png" alt="">
                    </div>
                </div>
            <div class="mechanic-table" style="overflow-y:auto;">
                    <table class="mechanic-all">
                        <tr>
                            <th>Profile</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Rating</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>John jalosjos</td>
                            <td>Repairs Bike problems.</td>
                            <td>5</td>
                            <td>Send</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Harvey Semblante</td>
                            <td>Repairs Bike problems.</td>
                            <td>5</td>
                            <td>Send</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Jepriel Tibay</td>
                            <td>Repairs Bike problems.</td>
                            <td>5</td>
                            <td>Send</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Francisdel Chris Patlingrao</td>
                            <td>Repairs Bike problems.</td>
                            <td>5</td>
                            <td>Send</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>John jalosjos</td>
                            <td>Repairs Bike problems.</td>
                            <td>5</td>
                            <td>Send</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Harvey Semblante</td>
                            <td>Repairs Bike problems.</td>
                            <td>5</td>
                            <td>Send</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Jepriel Tibay</td>
                            <td>Repairs Bike problems.</td>
                            <td>5</td>
                            <td>Send</td>
                        </tr>
                    </table>
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
