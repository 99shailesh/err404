<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic' rel='stylesheet' type='text/css'>
 </head>

<body>

<header>
  	<a href="./index.php"> <img id="logo" src="logo.png" alt="Quora"/> </a>
</header>

<?php if($_SERVER['REQUEST_METHOD'] === 'POST') : ?>

<?php 
    include "mysqli-connect.php";

$email = $_POST["email"];
$password = $_POST["password"];
$pswdconfirm = $_POST["pswdconfirm"];
$uname = $_POST["uname"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$profession = $_POST["profession"];


$validEmail = preg_match('/[A-Z]+@[A-Z]+[.][A-Z]+/i', $email);
$validPassword = preg_match('/([A-Z0-9^\s]){8,}/i', $password);
$passMatch = $password === $pswdconfirm;
$validUsername = preg_match('/^(?!\s)([A-Z0-9^\S]){8,}/i' , $uname);

?>
<div class="center post-display" >

<?php

if($validUsername && $validPassword && $passMatch && $validEmail) {

	// $sql = "CREATE TABLE Users
	// 	(
	// 	id int NOT NULL AUTO_INCREMENT,
	// 	email varchar(255) NOT NULL UNIQUE,
	// 	password varchar(255) NOT NULL,
	// 	uname varchar(255) NOT NULL UNIQUE,
	// 	age integer NOT NULL,
	// 	gender varchar(10) NOT NULL,
	// 	PRIMARY KEY(id)
	// 	);";
	// $conn->query($sql);
	$password = $_POST["password"];
	$pswdconfirm = $_POST["pswdconfirm"];

	$sql = "INSERT INTO users(email, password, uname, age , gender , profession)
	VALUES ('"
	. htmlspecialchars($email) . "', '"
	. htmlspecialchars($password) . "', '"
	. htmlspecialchars($uname) . "', '"
	. htmlspecialchars($age) . "', '"
	. htmlspecialchars($gender) . "', '"
	. htmlspecialchars($profession) . "');" ;

	if($conn->query($sql) === TRUE) {
		// echo "Registration successful.<br />";
		$_SESSION["email"]=$email;
		$_SESSION["uname"]=$uname;
		$_SESSION["gender"]=$gender;
		$_SESSION["age"]=$age;
		$_SESSION["profession"]=$profession;
		header("location:index.php");
	} 
	else {
		echo "Error: could not add user: " . $conn->error . "<br />";
	}
} 
else {
	echo "Registration error.<br />";
}

// echo "Click <a href=\"./index.php\">here</a> to go to the index page.";

//TESTING CODE, DELETE LATER;
//$conn->query("DROP TABLE Users;");

$conn->close();

?>

<?php else : ?>

    <div class="center post-display">Error</div>

<?php endif; ?>

</div>

</body>
</html>