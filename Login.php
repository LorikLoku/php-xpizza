<!DOCTYPE html>
<?php include_once 'php/connect.php'; ?>
<?php include_once 'php/companyData.php'; ?>
<html>
<head>
	<!-- Font i marrur nga google -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css" />

	<title>Log In</title>
	<link rel="stylesheet" type="text/css" href="CSS/login.css">
</head>
<body>
	<div class="container">
		<div>
			<div class="login-main">
				<div class="imgcontainer">
					<img src="images/Llogo_1.png" style="width: 200px; float: center; padding-bottom:20px;" class="avatar">
				</div>
				<form method="POST" action="php/login.php" name="login-form">
					<div>
						<label for="uname"><b>Email Address</b></label>
					    <input type="text" name="email" required>

					    <label for="psw"><b>Password</b></label>
					    <input type="password" name="password" required>
					  
		    			<button type="submit">Log In</button><br>
					
					</div>
				</form>
				<form action="Singup.php">
				<button>Sing Up</button>
				</form>
				<div class="help-div">
					<p>
						Nevoj per ndihm? <a href="mailto:xPizza@gmail.com">Na kontakto <?php echo "".$email;?> </a>
					</p>
				</div>
			</div>
			<div class="login-secondary">
				© 2019 
				<a href="">XPizza</a>
			</div>
		</div>	
	</div>
</body>
</html>