<?php include_once 'php/connect.php'; ?>
<?php include_once 'php/companyData.php'; ?>

<!DOCTYPE HTML>
<html lang="en">

<head>
        <title>X Pizza</title>
        <!-- Font i marrur nga google -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="CSS/PunoPerNe.css">
        <link href="CSS/header.css" rel="stylesheet">

        <style>
          .button {
            background-color: Transparent;  /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
            border: 2px solid #4CAF50;
            float: right;
          }
  
          .button:hover {
            background-color: #4CAF50;
            color: white;
          }
        </style>
</head>

<body>
		<header>
                <div class="container">
                        <a class="logo" href="Home.php"><img src="images/Llogo_2.png" alt="Logo"></a>
        
                        <label for="toggle">&#9776;</label>
                        <input type="checkbox" id="toggle" />

                        <button type="button" class="button"><a href="Login.php?logout=1"><b>Logout</b><a></button>
	                <?php
	                if(isset($_GET['logout'])){
	                session_unset();
                	session_destroy();
	                }
                        ?>
        
                        <div class="menu main-menu font-mountainsre">
                                <a href="Home.php">HOME</a>
                                <a href="Rreth_Nesh.php">RETH NESH</a>
                                <a href="Menu.php">MENU</a>
                                <a href="Kontakt.php">KONTAKT</a>
				<a href="PunoPerNe.php">PUNO PER NE</a>
                        </div>
                </div>
        </header>  
        <div class="background-1 main-slider">
                <div class="container height-100">
                        <div class="table-model">
                                <div class="display-table-cell center-text color-white">
                                        <h5><b>ME E MIRA</b></h5>
                                        <h1 class="margin-t-30 margin-b-15">Pizza</h1>
                                        <h5 class="menu-btn padding-lr-25"><b>Porosit: +383 44 666 111</b></h5>
                                </div>
                        </div>
                </div>
        </div>

        <section class="story-area left-text center-text">
                <div class="container">
                        <div class="heading">
                                <img class="heading-img" src="images/Llogo_4.png" alt="">
                                <h2>Hello!</h2>
                                <h5>Deshironi te punoni per ne?</h5>
                                <p><br>Dergoni informatat tuaja dhe nje leter motivuese. Ne jemi gjithmone ne kerkim te kuzhiniereve me te mire dhe stafit kualitativ.</p>
                        </div>
			<form role="form" class="form-style-1" method="POST">
				<div class="form-group">
                                        <input class="margin-b-20" placeholder="Emri"
					        type="text" 
					        name="emri" 
					        required        
				        >
				</div>
                                <div class="form-group">
                                        <input class="margin-b-20" placeholder="Mbiemri"
					        type="text" 
					        name="mbiemri" 
					        required        
				        >
				</div>
				<div class="form-group">
					<input class="margin-b-20" placeholder="Mail"
						type="email" 
						name="email" 
                        data-validation="required email"                      
						required
					>
				</div>
				<div class="form-group">
					<input class="margin-b-20" placeholder="Numri i telefonit"
						type="number" 
                                                name="numriTel"
                                                data-validation="required number"
						required 
					>
                                </div>
                                <p style="float:left;">Shkruaj arsyen perse duhet te ju punesojme?</p>
				<div class="form-group">
					<textarea class="height-200x padding-tb-20" 
					type="text" 
					name="msg" 
					placeholder="Leter Motivuese ..."
					>
					</textarea>
				</div>
				<h6 class="center-text margin-tb-30">
				<button type="submit" name="submit" class="btn-send padding-lr-25" style="
                                height: 56px; width: 250px; color: #fff; background: #EF0031; align-self: center;
                                padding-left: 25px; padding-right: 25px; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
				<b>Dergo Mesazh</b></a></h6>
				<h6>
                                <?php
					
					require_once('php/connect.php');

					if(isset($_POST) & !empty($_POST)){

                    $emri = $_POST['emri'];
                    $mbiemri = $_POST['mbiemri'];
					$email = $_POST['email'];
					$numriTel = $_POST['numriTel'];
					$msg = $_POST['msg'];

					if(!isset($emri) || empty($emri)){
						$error[] = "Emri is required";
                                        }
                                        
                    if(!isset($mbiemri) || empty($mbiemri)){
						$error[] = "Mbiemri is required";
					}

					if(!isset($email) || empty($email)){
						$error[] = "E-Mail is required";
					}

					if(!isset($numriTel) || empty($numriTel)){
						$error[] = "Numri i telefonit is required";
					}

					if(!isset($msg) || empty($msg)){
						$error[] = "Message is required";
					}

					if(!isset($error) || empty($error)){
						$sql = "INSERT INTO `punoniperne` (emri, mbiemri, email, numriTel, msg) VALUES ('$emri', '$mbiemri', '$email', '$numriTel', '$msg')";
						if(mysqli_query($db, $sql)){
							echo "Mesazhi u dergua me sukses";
						}else{
							echo "deshtim";
						}
					}
					}
				
					?>	
				</h6>

		        </form>
                </div>
        </section>

        <footer class="footer-padding position-relative">
                <div class="container-fluid">
                        <a href="Home.php" id="logo-f-size"><img src="images/Llogo_3.png" alt="Logo"></a>

                        <div class="padding-t-30">
                                <p class="margin-b-10"><b>Adresa:</b></p>
                                <a target="_blank"
                                        href="https://www.google.com/maps/place/Universiteti+p%C3%ABr+Biznes+dhe+Teknologji/@42.6026634,21.108897,13z/data=!4m8!1m2!2m1!1subt!3m4!1s0x13549e8d5d607f25:0xa31dd05b21bd09de!8m2!3d42.647155!4d21.153124">
                                        <?php echo "".$adresa;?></a></a>
                        </div>

                        <div class="padding-t-30">
                                <p class="margin-b-10"><b>Phone:</b></p>
                                <p><?php echo "".$numri;?></a></p>
                        </div>

                        <div class="padding-t-30">
                                <p class="margin-b-10"><b>Email:</b></p>
                                <a href="mailto:xPizza@gmail.com"> <?php echo "".$email;?></a></a>
                        </div>
						<div class="padding-t-30">
                                <p class="margin-b-10"><b></b></p>
                                <a href="Login.php">Admin Login</a>
                        </div>
        </footer>
</body>

</html>