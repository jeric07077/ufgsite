<?php
   include("php/config.php");
   session_start();
   
   if(isset($_POST["login"])) {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT firstName, lastName, gender, birthDate, email FROM users WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
	  
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {

		//use this when u want to get information from the loginnned user
         $_SESSION['username'] = $myusername;
		 $_SESSION['firstName'] = $row['firstName'];
		 $_SESSION['lastName'] = $row['lastName'];
		 $_SESSION['gender'] = $row['gender'];
		 $_SESSION['birthDate'] = $row['birthDate'];
		 $_SESSION['email'] = $row['email'];

         header("location: page-profile.php");
      }else {
         echo "Your Login Name or Password is invalid";
      }
   }
   //register
   elseif (isset($_POST["register"]) )
   {


	$name = mysqli_real_escape_string($db,$_POST['reg-name']);
	$lastName = mysqli_real_escape_string($db,$_POST['reg-last']); 
	$gender = mysqli_real_escape_string($db,$_POST['reg-gender']);
	$birthDate = mysqli_real_escape_string($db,$_POST['reg-birthdate']); 
	$username = mysqli_real_escape_string($db,$_POST['reg-user']);
	$email = mysqli_real_escape_string($db,$_POST['reg-email']); 
	$password = mysqli_real_escape_string($db,$_POST['reg-pass']); 
	


	//insert to db [users table]

	$sql = "INSERT INTO users (firstName, lastName, gender, birthDate, username, email, password) VALUES ('$name', '$lastName', '$gender', '$birthDate', '$username', '$email', '$password')";


	if ($db->query($sql) === TRUE) {
		echo "Your account has been registered successfully";
	}

	else {
		echo "error";
	}
	
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title> UFG Login </title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/activity.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 left-container">
				<video src="./videos/fitness-video.mp4" type="video/mp4" autoplay loop muted></video>

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


						<form action="" class="form-container" method="post">
							<div class="form-group">
								<input type="text" name="username" class="input-user" placeholder="Username" required>
							</div>

							<div class="form-group">
								<input type="password" name="password" class="input-pass" placeholder="Password" required>
							</div>
							
							<div class="form-group">
								<input type="submit" name="login" class="btn btn-primary btn-block submit-reg" value="Sign In">
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
						
						<form action="" class="registration-form" method="post">

                			<input id="reg-name" name="reg-name" type="text" placeholder="Name" required>
                			<input id="reg-last" name="reg-last" type="text" placeholder="Lastname" required>
                
                			<div class="row">
                				<div class="col-md-4 radio-reg radio-gender">
                					Gender: &nbsp
                					<select name="reg-gender">
                						<option value ="Male"> M </option>
                						<option value ="Female"> F </option>
                					</select>
                				</div>
                					
                				<div class="col-md-8 radio-reg"> Birthdate: <input id="radio-date" name ="reg-birthdate" type="date" required> </div>
                			</div>
                
                			<input id="reg-user" name="reg-user" type="text" placeholder="Username" required>
                			<input id="reg-email" name="reg-email" type="email" placeholder="E-mail" required>
                			<input id="reg-pass"  name="reg-pass" type="password" placeholder="Password" required>
                			<input id="reg-retype" name="reg-retype" type="password" placeholder="Re-type Password" required>
								<ul class="list-inline">
									<li>
										<button id="reg-signup" name="register" type="submit"> Create Account </button>
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

	<script src="js/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>