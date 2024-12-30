<?php
  if(isset($_POST['admin'])){
    include_once('config.php');
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $number = $_POST['number'];
    $Aemail = $_POST['Aemail'];
    $Apassword = $_POST['Apassword'];
    $ran_id = rand(time(), 100000000);
    $status = "Active now";
    $encrypt_pass = md5($Apassword);
    $sql="INSERT INTO `admin`(`unique_id`, `firstname`, `middlename`, `lastname`, `Aemail`, `Apassword`, `status`) VALUES ('$ran_id','$firstname','$middlename','$lastname','$number','$Aemail','$Apassword','$status')";
    if(!mysqli_query($conn,$sql)){
      echo "<script type='text/javascript'>alert('Sorry! Pls try again.'); window.location='adminsignup.php.html'</script>";
    }
  else{
    echo "<script type='text/javascript'>alert('Your account has regidtered as Admin'); window.location='adminlogin.html'</script>";
  }
  }
  mysqli_close($conn)
?>