<?php
	session_start();
?>
<html>
	<head>
		<title>
			Add Aircrafts Details
		</title>
		<style>
			input {
    			border: 1.5px solid #030337;
    			border-radius: 4px;
    			padding: 7px 30px;
			}
			input[type=submit] {
				background-color: #030337;
				color: white;
    			border-radius: 4px;
    			padding: 7px 45px;
    			margin: 0px 60px
			}
		</style>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" href="http:\\localhost\font-awesome-4.7.0\css\font-awesome.min.css">
	</head>
	<body>
		<div class="logo">
			<img src="shutterstock_22.jpg" width=75px/> 
		</div>
		<h1>
			&nbsp;
			AADITH AIRLINES
		</h1>
		<div>
			<ul>
				<li><a href="home_page.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href="admin_homepage.php"><i class="fa fa-desktop" aria-hidden="true"></i> Dashboard</a></li>
				<li><a href="logout_handler.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</div>
		<form action="add_jet_details_form_handler.php" method="post">
			<h2>ENTER THE AIRCRAFTS DETAILS</h2>
			<div>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter a valid Jet ID</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="jet_id" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the Jet Type/Model</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="text" name="jet_type" required></td>
				</tr>
			</table>
			<br>
			<table cellpadding="5">
				<tr>
					<td class="fix_table">Enter the total capacity of the Jet</td>
				</tr>
				<tr>
					<td class="fix_table"><input type="number" name="jet_capacity" required></td>
				</tr>
			</table>
			<br>
			<br>
			<input type="submit" value="Submit" name="Submit">
			<br><br>
			<strong style="color:red">*Jet ID already exists, please enter a new Jet ID.</strong>
			</div>
		</form>
		<!--check out addling local host in links and other places

		-->
	</body>
</html>