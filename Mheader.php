
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
    width: 300px;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* use reverse flexbox to take advantage of flex-direction: reverse */
.star-rating {
    display: flex;
    align-items: center;
    width: 160px;
    flex-direction: row-reverse;
    justify-content: space-between;
    margin: 40px auto;
    position: relative;
}

/* hide the inputs */
.star-rating input {
    display: none;
}

/* set properties of all labels */
.star-rating>label {
    width: 30px;
    height: 30px;
    font-family: Arial;
    font-size: 30px;
    transition: 0.2s ease;
    color: orange;
}

/* give label a hover state */
.star-rating label:hover {
    color: #ff69b4;
    transition: 0.2s ease;
}

.star-rating label:active::before {
    transform: scale(1.1);
}

/* set shape of unselected label */
.star-rating label::before {
    content: '\2606';
    position: absolute;
    top: 0px;
    line-height: 26px;
}

/* set full star shape for checked label and those that come after it */
.star-rating input:checked~label:before {
    content: '\2605';
}

@-moz-document url-prefix() {
    .star-rating input:checked~label:before {
        font-size: 36px;
        line-height: 21px;
    }
}

.modal-content {
    display: flex;
    align-items: center;
}

textarea {
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-weight: 20;
}

.text1 {
    text-align: start;
}

* {
    box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
    padding: auto;
    height: auto;
    /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>
<header class="Mheader">
    <img src="img/mechanicnowlogo.svg" class="logo" alt="">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <nav class="navstyle">
        <ul>
            <li><a href="mechanicDashboard.php">Welcome <?php echo htmlentities($_SESSION["Username"]); ?></a></li>
            <li><a href="mechanicActivityLog.php">Activity log</a></li>
            <li><a href="">
                    <div class="dropdown">
                        <span>Notifications</span>
                        <div class="dropdown-content">
                            <div class=""> New messsage</div>
                            <div class=""> Plaese rate us.</div>
                            <div class=""> Got any Problem?</div>
                        </div>
                    </div>
                </a></li>
            <li><a href="">Settings</a></li>
            <li><a href="">
                    <div class="dropdown">
                        <span>History</span>
                        <div class="dropdown-content">
                            <div class="row">
                                <div class="column">
                                    <h5>category:</h5>
                                    <h6>Flat Tires</h6>
                                   


                                </div>
                                <div class="column">
                                    <h5> date:</h5>
                                    <h6>01-22-2022</h6>
                                   


                                </div>
                                <div class="column">
                                    <h5> amount:</h5>
                                    <h6>P 350</h6>
                                  


                                </div>
                                <div class="column" >
                                    <h5> customer:</h5>
                                    <h6>jepriel</h6>


                                </div>
                            </div>
                        </div>
                    </div>
                </a></li>
            <li><a href="mechanicProfile.php">Profile</a></li>
            <li><span>
                    <div id="myBtn"><a>Send Feedbacks</a></div>
                </span></li>

            <li><a onclick="myconfirm()">Logout</a></li>

        </ul>
    </nav>
    <section>
        <form action="">
            <div id="myModal" class="modal">
                <!-- Modal content -->
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


    </section>
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
