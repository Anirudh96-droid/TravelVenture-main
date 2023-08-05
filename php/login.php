<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$username = $_POST["username"];
	$password = $_POST["password"];

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

		// Check if the user exists in the database
		$stmt = $db->prepare("SELECT * FROM users WHERE username = :username");
		$stmt->bindParam(":username", $username);
		$stmt->execute();
		$user = $stmt->fetch(PDO::FETCH_ASSOC);

		$storepassword = $user["password"];
		if ($user) {
			// Verify the password
			if (password_verify($password, $storepassword)) {
				session_start();
				$_SESSION["USER_ID"] = $user['id'];
				$_SESSION['USER_NAME']= $user['username'];

				echo '<script type="text/javascript">
				window.onload = function () {
				window.location.href = "../Html/index.php";
				};
				</script>
				';
			} else {
				echo '<script type="text/javascript">
				window.onload = function () {
					alert("Login Failed,Invalid password.");
					window.location.href = "../Html/index.php";
				};
				</script>';
			}
		} else {
			echo "<h2>Login Failed</h2>";
			echo "User doesn't exist";
			echo '<script type="text/javascript">
			window.onload = function () {
				alert("Login Failed,User doesn\'t exist.");
				window.location.href = "../Html/index.php";
			};
			</script>';
		}
	} catch (PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
}
?>
