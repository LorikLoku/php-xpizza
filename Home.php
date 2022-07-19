<!DOCTYPE HTML>
<?php include_once 'php/connect.php'; ?>
<?php include_once 'php/companyData.php'; ?>
<?php include_once 'php/data.php'; ?>
</html>
<head>
        <title>X Pizza</title>
        <!-- Font i marrur nga google -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="CSS/Home.css">
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
                                        <h5><a href="Menu.php" class="menu-btn padding-lr-25"><b>Shiko Menun</b></a>
                                        </h5>
                                </div>
                        </div>
                </div>
        </div>

        <section class="center-text position-relative">
                <div class="background-2"></div>
                <div class="background-3"></div>

                <div class="container">
                        <div class="heading">
                                <img class="heading-img" src="images/Llogo_4.png" alt="">
                                <h2><?php echo "".$headerH;?></h2>
                        </div>

                        <div class="row">
                                <div><?php echo "".$text1H;?></h2></b> </p>
                                </div>
                                <div><?php echo "".$text2H;?></h2></b></p>
                                </div>
                        </div>
                </div>
        </section>


<div class="container">

        <div class="mySlides">
          <img src="images\animation\rr1.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr2.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr3.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr4.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr5.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr6.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr7.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr8.png">
        </div>
        <div class="mySlides">
          <img src="images\animation\rr9.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr10.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr11.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr12.png">
        </div>
        <div class="mySlides">
          <img src="images\animation\rr13.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr14.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr15.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr16.png">
        </div>
        <div class="mySlides">
          <img src="images\animation\rr17.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr18.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr19.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr20.png">
        </div>
        <div class="mySlides">
          <img src="images\animation\rr21.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr22.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr23.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr24.png">
        </div>
        <div class="mySlides">
          <img src="images\animation\rr25.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr26.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr27.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr28.png">
        </div>
        <div class="mySlides">
          <img src="images\animation\rr29.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr30.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr31.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr32.png">
        </div>
        <div class="mySlides">
          <img src="images\animation\rr33.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr34.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr35.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr36.png">
        </div>
        <div class="mySlides">
          <img src="images\animation\rr37.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr38.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr39.png">
        </div>

        <div class="mySlides">
          <img src="images\animation\rr40.png">
        </div>



</div>
<br>

<div>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>  
</div>


        <div class="foto_shtese">
                <img src="images/funksioni.png" />
        </div>

        <footer class="footer-padding position-relative">
                <div class="container-fluid">
                        <a href="Home.php" id="logo-f-size"><img src="images/Llogo_3.png" alt="Logo"></a>

                        <div class="padding-t-30">
                                <p class="margin-b-10"><b>Adresa:</b></p>
                                <a target="_blank"
                                        href="https://www.google.com/maps/place/Universiteti+p%C3%ABr+Biznes+dhe+Teknologji/@42.6026634,21.108897,13z/data=!4m8!1m2!2m1!1subt!3m4!1s0x13549e8d5d607f25:0xa31dd05b21bd09de!8m2!3d42.647155!4d21.153124">
                                     <?php echo "".$adresa;?></h6>
											</a>
                        </div>

                        <div class="padding-t-30">
                                <p class="margin-b-10"><b>Phone:</b></p>
                                <p><?php echo "".$numri;?></h6></p>
                        </div>

                        <div class="padding-t-30">
                                <p class="margin-b-10"><b>Email:</b></p>
                                <a href="mailto:xPizza@gmail.com"><?php echo "".$email;?></h6></a>
                        </div>
						<div class="padding-t-30">
                                <p class="margin-b-10"><b></b></p>
                                <a href="Login.php">Admin Login</a>
                        </div>
        </footer>
        
        <script>
                var slideIndex = 0;
                showSlides();

                function showSlides() {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                  }
                  slideIndex++;
                  if (slideIndex > slides.length) {slideIndex = 1}    
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                  setTimeout(showSlides, 45); // Change image every 2 seconds
                }
        </script>

</body>

</html>