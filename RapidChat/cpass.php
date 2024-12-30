<?php 
  session_start();
  error_reporting(0);
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
  if(isset($_POST['change'])){
     
    $mql = "update users set password='".md5($_POST['newpassword'])."'   where unique_id='$_GET[user_id]' ";
    
    if(!mysqli_query($conn,$mql))
    {
      echo "<script type='text/javascript'>alert('Error! your new password isn't update.'); window.location='cpass.php'</script>";
    }
     else
     {
      echo "<script type='text/javascript'>alert('Your new password is updated.'); window.location='users.php'</script>";
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
                <a href="users.php"><img src="image/xicon.jpg" alt="icon" width="40" ></a>
                </div>
                <h1><center>Change Password</center></h1><hr>
                <center><div class="zoom">
                     
                </div>
                
          <div class="details">
            <span><b>Current Password:</b> <br><input type="password" value="<?php  echo $row['password']; ?>"  name="currentpassword"></span><br><br>
            <span><b>New Password:</b> <br><input type="password" placeholder="Enter new password"  name="newpassword" required></span><br><br>
            <center><input type="submit" value="update" name="change" class="btn btn-primary badge-pill">
            <input class="btn btn" type="reset" value="Clear"></center><br>
          </div>
        </div>
        </form>
</body>
</html>