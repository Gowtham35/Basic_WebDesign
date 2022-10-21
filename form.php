<!DOCTYPE html>
<html>
<head>
	<?php
	include("db_commect.php");
	?>
	<title>Room Allocation System</title>
	<link rel="stylesheet" type="text/css" href="form.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
	<script type="text/javascript" src="form.js"></script>
	</head>
<body onload="onLoad()">

	<div class="navbar">
		<div class="icon">
			<h2 class="logo">RGUKT</h2>
		</div>

		<div class="menu">
			<ul>
				<li><a href="login.html">HOME</a></li>
				<li><a href="#about">ABOUT</a></li>
				<li><a href="#contact">CONTACT</a></li>
				<li><a href="form.html">REGISTER</a></li>
			</ul>
		</div>
	</div>
	
	<div class="container">
		<div class="form-name">Registration Form</div>
		<div>
			<form id="signup-form" action = "db_connect.php" method="post">
				<div class="field-name-block">
					<label class="field-name">First Name</label>
				</div>
				<div class="field-input-block">
					<input id="firstName" type="text" name="" placeholder="First Name" maxlength="20">
					<i id="firstNameWarning" class="fa fa-exclamation-circle warnig warning-hide"></i>
				</div>
				<div class="field-name-block">
					<label class="field-name">Last Name</label>
				</div>
				<div class="field-input-block">
					<input id="lastName" type="text" name="" placeholder="Last Name" maxlength="20">
					<i id="lastNameWarning" class="fa fa-exclamation-circle warnig warning-hide"></i>
				</div>
				<div class="field-name-block">
					<label class="field-name">ID No</label>
				</div>
				<div class="field-input-block">
					<input id="userId" type="text" name="" placeholder="College Id" maxlength="7">
					<i id="userIdWarning" class="fa fa-exclamation-circle warnig warning-hide"></i>
				</div>
				<div class="field-name-block">
					<label class="field-name">Email</label>
				</div>
				<div class="field-input-block">
					<input id="email" type="text" name="" placeholder="email@example.com" maxlength="30">
					<i id="emailWarning" class="fa fa-exclamation-circle warnig warning-hide"></i>
				</div>
				<div class="field-name-block">
					<label class="field-name">Mobile</label>
				</div>
				<div class="field-input-block">
					<input id="mobile" type="text" name="" placeholder="0000000000" maxlength="10">
					<i id="mobileWarning" class="fa fa-exclamation-circle warnig warning-hide"></i>
				</div>
				<div class="field-name-block">
					<label class="field-name">Create Password</label>
				</div>
				<div class="field-input-block">
					<input id="createPW" type="password" name=""  placeholder="Password" maxlength="15">
					<i id="createWarning" class="fa fa-exclamation-circle warnig warning-hide"></i>
				</div>
				<div class="field-name-block">
					<label class="field-name">Confirm Password</label>
				</div>
				<div class="field-input-block">
					<input id="confirmPW" type="password" name="" placeholder="Password" maxlength="15">
					<i id="confirmWarning" class="fa fa-exclamation-circle warnig warning-hide"></i>
				</div>
				<div class="button-block">
					<input type="button" name="" value="Login" class="button" onclick="onSubmitClick()">
					<input type="reset" name="" value="Cancel" class="button" onclick="onCancelClick()">
				</div>
			</form>
		</div>
	</div>
</body>
</html>