<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <!-- Sidebar -->
<div class="w3-sidebar w3-bar-block w3-border-right" style="display:none;" id="mySidebar">
  <button onclick="w3_close()" class="w3-bar-item w3-large">Welcome &times;</button>
  <a href="index.html" class="w3-bar-item w3-button">Home</a>
  <a href="about.html" class="w3-bar-item w3-button">Contact</a>
  <a href="contact.html" class="w3-bar-item w3-button">Help</a>
</div>

<!-- Page Content -->
<div class="w3-teal">
  <button class="w3-button w3-teal w3-xlarge"  onclick="w3_open()">☰</button>
</div>
  <div class="wrapper">
    <section class="form signup">
      <header>RapidChat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>First Name</label>
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <label>Middle Name</label>
            <input type="text" name="mname" placeholder="Middle name" required>
          </div>
          <div class="field input">
            <label>Last Name</label>
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <label>Country</label>
        <select name="country" class="formcontrol"  id="country" required>
          <option value="0">.....Select Country.....</option>
          <option value="India">India</option>
          <option value="USA">United State Of America(USA)</option>
          <option value="Australia">Australia</option>
          <option value="Uk">United Kingdom</option>
          <option value="South of Africa">South of Africa</option>
          <option value="Srilanka">Srilanka</option>
        </select>
        </div>
        <div class="field input">
          <label>State</label>
        <select name="state" class="formcontrol"  id="state" required>
          <option value="0"><b>....Select State....</b></option>
          <option value="0">.......................................State of India.................................................</option>
          <option value="Andra Pradesh">Andra Pradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Bihar">Bihar</option>
          <option value="Delhi">Delhi</option>
          <option value="Gujrat">Gujrat</option>
          <option value="Jamu and Kashmir">Jammu and Kashmir</option>
          <option value="Karnataka">Karnataka</option>
          <option value="Madhya Pradesh">Madhya Pradesh</option>
          <option value="Maharashtra & Goa">Maharashtra</option>
          <option value="Punjab">Punjab</option>
          <option value="Tamil Nadu">Rajastan</option>
          <option value="Jharkhand">Jharkhand</option>
          <option value="Uttrakhand">Uttrakhand</option>
          <option value="Telaganna">Telaganna</option>
          <option value="Mizorom">Mizorom</option>
          <option value="Goa">Goa</option>
          <option value="Uttar Pradesh">Uttar Pradesh</option>
          <option value="West Bengal">West Bengal</option>
          <option value="0">............................................State of USA.................................................</option>
          <option value="Alaska">Alaska</option>
          <option value="Alabama">Alabama</option>
          <option value="California">California</option>
          <option value="Colorado">Colorado</option>
          <option value="Ldhao">Ldhao</option>
          <option value="Michigan">Michigan</option>
          <option value="Georgia">Georgia</option>
          <option value="0">....................................State of Australia....................................................</option>
          <option value="South Australia">South Australia</option>
          <option value="Queensland">Queensland</option>
          <option value="Western Australia">Western Australia</option>
          <option value="Northern Australia">Northern Australia</option>
          <option value="New South Wales">New South Wales</option>
          <option value="0">....................................State of United Kingdom...............................................</option>
          <option value="London">London</option>
          <option value="South West">South West</option>
          <option value="Wales">Wales</option>
          <option value="South East">South East</option>
          <option value="0">....................................State of South Of Africa.............................................</option>
          <option value="Western Cape">Northern Cape</option>
          <option value="North West">North West</option>
          <option value="Northern Cape">Northern Cape</option>
          <option value="Free State">Free State</option>
          <option value="0">......................................State of SriLanka..................................................</option>
          <option value="Central">Central</option>
          <option value="Uva">Uva</option>
          <option value="Western">Western</option>
          <option value="North Central">North Central</option>
        </select>
        </div>
        <div class="field input">
          <label>City</label>
        <select name="city" class="formcontrol"  id="city" required>
          <option value="0">....Select City....</option>
          <option value="0">....................................City of India.............................................</option>
          <option value="Adoni">Adoni</option>
          <option value="Ahemdabad">Ahemdabad</option>
          <option value="Agra">Amravati</option>
          <option value="Amravati">Amravati</option>
          <option value="Aurangabad">Aurangabad</option>
          <option value="Amrutsar">Amrutsar</option>
          <option value="Aamgaon">Aamgaon</option>
          <option value="Ajamer">Ajamer</option>
          <option value="Ahemadnagar">Ahemadnagar</option>
          <option value="Ayodhya">Ayodhya</option>
          <option value="Bodhgaya">Bodhgaya</option>
          <option value="Bhopal">Bhopal</option>
          <option value="Batinda">Batinda</option>
          <option value="Bengaluru">Bengaluru</option>
          <option value="Bhandara">Bhandara</option>
          <option value="Butibori">Butibori</option>
          <option value="Chandigarh">Chandigarh</option>
          <option value="Chandrapur">Chandrapur</option>
          <option value="Chennai">Chennai</option>
          <option value="Panji">Panji</option>
          <option value="Kolhapur">Kolhapur</option>
          <option value="Pandharpur">Pandharpur</option>
          <option value="Parbhani">Parbhani</option>
          <option value="Sangali">Sangali</option>
          <option value="Thane">Thane</option>
          <option value="Vasim">Vasim</option>
          <option value="Beed">Beed</option>
          <option value="shirdi">shirdi</option>
          <option value="Shegoan">Shegoan</option>
          <option value="Valsad">Valsad</option>
          <option value="Kochi">Kochi</option>
          <option value="Vasi">Vasi</option>
          <option value="Sindhudurg">Sindhudurg</option>
          <option value="New Delhi">New Delhi</option>
          <option value="Delhi">Delhi</option>
          <option value="Itanagar">Itanagar</option>
          <option value="Indore">Indore</option>
          <option value="Latur">Latur</option>
          <option value="Ladkhah">Ladkhah</option>
          <option value="Ranchi">Ranchi</option>
          <option value="Dehradun">Dehradun</option>
          <option value="Gawilor">Gawilor</option>
          <option value="Gandhinagar">Gandhinagar</option>
          <option value="Gondia">Gondia</option>
          <option value="Gaizabad">Gaizabad</option>
          <option value="Jaipur">Jaipur</option>
          <option value="Jabalpur">Jabalpur</option>
          <option value="Kanpur">Kanpur</option>
          <option value="Kolkata">Kolkata</option>
          <option value="Kushinagar">Kushinagar</option>
          <option value="kota">kota</option>
          <option value="Lucknow">Lucknow</option>
          <option value="pune">Pune</option>
          <option value="Mumbai">Mumbai</option>
          <option value="Nagpur">Nagpur</option>
          <option value="Nanded">Nanded</option>
          <option value="New Mumbai">New Mumbai</option>
          <option value="Naygaon">Naygaon</option>
          <option value="Hyderabad">Hyderabad</option>
          <option value="Surat">Surat</option>
          <option value="Solapur">Solapur</option>
          <option value="Srinagar">Srinagar</option>
          <option value="Shimala">Shimala</option>
          <option value="Sevagram">Sevagram</option>
          <option value="Thane">Thane</option>
          <option value="Vishkapatnam">Vishkapatnam</option>
          <option value="Voadara">Voadara</option>
          <option value="Varanashi">Varanashi</option>
          <option value="Vaishali">Vaishali</option>
          <option value="Yatmal">Yavatmal</option>
          <option value="Wardha">Wardha</option>
          <option value="0">....................................City of USA.............................................</option>
          <option value="Anchorage">Alaska</option>
          <option value="Fairbanks">Fairbanks</option>
          <option value="Juneau">Juneau</option>
          <option value="Huntsvile">Huntsvile</option>
          <option value="Birmingham">Birmingham</option>
          <option value="Tuscaloosa">Tuscaloosa</option>
          <option value="Los Angles">Los Angles</option>
          <option value="San Francisco">San Francisco</option>
          <option value="San Jose">San Jose</option>
          <option value="Nmapha">Nampha</option>
          <option value="Boise">Boise</option>
          <option value="Detroit">Detroit</option>
          <option value="Warren">Warren</option>
          <option value="New Mexico">New Mexico</option>
          <option value="Columbus">Columbus</option>
          <option value="Washigaton">Washigaton</option>
          <option value="0">....................................City of USA.............................................</option>
          <option value="Adelaide">Adelaide</option>
          <option value="brisbane">Brisbane</option>
          <option value="Canberra">Canberra</option>
          <option value="Gabhha">Gabhha</option>
          <option value="Melbourne">Melbourne</option>
          <option value="Sydney">Sydney</option>
          <option value="Perth">Perth</option>
          <option value="Hobart">Hobart</option>
          <option value="0">....................................City of United Kingdom.............................................</option>
          <option value="Wales">Wales</option>
          <option value="London">London</option>
          <option value="Lords">Lords</option>
          <option value="Birmingham">Birmingham</option>
          <option value="Manchester">Manchester</option>
          <option value="Cardiff">Cardiff</option>
          <option value="Trafford">Trafford</option>
          <option value="0">....................................City of South Of Africa.............................................</option>
          <option value="Cape Town">Cape Town</option>
          <option value="Johannesburg">Johannesburg</option>
          <option value="Pretoria">Pretoria</option>
          <option value="Bloemfontein">Bloemfontein</option>
          <option value="Durban">Durban</option>
          <option value="Kinshasa">Kinshasa</option>
          <option value="Lagos">Lagos</option>
          <option value="0">....................................City of SriLanka.............................................</option>
          <option value="Colomobo">Colomobo</option>
          <option value="Kurunegala">Kurunegala</option>
          <option value="Puttalam">Puttalam</option>
          <option value="Kandy">Kandy</option>
          <option value="Galle">Galle</option>
          <option value="Badulla">Badulla</option>
          <option value="Anuradhapura">Anuradhapura</option>
          <option value="Gampha">Gampha</option>
          <option value="Jaffna">Jaffna</option>
        </select>
        </div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Contact</label>
          <input type="text" name="no" placeholder="Enter your number" required>
        </div>
        <div class="field input">
          <label>About</label>
          <textarea name="bio" rows="5" cols="30" placeholder="Write anything about bio" required></textarea>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Select Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Create a New Account">
        </div>
      </form>
      <div class="link">Already signed up? <a href="login.php">Login now</a></div>
    </section>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
  <script src="javascript/sidebar.js"></script>
</body>
</html>
