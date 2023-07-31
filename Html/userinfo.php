<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>User Info</title>

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
                <li><a href="hotels.php">Hotels</a></li>
                <li><a href="book.php">book</a></li>
                <li><a href="about.php">about</a></li>
                <?php if(!isset($_SESSION['USER_NAME'])){
                    echo '<li><a href="#" onclick="openDialogLogin()">Login</a></li>';
                }else{ ?>
                    <li><a href="userinfo.html">Welcome <?php echo  $_SESSION['USER_NAME']?> </a></li>
                    <li><a href="../php/logout.php">Logout</a></li>
                <?php }?>
            </ul>
           
        </nav>
    </header>
    
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


  
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
 
 <!-- custom js file link  -->
 <script src="../js/script.js"></script>
</body>


</html>