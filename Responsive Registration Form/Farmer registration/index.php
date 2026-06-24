<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Farmer Registration</div>
    <div class="content">
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="fname" placeholder="Enter your name" required>
          </div>
          
           <!--Label & Textbox-->
          <div class="input-box">
            <span class="details">Email</span>
            <input type="text" name="email" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Phone Number</span>
            <input type="text" name="phone" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Aggregator-ID</span>
            <input type="text" name="aggregatorID" placeholder="Enter your Aggregator-ID" required>
          </div>

          <div class="input-box">
            <span class="details">State</span>
            <input type="text" name="state" placeholder="Enter your State" required>
          </div>

          <div class="input-box">
            <span class="details">City</span>
            <input type="text" name="city" placeholder="Enter your City" required>
          </div>

          <div class="input-box">
            <span class="details">Username</span>
            <input type="text" name="username" placeholder="Enter your username" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="text" name="password" placeholder="Enter your password" required>
          </div>
        </div>
        <!--Label & Textbox-->

        <!--Verification radio-button-->
        <div class="Verification-details">
          <input type="radio" name="verification" id="dot-1">
          <input type="radio" name="verification" id="dot-2">
          <span class="verify-title">Verification</span>
          <div class="category1">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="Verification-details">Verified</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="Verification-details">Not Verified</span>
          </label>
          </div>
        </div>
        <!--Verification radio-button-->

        <!--Gender radio-button-->
        <div class="gender-details">
          <input type="radio" name="gender" id="dot-3">
          <input type="radio" name="gender" id="dot-4">
          <input type="radio" name="gender" id="dot-5">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-3">
            <span class="dot three"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-4">
            <span class="dot four"></span>
            <span class="gender">Female</span>
          </label>
          <label for="dot-5">
            <span class="dot five"></span>
            <span class="gender">Prefer not to say</span>
            </label>
          </div>
        </div>
         <!--Gender radio-button-->

        <div class="button">
          <input type="submit" name="register" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
