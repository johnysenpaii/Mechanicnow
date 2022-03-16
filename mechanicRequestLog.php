<?php
session_start();
include('config.php');
if(isset($_POST['sendMessage']))
{
    $regeditid=intval($_GET['regeditid']);
    $sql="UPDATE request set Status='Accepted' where resID=:regeditid";
    $query=$dbh->prepare($sql); 
    $query->bindParam(':regeditid',$regeditid,PDO::PARAM_STR); 
    $query->execute();
    echo"<script>location.replace('mechanicActivityLog.php');</script>";
}
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
        <?php
              $regeditid=intval($_GET['regeditid']);
              $sql="SELECT * from request WHERE resID=:regeditid and Status='Unaccepted'";
              $query=$dbh->prepare($sql);
              $query->bindParam(':regeditid',$regeditid,PDO::PARAM_STR);
              $query->execute();
              $results=$query->fetchALL(PDO::FETCH_OBJ);

              if($query->rowCount()>0)
              {
              foreach ($results as $result) 
              {
        ?>
        <div class="container">
                <div class="request-table">
                    <table class = "table-card">
                        <tr class = "row-card">
                            <td class= "data-card">
                                <div class="td-card">
                                    <h3><?php echo htmlentities($result->vOwnerName);?></h3>
                                    <p><strong>Service Type: </strong> <?php echo htmlentities($result->serviceType);?></p>
                                    <p><strong>Service Needed: </strong> <?php echo htmlentities($result->ServiceN);?></p>
                                    <p><strong>Vehicle Problem:</strong> <?php echo htmlentities($result->mechRepair);?></p>
                                    <p><strong>Note:</strong> <?php echo htmlentities($result->specMessage);?></p>
                                    <p><strong>Address:</strong> <?php echo htmlentities($result->custAddress);?></p>
                                    <textarea placeholder="Specify here..." name="specMessage" value="specMessage" style="padding: 30px; font-size: 12px; font-family: var(--ff-primary);"></textarea>
                                    <div class="card-btn">
                                        <button type="submit" class="accept" name="sendMessage">Send Message</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <?php }}?>
            </form>
        </section>
        <?php include('Mbootom-nav.php');?>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
