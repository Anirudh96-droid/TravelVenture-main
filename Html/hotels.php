<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">
   <link rel="stylesheet"  type="text/css" href="../css/home.css">

</head>
<body>
    <!-- Header Section -->
    <header>
        <nav class="navbar">
            <div class="navbar-brand">
                <a class="logo" href="index.php">Travel Venture.</a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="package.php">Travel Packages</a></li>
                <li><a href="hotels.php">Hotels</a></li>
                <li><a href="book.php">book</a></li>
                <li><a href="about.php">about</a></li>
                <?php if(!isset($_SESSION['USER_NAME'])){
                    echo '<li><a href="#" onclick="openDialogLogin()">Login</a></li>';
                }else{ ?>
                    <li><a href="userinfo.php">Welcome <?php echo  $_SESSION['USER_NAME']?> </a></li>
                    <li><a href="../php/logout.php">Logout</a></li>
                <?php }?>
            </ul>
           
        </nav>
    </header>
    <!-- header section ends -->


     <!--CONTENT-->


   <!-- Footer Section -->
   <footer style="justify-content: center;">
      <ul class="nav-links footer">
          <li><a href="index.html">Home</a></li>
          <li><a href="package.html">Travel Packages</a></li>
          <li><a href="hotels.html">Hotels</a></li>
          <li><a href="book.html">book</a></li>
          <li><a href="about.html">about</a></li>

      </ul>
  </footer>
 
   <!-- Login -->
   <div id="dialogLogin" class="dialog-box">
      <div class="dialog-content">
          <div class="container">
              <div class="d-flex justify-content-end close-btn">
                  <span class="close" id="closeBtn">&times;</span>
              </div>
              <h2>Login Page</h2>
              <form method="post" action="../php/login.php">
                  <div class="form-login">
                      <label for="username">Username :</label>
                      <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-login">
                      <label for="password">Password :</label>
                      <input type="password" id="password" name="password"
                      pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" 
                      title="Must contain at least one number, one uppercase and lowercase letter, and at least 8 or more characters" required>
                    </div>
                    <div class="form-login">
                      <button type="submit">Login</button>
                    </div>
              </form>
              <br><br>
              <div class="d-flex">
                  <p> Does not have an account?
                      <a href="#" onclick="openDialogRegsiter()" >Click Here</a>  
                  </p>
                  <p>Forgot Password
                      <a href="../Html/forgotPassword.html">forgot Password</a>
                  </p>
              </div>
          </div>
      </div>
  </div>

  <!-- Register -->

  <div id="dialogRegsiter" class="dialog-box">
   <div class="dialog-content">
       <div class="container m-0">
           <div class="d-flex justify-content-end close-btn">
               <span class="close" id="closeBtnRe">&times;</span>
           </div>
           <h2>Travel Website Registration</h2>
           <form method="post" action="../php/register.php" id="registrationForm" onsubmit="return validateForm()">
               <div class="mod-form-row">
                   <div class="mod-form-field w-50">
                       <label for="firstname">Firstname :</label>
                       <input  class="inp-str" type="text" id="firstname" name="firstname" class="inp-str">
                       <span id="firstnameError" class="error"></span><br>
                   </div>
                   <div class="mod-form-field w-50">
                       <label for="lastname">Lastname :</label>
                       <input  class="inp-str" type="text" id="lastname" name="lastname">
                       <span id="lastnameError" class="error"></span><br>
                   </div>
               </div>
               <div class="mod-form-row">
                   <div class="mod-form-field w-100">
                       <label for="email">Email :</label>
                       <input  class="inp-str" type="email" id="email" name="email">
                       <span id="emailError" class="error"></span><br>
                   </div>
               </div>
               <div class="mod-form-row">
                   <div class="mod-form-field w-50">
                       <label for="regnumber">Phone number :</label>
                       <input  class="inp-str" type="tel" id="regnumber" name="regnumber">
                       <span id="regnumberError" class="error"></span><br>
                   </div>
                   <div class="mod-form-field w-50">
                       <label for="age">Age :</label>
                       <input  class="inp-str" type="number" id="age" name="age">
                       <span id="ageError" class="error"></span><br>
                   </div>
               </div>
               <div class="mod-form-row">
                   <div class="mod-form-field w-100">
                       <label for="gender">Gender :</label>
                       <div class="form-options">
                           <label for="gendermale">Male</label>
                           <input type="radio" id="gendermale" name="gender" value="male">
                           <label for="genderfemale">Female</label>
                           <input type="radio" id="genderfemale" name="gender" value="female">
                           <label for="genderother">Other</label>
                           <input type="radio" id="genderother" name="gender" value="other">
                           <span id="genderError" class="error"></span><br>
                       </div>
                   </div>
               </div>
               <div class="mod-form-row">
                   <div class="mod-form-field w-100">
                       <label for="username">Username :</label>
                       <input class="inp-str" type="text" id="username" name="username">
                       <span id="usernameError" class="error"></span><br>
                   </div>
               </div>
               <div class="mod-form-row">
                   <div class="mod-form-field w-100">
                       <label for="password">Password :</label>
                       <input class="inp-str" type="password" id="password" name="password">
                       <span id="passwordError" class="error"></span><br>
                   </div>
               </div>
               <div class="mod-form-row">
                   <div class="mod-form-field w-100">
                       <label for="password">Confirm Password :</label>
                       <input class="inp-str" type="password" id="cpassword" name="cpassword">
                       <span id="cpasswordError" class="error"></span><br>
                   </div>
               </div>
               <div class="form-group">
                   <button type="submit">Register</button>
               </div>
               
           </form>
           <div class="d-flex">
               <p> Already have an account?
                   <a href="#" onclick="openDialogLogin()">Click Here</a>
               </p>
           </div>
       </div>
   </div>
 </div>

 <!-- reviews section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>
</body>

</html>