<?php
session_start();
include('C:\xampp\htdocs\DEVGRU\Mechanicnow\config.php');
if(isset($_POST['edit']))
{
    $id=$_POST['id'];
    $mechFirstname=$_POST['mechFirstname'];
    $mechLastname=$_POST['mechLastname'];
    $mechEmail=$_POST['mechEmail'];
    $mechCnumber=$_POST['mechCnumber'];
    $mechAddress=$_POST['mechAddress'];
    $Specialization=$_POST['Specialization'];
    $mechValidID=$_POST['mechValidID'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];

    //check password
  if ($_POST['Password']!= $_POST['custconfirmpassword'])
  {
    echo '<script>alert("Oops! Password did not match! Please try again.")</script>';
    echo "<script type='text/javascript'>document.location='userSignup.php';</script>";
  }
  else{
    //hashed password
  $hashedPwd = password_hash($Password, PASSWORD_DEFAULT);

  //check email
  // $sql2="SELECT * FROM customer WHERE Username = ?";
  // $query = $dbh->prepare($sql2);
  // $query->execute([$Username]);
  // $result = $query->rowCount();
  // if($result > 0){
     
  //     echo '<script>alert("Oops! Username Already Exist!")</script>';
  //     echo "<script type='text/javascript'>document.location='userSignup.php';</script>";
  // }
  // else{
    //$sql="SELECT * FROM customer WHERE custID=:id";
  //$query=$dbh->prepare($sql);
  //$query->bindParam(':id',$id,PDO::PARAM_STR);
  //$query->execute();
  //$results=$query->fetch(PDO::FETCH_ASSOC);
  //if($query->rowCount()>0)
  //{
   // echo "<script type='text/javascript'>alert('unsuccess!!!');</script>";
 // }else

    $regeditid=intval($_GET['regeditid']);

  $sql="UPDATE mechanic set mechID=:id,mechFirstname=:mechFirstname,mechLastname=:mechLastname,mechEmail=:mechEmail,mechCnumber=:mechCnumber,mechAddress=:mechAddress,Specialization=:Specialization,mechValidID=:mechValidID,Username=:Username,Password=:Password WHERE mechID=:regeditid";
  $query=$dbh->prepare($sql);
  $query->bindParam(':id',$id,PDO::PARAM_STR);
  $query->bindParam(':mechFirstname',$mechFirstname,PDO::PARAM_STR);
  $query->bindParam(':mechLastname',$mechLastname,PDO::PARAM_STR);
  $query->bindParam(':mechEmail',$mechEmail,PDO::PARAM_STR);
  $query->bindParam(':mechCnumber',$mechCnumber,PDO::PARAM_STR);
  $query->bindParam(':mechAddress',$mechAddress,PDO::PARAM_STR);
  $query->bindParam(':Specialization',$Specialization,PDO::PARAM_STR);
  $query->bindParam(':mechValidID',$mechValidID,PDO::PARAM_STR);
  $query->bindParam(':Username',$Username,PDO::PARAM_STR);
  $query->bindParam(':Password',$Password,PDO::PARAM_STR);
  $query->bindParam(':regeditid',$regeditid,PDO::PARAM_STR);

  $query->execute();

  // echo "<script type='text/javascript'>document.location='login.php';</script>";

  }
  // }
  
  
   
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
    include('C:\xampp\htdocs\DEVGRU\Mechanicnow\Uheader.php');
    ?>
    
    <div class="master-container">
        <section>
            <form method="POST">
            <?php //select transaction
              $regeditid=$_SESSION["mechID"];
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
                <div class="profile-bg">
                    <h2>Personal Information</h2>
                    <div class="avatar-img"><img src="img/avatar.png" alt=""></div><br>
                    <input type="hidden" name="id" value="<?php echo htmlentities($result->mechID);?>"
                            required="required" class="form-control">
                    <input type="text" name="mechFirstname"  value="<?php echo htmlentities($result->mechFirstname);?>" class="textin imgspace" placeholder="First Name" required>
                    <input type="text" name="mechLastname" value="<?php echo htmlentities($result->mechLastname);?>" class="textin" placeholder="Last Name" required>
                    <input type="email" name="mechEmail" value="<?php echo htmlentities($result->mechEmail);?>" class="textin" placeholder="Email Address" required>
                    <input type="tel" name="mechCnumber" value="<?php echo htmlentities($result->mechCnumber);?>" class="textin" pattern="((^(\+)(\d){12}$)|(^\d{11}$))" placeholder="Phone Number" required>
                    <h4 style="padding-bottom: 1em;">Address</h4>
                        <div class="addresspanel" style="padding-bottom: 1em;">
                            <input type="text" id="Province" name="mechAddress" value="<?php echo htmlentities($result->mechAddress);?>" class="textin" placeholder="Province" style="width:90%;" required>  
                            <input type="text" id="City" name="mechAddress" value="<?php echo htmlentities($result->mechAddress);?>" class="textin" placeholder="City" style="width:90%;" required>
                            <input type="text" id="Barangay" name="mechAddress" value="<?php echo htmlentities($result->mechAddress);?>" class="textin" placeholder="Barangay" style="width:90%;" required>
                        </div>
                        <select type="text" name="Specialization" class="textin" placeholder="Specialization" required>
                       
                        <?php
                            $sql = "SELECT * from mechanic";
                            $query = $dbh -> prepare($sql);
                            $query -> execute();
                            $results1=$query->fetchAll(PDO::FETCH_OBJ);
                            $cnt=1;
                            if($query->rowCount() > 0)
                            {
                                foreach($results as $result1)
                                {
                                    ?>
                                   
                                    <option value="<?php echo htmlentities($result1->Specialization);?>">
                                    
                                    <?php
                                    echo htmlentities($result1->Specialization);
                                    ?>
                                    </option>
                                    <?php
                                }
                            }
                            ?>  
                            <option value="Bicycle">Bicycle</option>
                            <option value="Motorcycle">Motorcycle</option>
                            <option value="Four Wheels">Four Wheels</option>

                        </select>
                        <input type="text" class="textin" name="mechValidID" value="<?php echo htmlentities($result->mechValidID);?>"required="required" class="form-control">
                    </br>
                    </br>
                    <h2>Account Information</h2>
                    <input type="text" name="Username" value="<?php echo htmlentities($result->Username);?>" class="textin" placeholder="Username" required>
                    <input type="password" name="Password" class="textin" placeholder="Password" required>
                    <input type="password" name="custconfirmpassword" class="textin" placeholder="Confirm Password" required>
                    <button class="editbtn" name="edit">Confirm</button>
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
