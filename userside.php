<?php
session_start();
include('config.php');
if(isset($_POST['send'])){
    $msgOUT=$_SESSION['unique_id'];
    $msgINSERT=strval($_POST['incoming_id']);
    $msg=strval($_POST['message']);
  
   
    $sql="INSERT INTO messages(msgINSERT, msgOUT, msg)VALUES(:msgINSERT, :msgOUT, :msg)";
          $query=$dbh->prepare($sql);
          $query->bindParam(':msgOUT',$msgOUT,PDO::PARAM_STR);
          $query->bindParam(':msgINSERT',$msgINSERT,PDO::PARAM_STR);
          $query->bindParam(':msg',$msg,PDO::PARAM_STR);
          $query->execute();

          //echo '<script>alert("hala.")</script>';
         
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
    <?php include('Mheader.php');?>
    
    <div class="master-container">
        <section>
        <form method= "POST">
        <div class="container">
                <h1 class="mdb">Activity log </h1>
                <form method="POST">
              
                            <?php
						$regeditid=intval($_GET['regeditid']);
						$sql="SELECT *from request where resID=:regeditid";
						$query = $dbh->prepare($sql);
						$query->bindParam(':regeditid',$regeditid,PDO::PARAM_STR);
						$query->execute();
						$results=$query->fetchAll(PDO::FETCH_OBJ);
						$cnt=1;
						if($query->rowCount()>0){
    						foreach($results as $result){
						?> 
                      
      
               
            <?php }}?>
              <div class="details">
          <span><?php echo htmlentities($result->resID) ?></span>
          <span><?php echo htmlentities($result->vOwnerName) ?></span>

          

            <div class="chat-box">

</div>
        </div>
        
        <input type="text" class="incoming_id" name="incoming_id" value="<?php htmlentities($result->resID) ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button type="submit" name="send"><i class="fab fa-telegram-plane"></i>send</button>
            </div>
            <?php
            	$regeditid=intval($_GET['regeditid']);
                $sql="SELECT *from request where resID=:regeditid";
                $query = $dbh->prepare($sql);
                $query->bindParam(':regeditid',$regeditid,PDO::PARAM_STR);
                $query->execute();
                $results=$query->fetchAll(PDO::FETCH_OBJ);
                $cnt=1;
                if($query->rowCount()>0){
                    foreach($results as $result){
                        echo htmlentities($result->custID);
                    }
                }
                      

             $msgOUT=$_SESSION['unique_id'];
             $msgINSERT= strval($_POST['incoming_id']);
                        
						$sql="SELECT *from messages left join customer on customer.unique_id = messages.msgOUT where
                         (msgOUT = '$msgOUT' and msgINSERT = '$msgINSERT') or 
                         (msgOUT = '$msgINSERT' and msgINSERT = '$msgOUT') order by msgID";
						$query = $dbh->prepare($sql);
						$query->execute();
						$results=$query->fetchAll(PDO::FETCH_OBJ);
						$cnt=1;
						if($query->rowCount()>0){
    						foreach($results as $result){
                                if($result->msgOUT == $msgOUT){
                                   
						?> 
                       
                       
                                    
                        <input type="text" value="<?php echo htmlentities($result->msg) ?>">
      
               
            <?php }}}else{?>
               
                                  
                                <?php }?>  
            </form> 
        </section>
        <?php include('Mbootom-nav.php');?>
    </div>

    <script src="js/main.js"></script>
    
</body>
</html>
