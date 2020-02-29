<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">

    <head>

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

    </head>
 
<body>

<!-- <header>
  	<a href="./index.php"> <img id="logo" src="logo.png" alt="Quora"/> </a>
</header> -->
		<div class="top-content">
            <div class="inner-bg">
                <div class="container">
					<div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left" style="margin-left:45%;">
                        			<h3>Login</h3>
                            		<!-- <p>Enter your email and password to log on:</p> -->
                        		</div>
							</div>
                            <div class="form-bottom">
			                    <form role="form" action="./verifylogin.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Email</label>
			                        	<input type="text" name="email" placeholder="Email..." class="form-username form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
									<button type="submit" class="btn" style="background-color:#4caf50;">Sign in!</button>

								</form>
								<BR>
								   
									<button type="submit" class="btn"><a href="signup.php"></a>Signup</button>
									<p color:"white">Create an Account</p>
		                    </div>
						</div>
					</div>
	
				</div>
            </div>
        </div>
<!-- <div class="center post-display" >


 <div class="bg-img">
  	<form method="post" action="./verifylogin.php" class="container">
    <h1>Login</h1> -

    <label for="email" style="font-size:40px"><b><span>email</span></b></label>
    <input type="text" placeholder="Enter username" name="email" required>

    <label for="psw" style="font-size:40px"><b><span>Password</span></b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

	<button type="submit" class="btn">Login</button>
	<br><br>
	<button type="submit" class="btn"><a href="signup.php">Signup</a></button>

</div> -->
		<script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
</body>
</html>