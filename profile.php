<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<style>
* {
  box-sizing: border-box;
}

.zoom {
  transition: transform .10s;
  width: 200px;
  height: 200px;
  margin: 0 auto;
}

</style>
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
           <form action="psend.php" method="post">
           <div class="p2">
            <div id="icon">
                <a href="users.php"><img src="image/xicon.jpg" alt="icon" width="40" ></a>
                </div>
                <h1><center>User profile</center></h1><hr>
                <div class="zoom"><?php echo '<a href="php/images/'.$row['img'].'">' ?><img src="php/images/<?php echo $row['img']; ?>" alt="profile" width="210"> </a></div><br><br>
                <center><?php echo '<a href="userprofileupdate.php?user_id='.$row['unique_id'].'" class="btn btn-info ">Change Image</a>'?></center><br>
          <div class="details">
          <p><b><?php echo $row['status']; ?></b></p>
            <span><b>UserName:</b> <?php echo $row['fname']. " " .$row['mname']." ".$row['lname'] ?></span><br>
            <span><b>Address:</b> <?php echo $row['city']." | ".$row['state']." | ".$row['country'] ?></span><br>
            <span><b>Email:</b> <?php echo $row['email'] ?></span><br>
            <span><b>No:</b> <?php echo $row['no'] ?></span><br>
            <span><b>About:</b> <?php echo $row['bio'] ?></span><br>
            <span><center> <?php echo '<a href="psend.php?user_id='.$row['unique_id'].'" class="btn btn-primary ">Update</a>'?></center></span>
          </div>
        </div>
        </form>
        
</body>
</html>
<!-- <img src="php/images/<?php echo $row['img']; ?>" alt="profile" width="210"> -->