<?php
session_start();
include('C:\xampp\htdocs\Mechanicnow\config.php');
$custID1=$_SESSION['custID'];
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
    <?php include('Uheader.php');?>
    
    <div class="master-container">
        <section>
        <form method= "POST">
        <div class="container">
                <h1 class="mdb">Ongoing Request</h1>
        <?php
              $sql="SELECT * from request WHERE custID=$custID1 and Status='Unaccepted' order by resID DESC";
              $query=$dbh->prepare($sql);
              $query->execute();
              $results=$query->fetchALL(PDO::FETCH_OBJ);

              if($query->rowCount()>0)
              {
              foreach ($results as $result)
              {
                  if($custID1==$custID1)
                  {

        ?>
                <div class="request-table">
                    <table class = "table-card">
                        <tr class = "row-card">
                            <td class= "data-card">
                                <div class="td-card">
                                    <h3><?php echo htmlentities($result->mechName);?></h3>
                                    <p><strong>Description : </strong> <?php echo htmlentities($result->mechRepair);?></p>
                                    <p id="status" ><strong>Status: </strong> <?php echo htmlentities($result->Status);?></p>
                                    <p><strong>Specific Message:</strong> <?php echo htmlentities($result->specMessage);?></p>
                                    <p><strong>Address:</strong> <?php echo htmlentities($result->custAddress);?></p>
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

    <script src="js/main.js">
        var status = document.getElementById('status');
        if(status == 'Unaccepted')
        {
            document.getElementById("message").disable;      
        }
    </script>
</body>
</html>
