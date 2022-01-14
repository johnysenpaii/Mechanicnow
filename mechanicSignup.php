<?php
session_start();
include('C:\xampp\htdocs\DEVGRU\Mechanicnow\config.php');
if(isset($_POST['register']))
{
    $mechFirstname=strtoupper($_POST['mechFirstname']);
    $mechLastname=strtoupper($_POST['mechLastname']);
    $mechAddress=strtoupper($_POST['mechAddress']);
    $mechEmail=strtoupper($_POST['mechEmail']);
    $mechCnumber=strtoupper($_POST['mechCnumber']);
    $mechValidID=strtoupper($_POST['mechValidID']);
    $Specialization=strtoupper($_POST['Specialization']);
    $Username=strtoupper($_POST['Username']);
    $Password=strtoupper($_POST['Password']);
   

    $sql="SELECT * FROM mechanic WHERE mechLastname=:mechLastname";
    $query=$dbh->prepare($sql);
    $query->bindParam(':mechLastname',$mechLastname,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
    if($query->rowCount()>0)
    {
      echo "<script type='text/javascript'>document.location='login.php';</script>";
    }else{


    $sql="INSERT INTO mechanic(mechFirstname, mechLastname, mechAddress, mechEmail, mechCnumber, mechValidID, Specialization, Username, Password)VALUES(:mechFirstname, :mechLastname, :mechAddress, :mechEmail, :mechCnumber, :mechValidID, :Specialization, :Username, :Password)";
    $query=$dbh->prepare($sql);
    $query->bindParam(':mechFirstname',$mechFirstname,PDO::PARAM_STR);
    $query->bindParam(':mechLastname',$mechLastname,PDO::PARAM_STR);
    $query->bindParam(':mechAddress',$mechAddress,PDO::PARAM_STR);
    $query->bindParam(':mechEmail',$mechEmail,PDO::PARAM_STR);
    $query->bindParam(':mechCnumber',$mechCnumber,PDO::PARAM_STR);
    $query->bindParam(':mechValidID',$mechValidID,PDO::PARAM_STR);
    $query->bindParam(':Specialization',$Specialization,PDO::PARAM_STR);
    $query->bindParam(':Username',$Username,PDO::PARAM_STR);
    $query->bindParam(':Password',$Password,PDO::PARAM_STR);
    $query->execute();

    echo "<script type='text/javascript'>document.location='login.html';</script>";
  }
  //check email
  $query = $pdo->prepare("SELECT * FROM mechanic WHERE custUsername = ?");
  $query->execute([$Username]);
  $result = $query->rowCount();
  if($result > 0){
      $error="<span class='text-danger'>Username hac already Exist!!</span>";
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
                        <input type="text" name="mechFirstname" class="textin" placeholder="First Name" required>
                        <input type="text" name="mechLastname" class="textin" placeholder="Last Name" required>
                        <input type="text" name="mechAddress" class="textin" placeholder="Address" required>
                        <input type="email" name="mechEmail" class="textin" placeholder="email" required>
                        <input type="number" name="mechCnumber" class="textin" placeholder="number" required>
                        <input type="text" name="mechValidID" class="textin" placeholder="validation" required>
                        <input type="text" name="Specialization" class="textin" placeholder="Specialization" required>
                        <h3>Account Information</h3>
                        <input type="text" name="Username" class="textin" placeholder="Username" required>
                        <input type="password" name="Password" class="textin" placeholder="Password" required>
                        <input type="password" class="textin" placeholder="Confirm Password" required>
                        <button class="register" name="register">Create Account</button>
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
<script src="js/main.js"></script>
</body>
</html>