<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Question Form</title>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic' rel='stylesheet' type='text/css'>
  </head>
  <body>
  	<header>
  	<a href="./index.php"> <img id="logo" src="logo1.png" alt="Quora"/> </a>
  	</header>

    <?php 
    session_start();
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) : ?>

<br>
<br>
<br>
<br>
<br>
<br>

  	<h1 id="form-title" class="center">Submit a Question</h1>
  	<div class="center" id="submit-section">
  		<form class="center" id="submit-form" onsubmit="return validateQA()" action="question.php" method="post" enctype="multipart/form-data">
        <label id="error_msg" class="err_msg"></label>

       

        <textarea rows="10" cols="100" id="textform" name="text" placeholder="Enter your question here (at least 30 characters)" style="border:solid 2px black; "></textarea> <br />
        Character count: <label id="charCount">0</label>/300
        <br />

  			<button type="submit" id="submit-button" name="question-submit" value="Submit">SUBMIT</button><br>
  		</form>
  	</div>

    <script type="text/javascript" src="script.js"> </script>
    <script type="text/javascript" src="script-QA.js"> </script>

    <?php else : ?>

    <div class="center post-display" id="submit-section">
      You must be logged in to view this page.
    </div>

    <?php endif; ?>

  </body>
</html>

<style type="text/css">
  #logo
  {
    
    border:1px solid white;
    border-radius: 50%;
    margin-left:45px;
    margin-bottom:20px;

  }
  #form-title
  {
    background-color: #379683;

  }
  button
   {
      background-color: #379683;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 20px 10px;
      cursor: pointer;
      font-size: 40px;
}
 button:hover
  {
    opacity:0.5;
  }
  text-area
  {
    
    display: inline-block;
    border: solid 2px blue;
  }
  </style>
<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>