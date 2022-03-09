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
    <link rel="shortcut icon" type="x-icon" href="img/mechanicnowlogo.svg">
</head>
<body>
    <header> 
        <img src="img/mechanicnowlogo.svg" class="logo" alt="">
        <p>Mechanic Now</p>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="login.php">Sign in</a></li>
                <li id="myBtn"><a>Sign up</a></li>
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
    </header>

    <div class="banner banner-gradient">
        <div class="container container--narrow">
            <div class="bannertext">
                <div class="banner-logo"><img src="img/mn-bw(864).png" alt=""></div>
                <div class="banner-content">
                    <H1>Mechanic <span style="color:blueviolet;">Now</span></H1>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit doloribus maxime architecto repudiandae porro voluptatem, quae, quia aperiam, corporis ad inventore? Corporis rerum laudantium tempore!</p>
                </div>
            </div>
        </div>
    </div>

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
                <h4 class="signup-button-footer"><a href="userSignup.html">Sign Up</a></h4>
            </div>
            <div class="credits">
                <p>© 2021 Mechanic Now.</p>
            </div>
    </footer>
    <script src="js/main.js"></script>
</body>
</html>