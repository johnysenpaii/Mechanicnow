
<header class="Mheader">
        <img src="img/mechanicnowlogo.svg" class="logo" alt="">
        <ul class="topnav">
            <li><a href="mechanicDashboard.php">Home</a></li>
        </ul>
        <input type="checkbox" id="nav-toggle" class="nav-toggle">
        <nav class="navstyle">
            <ul>
                <li><a href="">Welcome <?php echo htmlentities($_SESSION["Username"]);?></a></li>
                <li><a href="">
                    <div class="dropdown">
                        <span>Notifications</span>
                        <div class="dropdown-content">
                            <p>New Update!!</p>
                        </div>
                    </div>
                </a></li>
                <li><a href="">Settings</a></li>
                <li><a href ="mechanicProfile.php">Profile</a></li>
                <li><a  onclick="myconfirm()">Logout</a></li>
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