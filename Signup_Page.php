<!--<!DOCTYPE html>
<html>
<head>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css" />

	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="CSS/signup.css">
</head>
<body>
	<div class="container">
		<div>
			<div class="login-main">
				<div class="imgcontainer">
					<img src="images/Llogo_1.png" style="width: 200px; float: center;padding-bottom:20px;" class="avatar">
				</div>
				<div class="sign-up-page">
					<form method="POST" action="php/signup.php" name="signup-form">
						<div class="signup-information">
							<div class="firstname">
								<label for="firstname"><b>Emri</b></label>
						    	<input type="text" name="firstname" required>
							</div>

							<div class="lastname">
								<label for="lastname"><b>Mbiemri</b></label>
						    	<input type="text" name="lastname" required>
							</div>

							<div class="email">
								<label for="email"><b>Email</b></label>
						    	<input type="text" name="email" required>
							</div>

							<div class="gender">
								<label for="gender" style="margin-top:17px;"><b>Gjinia</b></label>
								<div class="gender-options" style="display:flex; justify-content: row; margin-bottom:10px;">
									<input type="radio" name="gender" value="male"> M<br>
									<input type="radio" style="margin-left: 50px;" name="gender" value="female"> F<br>
								</div>
							</div>

							<div class="password">
								<label for="password"><b>Password</b></label>
						    	<input type="password" name="password" required>
							</div>

							<div class="confirm-password">
								<label for="confirm-password"><b>Confirm Password</b></label>
						    	<input type="password" name="confirm-password" required>
							</div>
						</div>
						<button type="submit" name="signup-submit">Sign Up</button> 
					</form>
				</div>
				<div class="help-div">
					<p>
					Nevoj per ndihm? <a href="mailto:xPizza@gmail.com">Na kontakto <?php echo "".$email;?> </a>
					</p>
				</div>
			</div>
			<div class="login-secondary">
				© 2019 
				<a href="">X Pizza</a>
			</div>
		</div>	
	</div>
</body>
</html>