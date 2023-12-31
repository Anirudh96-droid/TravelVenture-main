<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$fullName = $_POST["fullName"];
	$email = $_POST["email"];
	$phoneNumber = $_POST["phoneNumber"];
	$address = $_POST["address"];
	$destination = $_POST["destination"];
	$guests = $_POST["guests"];
	$startDate = date("Y-m-d", strtotime($_POST["startDate"]));
    $endDate = date("Y-m-d", strtotime($_POST["endDate"]));
	$totalprice = $_POST["totalprice"];


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
		"INSERT INTO TravelDetails (full_name,email,phone_number,address,destination,guests, start_date,end_date,totalprice)
			VALUES (:full_name,:email,:phone_number,:address,:destination, :guests,:start_date,:end_date,:totalprice)");
		$stmt->bindParam(":full_name", $fullName);
		$stmt->bindParam(":email", $email);
		$stmt->bindParam(":phone_number", $phoneNumber);
		$stmt->bindParam(":address", $address);
		$stmt->bindParam(":destination", $destination);
		$stmt->bindParam(":guests", $guests);
		$stmt->bindParam(":start_date", $startDate);
        $stmt->bindParam(":end_date", $endDate);
		$stmt->bindParam(":totalprice", $totalprice);
		$stmt->execute();
        $message = "your booking Confirmed!";
        header("Location: ../Html/book.php?message=" . urlencode($message));
	}
	catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
}
?>
