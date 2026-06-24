<!DOCTYPE html>
<!-- Designined by CodingLab - youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Registration Form | CodingLab </title>
    <link rel="stylesheet" href="customer.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Customer's Registration</div>
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
            <input type="text" name="phone_number" placeholder="Enter your number" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text" name="address" placeholder="Enter your Full Address" required>
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
<?php
if(isset($_POST["register"])){
$fname = $_POST["fname"];
$email = $_POST["email"];
$phone_number = $_POST["phone_number"];
$address = $_POST["address"];
$state = $_POST["state"];
$city = $_POST["city"];
$username = $_POST["username"];
$password = $_POST["password"];
$gender = $_POST["gender"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "grocerydb";
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO cregistration (firstname, email, Phone, Address, State, City,   Username, Password, Gender) VALUES ('".$fname."', '".$email."', '".$phone_number."', '".$address."', '".$state ."', '".$city."', '".$username."','".$password."','".$gender."')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Registered Successfully');</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>

