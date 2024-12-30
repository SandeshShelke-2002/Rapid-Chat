<?php
  if(isset($_POST['post'])){
    include_once('php/config.php');
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $idea=$_POST['idea'];
    $sql="INSERT INTO `feedback`(`fname`, `email`, `subject`, `idea`) VALUES ('$fname','$email','$subject','$idea')";
    if(!mysqli_query($conn,$sql)){
      echo "<script type='text/javascript'>alert('Your feedback did not send. again fill a feedback form.'); window.location='feedback.html'</script>";
    }
  else{
    echo "<script type='text/javascript'>alert('Thank you For Your Feedback!'); window.location='index.html'</script>";
  }
  }
  mysqli_close($conn)
?>