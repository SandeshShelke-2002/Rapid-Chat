<?php 
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "config.php";
        $outgoing_id = $_SESSION['unique_id'];
        $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);
        if(!empty($message)){
            $filename=$_FILES['image']['name'];
            $tempname=$_FILES['image']['tmp_name'];
            $folder='image/'. $filename;
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg,pho)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}','{$filename}')") or die();
        }
    }else{
        header("location: ../login.php");
    }
?>