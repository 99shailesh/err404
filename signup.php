<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signup</title>

  <!-- CSS -->
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/form-elements.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>
  <body>
  	<!-- <header>
  	<a href="./index.php"> <img id="logo" src="logo.png" alt="Quora"/> </a>
  	</header> -->

  	<h1 id="form-title" class="center">Sign up</h1>
<?php 
  if(isset($_SESSION["loggedin"])) {
  ?>
      <div class="center post-display">You're already logged in!</div>
<?php } //end if 
  else { 
    ?>
      <div class="top-content">
          <div class="inner-bg">
              <div class="container">
                  <div class="row">
                      <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                          <div class="form-top-left" style="margin-left:45%;">
                            <h3>SIGNUP</h3>
                          </div>
                        </div>
                        <div class="form-bottom">
                        <form role="form" action="./verifysignup.php" method="post" class="login-form">
                          <div class="form-group">
                            <label class="sr-only">Name</label>
                            <input type="text" id="uname" name="uname" placeholder="Name..." class="form-username form-control" required="true">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-username">email</label>
                              <input type="text" id="email" name="email" placeholder="Email" class="form-username form-control" required="true">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" for="form-password">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password" class="form-username form-control" required="true">
                          </div>
                          <div class="form-group">
                            <label class="sr-only" > Confirm Password</label>
                            <input type="password" id="pswdconfirm" name="pswdconfirm" placeholder="Confirm password" class="form-username form-control" required="true">
                          </div>
                          <div class="form-group">
                            <label class="sr-only">Age</label>
                            <input type="text" id="age" name="age" placeholder="Age" class="form-username form-control" required="true">
                          </div>
                          <div class="form-group">
                            <label class="sr-only">Gender</label>
                            <input type="text" id="gender" name="gender" placeholder="Gender" class="form-username form-control" required="true">
                          </div>
                          <div class="form-group">
                            <label class="sr-only">Profession</label>
                            <input type="text" id="profession" name="profession" placeholder="Profession..." class="form-username form-control" required="true">
                          </div>
                          <button type="submit" class="btn" style="background-color:#4caf50;">Sign Up</button>

                          <!-- <form role="form" action="./login.php">
                            <p color:"white">Already a User</p>
                            <button type="submit" class="btn">Sign in!</button>
                          </form> -->
                          <BR><BR>
                          <p id="signup-prompt;" text-align="center;"> Already have an account? <a href="./login.php">Login!</a></p>

                        </form>
                      </div>
                    </div>
                  </div>
              </div>
          </div> 
      </div>


      <!-- Javascript -->
      <script src="assets/js/jquery-1.11.1.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/js/jquery.backstretch.min.js"></script>
      <script src="assets/js/scripts.js"></script>
      
      <!--[if lt IE 10]>
          <script src="assets/js/placeholder.js"></script>
      <![endif]-->

  </body>

<?php } ?>

    <script type="text/javascript" src="script.js"> </script>
    <script type="text/javascript" src="script-signup.js"> </script>

  </body>
</html>