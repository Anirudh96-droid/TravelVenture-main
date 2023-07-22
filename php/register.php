<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$regnumber = $_POST["regnumber"];
	$age = $_POST["age"];
	$gender = $_POST["gender"];
	$username = $_POST["username"];
	$password = $_POST["password"];

	// Hash the password
	$hashed_password = password_hash($password, PASSWORD_BCRYPT);
	$host = "localhost";
	$dbname = "travel";
	$username_db = "travel";
	$password_db = "travel";
	try {
		$db = new PDO(
		"mysql:host=$host;dbname=$dbname",
			$username_db, $password_db);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		// Insert the user into the database
		$stmt = $db->prepare(
		"INSERT INTO users (firstname,lastname,email,phone_number,age,gender,username, password)
			VALUES (:firstname,:lastname,:email,:phone_number,:age,:gender, :username,:password)");
		$stmt->bindParam(":firstname", $firstname);
		$stmt->bindParam(":lastname", $lastname);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":phone_number", $regnumber);
		$stmt->bindParam(":age", $age);
		$stmt->bindParam(":gender", $gender);
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password", $hashed_password);
		$stmt->execute();
		echo "<h2>Registration Successful</h2>";
		echo "Thank you for registering, " . $firstname . "!<br>";
		echo "You'll be redirected to login page in 3 seconds";
		header("refresh:3;url=../Html/login.html");
	}
	catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
}
?>
