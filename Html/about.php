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
                <!--<li><a href="book.php">book</a></li>-->
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

<div class="heading" style="background:url(../images/header-bg-3.png) no-repeat">
    <h1>about us</h1>
 </div>
 <section class="about">

    <div class="image">
       <img src="../images/about-img.jpg" alt="">
    </div>
 
    <div class="content">
       <h3>why choose us?</h3>
       <p>Our team of seasoned travel experts meticulously curates each journey, ensuring that every experience is thoughtfully designed to cater to your unique interests and desires. Whether you seek thrilling adventures, serene getaways, or immersive cultural encounters, we have a journey that perfectly matches your wanderlust.</p>
       <p>At Travel Venture, we share an unwavering passion for exploration. Travel is not just a business; it's our way of life. We believe in the power of travel to inspire, transform, and connect people across borders and cultures.</p>
       <div class="icons-container">
          <div class="icons">
             <i class="fas fa-map"></i>
             <span>top destinations</span>
          </div>
          <div class="icons">
             <i class="fas fa-hand-holding-usd"></i>
             <span>affordable price</span>
          </div>
          <div class="icons">
             <i class="fas fa-headset"></i>
             <span>24/7 guide service</span>
          </div>
       </div>
    </div>
 
 </section>

 <!-- about section ends -->

 <!-- reviews section starts  -->

<section class="reviews">

    <h1 class="heading-title"> clients reviews </h1>
 
    <div class="swiper reviews-slider">
 
       <div class="swiper-wrapper">
 
          <div class="swiper-slide slide">
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
             </div>
             <p>I recently had the pleasure of experiencing the "Swiss Paris Delight" tour, and it truly exceeded all my expectations. From the moment I arrived in Switzerland to the captivating days spent in Paris, every aspect of the journey was meticulously planned and flawlessly executed.</p>
             <h3>Murali Meruga</h3>
             <span>traveler</span>
             <img src="../images/pic-1.png" alt="">
          </div>
 
          <div class="swiper-slide slide">
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
             </div>
             <p>My "Taj Mahal Delight" tour was an unforgettable and soul-stirring experience. The Taj Mahal has always been on my bucket list, and this tour allowed me to witness its awe-inspiring beauty in person.</p>
             <h3>Reshma K</h3>
             <span>traveler</span>
             <img src="../images/pic-2.png" alt="">
          </div>
 
          <div class="swiper-slide slide">
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
             </div>
             <p>As a hardcore traveler, I've explored numerous destinations, but my recent "Bali" tour was an absolute standout among all my adventures. Bali is a mesmerizing island that offers an intoxicating blend of natural beauty, vibrant culture, and thrilling experiences.</p>
             <h3>Anirudh</h3>
             <span>traveler</span>
             <img src="../images/pic-3.png" alt="">
          </div>
 
          <div class="swiper-slide slide">
             <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
             </div>
             <p>My "China" tour was a whirlwind of enchantment and fascination, showcasing the vast diversity and rich heritage of this remarkable country. From the ancient wonders to modern marvels, every moment of the trip left me in awe.</p>
             <h3>Ravleen Kaur</h3>
             <span>traveler</span>
             <img src="../images/pic-4.png" alt="">
          </div>
 
       </div>
 
    </div>
 
 </section>
  <!-- footer section starts  -->

  <section class="footer">

<div class="box-container">

   <div class="box">
      <h3>quick links</h3>
      <a href="index.php"> <i class="fas fa-angle-right"></i> Home</a>
      <a href="package.php"> <i class="fas fa-angle-right"></i> Travel package</a>
      <!--<a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>-->
      <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>

   </div>

   <div class="box">
      <h3>extra links</h3>
      <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
      <a href="about.php"> <i class="fas fa-angle-right"></i> about us</a>
      <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
      <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
   </div>

   <div class="box">
      <h3>contact info</h3>
      <a href="#"> <i class="fas fa-phone"></i> +143-456-7890 </a>
      <a href="#"> <i class="fas fa-phone"></i> +112-202-4333 </a>
      <a href="#"> <i class="fas fa-envelope"></i> travelventure@gmail.com </a>
      <a href="#"> <i class="fas fa-map"></i> Toronto, Canada - M1S 5Y8 </a>
   </div>

   <div class="box">
      <h3>follow us</h3>
      <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
      <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
      <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
      <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
   </div>

</div>

<div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->
 
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