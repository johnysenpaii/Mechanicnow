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
    <script src="https://kit.fontawesome.com/112183f88a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Mechanic Now</title>
    <style>
        .chatSection{
            display: flex;
            flex-direction: row;
            
        }
        .chatList{
            padding: 1em;
            background-color: white;
            box-shadow: 0 3px 1rem rgba(70, 49, 49, 0.1);
            border-radius: 1em;
        }
        .chatBox{
            padding: 10px;
            background-color: white;
        }
    </style>
</head>
<body>
    <?php
    include('Uheader.php');
    ?> 
    <div class="master-container">    
        <section>
            <div class="container">
                <div class="chatSection">
                    <div class="chatList">
                        <h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci voluptas consequuntur tempore doloribus, est expedita.</h1>
                    </div>
                    <div class="chatBox">
                        <h1>THIS IS CHAT BOX</h1>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="bottom-nav">
            <div class="vehicle-logo">
                <!-- Message -->
                <a href="userMessage.php"><img src="img/message.png" alt=""></a>
            </div>
            <div class="home-logo">
                <a href="userDashboard.php"><img src="img/house-black-silhouette-without-door.png" alt=""></a>
            </div>
            <div class="mech-logo">
                <a href="mechanicPage.php"><img src="img/mechtool.png" alt=""></a>
            </div>
        </div>
        <?php
        include('bottom-nav.php');
        ?>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
