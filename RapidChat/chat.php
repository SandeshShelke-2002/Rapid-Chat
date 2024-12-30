<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
          $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: users.php");
          }
        ?>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <div class="zoom"><img src="php/images/<?php echo $row['img']; ?>" alt=""></div>
        <div class="details">
          <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
          <p><?php echo $row['status']; ?></p>
        </div>
      </header>
      <div class="chat-box">
      </div>
      <form action="#" class="typing-area" enctype="multipart/form-data">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>

        <label for='image'><img src='image/add.png' style='opacity:0.8;width:38px'></label>
        <input type="file" id="image" name="image" class="input-image" accept="image/x-png,image/gif,image/jpeg,image/jpg" hidden>
        
        <input type="text"  name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <!-- <label for='voice'><img src='image/voice.jpg' style='opacity:0.8;width:38px'></label>
        <input type="file" id='voice' name='voice' style='display:none' /> -->
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>
  <script src="javascript/chat.js"></script>

</body>
</html>
