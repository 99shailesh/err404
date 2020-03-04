<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Question Detail</title>
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
    <script type="text/javascript" src="script.js"></script>
  </head>
  <body>
  	<header id="fixed-header">
        <a href="./index.php"> <img id="logo" src="logo1.png" /></a>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<?php 
        session_start();
        $loggedin = isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true;
        if($loggedin) : ?>
        <a href="./logout.php" id="header-login">Logout</a>
<?php else : ?>
        <a href="./form-login.php" id="header-login">Login</a>
<?php endif; ?>
    </header>

<?php if($loggedin) : ?>
    <a href="./form-question.php"><img src="FAB.png" alt="Submit a question" title="Submit a question" id="FAB" /></a>
<?php endif; ?>


	<div id="user-question">

<?php
    require_once('mysqli-connect.php');

    $qid = $_GET["qid"];

    $sql = "SELECT * FROM Questions WHERE id=" . $qid;
    $response = $conn->query($sql);
    if($response) {
    if(mysqli_num_rows($response) > 0) {
        while($row = mysqli_fetch_array($response)){
            $avatarpath = "./avatars/avatar-" . $row["user_id"] . ".png";
            if(!file_exists($avatarpath)) {
                $avatarpath = "avatar.png";
            }

            $sql2 = "SELECT * FROM Users WHERE id=" . $row["user_id"];
            $response2 = $conn->query($sql2);
            $user = mysqli_fetch_array($response2);

?>

		<img src=<?php echo $avatarpath; ?> alt="Avatar" id="qd-avatar" />
		<p id="qd-username"><?php echo $user["username"]; ?></p>
        <br />
		<p id="qd-question"><?php echo $row["question_text"]; ?></p>
        
        <?php if($loggedin) { ?>
        <br /> <hr />
        <a href=<?php echo "./form-answer.php?qid=" . $row["id"]; ?> class="answer-button">Answer!</a>
<?php             } //end if

        } //end while
?>

	</div>

<div id="answer-list">

<?php
    $sql = "SELECT * FROM Answers WHERE question_id=" . $qid . " ORDER BY upvotes-downvotes DESC";
    $response = $conn->query($sql);

    if($response) {
        if(mysqli_num_rows($response) > 0) {
        while($row = mysqli_fetch_array($response)) {
            $user_id = $row["user_id"];

            $sql = "SELECT * FROM Users WHERE id=" . $user_id;
            $result = $conn->query($sql);
            if($user = mysqli_fetch_array($result)) {}
?>

	<div class="qd-answer">
        <?php 
            if($loggedin){
            $sql = "SELECT value FROM Votes WHERE user_id=" . $_SESSION["id"] . " AND answer_id=" . $row["id"];
            $result = $conn->query($sql);
        }
            ?>
        <aside class="votes">

            <img src="upvote-grey.png" alt=<?php echo "\"" . $row["id"] . "\""; ?> class="upvote-arrow
            <?php
                if($result) {

                    $vote = mysqli_fetch_array($result);
                    if($vote["value"] == 1) { echo "upvote-highlight"; }
                    else { echo "upvote-unhighlight"; }

                } else { echo "upvote-unhighlight"; }

            ?>" /> 
            <label class="upvote-count"><?php echo $row["upvotes"]; ?> Upvotes</label>
            <br />

            <img src="downvote-grey.png" alt=<?php echo "\"" . $row["id"] . "\""; ?> class="downvote-arrow 
            <?php
                if($result) {
                    if($vote["value"] == -1) { echo "downvote-highlight"; }
                    else { echo "downvote-unhighlight"; }

                } else { echo "downvote-unhighlight"; }

            ?>" /> 
            <label class="downvote-count"><?php echo $row["downvotes"]; ?> Downvotes</label>
        </aside>
        

        <aside class="answerer-info">
            <label class="answer-username"><?php echo $user["username"] ?></label>
        </aside>
        <hr />
        <label class="answer-text"><?php echo $row["answer_text"]; ?></label>
	</div>


<?php } //end while loop
    } //end if(rows > 0)
    else {

?>

    <div class="qd-answer post-display no-answers">There are no answers yet.<br />Be the first!</div>

<?php

    } //end else(no answers)


    mysqli_free_result($response);
    } //end if(response)

    } //end if(question id exists)
    } //end if (response)
    else {
        echo "Error.</div>";
    }
    

?>
    </div>
    <?php if($loggedin) { ?>
    <script type="text/javascript" src="script-qd.js"></script>
    <?php } ?>
    </body>
</html>


<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/scripts.js"></script>
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
        