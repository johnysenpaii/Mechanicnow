<?php
session_start();
include('C:\xampp\htdocs\MechanicNow\Mechanicnow\config.php');
if(isset($_POST['send']))  
{  
$host="localhost";//host name  
$username="root"; //database username  
$word="";//database word  
$db_name="mechanicnow";//database name  
$tbl_name="request"; //table name  
$con=mysqli_connect("$host", "$username", "$word","$db_name")or die("cannot connect");//connection string  
$mechName=$_POST['mechName']; 
$specMessage=$_POST['specMessage'];
$checkbox1=$_POST['mechRepair'];  
$chk=""; 
$spec="";
$mechN="";
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1." ";
   } 
   $spec .= $specMessage;  
   $mechN .= $mechName;
$in_ch=mysqli_query($con,"INSERT INTO request(mechName, specMessage, mechRepair) values ('$mechN' ,'$spec', '$chk')");  
if($in_ch==1)  
   {  
      echo'<script>alert("Request Sent Successfully")</script>';  
   }  
else  
   {  
      echo'<script>alert("Failed to Send Request")</script>';  
   }  
} 

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
<?php
    include('Uheader.php');
    ?>
    
    <div class="master-container">
        
        <section>
        <form method="POST">
        <?php
              $regeditid=intval($_GET['regeditid']);
              $sql="SELECT * from mechanic WHERE mechID=:regeditid";
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
            <h1>Request Information</h1>
            <div class="mechanic-table" style="overflow-y:auto;">
                <h3>Mechanic</h3>
                <br>
                <div class="avatar-img"><img src="img/avatar.png" alt=""></div>
                <label>Name: </label>
                <input class="textin" type="text" name="mechName"  value="<?php echo htmlentities($result->mechFirstname);?> <?php echo htmlentities($result->mechLastname);?>" readonly required>
                <br>
                <label>Rating:</label>
                <input class="textin" type="text" name="" placeholder="Rating here"  value="" readonly required>
                <p></p>
            </div>
            <div class="mechanic-table" style="overflow-y:auto;">
                <h3>Mechanical Problem</h3>
                <br>
                <input type="checkbox" name="tireRepair">
                <label>Tire Repair</label>
                <p></p>
                <br>
                <input type="checkbox" name="tireRepair">
                <label>Chain Loosening Repair</label>
                <p></p>
                <br>
                <input type="checkbox" name="tireRepair">
                <label>Break Repair</label>
                <p></p>
                <br>
                <label style="margin-left: 20px">Others Specify</label>
                <br>
                <textarea placeholder="Specify here..." name="tireRepair" style="padding: 30px; font-size: 12px; font-family: var(--ff-primary);"></textarea>
                <br>
                <br>
                <button name="send" value="send" style="color: rgb(156, 28, 150); border-radius: 8%; padding: 10px; font-size: 16px">Send</a></button>
                <button style="color: rgb(156, 28, 150); border-radius: 8%; padding: 10px; font-size: 16px; margin-left: 40px;"><a  href="motorcategory.php">Cancel</a></button>
            </div>
            </div>
            <?php }}?>
        </form>
        </section>

        <!-- <div class="bottom-nav">
            <div class="vehicle-logo">
                <a href="userDashboard.html"><img src="img/steering-wheel2.png" alt=""></a>
            </div>
            <div class="home-logo">
                <a href="userDashboard.html"><img src="img/house-black-silhouette-without-door.png" alt=""></a>
            </div>
            <div class="mech-logo">
                <a href="mechanicPage.html"><img src="img/mechtool.png" alt=""></a>
            </div>
        </div> -->
        <?php
        include('bottom-nav.php');
        ?>
    </div>

    <script src="js/main.js"></script>
</body>
</html>
