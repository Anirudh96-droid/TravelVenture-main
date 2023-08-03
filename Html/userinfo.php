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
    <div class="container">
        <h2>User Info</h2>
        <form method="post" id="registrationForm" class ="formupdate" action="../php/user.php?id=<?php echo $user_id; ?>">
            <label for="firstname">Firstname:</label>
            <input type="text" name="firstname" id="firstname" value="<?php echo isset($user['firstname']) ? $user['firstname'] : ''; ?>">
            <span id="firstnameError" class="error"></span><br>
            <label for="lastname">Lastname:</label>
            <input type="text" name="lastname" id="lastname" value="<?php echo isset($user['lastname']) ? $user['lastname'] : ''; ?>">
            <span id="lastnameError" class="error"></span><br>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="<?php echo isset($user['email']) ? $user['email'] : ''; ?>">
            <span id="emailError" class="error"></span><br>
            <label for="regnumber">Phone Number:</label>
            <input type="tel" name="regnumber" id="regnumber" value="<?php echo isset($user['phone_number']) ? $user['phone_number'] : ''; ?>">
            <span id="regnumberError" class="error"></span><br>
            <label for="age">Age:</label>
            <input type="number" name="age" id="age" value="<?php echo isset($user['age']) ? $user['age'] : ''; ?>">
            <span id="ageError" class="error"></span><br>
            <label for="gender">Gender :</label>
            <div class="form-options">
                <label for="gendermale">Male</label>
                <input type="radio" id="gendermale" name="gender" value="male" <?php echo ($user['gender'] === 'male') ? 'checked' : ''; ?>>
                <label for="genderfemale">Female</label>
                <input type="radio" id="genderfemale" name="gender" value="female" <?php echo ($user['gender'] === 'female') ? 'checked' : ''; ?>>
                <label for="genderother">Other</label>
                <input type="radio" id="genderother" name="gender" value="other" <?php echo ($user['gender'] === 'other') ? 'checked' : ''; ?>>
                <span id="genderError" class="error"></span><br>
            </div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="<?php echo isset($user['username']) ? $user['username'] : ''; ?>">
            <span id="usernameError" class="error"></span><br>
            <div class="d-flex">
                <a href="changePassword.html">Change Password ?</a>
            </div>
            
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>

    
      <!-- Footer Section -->
    <footer style="justify-content: center;">
      <ul class="nav-links footer">
          <li><a href="index.php">Home</a></li>
          <li><a href="package.php">Travel Packages</a></li>
          <li><a href="hotels.php">Hotels</a></li>
          <li><a href="book.php">book</a></li>
          <li><a href="about.php">about</a></li>

      </ul>
  </footer>


  
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <!-- swiper js link  -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="../js/registervalidation.js"></script>

 
 <script>
        function enableInput(fieldName) {
            document.getElementsByName(fieldName).removeAttribute("disabled");
        }
    </script>
</body>


</html>