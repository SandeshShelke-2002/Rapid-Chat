

<body>
  <!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none;" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Welcome &times;</button>
  <a href="index.html" class="w3-bar-item w3-button">Home</a>
  <a href="mymerc.html" class="w3-bar-item w3-button">Contact</a>
  <a href="myab.html" class="w3-bar-item w3-button">Help</a>
</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge"  onclick="w3_open()">☰</button>
</div>
  <div class="wrapper">
    <section class="form signup">
      <header>MyMeesenger |Admin SignUp </header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="firstname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Middle Name</label>
            <input type="text" name="middlename" placeholder="Middle name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lastname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Contact</label>
          <input type="text" name="number" placeholder="Enter your number" required>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="Aemail" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="Apassword" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="admin" value="Create a New Account">
        </div>
      </form>
      <div class="link">Already signed up? <a href="adminlogin.php">Login now</a></div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/sidebar.js"></script>
</body>
</html>
