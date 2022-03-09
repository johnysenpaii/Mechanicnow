<?php
session_start();
include('C:\xampp\htdocs\Mechanicnow\config.php');
$mechID1=$_SESSION['mechID'];
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
<body>
    <?php include('Mheader.php');?>
    
    <div class="master-container">
        <section>
        <form method= "POST">
        <div class="container">
                <h1 class="mdb">Customers Request</h1>
        <?php
              $sql="SELECT * from request WHERE mechID=$mechID1 and Status='Unaccepted'";
              $query=$dbh->prepare($sql);
              $query->execute();
              $results=$query->fetchALL(PDO::FETCH_OBJ);

              if($query->rowCount()>0)
              {
              foreach ($results as $result)
              {
                  if($mechID1==$mechID1)
                  {

        ?>
                <div class="request-table">
                    <table class = "table-card">
                        <tr class = "row-card">
                            <td class= "data-card">
                                <div class="td-card">
                                    <h3><?php echo htmlentities($result->vOwnerName);?></h3>
                                    <p><strong>Service Needed: </strong> <?php echo htmlentities($result->serviceType);?></p>
                                    <p><strong>Vehicle Problem:</strong> <?php echo htmlentities($result->mechRepair);?></p>
                                    <p><strong>Note:</strong> <?php echo htmlentities($result->specMessage);?></p>
                                    <p><strong>Address:</strong> <?php echo htmlentities($result->custAddress);?></p>
                                    <div class="card-btn">
                                        <button type="submit" name="submit" class="accept">Accept</button>
                                        <button class="decline">Decline</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            <?php }}}?>
            </div>
            </form>
        </section>
        <?php include('Mbootom-nav.php');?>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
