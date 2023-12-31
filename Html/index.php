<!-- Anirudh S Menon  -->
<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet"  type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="../jquery-ui-1.13.2. Dark/jquery-ui.css">
  <!-- swiper css link  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


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
                <!-- <li><a href="book.php">book</a></li>-->
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

<!-- home section starts  -->

<section class="home">

    <div class="swiper home-slider">
 
       <div class="swiper-wrapper">
 
          <div class="swiper-slide slide" style="background:url(../images/home-slide-2.jpg) no-repeat">
             <div class="content">
                <span>explore, discover, travel</span>
                <h3>travel around the world</h3>
                <a href="package.php" class="btn">discover more</a>
             </div>
          </div>
 
          <div class="swiper-slide slide" style="background:url(../images/home-slide-1.jpg) no-repeat">
             <div class="content">
                <span>explore, discover, travel</span>
                <h3>discover the new places</h3>
                <a href="package.php" class="btn">discover more</a>
             </div>
          </div>
 
          <div class="swiper-slide slide" style="background:url(../images/home-slide-3.jpg) no-repeat">
             <div class="content">
                <span>explore, discover, travel</span>
                <h3>make your tour worthwhile</h3>
                <a href="package.php" class="btn">discover more</a>
             </div>
          </div>
          
       </div>
 
       <div class="swiper-button-next"></div>
       <div class="swiper-button-prev"></div>
 
    </div>
 
 </section>
<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
         <img src="..//images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="..//images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="..//images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="..//images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="..//images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="..//images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

    <!-- Home Page -->

    <section class="home-packages">
        <h1 class="heading-title"> our packages </h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="..//images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Spiritual &amp; Mindfullness</h3>
                    <p>Embark on a transformative journey with our Spiritual and Mindfulness packages. These carefully curated experiences are designed to nourish your soul, provide inner peace, and connect you with ancient traditions. Immerse yourself in serene landscapes, visit sacred temples and monasteries, and participate in meditation and yoga retreats. Whether you seek spiritual awakening, self-discovery, or simply a peaceful escape from the chaos of everyday life.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="..//images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure &amp; tour</h3>
                    <p>If you crave adrenaline-pumping experiences and epic adventures, our Adventure and Exploration packages are tailor-made for you. Embark on daring escapades, conquer towering peaks, navigate through rugged terrains, and engage in thrilling outdoor activities. Whether you're a seasoned adventurer or a beginner seeking an adrenaline rush, our packages offer heart-pounding experiences and the chance to push your limits and create lifelong memories.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
    
            <div class="box">
                <div class="image">
                    <img src="..//images/img-8.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Nature &amp; wildlife</h3>
                    <p>For nature enthusiasts and wildlife lovers, our Nature and Wildlife packages bring you face-to-face with the wonders of the natural world. Explore diverse ecosystems, encounter fascinating wildlife, and marvel at the breathtaking beauty of national parks and reserves. From thrilling safaris to remote expeditions in untouched wilderness, these packages promise encounters with extraordinary creatures and the opportunity to immerse yourself in the untamed splendor of Mother Nature.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
    
        </div>
    
        <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
        </div>
    </section>

     <!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h2>Special Offer! upto 50% off</h2>
    <h2>Sign up and share this tour with your friends. If your friends make their first booking with us, you and your friends both get a 10% discount on your next booking!</h2>
    <?php if(isset($_SESSION['USER_NAME'])) { 
        echo '<a href="book.php" class="btn">Book Now</a>';
    }else{
        echo '<a style="" href="#" onclick="openDialogRegsiter()" class="btn">Sign Up</a>';
    }?>
   </div>
</section>

<!-- home offer section ends -->

    <!-- home about section starts  -->

<section class="home-about">

    <div class="image">
       <img src="../images/about-img.jpg" alt="">
    </div>
 
    <div class="content">
       <h3>about us</h3>
       <p>Join us on a journey of discovery, and let Travel Venture be your trusted partner in curating unforgettable moments, connecting with diverse cultures, and immersing yourself in the wonders of the world. Embark on a voyage of a lifetime with us, and let your travel dreams come true.</p>
       <a href="about.php" class="btn">read more about us</a>
    </div>
 
 </section>
 
 <!-- home about section ends -->


 <!-- footer section starts  -->

<section class="footer">

<div class="box-container">

   <div class="box">
      <h3>quick links</h3>
      <a href="index.php"> <i class="fas fa-angle-right"></i> Home</a>
      <a href="package.php"> <i class="fas fa-angle-right"></i> Travel package</a>
      <!--<a href="book.php"> <i class="fas fa-angle-right"></i> Book</a> -->
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

    <!-- Reshma - Login -->
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
    

    <!--Reshma - Register -->

    <div id="dialogRegsiter" class="dialog-box">
        <div class="dialog-content">
            <div class="container m-0">
                <div class="d-flex justify-content-end close-btn">
                    <span class="close" id="closeBtnRe">&times;</span>
                </div>
                <h2>Travel Website Registration</h2>
                <form method="post" action="../php/register.php" id="registrationForm" class="form" onsubmit="return validateForm()">
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../js/script.js"></script>
<script src="../js/registervalidation.js"></script>



</body>
</html>
