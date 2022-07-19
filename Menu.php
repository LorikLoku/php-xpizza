<?php include_once 'php/connect.php'; ?>
<?php include_once 'php/companyData.php'; ?>
<?php include_once 'php/ofertaData.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
        <title>X Pizza</title>
        <!-- Font i marrur nga google-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css" />

        <link href="CSS/Menu.css" rel="stylesheet">
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

        <div class="slideshow-container background-1 main-slider">
                <div class="mySlides fade">
                        <img src="images/h3.jpg" style="width:100%">
                        <div class="text display-table-cell center-text color-white">
                                <h5><b>ME E MIRA</b></h5>
                                <h1 class="margin-t-30 margin-b-15">Menu</h1>
                                <h5 class="menu-btn padding-lr-25"><b>Porosit: +383 44 666 111</b></h5>
                        </div>
                </div>

                <div class="mySlides fade">
                        <img src="images/1.jpg" style="width:100%">
                        <div class="text display-table-cell center-text color-white">
                                <h5><b>ME E MIRA</b></h5>
                                <h1 class="margin-t-30 margin-b-15">Menu</h1>
                        </div>
                </div>

                <div class="mySlides fade">
                        <img src="images/h7.jpg" style="width:100% height:50px">
                        <div class="text display-table-cell center-text color-white">
                                <h5><b>ME E MIRA</b></h5>
                                <h1 class="margin-t-30 margin-b-15">Menu</h1>
                        </div>
                </div>

                <div class="mySlides fade">
                        <img src="images/h8.jpg" style="width:100%">
                        <div class="text display-table-cell center-text color-white">
                                <h5><b>ME E MIRA</b></h5>
                                <h1 class="margin-t-30 margin-b-15">Menu</h1>
                        </div>
                </div>

                <div class="mySlides fade">
                        <img src="images/h9.jpg" style="width:100% height:50px">
                        <div class="text display-table-cell center-text color-white">
                                <h5><b>ME E MIRA</b></h5>
                                <h1 class="margin-t-30 margin-b-15">Menu</h1>
                        </div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        </div>

        <section class="background-color">
                <div class="container">
                        <div>
                                <div>
                                        <div class="sided-90x margin-b-30 ">
                                                <div class="s-left"><img src="images/p1.png" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Pizza Margarita</b><b
                                                                        class="color-primary float-right">4.00 €</b>
                                                        </h5>
                                                        <p class="padding-r-70">Salce domatesh, Mozarela, Origano,
                                                                Kerpudha, Proshute, Ullinj </p>
                                                </div>
                                        </div>
                                </div>

                                <div>
                                        <div class="sided-90x margin-b-30 ">
                                                <div class="s-left"><img src="images/p2.png" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Pizza Fungi</b><b
                                                                        class="color-primary float-right">5.00 €</b>
                                                        </h5>
                                                        <p class="padding-r-70">Salce domatesh, Mozarela, Origano,
                                                                Kerpudha, Proshute, Ullinj </p>
                                                </div>

                                        </div>
                                </div>

                                <div>
                                        <div class="sided-90x margin-b-30 ">
                                                <div class="s-left"><img src="images/p3.png" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Pizza Proshute</b><b
                                                                        class="color-primary float-right">5.00 €</b>
                                                        </h5>
                                                        <p class="padding-r-70">Salce domatesh, Mozarela, Origano,
                                                                Kerpudha, Proshute, Ullinj </p>
                                                </div>

                                        </div>
                                </div>

                                <div>
                                        <div class="sided-90x margin-b-30">
                                                <div class="s-left"><img src="images/p4.png" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Pizza Mozarela</b><b
                                                                        class="color-primary float-right">5.00 €</b>
                                                        </h5>
                                                        <p class="padding-r-70">Salce domatesh, Mozarela, Origano,
                                                                Kerpudha, Proshute, Ullinj </p>
                                                </div>

                                        </div>
                                </div>

                                <div>
                                        <div class="sided-90x margin-b-30">
                                                <div class="s-left"><img src="images/p5.png" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Pizza Tuna</b><b
                                                                        class="color-primary float-right">5.00 €</b>
                                                        </h5>
                                                        <p class="padding-r-70">Salce domatesh, Mozarela, Origano,
                                                                Kerpudha, Proshute, Ullinj </p>
                                                </div>

                                        </div>
                                </div>

                                <div>
                                        <div class="sided-90x margin-b-30 ">
                                                <div class="s-left"><img src="images/p6.png" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Pizza 4 Stinet</b><b
                                                                        class="color-primary float-right">5.00 €</b>
                                                        </h5>
                                                        <p class="padding-r-70">Salce domatesh, Mozarela, Origano,
                                                                Kerpudha, Proshute, Ullinj </p>
                                                </div>

                                        </div>
                                </div>

                                <div>
                                        <div class="sided-90x margin-b-30">
                                                <div class="s-left"><img src="images/p1.png" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Pizza Italiane</b><b
                                                                        class="color-primary float-right">5.00 €</b>
                                                        </h5>
                                                        <p class="padding-r-70">Salce domatesh, Mozarela, Origano,
                                                                Kerpudha, Proshute, Ullinj </p>
                                                </div>

                                        </div>
                                </div>

                                <div>
                                        <div class="sided-90x margin-b-30 ">
                                                <div class="s-left"><img src="images/p3.png" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>X Pizza</b><b
                                                                        class="color-primary float-right">6.00 €</b>
                                                        </h5>
                                                        <p class="padding-r-70">Salce domatesh, Mozarela, Origano,
                                                                Kerpudha, Proshute, Ullinj </p>
                                                </div>

                                        </div>
                                </div>
                        </div>
                </div>
        </section>




        <section class="story-area background-seller1 color-white position-relative">
                <div class="container">
                        <h3 class="font-60 font-s-40 center-text">Oferta</h3>
                </div>
        </section>


        <section>
                <div class="container">

                        <div>
                                <div>
                                        <div class="sided-220x margin-b-30 ">
                                                <div class="s-left "><img src="images/p7.png" alt="Menu Image"></div>
                                                <div class="s-right">
                                                        <h5><?php echo "".$emri;?></h5>
                                                        <h4><b class="color-primary"><?php echo "".$cmimi;?> €</b>
                                                        </h4>
                                                        <p><?php echo "".$pershkrimi;?> </p>
                                                </div>

                                        </div>
                                </div>

                                <div class="col-md-12 col-lg-6">
                                        <div class="sided-220x responsive margin-b-30  center-sm-text">
                                                <div class="s-left "><img src="images/p8.png" alt="Menu Image"></div>
                                                <div class="s-right">
                                                         <h5><?php echo "".$emri1;?></h5>
                                                        <h4><b class="color-primary"><?php echo "".$cmimi1;?> €</b>
                                                        </h4>
                                                        <p><?php echo "".$pershkrimi1;?> </p>
                                                </div>

                                        </div>
                                </div>

                        </div>

        </section>

        <section class="story-area background-seller color-white position-relative">
                <div class="container">
                        <h4 class="font-30 font-s-20 center-text margin-b-25"><i>Shto nje <b>PIJE</b> freskuese!!!</i>
                        </h4>
                </div>
        </section>


        <section>
                <div class="container">

                        <div class="row">
                                <div>
                                        <div class="sided-90x margin-b-30">
                                                <div class="s-left"><img src="images/w.png" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Uje</b><b
                                                                        class="color-primary float-right">0.50 €</b>
                                                        </h5>
                                                </div>

                                        </div>
                                </div>

                                <div>
                                        <div class="sided-90x margin-b-30 ">
                                                <div class="s-left"><img src="images/c.jpg" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Kafe</b><b
                                                                        class="color-primary float-right">0.50 €</b>
                                                        </h5>
                                                </div>

                                        </div>
                                </div>

                                <div>
                                        <div class="sided-90x margin-b-30">
                                                <div class="s-left"><img src="images/cc.jpg" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Coca-Cola</b><b
                                                                        class="color-primary float-right">1.00 €</b>
                                                        </h5>
                                                </div>

                                        </div>
                                </div>

                                <div>
                                        <div class="sided-90x margin-b-30 ">
                                                <div class="s-left"><img src="images/f.jpg" alt="Menu Image"></div>
                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Ace</b><b
                                                                        class="color-primary float-right">1.00 €</b>
                                                        </h5>
                                                </div>
                                        </div>
                                </div>

                                <div>
                                        <div class="sided-90x margin-b-30">
                                                <div class="s-left"><img src="images/o.jpg" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Leng Portokalli</b><b
                                                                        class="color-primary float-right">1.00 €</b>
                                                        </h5>
                                                </div>

                                        </div>
                                </div>

                                <div>
                                        <div class="sided-90x margin-b-30 ">
                                                <div class="s-left"><img src="images/s.jpg" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Lenge Shege</b><b
                                                                        class="color-primary float-right">2.00 €</b>
                                                        </h5>
                                                </div>

                                        </div>
                                </div>
                                <div>
                                        <div class="sided-90x margin-b-30">
                                                <div class="s-left"><img src="images/rw.jpg" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Vere e kuqe dhe e bardhe</b><b
                                                                        class="color-primary float-right">2.00 €</b>
                                                        </h5>
                                                </div>

                                        </div>
                                </div>

                                <div>
                                        <div class="sided-90x margin-b-30 ">
                                                <div class="s-left"><img src="images/b.jpg" alt="Menu Image"></div>

                                                <div class="s-right">
                                                        <h5 class="margin-b-10"><b>Korona</b><b
                                                                        class="color-primary float-right">3.00 €</b>
                                                        </h5>
                                                </div>

                                        </div>
                                </div>

                        </div>
                </div>
        </section>


        <footer class="footer-padding position-relative">
                <div class="container-fluid">
                        <a href="Home.php" id="logo-f-size"><img src="images/Llogo_3.png" alt="Logo"></a>

                        <div class="padding-t-30">
                                <p class="margin-b-10"><b>Adresa:</b></p>
                                <a target="_blank"
                                        href="https://www.google.com/maps/place/Universiteti+p%C3%ABr+Biznes+dhe+Teknologji/@42.6026634,21.108897,13z/data=!4m8!1m2!2m1!1subt!3m4!1s0x13549e8d5d607f25:0xa31dd05b21bd09de!8m2!3d42.647155!4d21.153124">
                                        <?php echo "".$adresa;?></a>
                        </div>

                        <div class="padding-t-30">
                                <p class="margin-b-10"><b>Phone:</b></p>
                                <p><?php echo "".$numri;?></p>
                        </div>

                        <div class="padding-t-30">
                                <p class="margin-b-10"><b>Email:</b></p>
                                <a href="mailto:xPizza@gmail.com"> <?php echo "".$email;?></a>
                        </div>
						<div class="padding-t-30">
                                <p class="margin-b-10"><b></b></p>
                                <a href="Login.php">Admin Login</a>
                        </div>
        </footer>

        <script>
                var slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                        showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                        showSlides(slideIndex = n);
                }

                function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        if (n > slides.length) { slideIndex = 1 }
                        if (n < 1) { slideIndex = slides.length }
                        for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                                dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                }
        </script>

</body>

</html>