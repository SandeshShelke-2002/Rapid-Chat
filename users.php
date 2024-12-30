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
  margin: 0 auto;
}

/* .zoom:hover {
  -ms-transform: scale(7.0); /* IE 9 */
  -webkit-transform: scale(7.0); /* Safari 3-8 */
  transform: scale(7.0); 
} */
</style>

<body>
  
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
           
          <!-- Sidebar -->
          <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none;" id="mySidebar">
            <button onclick="w3_close()" class="w3-bar-item w3-large">Hii <?php echo $row['fname']. " " . $row['lname'] ?> &times;</button>
            <a href="profile.php" class="w3-bar-item w3-button">User Profile</a>
            <a href="contact2.html" class="w3-bar-item w3-button">Contact</a>
            <a href="about2.html" class="w3-bar-item w3-button">Help</a>
            <a href="feedback2.html" class="w3-bar-item w3-button">Report</a> 
            <a class="w3-bar-item w3-button"><?php echo '<a href="cpass.php?user_id='.$row['unique_id'].'" class="btn btn-primary ">Change Password</a>'?></a> 
            <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="w3-bar-item w3-button">logout</a>
          </div>

          <!-- Page Content -->
          <div class="w3-teal">
            <button class="w3-button w3-teal w3-xlarge"  onclick="w3_open()">☰</button>
          </div>
     <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
        <div class="zoom"><a href="profile.php"><img src="php/images/<?php echo $row['img']; ?>" alt="profile"></a></div>
          <div class="details">
            <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
            <p ><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>

      <div class="users-list">
      </div>
    </section>
  </div>

  <script>
    
 function myFunction(){
  let element=document.body;
  let content =document.getElementById("DarkModetext");
  element.className="dark-mode";
  content.innerText="Dark Mode is ON";
 }

 function light(){
  let element=document.body;
  let content =document.getElementById("DarkModetext");
  element.className="light-mode";
  content.innerText="Dark Mode is OFF";
 }
  </script>
  <script src="javascript/users.js"></script>
  <script src="javascript/sidebar.js"></script>
  
   
</body>
</html>
