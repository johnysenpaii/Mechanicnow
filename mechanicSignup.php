<?php
session_start();
include('config.php');
if(isset($_POST['register']))
{
    $mechFirstname=$_POST['mechFirstname'];
    $mechLastname=$_POST['mechLastname'];
    $mechAddress=$_POST['mechAddress'];
    $mechEmail=$_POST['mechEmail'];
    $mechCnumber=$_POST['mechCnumber'];
    $mechValidID=$_POST['mechValidID'];
    $Specialization=$_POST['Specialization'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $role=$_POST['role'];
   
      //check password
      if ($_POST['Password']!= $_POST['passwordcheck'])
      {
        echo "<script>alert('Oops! Password did not match! Please try again.')</script>";
        echo "<script type='text/javascript'>document.location='mechanicSignup.php';</script>";
      }
      else{
        //hashed password
        $hashedPwd = password_hash($Password, PASSWORD_DEFAULT);
        //check email
        $sql = "SELECT * FROM mechanic WHERE mechEmail = ?";
        $query = $dbh->prepare($sql);
        $query->execute([$mechEmail]);
        $result = $query->rowCount();
        if($result > 0){
            //$error="<span class='text-danger'>Email hac already Exist!!</span>";
            echo "<script>alert('Oops! Email has already Exist!.')</script>";
            echo "<script type='text/javascript'>document.location='mechanicSignup.php';</script>";
        }else{
          //check Username
          $sql2="SELECT * FROM mechanic WHERE Username = ?";
          $query = $dbh->prepare($sql2);
          $query->execute([$Username]);
          $result = $query->rowCount();
          if($result > 0){
              // $error="<span class='text-danger'>Username has already Exist!!</span>";
              echo "<script>alert('Oops! Username Already Exist!')</script>";
              echo "<script type='text/javascript'>document.location='mechanicSignup.php';</script>";
          }else{
            $sql="SELECT * FROM mechanic WHERE Username=:Username";
            $query=$dbh->prepare($sql);
            $query->bindParam(':Username',$Username,PDO::PARAM_STR);
            $query->execute();
            $results=$query->fetch(PDO::FETCH_ASSOC);
            if($query->rowCount()>0)
            {
              echo "<script type='text/javascript'>document.location='login.php';</script>";
            }else{
              $sql="INSERT INTO mechanic(mechFirstname, mechLastname, mechAddress, mechEmail, mechCnumber, mechValidID, Specialization, Username, Password, role)VALUES(:mechFirstname, :mechLastname, :mechAddress, :mechEmail, :mechCnumber, :mechValidID, :Specialization, :Username, :hashedPwd, :role)";
              $query=$dbh->prepare($sql);
              $query->bindParam(':mechFirstname',$mechFirstname,PDO::PARAM_STR);
              $query->bindParam(':mechLastname',$mechLastname,PDO::PARAM_STR);
              $query->bindParam(':mechAddress',$mechAddress,PDO::PARAM_STR);
              $query->bindParam(':mechEmail',$mechEmail,PDO::PARAM_STR);
              $query->bindParam(':mechCnumber',$mechCnumber,PDO::PARAM_STR);
              $query->bindParam(':mechValidID',$mechValidID,PDO::PARAM_STR);
              $query->bindParam(':Specialization',$Specialization,PDO::PARAM_STR);
              $query->bindParam(':Username',$Username,PDO::PARAM_STR);
              $query->bindParam(':hashedPwd',$hashedPwd,PDO::PARAM_STR);
              $query->bindParam(':role',$role,PDO::PARAM_STR);
              $query->execute();
              session_regenerate_id();
              echo "<script type='text/javascript'>document.location='login.php';</script>";
            }
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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Stick+No+Bills:wght@600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Mechanic Now | Sign Up</title>
    <link rel="shortcut icon" type="x-icon" href="img/mechanicnowlogo.svg">
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
                        <input type="email" name="mechEmail" class="textin" placeholder="Email Address" required>
                        <input type="tel" name="mechCnumber" class="textin" pattern="((^(\+)(\d){12}$)|(^\d{11}$))" placeholder="Phone number" required>
                        <h4 style="padding-bottom: 1em;">Address</h4>
                        <div class="addresspanel" style="padding-bottom: 1em;">
                            <input type="text" id="Province" name="mechAddress" class="textin" placeholder="Province" style="width:90%;" required>  
                            <input type="text" id="City" name="mechAddress" class="textin" placeholder="City" style="width:90%;" required>
                            <input type="text" id="Barangay" name="mechAddress" class="textin" placeholder="Barangay" style="width:90%;" required>
                        </div>
                        <select type="text" name="Specialization" class="textin" placeholder="Select Specialization..." required>
                            <div style="color: gray;"><option style="color: gray;" value="" disabled selected hidden>Select Specialization...</option></div>
                            <option value="Motorcycle Mechanic">Motorcycle Mechanic</option>
                            <option value="Bicycle Mechanic">Bicycle Mechanic</option>
                            <option value="Car Mechanic">Car Mechanic</option>    
                        </select>
                        <input type="text" name="mechValidID" class="textin" placeholder="Attach Valid ID" required>
                        <h3>Account Information</h3>
                        <input type="text" name="Username" class="textin" placeholder="Username" required>
                        <input type="password" name="Password" class="textin" placeholder="Password" required>
                        <input type="password" name ="passwordcheck" class="textin" placeholder="Confirm Password" required>
                        <input type="hidden" name="role" value="mechanic">
                        <button class="register" name="register">Create Account</button>
                </div>
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