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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
        integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
    <!-- custom css -->
    <link rel="stylesheet" href="style1.css">
</head>

<body>
<?php include('topnav.php');?>

    <div class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
        <a href="adminSide.php" class="navbar-brand text-light mt-2">
            <div class="display-5 font-weight-bold">Admin</div>
        </a>
        <ul class="navbar-nav d-flex flex-column mt-2 w-100">
            <li class="nav-item w-100">
                <a href="adminSide.php" class="nav-link text-light pl-4"><i class="bi bi-person-lines-fill"></i> Pendings</a>
            </li>
            <li class="nav-item w-100">
                <a href="userAdmin.php" class="nav-link text-light pl-4"><i class="bi bi-person-fill"></i> Users</a>
            </li>
            <li class="nav-item w-100">
                <a href="mechAdmin.php" class="nav-link text-light pl-4"><i class="bi bi-tools"></i> Mechanics</a>
            </li>
            <li class="nav-item w-100">
                <a href="adminLogin.php" onclick="myconfirm()" class="nav-link text-danger pl-4"><i class="bi bi-door-closed"></i> Logout</a>
            </li>
        </ul>
    </div>
    <section class="p-4 my-container">
        <button class="btn my-4" id="menu-btn">Toggle Sidebar <i class="bi bi-arrow-right-short"></i></button>
        <form method="POST">
                                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                        <div class="card">
                                            <h5 class="card-header">Mechanic List</h5>
                                            <div class="card-body p-0">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="bg-light">
                                                            <tr class="border-0">
                                                            <th class="border-0 Phead">#</th>
                                                                <th class="border-0 Phead">Image</th>
                                                                <th class="border-0 Phead">Mid</th>
                                                                <th class="border-0 Phead">First Name</th>
                                                                <th class="border-0 Phead">Last Name</th>
                                                                <th class="border-0 Phead">Address</th>
                                                                <th class="border-0 Phead">Email</th>
                                                                <th class="border-0 Phead">Contact Number</th>
                                                                <th class="border-0 Phead">Valid ID</th>
                                                                <th class="border-0 Phead">Specialization</th>
                                                                <th class="border-0 Phead">Username</th>
                                                                <th class="border-0 Phead">Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                           
                                                           





                                                        </tbody>
                                                        
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
    </section>


    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"
        integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous">
    </script>
    <!-- custom js -->
    <script>
    var menu_btn = document.querySelector("#menu-btn")
    var sidebar = document.querySelector("#sidebar")
    var container = document.querySelector(".my-container")
    menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav")
        container.classList.toggle("active-cont")
    })
    </script>
            <script>
    function myconfirm() {
  let text = "Are sure you want to leave?.";
  if (confirm(text) == true) {
    location.replace("adminLogin.php")
  } else {
    location.reload();
  }}
</script>
     <?php include('footer.php');?>
</body>

</html>