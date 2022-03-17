

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="signup.css">
	<meta charset="utf-8">
	<title>SIGH UP</title>
</head>
<body>
<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>

<div class="container">
	<form action="signupbackend.php" method="POST">

		<label>First Name</label> 
		<input type="text" id="fname" placeholder="Your First Name" name="fname">
		<br/><br/>
			<label>Last Name</label>
		<input type="text" id="lname" placeholder="Your Last Name" name="lname">
		<br/><br/>
			<label>Email</label><br/>
		<input type="text" id="email" placeholder="Your Email Address" name="email">
		<br/><br/>
		<label>Password</label><br/>
		<input type="Password" id="password" name="password">
		<br/><br/>

			<label for='country'>Country</label>
			<br/>
			<select id="country" name="country">
					<option value="australia">Australia</option>
					<option value="canada">Canada</option>
					<option value="usa">U.S.A</option>
					<option value="india">India</option>
					<option value="bangladesh">Bangladesh</option>
			</select>

<br/><br/>

			<label>Address</label><br/>
		<input type="text" id="address" placeholder="Your Permanent Address" name="address">
<br/><br/>
		<input type="submit" name="submit">

	</form>
</div>


</body>
</html>