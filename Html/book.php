<!-- Ravleen -->
<?php 
    session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/book.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#start_date" ).datepicker();
    $( "#end_date" ).datepicker();
  } );
  </script>
    <title>Bookings</title>
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
    <div>
       <div class="heading" style="font-size: 6rem; background:url(../images/bookmytrip.jpg) no-repeat">
    
 </div>
    <div>
    <?php
    if(isset($_GET['message'])) {
        echo '<div style="color: green; text-align: center; font-size: 35px;">' . $_GET['message'] . '</div>';
    }
    ?>
    <h1 class="booktitle">Book Your Trip !</h1>
        <form action="../php/booking.php" method="post" class="form-container" id="book" onsubmit="return validateBookForm()">
            <table>
                <tr class="form-row">
                    <td class="form-group">
                        <label for="fullName">Full Name:</label>
                        <input type="text" id="fullName" name="fullName" >
                        <span id="fullNameError" class="error"></span>
                    </td>
                    <td class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" >
                        <span id="emailError" class="error"></span>
                    </td>
                </tr>
                <tr class="form-row">
                    <td class="form-group">
                        <label for="phoneNumber">Phone Number:</label>
                        <input type="tel" id="phoneNumber" name="phoneNumber" >
                        <span id="phoneNumberError" class="error"></span>
                    </td>
                    <td class="form-group">
                        <label for="address">Address:</label>
                        <input type="text" id="address" name="address" >
                        <span id="addressError" class="error"></span>
                    </td>
                </tr>
                <tr class="form-row">
                    <td class="form-group">
                        <label for="destination">Destination:</label>
                        <input type="text" id="destination1" name="destination1" disabled>
                        <input type="text" id="destination" name="destination" style="display:none;">
                    </td>
                    <td class="form-group">
                        <label for="guests">Number of Guests:</label>
                        <select name="guests" id="guests" >
                            <option value="1" id="selected">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <span id="guestsError" class="error"></span>
                    </td>
                </tr>
                <tr class="form-row">
                    <td class="form-group">
                        <p>Start Date: <input type="text" id="start_date" name="startDate"></p>
                        <span id="startDateError" class="error"></span>
                    </td>
                    <td class="form-group">
                        <p>End Date: <input type="text" id="end_date" name="endDate"></p>
                        <span id="endDateError" class="error"></span>
                    </td>
                </tr>
                <tr class="form-row">
                    <td class="form-group">
                        <label for="Price">Price:</label>
                        <input type="text" id="totalprice1" name="totalprice1" disabled>
                        <input type="text" id="totalprice" name="totalprice" style="display:none;">
                    </td>
                    <td class="form-group">
                    </td>
                </tr>
                <tr>
                    <td class="form-group">
                        <button type="submit">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

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
    <!-- custom js file link  -->
    <script src="../js/bookvalidation.js"></script>
    <script src="../js/bookvalidation.js"></script>
    <script>
        // Get the value from the URL query parameter
        const urlParams = new URLSearchParams(window.location.search);
        const value = urlParams.get('price');
        const destination = urlParams.get('place');
        document.getElementById('destination1').value = destination;
        document.getElementById('destination').value = destination;

        // Get the dropdown element
        const dropdown = document.getElementById('guests');

        // Get the selected value when the page loads
        const selectedValue = dropdown.value;
        const selectedValueElement = document.getElementById('selected');
        selectedValueElement.textContent = selectedValue;
        var tprice = value*selectedValue;
        document.getElementById('totalprice1').value = tprice;
        document.getElementById('totalprice').value = tprice;

        // Add a change event listener to the dropdown
        dropdown.addEventListener('change', function() {
        // Get the selected value when the dropdown changes
        const selectedValue = dropdown.value;
        selectedValueElement.textContent = selectedValue;
        var tprice = value*selectedValue;
        document.getElementById('totalprice1').value = tprice;
        document.getElementById('totalprice').value = tprice;
        });
    </script>
</body>
</html>