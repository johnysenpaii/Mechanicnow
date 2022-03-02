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
            <form method="POST">
        <?php //select transaction
              $regeditid=$_SESSION["custID"];
              $sql="SELECT * from customer WHERE custID=:regeditid";
              $query=$dbh->prepare($sql);
              $query->bindParam(':regeditid',$regeditid,PDO::PARAM_STR);
              $query->execute();
              $results=$query->fetchALL(PDO::FETCH_OBJ);

              if($query->rowCount()>0)
              {
              foreach ($results as $result) 
              {
            ?>
            <div class="container">
                <div class="profile-bg">
                    <h2>Personal Information</h2>
                    <div class="avatar-img"><img src="img/avatar.png" alt=""></div><br>
                    <input type="hidden" name="custID" value="<?php echo htmlentities($result->custID);?>"required="required" class="form-control">
                    <input type="text" name="custFirstname"  value="<?php echo htmlentities($result->custFirstname);?>" class="textin" placeholder="First Name" required>
                    <input type="text" name="custLastname" value="<?php echo htmlentities($result->custLastname);?>" class="textin" placeholder="Last Name" required>
                    <input type="email" name="custEmail" value="<?php echo htmlentities($result->custEmail);?>" class="textin" placeholder="Email Address" required>
                    <input type="tel" name="custCnumber" value="<?php echo htmlentities($result->custCnumber);?>" class="textin" pattern="((^(\+)(\d){12}$)|(^\d{11}$))" placeholder="Phone Number" required>
                    <h4 style="padding-bottom: 1em;">Address</h4>
                        <div class="addresspanel" style="padding-bottom: 1em;">
                            <input type="text" id="Province" name="custAddress" value="<?php echo htmlentities($result->custAddress);?>" class="textin" placeholder="Province" style="width:90%;" required>  
                            <input type="text" id="City" name="custAddress" value="<?php echo htmlentities($result->custAddress);?>"  class="textin" placeholder="City" style="width:90%;" required>
                            <input type="text" id="Barangay" name="custAddress" value="<?php echo htmlentities($result->custAddress);?>" class="textin" placeholder="Barangay" style="width:90%;" required>
                        </div>
                        <select type="text" name="vehicleType"  class="textin" placeholder="Vehicle Type" required>

                              

                              <?php
                            $sql = "SELECT * from customer";
                            $query = $dbh -> prepare($sql);
                            $query -> execute();
                            $results1=$query->fetchAll(PDO::FETCH_OBJ);
                            $cnt=1;
                            if($query->rowCount() > 0)
                            {
                                foreach($results as $result1)
                                {
                                    ?>
                                    <option value="<?php echo htmlentities($result1->vehicleType);?>">
                                    <?php
                                    echo htmlentities($result1->vehicleType);
                                    ?>
                                    </option>
                                    <?php
                                }
                            }
                            ?>  


                           


                        </select>
                    </br>
                    </br>
                    <h2>Account Information</h2>
                    <input type="text" name="Username" value="<?php echo htmlentities($result->Username);?>" class="textin" placeholder="Username" required>
                    <input type="password" name="Password" value="<?php echo htmlentities($result->custPassword);?>" class="textin" placeholder="Password" required>
                    <div  class="predit" style="margin-top: 2em; margin-bottom: 5em;"><a style="text-decoration: none; font-size: 18px;  font-weight: 800; padding-inline: 2.8em; padding-block: 1em;" href="userEditprofile.php?regeditid=<?php echo htmlentities($result->custID)?>">Edit Information</a></div>
                            
                </div>
            </div>
            <?php }}?>
              </form>
        </section>
        
        <?php
        include('bottom-nav.php');
        ?>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
