<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="home.css">
	<!-- Design by foolishdeveloper.com -->

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<style media="screen">
		@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			list-style: none;
			font-family: 'Montserrat', sans-serif;
		}

		body {
			background: linear-gradient(105deg,
					#88beee,
					#0a2e73);
		}

		.wrapper {
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.registration_form {
			background: white;
			padding: 25px;
			border-radius: 5px;
			width: 400px;
		}

		.registration_form .title {
			text-align: center;
			font-size: 25px;
			text-transform: uppercase;
			color: white;
			background: rgb(13, 98, 215);
			letter-spacing: 2px;
			font-weight: 700;
			margin-top: -25px;
			margin-left: -25px;
			margin-right: -25px;
		}

		.form_wrap {
			margin-top: 35px;
		}

		.form_wrap .input_wrap {
			margin-bottom: 15px;
		}

		.form_wrap .input_wrap:last-child {
			margin-bottom: 0;
		}

		.form_wrap .input_wrap label {
			display: block;
			margin-bottom: 3px;
			color: #1a1a1f;
		}

		.form_wrap .input_grp {
			display: flex;
			justify-content: space-between;
		}

		.form_wrap .input_grp input[type="text"] {
			width: 165px;
		}

		.form_wrap input[type="text"] {
			width: 100%;
			border-radius: 3px;
			border: 1.3px solid #9597a6;
			padding: 10px;
			outline: none;
		}

		.form_wrap input[type="text"]:focus {
			border-color: #063abd;
		}

		.form_wrap ul {
			border: 1px solid rgb(115, 185, 235);
			width: 70%;
			background: rgb(206, 238, 242);
			margin-left: 15%;
			padding: 8px 10px;
			border-radius: 20px;
			display: flex;
			justify-content: center;
		}

		.form_wrap ul li:first-child {
			margin-right: 15px;
		}

		.form_wrap ul .radio_wrap {
			position: relative;
			margin-bottom: 0;
		}

		.form_wrap ul .radio_wrap .input_radio {
			position: absolute;
			top: 0;
			right: 0;
			opacity: 0;
		}

		.form_wrap ul .radio_wrap span {
			display: inline-block;
			font-size: 17px;
			padding: 3px 15px;
			border-radius: 15px;
			color: #101749;
		}

		.form_wrap .input_radio:checked~span {
			background: #105ce2;
			color: white;
		}

		.form_wrap .submit_btn {
			width: 100%;
			background: #0d6ad7;
			padding: 10px;
			border: 0;
			color: white;
			font-size: 17px;
			border-radius: 3px;
			text-transform: uppercase;
			letter-spacing: 2px;
			cursor: pointer;
		}

		.form_wrap .submit_btn:hover {
			background: #051c94;
		}
	</style>
</head>

<body>
<div style="width:10% ;float: right; ">
		<a href="IMG/logo bihar.png ">
			<img src="IMG/logo bihar.png" alt="" height="70px;" width="70px">
		</a>
	</div>
	<div style="width:5% ;float: left;margin-left: 5%;">
		<a href="IMG/logo bihar.png ">
			<img src="IMG/logo bihar.png" alt="" height="70px;" width="70px">
		</a>
	</div>
	<div style="width:85% ;margin:0 auto;">
		<a href="home.html" style="text-align:center ;text-decoration: none;">
			<h1><b>Health Department,Government of Bihar</b></h1>
		</a>
	</div>
	<br>
	<br>
	<nav>
		<div class="topnav" id="myTopnav">
			<a href="home.html" style="text-decoration: none;">Home</a>
			<a href="medicine.html" style="text-decoration: none;">Medicines</a>
			<a href="Bed_Book.php" style="text-decoration: none;">Bed Book</a>
			<a href="contact.php" style="text-decoration: none;">Contact Us</a>
			<a href="About.html" style="text-decoration: none;">About</a>
			<a href="log_in.php" style="text-decoration: none;"> Log In</a>
			<a href="register_user.php" style="text-decoration: none;"> Sing Up</a>
		</div>
	</nav>
	<br><br>
	<div class="wrapper">
		<div class="registration_form">
			<div class="title">
				Bed Book
			</div>
	<?php
			if(isset($_POST["submit"]))
			{
			  $f_name=$_POST["f_name"];
			  $l_name=$_POST["l_name"];
			 $bed_type=$_POST["bed_type"]; 
			 $bed_number=$_POST["bed_number"];
			 $p_number=$_POST["p_number"];
			 $state=$_POST["state"];
			 $district=$_POST["district"];
			 $gender=$_POST["gender"];
			 $con=mysqli_connect('localhost','nikhil','','test'); 
			   $qry="INSERT INTO bed_book (`f_name`,`l_name`,`bed_type`,`bed_number`,`p_number`,`state`,`district`,`gender`)
				VALUES ('$f_name','$l_name','$bed_type','$bed_number','$p_number','$state','$district','$gender');";
			$result=mysqli_query($con,$qry);
			  if($result==true)
			  {
				 echo '<div class="alert alert-success">
		   <strong>Success!</strong>Booking Successfully.
		   </div>';
			  }
			  else
			  {
				 echo '<div class="alert alert-danger">
		   <strong>Success!</strong>Failed Booking
		   </div>';
			  }
			  mysqli_close($con);
		   }
		   
		   ?>
			
			<form method="post">
				<div class="form_wrap">
					<div class="input_grp">
						<div class="input_wrap">
							<label for="fname">First Name</label>
							<input type="text" id="fname" required name="f_name">
						</div>
						<div class="input_wrap">
							<label for="lname">Last Name</label>
							<input type="text" id="lname" required name="l_name">
						</div>
					</div>
					<div class="input_wrap">
						<label for="city">Bed Type</label>
						<select class="form-select" aria-label="Default select example"
							style="height: 40px;width: 350px;" required name="bed_type">
							<option selected>Open this select menu</option>
							<option value="Ac">Ac</option>
							<option value="Non Ac">Non Ac</option>
							<option value="General">General</option>
						</select>
					</div>
					
					<div class="input_wrap">
						<label for="email">Bed No</label>
						<input type="text" id="bed" required name="bed_number">
					</div>
					<div class="input_wrap">
						<label for="email">Phone Number</label>
						<input type="text" id="email" required name="p_number">
					</div>

					<div class="input_wrap">
					<label for="District ">State</label>
        <select id="country"  style="height:40px;width:100%;"required name="state">
            <option value="Bihar">Bihar</option>
            <option value="Up">Up</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="UK">UK</option>
        </select>
					</div>
					<div class="input_wrap">
					<label for="District ">District</label>
        <select id="country" required name="district" style="height:40px;width:100%;">
            <option value="MUNGER">MUNGER</option>
            <option value="BHAGALPUR">BHAGALPUR</option>
            <option value="PATNA">PATNA</option>
            <option value="VAISHALI">VAISHALI</option>
        </select>
					</div>

					<div class="input_wrap">
						<select name="gender" id=""style="height:40px;width:100%;">
							<option value="1">Select Gender</option>
							<option value="2">Male</option>
							<option value="3">Female</option>
							<option value="4">Other</option>
						</select>

					</div>


					<div class="input_wrap">

						<center><button type="submit" value="Register Now" class="submit" name="submit"
						style="height:40px;width:50%;">Book Now</button></center>
					</div>



				</div>
			</form>
		</div>
	</div>
	<hr>
    <center><p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by Nikhil</p></center><br><br><br>
</body>

</html>