<?php

session_start();
?>

<!doctype html>

<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">

		<title> ULTIMATE FACTOR GYM </title>
		<link href="css/activity.css" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet">	
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<script src="js/jquery.min.js"></script>
	   	<script src="js/bootstrap.min.js"></script>
	</head>

	<body>

		<nav class="navbar navbar-default navbar-fixed-top" id="custom-navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle custom-navtoggle" data-toggle="collapse" data-target="#ul-nav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="index.html">ULTIMATE FACTOR GYM</a>
				</div>

				<div class="collapse navbar-collapse navbar-right" id="ul-nav">
					<ul class="nav navbar-nav nav-index">
						<li><a href="index.html"> HOME </a> </li>
						<li><a href="page-about.html"> ABOUT US </a> </li>
						<li><a href="page-classes.html"> CLASSES </a> </li>
						<li>

						<?php if (!isset($_SESSION['username'])) { ?>
							<a href="login.php"> LOGIN </a> 
						<?php } else { ?>
							<a href="logout.php"> LOGOUT </a>
						<?php } ?>

						</li>
					</ul>
				</div>
			</div>
		</nav>

		<div class="homeSection1">
			<div class="container">
				<div class="row">
					<h1>NO MORE <span style="color: #d71619; font-style: italic; font-weight: 600;">EXCUSES</span>. <br>GET IN SHAPE WITH <br>US TODAY.</h1>
					<p><i>Motivation is what gets you started. Habit is what keeps you going.<i></p>

					<form id="join-btn" action="login.php" style="margin-top: 60px;">
		  	 			<input type="submit" class="btn btn-default custom-button" value="JOIN US NOW">
		  	 		</form>
				</div>
			</div>
		</div>
		
		<div class="homeSection2">
			<div class="container text-center">
				<div class="row">
					<img src="img/recommender-icon.gif">
					<h1>WE HAVE CLASSES THAT YOU NEED</h1>
					<div class="separator-div"></div>
					<p style="font-size: 18px;">Whether you’re just starting out or an old hand, you’ll find what you need for your fitness journey.</p>
				</div>

				<div class="row margin-top20">
					<div class="col-md-6">
						<img class="width-100" src="img/img-ufghome1.jpg">
					</div>

					<div class="col-md-6 padding-top60">
						<h1>GROUP EXERCISE CLASSES</h1>
						<p class="text-center">There’s nothing quite like engaging in a group workout. You can take group training class and learn from our certified fitness instructor in a fun, fast paced environment. It’s a great way to give your entire body a workout and boost your overall fitness.</p>
					</div>
				</div>

				<div class="separator-div"></div>

				<div class="row margin-top20">
					<div class="col-md-6 padding-top60">
						<h1>CARDIO TRAINING</h1>
						<p>Whether it’s to increase your stamina or to keep stress levels in check, cardio training can help improve your heart and lungs for more health benefits. Either through bodyweight routines or endurance circuits, cardio training can also assist in lowering blood pressure and cholesterol levels.</p>
					</div>

					<div class="col-md-6">
						<img class="width-100" src="img/treadmill-ufg.jpg">
					</div>
				</div>

				<div class="separator-div"></div>

				<div class="row margin-top20">
					<div class="col-md-6 padding-top60">
						<img class="width-100" src="img/barbell-ufg.jpg">
					</div>

					<div class="col-md-6 padding-top60">
						<h1>STRENGTH TRAINING</h1>
						<p class="text-center">Shape up and get rid of fat with strength training. Using proper equipment such as free weights or resistance machines, you can boost your overall well-being while building up muscle and bone strength. Our trainer and staff will be there to guide you through this safely.</p>
					</div>
				</div>

				<div class="separator-div"></div>

				
				<div class="row margin-top20">
					<div class="col-md-6 padding-top60">
						<h1>ONE ON ONE TRAINING</h1>
						<p>Stay on the right path with the support, guidance, and motivation that our certified personal trainers can provide. Tailored specifically around your fitness goals, one-on-one personal training assures that you get the best from every workout routine.</p>
					</div>

					<div class="col-md-6">
						<img class="width-100" src="img/img-ufghome3.jpg">
					</div>
				</div>

				<div class="separator-div"></div>

				<div class="row margin-top20">
					<div class="col-md-6">
						<img class="width-100" src="img/img-ufghome4.jpg">
					</div>

					<div class="col-md-6 padding-top60">
						<h1>ZUMBA CLASSES</h1>
						<p class="text-center">The latest fitness craze to take the world by storm has now arrived at UFG! Women are dancing their way fit with Zumba! The Zumba dance phenomenon fuses fabulous Latin rhythms with easy-to-follow moves for a full-body workout that will burn calories, blast fat and have you getting fit, without even realising it.</p>
					</div>
				</div>

				<div class="separator-div"></div>
			</div>
		</div>

		<footer>
			<div class="row">
				<div class="col-sm-3">
					<h3 class="text-center"> PROGRAMS OFFERED </h3>
					<div class="footer-separator"></div>
					<p><a href="">Group Exercise Classes</a></p>
					<p><a href="">Cardio Training</a></p>
					<p><a href="">Strength Training</a></p>
					<p><a href="">One on One Training</a></p>
					<p><a href="">Zumba Classes</a></p>
				</div>

				<div class="col-sm-3 text-center">
					<h3 class="text-center"> CONTACT US </h3>
					<div class="footer-separator"></div>
					<a href="https://www.facebook.com/pg/ufgpaliparan"><i class="fa fa-facebook" aria-hidden="true"></i>www.facebook.com/ufgpaliparan</a>

				</div>

				<div class="col-sm-6 text-center">
					<h3>Message Us</h3>
					<div class="footer-separator"></div>
					<form class="margin-top20">
						<input class="form-control" type="text" name="" placeholder="Email*" required/>

						<select class="form-control inline-b margin-top20" required>
							<option selected disabled>I would like to talk about*</option>
							<option value="Membership">Membership</option>
							<option value="Customer Service">Customer Service</option>
							<option value="Facilities">Facilities</option>
							<option value="Others">Others</option>
						</select>

						<textarea class="form-control margin-top20" placeholder="Comments*"></textarea>
						
						<div class="text-right">
							<button class="btn btn-default margin-top20" type="submit"> Submit </button>
						</div>
					</form>
				</div>
			</div>

			<div class="footer-btm">
				<h5 class="text-center"> <span class="footer-spanbtm"> ULTIMATE FACTOR GYM </span> | ALL RIGHTS RESERVED 2019 </h5>
			</div>
		</footer>
	</body>
</html>