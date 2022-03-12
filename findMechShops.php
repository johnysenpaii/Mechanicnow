<?php
session_start();
include('C:\xampp\htdocs\Mechanicnow\config.php');

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
    <?php include('Uheader.php');?>
    
    <div class="master-container">
        <section>
        <form method= "POST">
        <div class="container">
            
       
                
          
        </div>
        </form>
        </section>
        <?php include('Mbootom-nav.php');?>
    </div>

    <script src="js/main.js">
        var status = document.getElementById('status');
        if(status == 'Unaccepted')
        {
            document.getElementById("message").disable;      
        }
    </script>
</body>
</html>
