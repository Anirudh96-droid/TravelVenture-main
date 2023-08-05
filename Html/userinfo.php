<?php 
    session_start();

    // Connect to the database
	$host = "localhost";
	$dbname = "travel";
	$username_db = "travel";
	$password_db = "travel";

	try {
		$db = new PDO(
			"mysql:host=$host;dbname=$dbname",
			$username_db,
			$password_db
		);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $user_id = $_SESSION["USER_ID"];
		// Check if the user exists in the database
		$stmt = $db->prepare("SELECT * FROM users WHERE id = :user_id");
		$stmt->bindParam(":user_id", $user_id);
		$stmt->execute();
		$user = $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
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

   <link rel="stylesheet" href="../css/userinfo.css">


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
    <div class="container" style="height:530px;">
        <div class="d-flex justify-content-between align-items-center">
            <h2>My Profile</h2>
            <button type="button" class="btn-edit">
                <span class="edit-label">
                    <i class="fas fa-edit"></i>Edit
                </span>
                <span class="cancel-label d-none">Cancel</span>
            </button>
        </div>
        <form method="post" id="updateForm" class ="formupdate esdit-mode" action="../php/user.php?id=<?php echo $user_id; ?>">
            <label for="firstname">Firstname:</label>
            <div class="profile-data"><?php echo $user['firstname']?></div>
            <input type="text" name="firstname" id="firstname" value="<?php echo isset($user['firstname']) ? $user['firstname'] : ''; ?>">
            <span id="firstnameError" class="error"></span>
            <label for="lastname">Lastname:</label>
            <div class="profile-data"><?php echo $user['lastname']?></div>
            <input type="text" name="lastname" id="lastname" value="<?php echo isset($user['lastname']) ? $user['lastname'] : ''; ?>">
            <span id="lastnameError" class="error"></span>
            <label for="email">Email:</label>
            <div class="profile-data"><?php echo $user['email']?></div>
            <input type="email" name="email" id="email" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>">
            <span id="emailError" class="error"></span>
            <label for="regnumber">Phone Number:</label>
            <div class="profile-data"><?php echo $user['phone_number']?></div>
            <input type="tel" name="regnumber" id="regnumber" value="<?php echo isset($user['phone_number']) ? $user['phone_number'] : ''; ?>">
            <span id="regnumberError" class="error"></span>
            <label for="age">Age:</label>
            <div class="profile-data"><?php echo $user['age']?></div>
            <input type="number" name="age" id="age" value="<?php echo isset($user['age']) ? $user['age'] : ''; ?>">
            <span id="ageError" class="error"></span>
            <label for="gender">Gender :</label>
            <div class="profile-data"><?php echo $user['gender']?></div> 
            <div class="form-options">
                <label for="gendermale">Male</label>
                <input type="radio" id="gendermale" name="gender" value="male" <?php echo ($user['gender'] === 'male') ? 'checked' : ''; ?>>
                <label for="genderfemale">Female</label>
                <input type="radio" id="genderfemale" name="gender" value="female" <?php echo ($user['gender'] === 'female') ? 'checked' : ''; ?>>
                <label for="genderother">Other</label>
                <input type="radio" id="genderother" name="gender" value="other" <?php echo ($user['gender'] === 'other') ? 'checked' : ''; ?>>
                <span id="genderError" class="error"></span>
            </div>
            <label for="username">Username:</label>
            <div class="profile-data"><?php echo $user['username']?></div>
            <input type="text" name="username" id="username" value="<?php echo isset($user['username']) ? $user['username'] : ''; ?>">
            <span id="usernameError" class="error"></span>
            <div class="d-flex hide-on-view">
                <a href="changePassword.html">Change Password ?</a>
            </div>
            
            <div class="form-group hide-on-view">
                <button type="submit" >save</button>
            </div>
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


  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="../js/updatevalidation.js"></script>

 
 <script>
        function enableInput(fieldName) {
            document.getElementsByName(fieldName).removeAttribute("disabled");
        }
        document.addEventListener("DOMContentLoaded", function () {
            const editButton = document.querySelector(".btn-edit");
            const editLabel = document.querySelector(".edit-label");
            const cancelLabel = document.querySelector(".cancel-label");
            const form = document.getElementById("updateForm");

            editButton.addEventListener("click", function () {
                form.classList.toggle("edit-mode");
                editLabel.classList.toggle('d-none')
                cancelLabel.classList.toggle('d-none')
            });
        });
    </script>
</body>


</html>