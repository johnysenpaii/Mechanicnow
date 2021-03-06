<?php
session_start();
include('C:\xampp\htdocs\Mechanicnow\Mechanicnow\config.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="style2.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row min-vh-100 flex-column flex-md-row">
            <aside class="col-12 col-md-3 col-xl-2 p-0 bg-dark ">
                <nav class="navbar navbar-expand-md navbar-dark bd-dark flex-md-column flex-row align-items-start py-2 text-start sticky-top "
                    id="sidebar">
                    <div class="text-start p-3">
                        <a href="#" class="navbar-brand mx-0 font-weight-bold  text-nowrap"><img
                                src="img/mechanicnowlogo.svg" class="logo" alt="" width="60"> Mechanic now</a>
                    </div>
                    <button type="button" class="navbar-toggler border-0 order-1" data-toggle="collapse"
                        data-target="#nav" aria-controls="nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse order-last" id="nav">
                        <ul class="navbar-nav flex-column w-100 ml-2 justify-content-start">
                            <li class="nav-item">
                                <a href="adminSide.php" class="nav-link "><i class="bi bi-speedometer"></i>
                                    Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="pending.php" class="nav-link"><i class="bi bi-person-lines-fill"></i> Mechanic
                                    Approvals</a>
                            </li>
                            <li class="nav-item dropdown w-100">
                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-check-fill"></i>
                                    Monitor</a>
                                <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                                    <li><a href="userAdmin.php" class="dropdown-item pl-4 p-2 active"><i
                                                class="bi bi-person-circle"></i> Clients</a></li>
                                    <li><a href="mechAdmin.php" class="dropdown-item pl-4 p-2 "><i
                                                class="bi bi-tools"></i> Mechanics</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown w-100">
                                <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-expanded="false"><i class="bi bi-star-fill"></i>
                                    Feedbacks</a>
                                <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                                    <li><a href="feedbacks.php" class="dropdown-item pl-4 p-2"><i
                                                class="bi bi-person-circle"></i> Clients</a></li>
                                    <li><a href="mechfeedbacks.php" class="dropdown-item pl-4 p-2"><i
                                                class="bi bi-tools"></i> Mechanics</a></li>
                                </ul>
    
                            </li>
                            <br>
                            <hr class="text-light m-1">
                            <li class="nav-item w-100">
                                <a onclick="myconfirm()" class="nav-link text-danger"><i class="bi bi-door-closed"></i>
                                    Logout</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </aside>
            <main class="col px-0 flex-grow-1">
                <div class="container py-3">
                    <section class="my-container">
                        <div class="display-6 my-2">Vehicle Owner</div>
                        <hr class="text-dark m-2">
                        <form method="POST">
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12" data-aos="fade-up">
                                <div class="card">
                                    <h5 class="card-header">Vehicle Owner</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0 Phead">Image</th>
                                                        <th class="border-0 Phead">Mid</th>
                                                        <th class="border-0 Phead">First Name</th>
                                                        <th class="border-0 Phead">Last Name</th>
                                                        <th class="border-0 Phead">Address</th>
                                                        <th class="border-0 Phead">Email</th>
                                                        <th class="border-0 Phead">Contact Number</th>
                                                        <th class="border-0 Phead">Vehicle Type</th>
                                                        <th class="border-0 Phead">Username</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                   $sql1 ="SELECT * from customer WHERE custID";
                                                   $query = $dbh -> prepare($sql1);
                                                   $query->execute();    
                                                   $results=$query->fetchALL(PDO::FETCH_OBJ);
                                       
                                                     if($query->rowCount()>0)
                                                     {
                                                     foreach ($results as $result) 
                                                     {
                                                   ?>
                                                    <tr>
                                                        <td>
                                                            <img src="img/avatar.png" alt="avatar" width="35"
                                                                class="img-thumbnail">
                                                        </td>
                                                        <td><?php echo htmlentities($result->custID);?> </td>
                                                        <td><?php echo htmlentities($result->custFirstname);?>
                                                        </td>
                                                        <td><?php echo htmlentities($result->custLastname);?>
                                                        </td>
                                                        <td><?php echo htmlentities($result->custAddress);?>
                                                        </td>
                                                        <td><?php echo htmlentities($result->custEmail);?></td>
                                                        <td><?php echo htmlentities($result->custCnumber);?>
                                                        </td>

                                                        <td><?php echo htmlentities($result->vehicleType);?>
                                                        </td>

                                                        <td><?php echo htmlentities($result->Username);?></td>

                                                    </tr>

                                                </tbody>
                                                <?php }}?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </section>
                </div>
            </main>
        </div>
    </div>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"
        integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous">
    </script>
    <!-- custom js -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        duration: 3000,
        once: true,
    });
    </script>
    <script>
    function myconfirm() {
        let text = "Are sure you want to leave?.";
        if (confirm(text) == true) {
            location.replace("adminLogin.php")
        } else {
            location.reload();
        }
    }
    </script>
    <?php include('footer.php');?>
</body>

</html>