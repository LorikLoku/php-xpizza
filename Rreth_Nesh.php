<?php include_once 'php/connect.php'; ?>
<?php include_once 'php/companyData.php'; ?>
<?php include_once 'php/data.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <title>X Pizza</title>
        <!-- Font i marrur nga google-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="CSS/Rreth_Nesh.css">
        <link href="CSS/header.css" rel="stylesheet">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <style>               
          .button {
            background-color: Transparent; 
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

            /* The Modal (background) */
          .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            padding-top: 100px; /* Location of the box */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 400px; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
          }

          /* Modal Content */
          .modal-content {
            background-color: #fefefe;
            height:300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
          }

          .brenda{
            display:flex;
            flex-direction: column;
            padding:70px 250px 0 20px;
          }

          #myBtn{
            height: 56px; 
            width: 250px; 
            color: #fff; 
            background: #EF0031; 
            align-self: center;
            padding-left: 25px; 
            padding-right: 25px;
            border-color: #EF0031;
          }

        /* The Close Button */
          .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
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
                                        <h1 class="margin-t-30 margin-b-15">Rreth Nesh</h1>
                                        <h5 class="menu-btn padding-lr-25"><b>Porosit: +383 44 666 111</b></h5>
                                </div>
                        </div>
                </div>
        </div>


        <section class="story-area left-text center-text">
                <div class="container">
                        <div>
                                <div class="works-img">
                                        <div class="work-img-s"><img class="margin-b-30" src="images/about_us_1.jpg" alt=""></div>
                                        <div class="work-img-s"><img class="margin-b-30" src="images/about_us_3.jpg" alt=""></div>
                                </div>
                                <div>
                                        <div class="margin-top-10 margin-b-50 margin-b-30 center-text">
                                                <h2><?php echo "".$headerR;?></h2>
                                        </div>
                                </div>
                                <div>
                                        <p class="margin-b-15 center-text"><b><?php echo "".$text1R;?></b> </p>
                                </div>

                                <div>
                                        <p class="margin-b-15 center-text"><b><?php echo "".$text2R;?></b> </p>
                                </div>
                        </div>
                </div>
        </section>


        <section class="story-area background-seller color-white pos-relative">

                <div class="container">
                        <div class="heading">
                                <img class="heading-img" src="images/Llogo_3.png" alt="">
                                <h2>Komente nga Klientet</h2>
                        </div>

                        <div id="our-works">
                                <div class="padding-b-90 padding-b-60 left-text center-text" style="display:flex; justify-content: space-evenly;">
                                        <div class="works-box">
                                                <h4>X Pizza</h4>
                                                <h5><b class="color-primary"><?php echo "".$Klienti1;?></b>,<b class="color-ash">
                                                                Klient
                                                                i rregullt</b>
                                                </h5>
                                                <img class="circle-60 margin-b-20 " src="images/q1.jpg" alt="">
                                                <p class="color-ash margin-b-50 margin-b-30 margin-t-20"><?php echo "".$Komenti1;?></p>
                                        </div><!-- swiper-slide -->

                                        <div class="works-box">
                                                <h4>X Pizza</h4>
                                                <h5><b class="color-primary"><?php echo "".$Klienti2;?></b><b class="color-ash">, Klient
                                                                i rregullt</b>
                                                </h5>
                                                <img class="circle-60 margin-b-20" src="images/q2.jpg" alt="">
                                                <p class="color-ash margin-b-50 margin-b-30 margin-t-20"><?php echo "".$Komenti2;?></p>

                                        </div><!-- swiper-slide -->

                                        <div class="works-box">
                                                <h4>X Pizza</h4>
                                                <h5><b class="color-primary"><?php echo "".$Klienti3;?></b><b class="color-ash">, Klient
                                                                i rregullt</b></h5>
                                                <img class="circle-60 margin-b-20" src="images/q3.jpg" alt="">
                                                <p class="color-ash margin-b-50 margin-b-30 margin-t-20"><?php echo "".$Komenti3;?></p>

                                        </div><!-- swiper-slide -->
                                </div><!-- swiper-wrapper -->
                                <div class="swiper-pagination"></div>
                        </div>

                        
                                <!-- Trigger/Open The Modal -->
                                <button id="myBtn"><b>Shto Koment<b></button>

                                <!-- The Modal -->
                                <div id="myModal" class="modal">

                                        <!-- Modal content -->
                                        <div class="modal-content">
                                          <span class="close">&times;</span>
                                          <div class="brenda">

                                        <form role="form" class="form-style-1" method="POST">
                                        <p>Skruaj emrin dhe mbiemrin</p>
                		        <div class="form-group">
                                        <input style="width:800px; height:20px;" class="margin-b-20" placeholder="Text"
					        type="text" 
					        name="Klienti" 
					        data-validation="custom" 
					        data-validation-regexp="^([a-zA-Z]+)$"
					        data-validation-error-msg="You did not enter a valid name"
					        required        
				        >
				        </div>
                                        <p>Shkruaj Komentin..</p>
				        <div class="form-group">
					<textarea style="width:800px; height:60px;" class="height-200x padding-tb-20"  
					type="text" 
					name="Komenti" 
					placeholder=""
					>
					</textarea>
				        </div>
				        <h6 class="center-text margin-tb-30">
				        <button type="submit" name="submit" class="btn-send padding-lr-25" style="
                                        height: 46px; width: 150px; color: #fff; background: #EF0031; padding-left: 15px; padding-right: 15px; float:left;">
				        <b>Dergo Mesazh</b></a></h6>
				        <h6>
                                        
                                        <?php
					require_once('php/connect.php');

					if(isset($_POST) & !empty($_POST)){

                    $Klienti = $_POST['Klienti'];
					$Komenti = $_POST['Komenti'];

					if(!isset($Klienti) || empty($Klienti)){
						$error[] = "Emri is required";
                                        }

					if(!isset($Komenti) || empty($Komenti)){
						$error[] = "Message is required";
					}

					if(!isset($error) || empty($error)){
						$sql = "INSERT INTO `komentet` (Klienti, Komenti) VALUES ('$Klienti', '$Komenti')";
						if(mysqli_query($db, $sql)){
							echo "Message Received, we will get back to you soon";
						}else{
							echo "Failed to send message, Try again";
						}
					}
					}
				
					?>	
				</h6>

		        </form>
                                        </div>  
                                        </div>        
                                </div>
                               
                </div><!-- container -->
        </section>

        
        <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks the button, open the modal 
        btn.onclick = function() {
          modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
           modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }
        </script>


        <footer class="footer-padding position-relative">
                <div class="container-fluid">
                        <a href="Home.php" id="logo-f-size"><img src="images/Llogo_3.png" alt="Logo"></a>

                        <div class="padding-t-30">
                                <p class="margin-b-10"><b>Adresa:</b></p>
                                <a
                                        href="https://www.google.com/maps/place/Universiteti+p%C3%ABr+Biznes+dhe+Teknologji/@42.6026634,21.108897,13z/data=!4m8!1m2!2m1!1subt!3m4!1s0x13549e8d5d607f25:0xa31dd05b21bd09de!8m2!3d42.647155!4d21.153124">
                                        <?php echo "".$adresa;?></a>
                        </div>

                        <div class="padding-t-30">
                                <p class="margin-b-10"><b>Phone:</b></p>
                                <p><?php echo "".$numri;?></p>
                        </div>

                        <div class="padding-t-30">
                                <p class="margin-b-10"><b>Email:</b></p>
                                <a href="mailto:xPizza@gmail.com"><?php echo "".$email;?></a>
                        </div>
						<div class="padding-t-30">
                                <p class="margin-b-10"><b></b></p>
                                <a href="Login.php">Admin Login</a>
                        </div>
        </footer>

</body>

</html>