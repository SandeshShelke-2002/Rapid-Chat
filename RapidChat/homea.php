<?php
session_start();
include_once "php/config.php";

$user="SELECT* from users";
$Uresult=mysqli_query($conn,$user);
$message="SELECT* from messages";
$Mresult=mysqli_query($conn,$message);
$feedback="SELECT*from feedback";
$Fresult=mysqli_query($conn,$feedback);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link rel="shortcut icon" href="image/logo.png" type="image/X-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    
    <title>Admin Panel</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style>
    #title{
        background-color: rgba(222, 184, 135, 0.877);
        font-weight: lighter;
        font-size: 1.2rem;
        font-weight: bolder;
    }
    table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 30px%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<body>
<?php
include_once "php/config.php";
$sql = mysqli_query($conn, "SELECT * FROM admin");
if(mysqli_num_rows($sql) > 0){
  $row = mysqli_fetch_assoc($sql);
}
?>
<div class="w3-sidebar w3-bar-block w3-light-grey w3-card" style="width:150px">
  <h5 class="w3-bar-item">Hello, <?php echo $row['firstname'];?></h5>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'profile')">Admin Profile</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'London')">UserList</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Paris')">Messages</button>
  <button class="w3-bar-item w3-button tablink" onclick="openCity(event, 'Tokyo')">Feedback</button>
  <a href="adminlogout.php?logout_id=<?php echo $row['user_id']; ?>" >Logout</a>
</div>
<div style="margin-left:150px">
<div class="w3-padding" id="title">
  <img src="image/log.png" alt="logo" width="70"> Admin Panel
</div><hr><hr>
<div id="profile" class="w3-container city" style="display:none">
 <h2>Admin Profile</h2><br>
          <div>
          <img src="php/images/<?php echo $row['img']; ?>" alt="profile" width="230"><br><br>
            <span><b>UserName:</b> <?php echo $row['firstname']. " " .$row['middlename']." ".$row['lastname'] ?></span><br>
            <span><b>Email:</b> <?php echo $row['Aemail'] ?></span><br>
            <span><b>Contact:</b> <?php echo $row['number'] ?></span><br>
          </div>
</div>
  <div id="London" class="w3-container city" style="display:none">
    <h2>RapidChat UserList</h2>
    <table>
        <tr>
            <th>Sr.No.</th>
            <th>User Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>User Email Id</th>
            <th>User Contact</th>
            <th>Password</th>
            <th>bio</th>
            <th>Status</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <?php
        while($rows=mysqli_fetch_assoc($Uresult)){
        ?>
        <tr>
            <td><?php echo $rows['user_id'];?></td>
            <td><?php echo $rows['unique_id'];?></td>
            <td><?php echo $rows['fname']." ". $rows['mname']." ". $rows['lname'];?></td>
            <td><?php echo $rows['city'].",".$rows['state'].",".$rows['country'];?></td>
            <td><?php echo $rows['email'];?></td>
            <td><?php echo $rows['no'];?></td>
            <td><?php echo $rows['password'];?></td>
            <td><?php echo $rows['bio'];?></td>
            <td><?php echo $rows['status'];?></td>
            <td><?php echo $rows['date'];?></td>
            <td><?php echo '<a href="adminuserprofile.php?user_id='.$rows['unique_id'].'" class="btn btn-primary ">Update</a>'?></td>
             <td><?php echo '<a href="del_msg.php?id='.$rows['unique_id'].'" class="btn btn-danger ">Delete</a>'?></td>
        </tr>
        <?php           
        }
        ?>
    </table>
  </div>

  <div id="Paris" class="w3-container city" style="display:none">
    <h2>User Messages</h2>
    <table>
        <tr>
            <th>Sr.No.</th>
            <th>Incomig msg id</th>
            <th>Outgoing msg id</th>
            <th>Messages</th>
            <th>Photos</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <?php
        while($rows=mysqli_fetch_assoc($Mresult)){
        ?>
        <tr>
            <td><?php echo $rows['msg_id'];?></td>
            <td><?php echo $rows['incoming_msg_id'];?></td>
            <td><?php echo $rows['outgoing_msg_id'];?></td>
            <td><?php echo $rows['msg'];?></td>
            <td><?php echo $rows['pho'];?></td>
            <td><?php echo $rows['date'];?></td>
            <td>
              
              <?php echo '<a href="del_msg.php?id='.$rows['msg_id'].'" class="btn btn-danger ">Delete</a>'?>
              
            </td>
        </tr>
        <?php
        }
        ?>
    </table>
  </div>

  <div id="Tokyo" class="w3-container city" style="display:none">
    <h2>User Feedback</h2>
    <table>
        <tr>
            <th>Sr.No.</th>
            <th>User Name</th>
            <th>User Email id</th>
            <th>Subject</th>
            <th>User opinions</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        <?php
        while($rows=mysqli_fetch_assoc($Fresult)){
        ?>
        <tr>
            <td><?php echo $rows['id'];?></td>
            <td><?php echo $rows['fname'];?></td>
            <td><?php echo $rows['email'];?></td>
            <td><?php echo $rows['subject'];?></td>
            <td><?php echo $rows['idea'];?></td>
            <td><?php echo $rows['date'];?></td>
            <!-- <td><button class="btn btn-primary badge-pill" style="width:80px;">Replay</button> -->
            <td><?php echo '<a href="del_msg.php?id='.$rows['id'].'" class="btn btn-danger ">Delete</a>'?></td>
        </tr>
        <?php
        }
        ?>
    </table>
  </div>
</div>

<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-red", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-red";
}
</script>
</body>
</html>