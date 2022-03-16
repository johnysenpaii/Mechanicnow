<?php
session_start();
<<<<<<< HEAD
include('C:\xampp\htdocs\Mechanicnow\Mechanicnow\config.php');
=======
include('C:\xampp\htdocs\MechanicNow\Mechanicnow\config.php');
>>>>>>> 91353913ab3db1fa39fcabc88e4e7de19faa4682
if(isset($_POST['edit']))
{
    $id=$_POST['id'];
    // $profileImg=addslashes(file_get_contents($_FILES["profileImg"]["tmp_name"]));
    $custFirstname=$_POST['custFirstname'];
    $custLastname=$_POST['custLastname'];
    $custEmail=$_POST['custEmail'];
    $custCnumber=$_POST['custCnumber'];
    $custAddress=$_POST['custAddress'];
    $vehicleType=$_POST['vehicleType'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];

    //check password
  if ($_POST['Password']!= $_POST['custconfirmpassword'])
  {
    echo '<script>alert("Oops! Password did not match! Please try again.")</script>';
    echo "<script type='text/javascript'>document.location='userSignup.php';</script>";
  }
  else{
    //hashed password
  $hashedPwd = password_hash($Password, PASSWORD_DEFAULT);

  //check email
  // $sql2="SELECT * FROM customer WHERE Username = ?";
  // $query = $dbh->prepare($sql2);
  // $query->execute([$Username]);
  // $result = $query->rowCount();
  // if($result > 0){
     
  //     echo '<script>alert("Oops! Username Already Exist!")</script>';
  //     echo "<script type='text/javascript'>document.location='userSignup.php';</script>";
  // }
  // else{
    //$sql="SELECT * FROM customer WHERE custID=:id";
  //$query=$dbh->prepare($sql);
  //$query->bindParam(':id',$id,PDO::PARAM_STR);
  //$query->execute();
  //$results=$query->fetch(PDO::FETCH_ASSOC);
  //if($query->rowCount()>0)
  //{
   // echo "<script type='text/javascript'>alert('unsuccess!!!');</script>";
 // }else

    $regeditid=intval($_GET['regeditid']);

  $sql="UPDATE customer set custID=:id,custFirstname=:custFirstname,custLastname=:custLastname,custEmail=:custEmail,custCnumber=:custCnumber,custAddress=:custAddress,vehicleType=:vehicleType,Username=:Username,Password=:Password WHERE custID=:regeditid";
  $query=$dbh->prepare($sql);
  $query->bindParam(':id',$id,PDO::PARAM_STR);
  // $query->bindParam(':profileImg',$profileImg,PDO::PARAM_STR);
  $query->bindParam(':custFirstname',$custFirstname,PDO::PARAM_STR);
  $query->bindParam(':custLastname',$custLastname,PDO::PARAM_STR);
  $query->bindParam(':custEmail',$custEmail,PDO::PARAM_STR);
  $query->bindParam(':custCnumber',$custCnumber,PDO::PARAM_STR);
  $query->bindParam(':custAddress',$custAddress,PDO::PARAM_STR);
  $query->bindParam(':vehicleType',$vehicleType,PDO::PARAM_STR);
  $query->bindParam(':Username',$Username,PDO::PARAM_STR);
  $query->bindParam(':Password',$Password,PDO::PARAM_STR);
  $query->bindParam(':regeditid',$regeditid,PDO::PARAM_STR);

  $query->execute();

  // echo "<script type='text/javascript'>document.location='login.php';</script>";

  }
  // }
  
  
   
}

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
<<<<<<< HEAD
    include('Uheader.php');
=======
    include('C:\xampp\htdocs\MechanicNow\Mechanicnow\Uheader.php');
>>>>>>> 91353913ab3db1fa39fcabc88e4e7de19faa4682
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
                    <input type="file" name="profileImg" id="logo"><br><br>
                    <input type="hidden" name="id" value="<?php echo htmlentities($result->custID);?>"
                            required="required" class="form-control">
                    <input type="text" name="custFirstname"  value="<?php echo htmlentities($result->custFirstname);?>" class="textin" placeholder="First Name" required>
                    <input type="text" name="custLastname" value="<?php echo htmlentities($result->custLastname);?>" class="textin" placeholder="Last Name" required>
                    <input type="email" name="custEmail" value="<?php echo htmlentities($result->custEmail);?>" class="textin" placeholder="Email Address" required>
                    <input type="tel" name="custCnumber" value="<?php echo htmlentities($result->custCnumber);?>" class="textin" pattern="((^(\+)(\d){12}$)|(^\d{11}$))" placeholder="Phone Number" required>
                    <h4 style="padding-bottom: 1em;">Address</h4>
                        <div class="addresspanel" style="padding-bottom: 1em;">
                            <input type="text" id="Province" name="custAddress" value="<?php echo htmlentities($result->custAddress);?>" class="textin" placeholder="Province" style="width:90%;" required>  
                            <input type="text" id="City" name="custAddress" value="<?php echo htmlentities($result->custAddress);?>" class="textin" placeholder="City" style="width:90%;" required>
                            <input type="text" id="Barangay" name="custAddress" value="<?php echo htmlentities($result->custAddress);?>" class="textin" placeholder="Barangay" style="width:90%;" required>
                        </div>
                        <select type="text" name="vehicleType" class="textin" placeholder="Vehicle Type" required>
                       
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
                            <option value="Bicycle">Bicycle</option>
                            <option value="Motorcycle">Motorcycle</option>
                            <option value="Four Wheels">Four Wheels</option>

                        </select>
                    </br>
                    </br>
                    <h2>Account Information</h2>
                    <input type="text" name="Username" value="<?php echo htmlentities($result->Username);?>" class="textin" placeholder="Username" required>
                    <div class="predit" style="margin-top: 2em; margin-bottom: 5em;"><a id="myBtn" style="text-decoration: none; font-size: 18px;  font-weight: 800; padding-inline: 2.8em; padding-block: 1em; cursor: pointer; color: white;">Confirm</a></div>
                    
                </div>
            </div>
            <div id="myModal" class="modals">

              <!-- Modal content -->
              <div class="modal-contents">
                <div class="modal-header">
                  <span class="closed">&times;</span>
                  <h3 class="pptext">Enter your password to save changes</h3>
                </div>
                <div class="modal-body">
                <input type="password" name="Password" class="textin" placeholder="Password" required><br>
                <input type="password" name="custconfirmpassword" class="textin" placeholder="Confirm Password" required>
                </div>
                <div class="modal-footer">
                <button class="editbtn btnedit" name="edit">Save Changes</button>
                </div>
              </div>

            </div>
            <?php }}?>
            </form>
        </section>
        
        <?php
<<<<<<< HEAD
        include('bottom-nav.php');
=======
        include('C:\xampp\htdocs\MechanicNow\Mechanicnow\bottom-nav.php');
>>>>>>> 91353913ab3db1fa39fcabc88e4e7de19faa4682
        ?>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
