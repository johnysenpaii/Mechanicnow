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
    include('Mheader.php');
    ?>
    
    <div class="master-container">
        <section>
          <form method="POST">  <?php //select transaction
              $regeditid=$_SESSION["mechID"];
              $sql="SELECT * from mechanic WHERE mechID=:regeditid";
              $query=$dbh->prepare($sql);
              $query->bindParam(':regeditid',$regeditid,PDO::PARAM_STR);
              $query->execute();
              $results=$query->fetchALL(PDO::FETCH_OBJ);

              if($query->rowCount()>0)
              {
              foreach ($results as $result) 
              {
            ?>
    
    <div class="master-container">
        <section>
            <div class="container">
                <div class="profile-bg">
                    <h2>Personal Information</h2>
                    <div class="avatar-img"><img src="img/avatar.png" alt=""></div><br>
                    <input type="hidden" name="mechID" value="<?php echo htmlentities($result->mechID);?>"required="required" class="form-control">
                    <input type="text" class="textin imgspace" name="mechFirstname" value="<?php echo htmlentities($result->mechFirstname);?>"required="required" class="form-control">
                    <input type="text" class="textin" name="mechLastname" value="<?php echo htmlentities($result->mechLastname);?>"required="required" class="form-control">
                    <input type="text" class="textin" name="mechEmail" value="<?php echo htmlentities($result->mechEmail);?>"required="required" class="form-control">
                    <input type="text" class="textin" name="mechCnumber" value="<?php echo htmlentities($result->mechCnumber);?>"required="required" class="form-control">
                    <h4 style="padding-bottom: 1em;">Address</h4>
                        <div class="addresspanel" style="padding-bottom: 1em;">
                            <input type="text" id="Province" name="mechAddress" value="<?php echo htmlentities($result->mechAddress);?>" class="textin" placeholder="Province" style="width:90%;" required>  
                            <input type="text" id="City" name="mechAddress" value="<?php echo htmlentities($result->mechAddress);?>"  class="textin" placeholder="City" style="width:90%;" required>
                            <input type="text" id="Barangay" name="mechAddress" value="<?php echo htmlentities($result->mechAddress);?>" class="textin" placeholder="Barangay" style="width:90%;" required>
                        </div>
                    <select type="text" name="Specialization"  class="textin" placeholder="Specialization" required>
                    <?php
                            $sql = "SELECT * from mechanic";
                            $query = $dbh -> prepare($sql);
                            $query -> execute();
                            $results1=$query->fetchAll(PDO::FETCH_OBJ);
                            $cnt=1;
                            if($query->rowCount() > 0)
                            {
                                foreach($results as $result1)
                                {
                                    ?>
                                    <option value="<?php echo htmlentities($result1->Specialization);?>">
                                    <?php
                                    echo htmlentities($result1->Specialization);
                                    ?>
                                    </option>
                                    <?php
                                }
                            }
                            ?>  
                        </select>
                    <input type="text" class="textin" name="mechValidID" value="<?php echo htmlentities($result->mechValidID);?>"required="required" class="form-control">
                    </br>
                    </br>
                    <h2>Account Information</h2>
                    <input type="text" name="Username" value="<?php echo htmlentities($result->Username);?>" class="textin" placeholder="Username" required>
                    <input type="password" name="Password" value="<?php echo htmlentities($result->custPassword);?>" class="textin" placeholder="Password" required>
                    <!-- <button class="editbtn">Edit Information</button> -->
                    <a href="mechanicEditprofile.php?regeditid=<?php echo htmlentities($result->mechID)?>">Edit Information</a>

                </div>
            </div>
            <?php }}?>
        </form>
        </section>
        
        <?php include('Mbootom-nav.php');?>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
