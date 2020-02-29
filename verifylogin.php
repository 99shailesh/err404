<?php if($_SERVER['REQUEST_METHOD'] === 'POST') : ?>

<?php 
    include "mysqli-connect.php";

$email = $_POST["email"];
$password = $_POST["password"];


$sql = "SELECT * FROM Users WHERE email='" . htmlspecialchars($email) . "'";
$response = $conn->query($sql);

if($response) {
	if($row = mysqli_fetch_array($response)) {
		if($row["password"] === htmlspecialchars($password)) {
			session_start();
			$_SESSION["loggedin"] = true;
            $_SESSION["id"] = $row["id"];
            $_SESSION["email"] = $email;
            $_SESSION["password"] = $password;
            header("location:index.php");
		} else {
			echo "Invalid login credentials.<br />";
		}
	} else {
		echo "Login error.<br />";
	}
} else {
	echo "Login error.<br />";
}

mysqli_free_result($response);

$conn->close();

// echo "Click <a href=\"./index.php\">here</a> to go to the index page.";

?>

<?php else : ?>
	Error.

<?php
 endif; ?>