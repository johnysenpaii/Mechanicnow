
<header class="Mheader">
        <img src="img/mechanicnowlogo.svg" class="logo" alt="">
        <ul class="topnav">
            <li><a href="">Home</a></li>
            <li><a href="">Vehicle</a></li>
            <li><a href="">Mechanic</a></li>
        </ul>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav class="navstyle">
            <ul>
                <li><a href="">Welcome <?php echo htmlentities($_SESSION["Username"]);?></a></li>
                <li><a href="">Notifications</a></li>
                <li><a href="">Settings</a></li>
                <li><a href ="mechanicProfile.php">Profile</a></li>
            </ul>
        </nav>
        <label for="nav-toggle" class="nav-toggle-label">
            <span></span>
        </label>
    </header>