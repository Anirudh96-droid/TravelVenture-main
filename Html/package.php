<!-- Anirudh -->
<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
 

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">

   <!-- home css file link  -->
   <link rel="stylesheet" href="../css/home.css">



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
    <div class="heading" style="background:url(../images/header-bg-1.png) no-repeat">
        <h1>packages</h1>
     </div>

     <section class="home-packages">

        <h1 class="heading-title">top destinations</h1>

        <div class="search">
  <i class="material-icons">search</i>
  <form>
    <input type="text" name="search" />
  </form>
</div>
     
        <div class="box-container">
        <div class="box">
           <div id="card">
              <div class="image">
                 <img src="../images/img-1.jpg" alt="">
              </div>
              <div class="content">
                 <h3>Premium 5N trip to Taj mahal and Delhi</h3>
                 <p>1N Ahmedabad| 2N Delhi | 1N Old Delhi | This 5-night tour takes you on a captivating adventure through some of India's most iconic destinations.</p>
              </div>
           </div>
           <a href="book.php?price= 2000&place= Delhi" class="btn">$2000</a>
        </div>
           <div class="popup" id="popup">
                <div class="popup-content">
                    <div class="popup-container">
                        <span class="close" id="close">&times;</span>
                        <h2>Swiss Paris Delight Itinerary</h2>
                        <p><b>Duration:</b> 5 nights</p>
                        <p><b>Highlights:</b> Bypass long lines at the Eiffel Tower with summit access.</p>
                        <p><b>Price:</b> $1000</p>
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" min="1" value="1">
                    </div>
                </div>
            </div>
            
        <div class="box">
           <div id="card">
              <div class="image">
                 <img src="../images/thailand.jpeg" alt="">
              </div>
              <div class="content">
                 <h3>Explore Amazing Phuket - Land only</h3>
                 <p>5 N Phuket | Discover the magic of Phuket's pristine beaches,white sands meet crystal-clear turquoise waters, creating an idyllic setting for relaxation and rejuvenation.</p>
              </div>
           </div>
           <a href="book.php?price= 3200&place= thailand" class="btn">$3200</a>
        </div>

        <div class="box">
           <div id="card">
              <div class="image">
                 <img src="../images/img-3.jpg" alt="">
              </div>
              <div class="content">
                 <h3>Serene Bali</h3>
                 <p>5N | Experience a memorable vacation in the mystical land of Bali. Get an extra dose of thrill as you enjoy water sports at Tanjung Benoa Beach.</p>
              </div>
           </div>
           <a href="book.php?price= 4000&place= Bali" class="btn">$4000</a>
        </div>

        <div class="box">
           <div id="card">
              <div class="image">
                 <img src="../images/img-4.jpg" alt="">
              </div>
              <div class="content">
                 <h3>China </h3>
                 <p>4 N | Discover the wonders of China with this mesmerizing 4-night tour, offering an unforgettable experience centered around a visit to the iconic Great Wall</p>
              </div>
           </div>
           <a href="book.php?price= 4000&place= China" class="btn">$4000</a>
        </div>

        <div class="box">
           <div id="card">
              <div class="image">
                 <img src="../images/paris.jpg" alt="">
              </div>
              <div class="content">
                 <h3>Swiss Paris Delight</h3>
                 <p>5 N | Embark on an enchanting 5-night journey to two of Europe's most captivating destinations - Switzerland and Paris. </p>
              </div>
           </div>
           <a href="book.php?price= 3500&place= Paris" class="btn">$3500</a>
        </div>

        <div class="box">
           <div id="card">
              <div class="image">
                 <img src="../images/img-6.jpg" alt="">
              </div>
              <div class="content">
                 <h3>Best of Andaman - Standard</h3>
                 <p>5 N | Kick-start your beach holidays in the Andamans with 5N stays at Port Blair, Havelock & Neil Island.</p>
              </div>
           </div>
           <a href="book.php?price= 3800&place= Andaman" class="btn">$3800</a>
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

     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
 
 <!-- custom js file link  -->
 <script src="../js/script.js"></script>
</body>


</html>