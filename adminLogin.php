<?php
session_start();
include('C:\xampp\htdocs\Mechanicnow\Mechanicnow\config.php');
if(isset($_POST['createaccount']))
{
    $username=$_POST['adminUserN'];
    $password=$_POST['adminPass'];

    $sql="SELECT * FROM admin WHERE adminUserN=:adminUserN AND adminPass=:adminPass";
    $query=$dbh->prepare($sql);
    $query->bindParam(':adminUserN',$username,PDO::PARAM_STR);
    $query->bindParam(':adminPass',$password,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
    if($query->rowCount()>0)
    {
      session_regenerate_id();
      $_SESSION['adminUserN']=$results['adminUserN'];
      $_SESSION['adminPass']=$results['adminPass'];
      echo "<script type='text/javascript'>alert('Welcome Admin!!');</script>";
      echo "<script type='text/javascript'>document.location='adminSide.php';</script>";
    }
    else{
        echo "<script type='text/javascript'>alert('Make sure your password is the same');</script>";
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
                <h1>Welcome Admin!</h1>
                <input type="text" id="adminUserN" name="adminUserN" class="textin" placeholder="Username" required>
                <input type="password" id="adminPass" name="adminPass" class="textin" placeholder="Password" required>
                <p><a href="">Forgot Password?</a></p>
                <button class="createaccount" id="createaccount" name="createaccount">Login</button>
        </div>
    </form>
    <section>
        <div id="myModal" class="modal">
            <!-- Modal content -->
            <div class="modal-content">
              <span class="close">&times;</span>
              <h3>Choose how you want to use Mechanic now</h3>
                    <div class="cardlogo-user">
                        <a href ="userSignup.html">
                            <img src="img/steering-wheel.png" alt="">
                        </a>
                        <h4 class="logo-label">VEHICLE OWNER</h4>
                    </div>
                    <div class="cardlogo-user mechanic">
                        <a href ="mechanicSignup.html">
                            <img src="img/mechanic-tools.png" alt="">
                        </a>
                        <h4 class="logo-label">MECHANIC</h4>
                    </div>
                    <div class="prompt-login">
                        <p>Do you have an account? <span><a href="login.html">login</a></span></p>
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
    <script type="text/javascript">
        function preventBack(){window.history.forward();}
        setTimeout("preventBack()",0);
        window.onunload = function(){ null };
    </script>
</body>
</html>