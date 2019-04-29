<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title> UFG Login </title>
	
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/activity.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 left-container">
				<video src="../videos/fitness-video.mp4" type="video/mp4" autoplay loop muted></video>

				<div class="text-center col-md-12 h1-content">
					<h1><span class="build">BUILD</span> YOUR BODY</h1>
					<h1><span class="transform">TRANSFORM</span> YOUR LIFE</h1>
				</div>
			</div>


			<div class="col-md-4 right-container">
				
				<div id="login" class="login-wrapper">

						<div class="text-center">
							<a href="index.html">
								<div class="login-logo"></div>
							</a>

							<h3>Welcome to UFG</h3>
						</div>


						<form action="ufgdb.php" class="form-container" method="POST">
							<div class="form-group">
								<input id="user" type="text" name="user" class="input-user" placeholder="Username" required>
							</div>

							<div class="form-group">
								<input id="pass" type="text" name="pass" class="input-pass" placeholder="Password" required>
							</div>
							
							<div class="form-group">
								<input type="submit" name="submit" class="btn btn-primary btn-block submit-reg" value="Sign In">
							</div>
						</form>	

						<hr>
							
						<div class="form-container">
							<h4 class="text-center">Not a member yet?</h4>
							<a id="join" href="#" class="btn btn-danger btn-block">Join Us Now</a>
						</div>

				</div>

				<div id="register" class="hide-div">

						<h3 class="text-center">Register Here!</h3>
						
						<form action="login.html" class="registration-form" method="post">

                			<input id="reg-name" type="text" placeholder="Name" required>
                			<input id="reg-last" type="text" placeholder="Lastname" required>
                
                			<div class="row">
                				<div class="col-md-4 radio-reg radio-gender">
                					Gender: &nbsp
                					<select>
                						<option> M </option>
                						<option> F </option>
                					</select>
                				</div>
                					
                				<div class="col-md-8 radio-reg"> Birthdate: <input id="radio-date" type="date" required> </div>
                			</div>
                
                			<input id="reg-user" type="text" placeholder="Username" required>
                			<input id="reg-email" type="email" placeholder="E-mail" required>
                			<input id="reg-pass" type="password" placeholder="Password" required>
                			<input id="reg-retype" type="password" placeholder="Re-type Password" required>
								<ul class="list-inline">
									<li>
										<button id="reg-signup" type="submit"> Create Account </button>
									</li>
									<li>
										<div class="form-container">
											<a id="back" href="#" class="btn btn-danger"> Go Back </a>
										</div>
									</li>
								</ul>
                    	</form>			
				</div>
			</div>
		</div>

	</div>

	<script src="../js/jquery.min.js"></script>
    <script src="../js/main.js"></script>

</body>
</html>