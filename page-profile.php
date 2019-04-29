<?php

session_start();


if (!isset($_SESSION['username'])) {
	header("location: login.php");

	echo "Please Login";
}

//loginned
else {
}

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
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">	
	</head>

<body>

		<div class="row rowProfile">
			<div class="col-md-2 leftSide">
				<section id="leftContainer">
				
					<div class="text-center">  
						<img class="logo-white" src="./img/logo-white.png">
					</div>

					<div>
						<ul class="ulProfile list-group">
							<li><a class="nameProfile list-group active" href="#"><i class="fa fa-user" aria-hidden="true"></i> VIEW PROFILE </a></li>

							<li><a class="viewAppointments list-group" href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> VIEW APPOINTMENTS </a></li>

							<li><a class="addAppointment list-group" href="#"><i class="fa fa-pencil" aria-hidden="true"></i> MAKE APPOINTMENT </a></li>
						</ul>
					</div>
				</section>
			</div>

			<div class="col-md-10 padding-minus">

				<nav class="nav navbar-default" id="navbarProfile">

					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.html"> HOME </a></li>
						<li><a href="logout.php"> LOGOUT </a></li>
					</ul>
				</nav>

				<section id="aboutProfile">
					<img src="./img/acctlogo.png" class="acctlogo">

					<div class="profileName">
						<h2 class="text-center"> <?php echo $_SESSION['firstName'] . " " . $_SESSION['lastName']; ?> </h2>
						<p class="text-center"><i> // input all infos about the member here // </i></p>
					</div>
				</section>


				<section id="appointments" class="hide-div">
					<div class="container-fluid appointments">
						<h4> HERE IS YOUR APPOINTMENT FOR TODAY </h4>
					</div>

					<div class="container-fluid appointmentsTable">
						<table>
							<tr>
								<th> Task </th>
				                <th> Time </th>
				                <th> Status </th>
				                <th> Action </th>
			               	</tr>

			               	<tr>
			               		<td> {{ appointment.task }} </td>
			               		<td> {{ appointment.time }} </td>
			               		<td> {{ appointment.status }} </td>
			               		<td>
	               					<div class="">
		               					<form class="edit" action="/update/{{ appointment.id }}" method="post">
		               						<input class="editBtn btn btn-primary btn-block" type="submit" name="edit" value="Edit">
		               					</form>

		               					<form class="delete" action="/delete/{{ appointment.id }}" method="post">
		               						<input class="deleteBtn btn btn-primary btn-block" type="submit" onclick="return confirm('Are you sure?')" name="delete" value="Delete">
		               					</form>
	               					</div>
			               		</td>
			               	</tr>
						</table>
					</div>

					<div class="container-fluid otherAppointments">
						<h4> YOUR OTHER APPOINTMENTS </h4>
						
						<table>
							<tr>
								<th> Task </th>
				                <th> Time </th>
				                <th> Status </th>
				                <th> Action </th>
			               	</tr>

			               	<tr>
			               		<td> {{ appointment.task }} </td>
			               		<td> {{ appointment.time }} </td>
			               		<td> {{ appointment.status }} </td>
			               		<td>
			               			<form class="delete" action="/delete/{{ appointment.id }}" method="post">
                                    	<input class="btn btn-primary btn-block" type="submit" onclick="return confirm('Are you sure?')" name="delete" value="Delete">
                                	</form>
			               		</td>
			               	</tr>

						</table>
					</div>

				</section>

				<section id="newAppointment" class="hide-div">
					<div class="container-fluid">
						<h2 class="text-center"> ADD NEW APPOINTMENT HERE! </h4>

						<form class="form-group" action="/add" method="post">
							<div class="formDate">
								<label for="date"> DATE </label> <input class="form-control" id="date" type="date" name="date">
							</div>

							<div class="formTime">
								<label for="time"> TIME </label> <input class="form-control" id="time" type="time">
							</div>

							<div class="formTask">
								<label for="task"> TASK </label> <br>
								<textarea class="form-control" rows="4" cols="5"> </textarea>
							</div>
							

							<input class="submitBtn btn-danger btn btn-block" type="submit" name="add" value="ADD">
						</form>

					</div>
					
				</section>

				
			</div>
		</div>

	<script src="js/jquery.min.js"></script>
   	<script src="js/profilepage.js"></script>
</body>
</html>