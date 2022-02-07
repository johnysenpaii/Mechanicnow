<style>
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    padding: 12px 16px;
    z-index: 1;
}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
<header class="Uheader">
    <img src="img/mechanicnowlogo.svg" class="logo" alt="">
    <ul class="topnav">
        <li><a href="userDashboard.php">Home</a></li>
        <li><a href="mechanicPage.php">Mechanic</a></li>
    </ul>
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav class="navstyle">
        <ul>
            <li><a href="">Welcome <?php echo htmlentities($_SESSION["Username"]); ?></a></li>
            <li><a href="">
                    <div class="dropdown">
                        <span>Notifications</span>
                        <div class="dropdown-content">
                            <div class=""> New Update!</div>
                            <div class=""> Plaese rate us.</div>
                            <div class=""> Got any Problem?</div>
                        </div>
                    </div>
                </a></li>
            <li><a href="">Settings</a></li>
            <li><a href="userProfile.php">Profile</a></li>
            <li><a onclick="myconfirm()">Logout</a></li>

        </ul>
    </nav>
    <label for="nav-toggle" class="nav-toggle-label">
        <span></span>
    </label>
</header>
<script>
function myconfirm() {
  let text = "Are sure you want to leave?.";
  if (confirm(text) == true) {
    location.replace("login.php")
  } else {
    location.reload();
  }}
</script>