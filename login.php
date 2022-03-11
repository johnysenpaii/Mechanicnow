<?php
session_start();
include('C:\xampp\htdocs\Mechanicnow\Mechanicnow\config.php');
if(isset($_POST['Login']))
{
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
     //hashedpwd
    //$valid = password_verify($input, $Password); //1 or 0

    $sql="SELECT * FROM customer WHERE Username=:Username AND Password=:Password AND ban='unban'";
    $query=$dbh->prepare($sql);
    $query->bindParam(':Username',$Username,PDO::PARAM_STR);
    $query->bindParam(':Password',$Password,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
    if($ban='unban' && $query->rowCount()>0)
    {
      session_regenerate_id();
      $_SESSION['custID']=$results['custID'];
      $_SESSION['custFirstname']=$results['custFirstname'];
      $_SESSION['custLastname']=$results['custLastname'];
      $_SESSION['Username']=$results['Username'];
      $_SESSION['Password']=$results['Password'];
      echo "<script type='text/javascript'>alert('Login Success');</script>";
      echo "<script type='text/javascript'>document.location='userDashboard.php';</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('Your account has been banned and Please check your email');</script>";

    }

    

    $sql="SELECT * FROM mechanic WHERE Username=:Username AND Password=:Password AND status='approve'";
    $query=$dbh->prepare($sql);
    $query->bindParam(':Username',$Username,PDO::PARAM_STR);
    $query->bindParam(':Password',$Password,PDO::PARAM_STR); 
    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
    if($status='approve' && $query->rowCount()>0)
    {
   
      session_regenerate_id();
      $_SESSION['mechID']=$results['mechID'];
      $_SESSION['mechFirstname']=$results['mechFirstname'];
      $_SESSION['mechLastname']=$results['mechLastname'];
      $_SESSION['Username']=$results['Username'];
      $_SESSION['Password']=$results['Password'];
      $_SESSION['status']=$results['status'];
      echo "<script type='text/javascript'>alert('Login Success');</script>";
      echo "<script type='text/javascript'>document.location='mechanicDashboard.php';</script>";
      
      
    }
    else
    {
        echo "<script type='text/javascript'>alert('Wait for your approval or your account has been banned and Please check your email');</script>";
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
</head>
<body>
    <form method="POST">
        <div class="side-content login-content">
                <div class="image-login"><img src="img/mnrevisedlogo864-nooutline.png" alt=""></div>
                <h1>Welcome!</h1>
                <input type="text" class="textin" name="Username" placeholder="Username" required>
                <input type="password" class="textin" name="Password" placeholder="Password" required>
                <p><a href="">Forgot Password?</a></p>
                <button class="createaccount" name="Login">Login</button>
                <p>Don't Have an Account yet? <span><div id="myBtn"><a>Sign up</a></div></span></p>
        </div>
    </form>
    <section>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <h3>Choose how you want to use Mechanic now</h3>
                    <div class="cardlogo-user">
                        <a href ="userSignup.php">
                            <img src="img/steering-wheel.png" alt="">
                        </a>
                        <h4 class="logo-label">VEHICLE OWNER</h4>
                    </div>
                    <div class="cardlogo-user mechanic">
                        <a href ="mechanicSignup.php">
                            <img src="img/mechanic-tools.png" alt="">
                        </a>
                        <h4 class="logo-label">MECHANIC</h4>
                    </div>
                    <div class="prompt-login">
                        <p>Do you have an account? <span><a href="login.php">login</a></span></p>

                    </div>
            </div>
        </div>

        <div class="testing">
            
        </div>


    </section>

    <footer>

        <div class="footer-header">
            <div class="footer-logo"><img src="img/footerlogo.png" alt=""></div>
            <h3 class="mechanicnowtitle">Mechanic Now</h3>
        </div>
        <div class="credits">
            <p>© 2021 Mechanic Now.</p>
        </div>
        
        <div class="adminLog">
            <a href="adminLogin.php">sign-in as admin</a>
        </div>
    </footer>
    <script src="js/main.js"></script>
    <script type="text/javascript">
        function preventBack(){window.history.forward();}
        setTimeout("preventBack()",0);
        window.onunload = function(){ null };
    </script>
    
</body>
</html>