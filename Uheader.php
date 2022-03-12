<style><?php include('C:\xampp\htdocs\Mechanicnow\css\style.css'); ?></style>
<script><?php include('C:\xampp\htdocs\Mechanicnow\js\main.js');?></script>
<header><!--Uheader-->
    <img src="img/mechanicnowlogo.svg" class="logo" alt="">
    <ul class="topnav">
        <li><a href="userDashboard.php">Home</a></li>
        <li><a href="findMechShops.php">Find Mechanic Shops</a></li>
        <li><a href="RequestHistoryPage.php">Request log</a></li>
        <li><a href="monitorMechanicServices.php">Activity log</a></li>
    </ul>
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav class="navstyle">
        <ul>
            <li><a class="headlogo" href="userProfile.php">
                <div class="h-logo"><img src="img/user.png" alt=""> </div>
                <?php echo htmlentities($_SESSION["Username"]); ?></a></li>
            <li><a class="headlogo" href="">
                    <div class="h-logo"><img src="img/bell.png" alt=""> </div>
                    <div class="dropdown">
                        <text>Notifications</text>
                        <!-- <div class="dropdown-content">
                            <div class=""> New Update!</div>
                            <div class=""> Please rate us.</div>
                            <div class=""> Got any Problem?</div>
                        </div> -->
                    </div>
                </a>
            </li>
            <li>
                <a class="headlogo" href="">
                   <div class="h-logo"><img src="img/settings.png" alt=""> </div>
                    <text>Settings</text>
                </a>
            </li>
            <!-- <li><a href="">    
                    <div class="dropdown">
                        <span>History</span>
                        <div class="dropdown-content">
                            <div class="row">
                                <div class="column">
                                    <h5>category:</h5>
                                    <h6>Flat Tires</h6>
                                    <h6>Engine Failure</h6>


                                </div>
                                <div class="column">
                                    <h5> date:</h5>
                                    <h6>01-22-2022</h6>
                                    <h6>01-21-2022</h6>


                                </div>
                                <div class="column">
                                    <h5> amount:</h5>
                                    <h6>P 350</h6>
                                    <h6>P 360</h6>


                                </div>
                                <div class="column" >
                                    <h5> mechanic:</h5>
                                    <h6>francis</h6>


                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </li> -->
            <!-- <li>
                <a class="headlogo" href="userProfile.php">
                    <div class="h-logo"><img src="img/user.png" alt=""> </div>
                    <text>Profile</text>
                </a>
            </li> -->
            <!-- <li><span>
                    <div id="myBtn"><a>Send Feedbacks</a></div>
                </span>
            </li> -->

            <li><a onclick="myconfirm()">Logout</a></li>

        </ul>
    </nav>
    <!-- <section>
        This section is for the feedback
        <form action="">
            <div id="myModal" class="modal">
                Modal Content
                <div class="modal-content">
                    <div class="row">
                        <span class="close">&times;</span>
                        <h3>Rate us</h3>
                        <div class="star-rating">
                            <input type="radio" name="stars" id="star-a" value="5" />
                            <label for="star-a"></label>

                            <input type="radio" name="stars" id="star-b" value="4" />
                            <label for="star-b"></label>

                            <input type="radio" name="stars" id="star-c" value="3" />
                            <label for="star-c"></label>

                            <input type="radio" name="stars" id="star-d" value="2" />
                            <label for="star-d"></label>

                            <input type="radio" name="stars" id="star-e" value="1" />
                            <label for="star-e"></label>
                        </div>
                        <textarea name="" id="" cols="30" rows="10"> Write your Comment Here</textarea>
                        <button>POST</button>
                    </div>
                </div>

            </div>
        </form>


        <div class="testing">

        </div>


    </section> -->
    <!-- kani na label kay para mobile responsive toggle -->
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
    }
}
</script>