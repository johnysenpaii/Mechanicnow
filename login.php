<?php
session_start();
include('C:\xampp\htdocs\Mechanicnow\Mechanicnow\config.php');
if(isset($_POST['Login']))
{
    $Username=$_POST['Username'];
    
    //$valid = password_verify($input, $Password); //1 or 0
    $sql1 = "SELECT * FROM customer WHERE Username=:Username AND role='vehicleOwner'";
    $query=$dbh->prepare($sql1);
    $query->bindParam(':Username',$Username,PDO::PARAM_STR);
    $query->execute();
    $results=$query->fetch(PDO::FETCH_ASSOC);
    if($query->rowCount() == 1){
        $query->fetch(PDO::FETCH_ASSOC);
        $custID=$results['custID'];
        $custFirstname=$results['custFirstname'];
        $custLastname=$results['custLastname'];
        $custAddress=$results['custAddress'];
        $attemptedUsername=$results['Username'];
        $hashedPwd=$results['Password'];

        $Password=$_POST['Password'];
        if(password_verify($Password, $hashedPwd) == 1){
            session_regenerate_id();
            $_SESSION['custID']=$custID;
            $_SESSION['custFirstname']=$custFirstname;
            $_SESSION['custLastname']=$custLastname;
            $_SESSION['custAddress']=$custAddress;
            $_SESSION['Username']=$attemptedUsername;
            $_SESSION['Password']=$hashedPwd;
            echo "<script type='text/javascript'>document.location='userDashboard.php';</script>";
        }else{
           echo '<script>alert("Oops! Username and Password mismatch!")</script>';
        }
    }else{
        //echo '<script>alert("User not found!")</script>';
        $sql="SELECT * FROM mechanic WHERE Username=:Username AND role='MECHANIC'";
        $query1=$dbh->prepare($sql);
        $query1->bindParam(':Username',$Username,PDO::PARAM_STR);
        $query1->execute();
        $results1=$query1->fetch(PDO::FETCH_ASSOC);
        if($query1->rowCount() == 1){
            $query1->fetch(PDO::FETCH_ASSOC);
            $mechID=$results1['mechID'];
            $mechFirstname=$results1['mechFirstname'];
            $mechLastname=$results1['mechLastname'];
            $attemptedMUsername=$results1['Username'];
            $mechAddress=$results1['mechAddress'];
            $hashedPwdM=$results1['Password'];
        
            $Password1=$_POST['Password'];
            if(password_verify($Password1, $hashedPwdM) == 1){
                session_regenerate_id();
                $_SESSION['mechID']=$mechID;
                $_SESSION['mechFirstname']=$mechFirstname;
                $_SESSION['mechLastname']=$mechLastname;
                $_SESSION['mechAddress']=$mechAddress;
                $_SESSION['Username']=$attemptedMUsername;
                $_SESSION['Password']=$hashedPwdM;
                echo "<script type='text/javascript'>document.location='mechanicDashboard.php';</script>";
            }else{
            echo '<script>alert("Oops! Username and Password mismatch!")</script>';
            }
        }else{
            //echo '<script>alert("User not found!")</script>';
            $Password=$_POST['Password'];
            $sql="SELECT * FROM admin WHERE Username=:Username AND Password=:Password AND role='admin'";
            $query=$dbh->prepare($sql);
            $query->bindParam(':Username',$Username,PDO::PARAM_STR);
            $query->bindParam(':Password',$Password,PDO::PARAM_STR);
            $query->execute();
            $results=$query->fetch(PDO::FETCH_ASSOC);
            if($query->rowCount()>0)
            {
            session_regenerate_id();
            $_SESSION['Username']=$results['Username'];
            $_SESSION['Password']=$results['Password'];
            echo "<script type='text/javascript'>alert('Welcome Admin!!');</script>";
            echo "<script type='text/javascript'>document.location='adminSide.php';</script>";
            }
            else{
                echo "<script type='text/javascript'>alert('User not Found!');</script>";
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
    <title>Mechanic Now | Login</title>
    <link rel="shortcut icon" type="x-icon" href="img/mechanicnowlogo.svg">
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