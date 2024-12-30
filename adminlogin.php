<?php
 session_start();
 include_once "php/config.php";
 $attem=0;
 if(isset($_POST['admin'])){
   $Aemail=$_POST['Aemail'];
   $Apassword=$_POST['Apassword'];
   $attem=$_POST['hidden'];
   if($attem<4){
     $sql="SELECT*from `admin` WHERE Aemail='".$Aemail."' and Apassword='".$Apassword."' ";
     $result=mysqli_query($conn,$sql);
     if($result){
       if(mysqli_num_rows($result)){
          $_SESSION['Aemail'] = $row['Aemail'];
          echo "<script type='text/javascript'>alert('You have Sucessfully login.')</script>";?>
          <script type="text/javascript">window.location.href="homea.php";</script>
          <?php
         }
       }
       $attem++;
       echo "<script type='text/javascript'>alert('Error! Your or password is wrong, Your attempts is:".$attem."')</script>";
     }
   }
  
 if($attem==4){
  echo "<script type='text/javascript'>alert('You have cross the limit of login form.')</script>";
 }
?>
<style>
nav ul{
    display:flex;
    align-items: center;
    background-color:rgba(38, 38, 153, 0.734);
    list-style-type: none;
    height: 65px;
}
.logo img{
    width:100px;
    height: 50px;
}
.logo{
    display:flex;
    align-items: center;
    font-weight:bolder;
    font-size: 1.3rem;
    color: white;
    
}
nav ul li{
    padding: 0px 13px;
}

#title{
    margin-left: 10%;
}

</style>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./admin.css">
<link rel="shortcut icon" href="image/favicon_io/favicon.ico" type="image/X-icon">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
</head>
<body>
<header>
        <nav>
           <ul>
               <li class="logo"><img src="image/log.png" alt="logo"><span id="title">RapidChat</span></li>
           </ul>
        </nav><br><br><br>
        </header>
  <!-- Sidebar -->
  <!-- <div class="w3-sidebar w3-bar-block w3-border-right" style="display:none" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Welcome &times;</button>
  <a href="index.html" class="w3-bar-item w3-button">Home</a>
  <a href="mymerc.html" class="w3-bar-item w3-button">Contact</a>
  <a href="myab.html" class="w3-bar-item w3-button">Help</a>
</div>


<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge" onclick="w3_open()">☰</button>
</div> -->
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h3>Admin Login</h3>
  <form action="" method="POST" id="login-form">
    <?php
    echo "<input type='hidden' name='hidden' value='".$attem."'>";
    ?>
    <p>
    <input type="email" id="username" name="Aemail" <?php if($attem==4){?> disabled="disabled" <?php }?> placeholder="Enter Your Username" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="password" id="email" name="Apassword" placeholder="Enter Your Password" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Login" <?php if($attem==4){?> disabled="disabled" <?php }?> name="admin">
    </p>
  </form>
  <p>
    <button ><a href="index.html">Back</a></button>
  </p>
  <div id="create-account-wrap">
  </div>
</div><!--login-form-wrap-->
</body>
<script src="javascript/sidebar.js"></script>
</html>
