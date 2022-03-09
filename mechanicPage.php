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
    <title>Mechanic Now</title>
</head>
<body>
<?php
    include('Uheader.php');
    ?>
    <div class="master-container">
        <section>
            <div class="container">
    
                <div class="searchbar">
                <input type="text" class="search-bar" placeholder="Search here...">
                <div class="filter">
                    <img src="img/filter.png" alt="">
                </div>
                </div>
                <h3>Results</h3>
                <div class="mechanic-table" style="overflow-y:auto;">
                    <table class="mechanic-all">
                        <tr>
                            <th>Pics</th>
                            <th>Name</th>
                            <th>Message</th>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>John jalosjos</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Harvey Semblante</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Jepriel Tibay</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Francisdel Chris Patlingrao</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>John jalosjos</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Harvey Semblante</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Jepriel Tibay</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Francisdel Chris Patlingrao</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>John jalosjos</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Harvey Semblante</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Jepriel Tibay</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Francisdel Chris Patlingrao</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>John jalosjos</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Harvey Semblante</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Jepriel Tibay</td>
                            <td>Message me</td>
                        </tr>
                        <tr>
                            <td>img</td>
                            <td>Francisdel Chris Patlingrao</td>
                            <td>Message me</td>
                        </tr>
                    </table>
                </div>
                <br>
                <br>
                <br>
                <div class="mapview">
                    <a href="userMap.php">view map</a>
                </div>
                
            </div>
        </section>
        
        <?php
        include('bottom-nav.php');
        ?>
    </div>
    <script src="js/main.js"></script>
</body>
</html>