<?php
session_start();
include('C:\xampp\htdocs\Mechanicnow\config.php');
$custAddress1=$_SESSION['custAddress'];
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
                <center><h1>Available Car Mechanics</h1></center>
                <div class="searchbar">
                    <input type="text" class="search-bar" placeholder="Search here...">
                    <div class="filter">
                        <img src="img/filter.png" alt="">
                    </div>
                </div>
                <div class="mechanic-table" style="overflow-y:auto;">
                    <table class="mechanic-all">
                        <thead>
                            <tr>
                            <th style="font-size: 15px">Profile</th>
                            <th style="font-size: 15px">Name</th>
                            <th style="font-size: 15px">Specialization</th>
                            <th style="font-size: 15px">Address</th>
                            <th style="font-size: 15px">Rating</th>
                            <th style="font-size: 15px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           
                            $sql="SELECT * from mechanic WHERE mechAddress='$custAddress1' and Specialization='Car Mechanic'";
							$query=$dbh->prepare($sql);

							$query->execute();
							$results=$query->fetchALL(PDO::FETCH_OBJ);

							if($query->rowCount()>0)
                            {
 							foreach($results as $result)   
                            {   
                                if($custAddress1==$custAddress1)
                                {
						    ?>
                            <tr>
                                <td>
                                <img src="img/avatar.png" alt="avatar" width="35"class="img-thumbnail">
                                </td>
                                <td>
                                <?php echo htmlentities($result->mechFirstname);?> <?php echo htmlentities($result->mechLastname);?>
                                </td>
                                <td>
                                <?php echo htmlentities($result->Specialization);?>
                                </td>
                                <td>
                                <?php echo htmlentities($result->mechAddress);?>
                                </td>
                                <td>
                                5
                                </td>
                                <td>
                                <button style="color: rgb(156, 28, 150); border-radius: 8%; padding: 10px; font-size: 16px"><a  href="CarRequestPage.php?regeditid=<?php echo htmlentities($result->mechID)?>">Request</a></button>
                                </td>
                            </tr>
                        </tbody>
                        <?php }}}?>
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
