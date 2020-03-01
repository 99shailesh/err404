<!DOCTYPE html>
<html lang="en">
  <head>
  	<meta charset="utf-8">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css" >
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,700' rel='stylesheet' type='text/css' >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="script.js"> </script>
    <link rel="icon" href="img/icon1.png" type='image/x-icon'/>
    <img src="https://img.icons8.com/ios-glyphs/30/000000/document.png">
  </head>

  <body onload="updateMostRecent(); setInterval( function() { refreshIndex(); }, 5000);">
  	<header id="fixed-header" >
  		<a href="./index.php"> <img id="logo1" src="logo1.png" alt="Quora"/> </a>
  		<?php 
	    session_start();
	    $loggedin = isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true;
	    if($loggedin) : ?>
	    <a href="./logout.php" id="header-login" class="lg"><button>Logout</button></a>
	    <?php else : ?>
  		<a href="./login.php" id="header-login" class="lg"><button>Login</button></a>
  		<?php endif; ?>
	</header>

	<?php if($loggedin) : ?>
	<a href="form-question.php"><img src="FAB.png" alt="Submit a question" title="Submit a question" id="FAB" /></a>
    <?php endif; ?>

	<div id="question-list">



    <!---
	<?php
    require_once('mysqli-connect.php');
    DEFINE("maxPosts", 20);

    require("update-top-answer.php");

    $sql = "SELECT * FROM Questions ORDER BY id DESC";
    $response = $conn->query($sql);

    if($response) {
    	$count = 0;
    	while($row = mysqli_fetch_array($response)) {
    		updateTopAnswer($conn, $row["id"]);
    		if($count == maxPosts) {
    			break;
    		}
    		$count++;
    		$sql = "SELECT * FROM Users WHERE id=" . $row["user_id"];
    		$result = $conn->query($sql);
    		if($result) {
    			$user = mysqli_fetch_array($result);
    			$avatarpath = "./avatars/avatar-" . $row["user_id"] . ".png";
    			if(!file_exists($avatarpath)) {
    				$avatarpath = "avatar.png";
    			}
    		}

    ?>

		<div class="question-display">

			<a href=<?php echo "./question-detail.php?qid=" . $row["id"] ?> class="question"><?php echo $row["question_text"]; ?></a>
			<img src=<?php echo "\"" . $avatarpath . "\""; ?> alt="Avatar" class="question-avatar">
			<br />
			<p class="date"><?php echo $row["time_asked"]; ?></p>
			
			<a href= <?php echo "./question-detail.php?qid=" . $row["id"] ?> class="num-answers"><?php echo $row["num_answers"]; ?> answers</a>
			<?php if($loggedin) { ?>
			<a href=<?php echo "./form-answer.php?qid=" . $row["id"]; ?> class="answer-button">Answer!</a>
			<?php } //end if ?>
			<br />
			<hr />

			<aside class="answer-bottom-section">
				<?php if($row["num_answers"] > 0) {

					$sql = "SELECT * FROM Answers WHERE id=" . $row["top_answer_id"];
					$result = $conn->query($sql);

					$answer = mysqli_fetch_array($result);
					$top_answer_user_id = $answer["user_id"];

					$sql = "SELECT * FROM Users WHERE id=" . $top_answer_user_id;
					$result = $conn->query($sql);

					$top_answerer = NULL;
					if($user = mysqli_fetch_array($result)) {
						$top_answerer = $user; 
					}

					$avatarpath = "./avatars/avatar-" . $top_answerer["id"] . ".png";
					if(!file_exists($avatarpath)) {
						$avatarpath = "avatar.png";
					}

				 ?>
				<p class="inline answerer-name"><i>Top answer by <?php echo $top_answerer["username"]; ?></i></p>
				<img src=<?php echo $avatarpath; ?> alt="Avatar" id="answer-avatar" />
				<p class="top-answer"><?php echo $answer["answer_text"]; ?></p>
				<?php } else { ?>
				<p class="no-answers">There are no answers yet.<br />Be the first!</p>
				<?php } ?>
			</aside>

		</div>

	<?php
		} //end while
		mysqli_free_result($response);
	} //end if
	else { ?>
		<div class="question-display post-display">
			No questions found.
		</div>

<?php } //end else  ?>
	</div>


	
-->
  </body>
</html>
<style type="text/css">
	img
	{
		
		border:1px solid white;
		border-radius: 25%;
		margin-left:45px;
		margin-bottom:20px;

	}

	.lg button
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
}
	.lg button:hover
	{
		opacity:0.5;
	}
</style>