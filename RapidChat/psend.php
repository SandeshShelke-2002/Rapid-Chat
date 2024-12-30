<?php 
  session_start();
  error_reporting(0);
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
  if(isset($_POST['change'])){
    
      $mql = "update users set  fname='$_POST[fname]', mname='$_POST[mname]', lname='$_POST[lname]', city='$_POST[city]', email='$_POST[email]', no='$_POST[no]', bio='$_POST[bio]'  where unique_id='$_GET[user_id]' ";
      
      if(!mysqli_query($conn,$mql))
      {
        echo "<script type='text/javascript'>alert('Error! your profile isn't update.'); window.location='profile.php'</script>";
      }
       else
       {
        echo "<script type='text/javascript'>alert('Your profile is updated.'); window.location='profile.php'</script>";
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
                <h1><center>User profile</center></h1>
                <hr>
                <center><div class="zoom"><img src="php/images/<?php echo $row['img']; ?>" alt="profile" width="50"><br>
                
                 <input type="file" name='image' accept="image/x-png,image/gif,image/jpeg,image/jpg"/> <br>
                     
                </div>
                
          <div class="details">
            <span><b>First Name:</b> <br><input type="text"  value="<?php  echo $row['fname']; ?>" name="fname"></span><br>
            <span><b>Middle Name:</b> <br><input type="text"  value="<?php  echo $row['mname']; ?>" name="mname"></span><br>
            <span><b>Last Name:</b><br> <input type="text"  value="<?php  echo $row['lname']; ?>" name="lname"></span><br>
            <span><b>City:</b> <br><input type="text"  value="<?php  echo $row['city']; ?>" name="city"></span><br>
            <span><b>Email:</b><br> <input type="email"  value="<?php  echo $row['email']; ?>" name="email" ></span><br>
            <span><b>No:</b> <br><input type="number" value="<?php  echo $row['no']; ?>" name="no" ></span><br>
            <span><b>bio:</b><br> <input type="text"  value="<?php  echo $row['bio']; ?>" name="bio"></span><br><br>
            <!-- <span><b>Password:</b> <br><input type="password" value="<?php  echo $row['password']; ?>"   name="password"></span><br><br> -->
            <center><input type="submit" value="update" name="change" class="btn btn-primary badge-pill">
            <input class="btn btn" type="reset" value="Clear"></center>
          </div>
        </div>
        </form>
</body>
</html>