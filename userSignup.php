<?php
session_start();
include('C:\xampp\htdocs\DEVGRU\Mechanicnow\config.php');
if(isset($_POST['register']))
{
    $custFirstname=strtoupper($_POST['custFirstname']);
    $custLastname=strtoupper($_POST['custLastname']);
    $custAddress=strtoupper($_POST['custAddress']);
    $custEmail=$_POST['custEmail'];
    $custCnumber=strtoupper($_POST['custCnumber']);
    $vehicleType=$_POST['vehicleType'];
    $Username=strtoupper($_POST['Username']);
    $Password=$_POST['Password'];

    //check password
  if ($_POST['Password']!= $_POST['custconfirmpassword'])
  {
    echo '<script>alert("Oops! Password did not match! Please try again.")</script>';
    echo "<script type='text/javascript'>document.location='userSignup.php';</script>";
  }
  else{
    //hashed password
    $input = $_POST['Password'];
    $hashedPwd = password_hash($Password, PASSWORD_DEFAULT);


  //check email
  $sql2="SELECT * FROM customer WHERE Username = ?";
  $query = $dbh->prepare($sql2);
  $query->execute([$Username]);
  $result = $query->rowCount();
  if($result > 0){
      // $error="<span class='text-danger'>Username has already Exist!!</span>";
      echo '<script>alert("Oops! Username Already Exist!")</script>';
      echo "<script type='text/javascript'>document.location='userSignup.php';</script>";
  }
  else{
    $sql="SELECT * FROM customer WHERE Username=:Username";
  $query=$dbh->prepare($sql);
  $query->bindParam(':Username',$Username,PDO::PARAM_STR);
  $query->execute();
  $results=$query->fetch(PDO::FETCH_ASSOC);
  if($query->rowCount()>0)
  {
    echo "<script type='text/javascript'>document.location='login.php';</script>";
  }else{


  $sql="INSERT INTO customer(custFirstname, custLastname, custAddress, custEmail, custCnumber, vehicleType, Username, Password)VALUES(:custFirstname, :custLastname, :custAddress, :custEmail, :custCnumber, :vehicleType, :Username, :hashedPwd)";
  $query=$dbh->prepare($sql);
  $query->bindParam(':custFirstname',$custFirstname,PDO::PARAM_STR);
  $query->bindParam(':custLastname',$custLastname,PDO::PARAM_STR);
  $query->bindParam(':custAddress',$custAddress,PDO::PARAM_STR);
  $query->bindParam(':custEmail',$custEmail,PDO::PARAM_STR);
  $query->bindParam(':custCnumber',$custCnumber,PDO::PARAM_STR);
  $query->bindParam(':vehicleType',$vehicleType,PDO::PARAM_STR);
  $query->bindParam(':Username',$Username,PDO::PARAM_STR);
  $query->bindParam(':hashedPwd',$hashedPwd,PDO::PARAM_STR);
  $query->execute();

  session_regenerate_id();
  $_SESSION[$input];
  echo "<script type='text/javascript'>document.location='login.php';</script>";
}
  }
  }
  
  
   
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
    <!-- <div class="signupcontent"> -->
        <!-- <div class="sidebackground"></div> -->
            <form method="POST">
                <div class="side-content">
                        <h1>Create an Account</h1>
                        <h3>Personal Information</h3>
                        <input type="text" name="custFirstname" class="textin" placeholder="First Name" required>
                        <input type="text" name="custLastname" class="textin" placeholder="Last Name" required>
                        <input type="email" name="custEmail" class="textin" placeholder="Email Address" required>
                        <input type="tel" name="custCnumber" class="textin" pattern="((^(\+)(\d){12}$)|(^\d{11}$))" placeholder="Phone Number" required>
                        <h4 style="padding-bottom: 1em;">Address</h4>
                        <div class="addresspanel" style="padding-bottom: 1em;">
                            <input type="text" id="Province" name="custAddress" class="textin" placeholder="Province" style="width:90%;" required>  
                            <input type="text" id="City" name="custAddress" class="textin" placeholder="City" style="width:90%;" required>
                            <input type="text" id="Barangay" name="custAddress" class="textin" placeholder="Barangay" style="width:90%;" required>
                        </div>
                        <select type="text" name="vehicleType" class="textin" placeholder="Vehicle Type" required>
                            <div style="color: gray;"><option style="color: gray;">Choose Vehicle Type...</option></div>
                            <option value="Bicycle">Bicycle</option>
                            <option value="Motorcycle">Motorcycle</option>
                            <option value="Four wheels">Four wheels</option>    
                        </select>
                        <h3>Account Information</h3>
                        <input type="text" name="Username" class="textin" placeholder="Username" required>
                        <input type="password" name="Password" class="textin" placeholder="Password" required>
                        <input type="password" name="custconfirmpassword" class="textin" placeholder="Confirm Password" required>
                        <button class="createaccount" name="register">Create Account</button>
                        
                </div>
            </form>
            
        
    <!-- </div> -->
    <footer>

        <div class="footer-header">
            <div class="footer-logo"><img src="img/footerlogo.png" alt=""></div>
            <h3 class="mechanicnowtitle">Mechanic Now</h3>
        </div>
        <ul class="listfooter">
            <li>Home</li>
            <li>About Us</li>
        </ul>
        <div class="signupfooter">
            <h4 class="signup-button-footer"><a href="">Sign Up</a></h4>
        </div>
        <div class="credits">
            <p>© 2021 Mechanic Now.</p>
        </div>
</footer>
<script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.0.js"></script>
<script type="text/javascript">
    $('#my-city-dropdown').ph_locations({'location_type': 'cities'});
</script>
<script src="js/main.js"></script>
</body>
</html>