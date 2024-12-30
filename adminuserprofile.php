<?php
include("php/config.php"); //connection to db
error_reporting(0);
session_start();


  if(isset($_POST['change'])){
     
      $mql = "update users set  fname='$_POST[fname]', mname='$_POST[mname]', lname='$_POST[lname]', city='$_POST[city]', email='$_POST[email]', no='$_POST[no]', bio='$_POST[bio]'  where unique_id='$_GET[user_id]' ";
      
      if(!mysqli_query($conn,$mql))
      {
        echo "<script type='text/javascript'>alert('Error! User profile isn't update.'); window.location='adminuserprofile.php'</script>";
      }
       else
       {
        echo "<script type='text/javascript'>alert('User profile is updated.'); window.location='homea.php'</script>";
       }
  }


?>
<?php include_once "header.php"; ?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
            <?php $ssql ="select * from users where unique_id='$_GET[user_id]'";
						$res=mysqli_query($conn, $ssql); 
						$newrow=mysqli_fetch_array($res); ?>
   
           <form action="#" method="post"  enctype="multipart/form-data">
           <div class="p2">
            <div id="icon">
                <a href="homea.php"><img src="image/xicon.jpg" alt="icon" width="40" ></a>
                </div>
                <h1><center>User profile</center></h1>
                <hr>
          <div class="details">
            <span><b>First Name:</b> <br><input type="text" value="<?php  echo $newrow['fname']; ?>"  name="fname"></span><br>
            <span><b>Middle Name:</b> <br><input type="text"  value="<?php  echo $newrow['mname']; ?>" name="mname"></span><br>
            <span><b>Last Name:</b><br> <input type="text"  value="<?php  echo $newrow['lname']; ?>" name="lname"></span><br>
            <span><b>City:</b> <br><input type="text" value="<?php  echo $newrow['city']; ?>"   name="city"></span><br>
            <span><b>Email:</b><br> <input type="email" value="<?php  echo $newrow['email']; ?>"  name="email" ></span><br>
            <span><b>No:</b> <br><input type="number"  value="<?php  echo $newrow['no']; ?>" name="no" ></span><br>
            <span><b>bio:</b><br> <input type="text" value="<?php  echo $newrow['bio']; ?>"  name="bio"></span><br><br>
            <!-- <span><b>Password:</b> <br><input type="password"    name="password"></span><br><br> -->
            <center><input type="submit" value="update" name="change" class="btn btn-primary badge-pill">
            <input class="btn btn" type="reset" value="Clear"></center>
          </div>
        </div>
        </form>
</body>
</html>