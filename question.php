<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Question Submtted</title>
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

    
    <br>
<br>
<br>
<br>
<br>
<br>
    <div class="center post-display" >

<?php session_start();
      if($_SERVER['REQUEST_METHOD'] === 'POST'
        && isset($_SESSION["loggedin"])
        && isset($_SESSION["id"])
        && $_SESSION["loggedin"] === true)
: ?>
<!-- -->
<?php

      //$url = $_POST["url"];
      $question = $_POST["text"];
      $user_id = $_SESSION["id"];
      $timestamp = date('Y-m-d g:i:s');

      //$validURL = preg_match('/[(http(s)?):\/\/(www\.)?a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&\/\/=]*)/i', $url);
      $validQuestion = strlen($question) <= 3000;


      

      if($validQuestion) {
      if (strlen($question)>0)
      {

      require_once('mysqli-connect.php');

      $sql = "CREATE TABLE Questions
              (
              id int NOT NULL AUTO_INCREMENT,
              user_id int NOT NULL,
              question_text varchar(500) NOT NULL,
              num_answers int NOT NULL,
              time_asked timestamp NOT NULL,
              top_answer_id int,
              PRIMARY KEY(id)
              );";

      $conn->query($sql);

      $sql = "INSERT INTO Questions(user_id, question_text, num_answers, time_asked)
      VALUES ("
      . $user_id . ", \""
      . htmlspecialchars($question) . "\", 0, \""
      . $timestamp . "\");";

      if($conn->query($sql) === TRUE) {
        echo "<h3>Question successfully submitted</h3>.<br /><hr />";
        echo "<a href=\"./question-detail.php?qid=" . $conn->insert_id . "\"><button>Click here</button></a> to go back to question.";
      } else {
        echo "Error submitting question.<br />";
        "<br />";
      }

      $conn->close();
    }
    else
    {
      echo "Question cant be empty!";
    }
    } else {
      echo "Invalid submission.";
    }

?>
<?php else : ?>

      Error

<?php endif; ?>

    </div>
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