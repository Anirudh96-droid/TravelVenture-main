<?php

// you have established a database connection
$servername = "localhost";
$username = "travel";
$password = "travel";
$dbname = "travel";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user_id = $_GET["id"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	$regnumber = $_POST["regnumber"];
	$age = $_POST["age"];
	$gender = $_POST["gender"];
	$username = $_POST["username"];


    // Update user details in the database
    $sql = "UPDATE users SET firstname='$firstname',lastname='$lastname', email='$email', phone_number='$regnumber', age='$age',gender = '$gender',username='$username' WHERE id=$user_id";

    if ($conn->query($sql) === TRUE) {
        echo '<script type="text/javascript">
		window.onload = function () {
			alert("Updated Successfully");
			window.location.href = "../Html/userinfo.php";
		};
		</script>';
    } else {
        echo "Error updating user details: " . $conn->error;
    }
}

$conn->close();
?>
