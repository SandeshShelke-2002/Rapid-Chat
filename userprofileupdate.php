<?php 
  session_start();
  error_reporting(0);
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
  if(isset($_POST['change'])){
    $filename=$_FILES['img']['name'];
    $tempname=$_FILES['img']['tmp_name'];
    if(move_uploaded_file($tempname,"php/images/".$filename)){

        $mql = "update users set img='$filename' where unique_id='$_GET[user_id]' ";

        if(!mysqli_query($conn,$mql))
        {
          echo "<script type='text/javascript'>alert('Error! your new profile image isn't update.'); window.location='userprofileupdate.php'</script>";
        }
         else
         {
          echo "<script type='text/javascript'>alert('Your new profile image is updated.'); window.location='profile.php'</script>";
         }
    }
}
?>
<?php include_once "header.php"; ?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
    <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
           <form action="#" method="post"  enctype="multipart/form-data">
           <div class="p2">
            <div id="icon">
                <a href="profile.php"><img src="image/xicon.jpg" alt="icon" width="40" ></a>
                </div>
                <h1><center>Change Profile</center></h1><hr>
                <center><div class="zoom">
                     
                </div>
                
          <div class="details">
          
            <center><div class="zoom"><img src="php/images/<?php echo $row['img']; ?>" alt="profile" width="150"><br><br>    
            <span><input type="file" name='img' accept="image/x-png,image/gif,image/jpeg,image/jpg" /> </span><br>    
            <center><input type="submit" value="update" name="change" class="btn btn-primary badge-pill">
            <input class="btn btn" type="reset" value="Clear"></center><br>
          </div>
        </div>
        </form>
</body>
</html>