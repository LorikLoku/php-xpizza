<!DOCTYPE HTML>
<?php include_once "php/connect.php";?>
<?php include_once "includes/dbh.inc.php";?>
<?php include_once "includes/Database.php";?>
<html lang="en">

<head>
        <title>X Pizza</title>
        <!-- Font i marrur nga google -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css" />

        <link rel="stylesheet" type="text/css" href="CSS/admin.css">
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

          .button1 {
            background-color: Transparent; 
            border: none;
            color: black;
            padding: 7px 22px;
            text-align: center;
            display: inline-block;
            font-size: 14px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
            border: 2px solid #f44336;
            float: left;
          }
  
          .button1:hover {
            background-color: transparent;
            color: white;
          }

          table {
            border-collapse: collapse;
            width: 60%;
            background-color:#EFF6F7;
            margin: 15% 20% 0 20%;
          }
  
          table, td, th {
            border: 1px solid white;
            text-align: left;
            padding: 10px 20px 10px 20px;
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

        

        <p style="margin: 300px 0 0 310px;">Tabela e Perdoruesve</p>
        <?php
          $host    = "localhost";
          $user    = "root";
          $pass    = "";
          $db_name = "web_db";

          //create connection
          $connection = mysqli_connect($host, $user, $pass, $db_name);

          //test if connection failed
          if(mysqli_connect_errno()){
              die("connection failed: "
                  . mysqli_connect_error()
                  . " (" . mysqli_connect_errno()
                  . ")");
          }

          //get results from database
          $result = mysqli_query($connection,"SELECT * FROM user");
          $all_property = array();  //declare an array for saving property

          //showing property
          echo '<table class="data-table hije" style="margin-bottom:0px; margin-top:10px;">
                  <tr class="data-heading">';  //initialize table tag
          while ($property = mysqli_fetch_field($result)) {
              echo '<td>' . $property->name . '</td>';  //get field name for header
              array_push($all_property, $property->name);  //save those to array
          }
          echo '</tr>'; //end tr tag

          $secret = 'i panjohur';

          //showing all data
          while ($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['firstname'] . "</td>";
              echo "<td>" . $row['lastname'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $secret . "</td>";
              echo "<td>" . $row['gender'] . "</td>";
              echo '</tr>';
          }
          echo "</table>";
          ?>

          <p style="margin: 60px 0 0 310px;">Tabela e Komenteve nga Klientet</p>
          <?php
          $host    = "localhost";
          $user    = "root";
          $pass    = "";
          $db_name = "web_db";

          //create connection
          $connection = mysqli_connect($host, $user, $pass, $db_name);

          //test if connection failed
          if(mysqli_connect_errno()){
              die("connection failed: "
                  . mysqli_connect_error()
                  . " (" . mysqli_connect_errno()
                  . ")");
          }

          //get results from database
          $result = mysqli_query($connection,"SELECT * FROM komentet");
          $all_property = array();  //declare an array for saving property

          //showing property
          echo '<table class="data-table hije" style="margin-bottom:0px; margin-top:10px;">
                  <tr class="data-heading">';  //initialize table tag
          while ($property = mysqli_fetch_field($result)) {
              echo '<td>' . $property->name . '</td>';  //get field name for header
              array_push($all_property, $property->name);  //save those to array
          }
		  echo '<td>Action </td>';
          echo '</tr>'; //end tr tag
		
          //showing all data
          while ($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              foreach ($all_property as $item) {
                echo '<td>' . $row[$item] .'</td>'; //get items using property value
				
              }
              echo "<td>";
              echo "<button type='button' class='button1'><a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'>edit<span class='glyphicon glyphicon-pencil'></span></a></button>";
              echo "<button type='button' style='float:right; border-color:green;' class='button1'><a href='delete.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'>delete<span class='glyphicon glyphicon-trash'></span></a></button>";
              echo "</td>";
              echo '</tr>';
			  
          }
          echo "</table>";
          ?>
                
          
          <p style="margin: 60px 0 0 310px;">Tabela e Kerkesave nga Klientet</p>
          <?php
          $host    = "localhost";
          $user    = "root";
          $pass    = "";
          $db_name = "web_db";

          //create connection
          $connection = mysqli_connect($host, $user, $pass, $db_name);

          //test if connection failed
          if(mysqli_connect_errno()){
              die("connection failed: "
                  . mysqli_connect_error()
                  . " (" . mysqli_connect_errno()
                  . ")");
          }

          //get results from database
          $result = mysqli_query($connection,"SELECT * FROM contact");
          $all_property = array();  //declare an array for saving property

          //showing property
          echo '<table class="data-table hije" style="margin-bottom:0px; margin-top:10px;">
                  <tr class="data-heading">';  //initialize table tag
          while ($property = mysqli_fetch_field($result)) {
              echo '<td>' . $property->name . '</td>';  //get field name for header
              array_push($all_property, $property->name);  //save those to array
          }
          echo '</tr>'; //end tr tag

          //showing all data
          while ($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              foreach ($all_property as $item) {
                  echo '<td>' . $row[$item] . '</td>'; //get items using property value
              }
              echo '</tr>';
          }
          echo "</table>";
          ?>

<p style="margin: 60px 0 0 310px;">Tabela e Aplikanteve</p>
          <?php
          $host    = "localhost";
          $user    = "root";
          $pass    = "";
          $db_name = "web_db";

          //create connection
          $connection = mysqli_connect($host, $user, $pass, $db_name);

          //test if connection failed
          if(mysqli_connect_errno()){
              die("connection failed: "
                  . mysqli_connect_error()
                  . " (" . mysqli_connect_errno()
                  . ")");
          }

          //get results from database
          $result = mysqli_query($connection,"SELECT * FROM punoniperne");
          $all_property = array();  //declare an array for saving property

          //showing property
          echo '<table class="data-table hije" style="margin-bottom:0px; margin-top:10px;">
                  <tr class="data-heading">';  //initialize table tag
          while ($property = mysqli_fetch_field($result)) {
              echo '<td>' . $property->name . '</td>';  //get field name for header
              array_push($all_property, $property->name);  //save those to array
          }
          echo '</tr>'; //end tr tag

          //showing all data
          while ($row = mysqli_fetch_array($result)) {
              echo "<tr>";
              echo "<td>" . $row['id'] . "</td>";
              echo "<td>" . $row['emri'] . "</td>";
              echo "<td>" . $row['mbiemri'] . "</td>";
              echo "<td>" . $row['email'] . "</td>";
              echo "<td>" . $row['numriTel'] . "</td>";
              echo "<td>" . $row['msg'] . '</td>';
              
              echo '</tr>';
          }
          echo "</table>";
      ?>


<!--
         <section class="story-area left-text center-text">
            
                <div class="container">
                    <form class="form-style-1" method="POST" action="sendMessage.php">
                    <h3 class="button-p" style="padding-top:50px;">Perditeso te dhenat ne pjesen Historia Jone ne faqen kryesore</h3>
                    <div class="button-p">
                        <div>
                            <textarea class="hije height-200x padding-tb-20 col" style="width:400px;" placeholder="Text1" name="content"></textarea>
                        </div>
                        <p><br></p>
                        <div>
                            <textarea class="hije height-200x padding-tb-20 col" style="width:400px;" placeholder="Text2" name="content"></textarea>
                        </div>
                    </div>
                                
                        <input type="submit" class="center-text margin-tb-30 button-s" style="margin-top:20px;" value="Submit">          

                    </form>
                </div>            
        </section>                                
       
        <section class="story-area left-text center-text">
                <div class="container">
                    <form class="form-style-1" method="POST" action="sendMessage.php">
                        
                    <h3 class="button-p">Perditeso te dhenat ne pjesen Historia Jone ne faqen Rreth Nesh</h3>
                    <div class="button-p">
                        <div>
                            <textarea class="hije height-200x padding-tb-20 col" style="width:400px;" placeholder="Text1" name="content"></textarea>
                        </div>
                        <p><br></p>
                        <div>
                            <textarea class="hije height-200x padding-tb-20 col" style="width:400px;" placeholder="Text2" name="content"></textarea>
                        </div>
                    </div>
                                
                        <input type="submit" class="center-text margin-tb-30 button-s" style="margin-top:20px;" value="Submit">          

                    </form>
                </div>            
        </section>
            
        
        <section class="story-area left-text center-text">
                <div class="container">
                    <form class="form-style-1" method="POST" action="sendMessage.php">
                    <h3 class="button-p">Perditeso te dhenat ne pjesen Komente nga Klientet ne faqen Rreth Nesh</h3>
                    <div class="button-p">
                        <div><input class="margin-b-20 col hije" type="text" style="width:400px;" placeholder="Subjekt" name="Header"></div>
                        <div>
                            <textarea class="hije height-200x padding-tb-20 col" style="width:400px;" placeholder="Text1" name="content"></textarea>
                        </div>
                    </div>
                                
                        <input type="submit" class="center-text margin-tb-30 button-s" style="margin-top:20px;" value="Submit">          

                    </form>
                </div>            
        </section> -->


	
		
        <section class="story-area left-text center-text">
                <div class="container">
                    </div>
                    <?php
                    // Include config file
                    require_once "php/connect.php";
                    
                    // Attempt select query execution
                    $select = "SELECT * FROM ofertat";
                    if($result = mysqli_query($db, $select)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table style='margin-top: 0;' class='table  hije table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Emri</th>";
                                        echo "<th>Cmimi</th>";
										echo "<th>Pershkrimi</th>";
										echo "<th>.......</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['emri'] . "</td>";
                                        echo "<td>" . $row['cmimi'] . "</td>";
										echo "<td>" . $row['pershkrimi'] . "</td>";
										
                                        echo "<td>";
                                        echo "<button type='button' class='button1'><a href='editOferten.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'>edit</a><br></button>";
                                        echo "<button type='button' style='float:right; border-color:green;' class='button1'><a href='deleteOferten.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'>delete</a></button>";
              
                                            echo "";
                                            echo "";
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($db);
                    }
 
                    // Close connection
                    mysqli_close($db);
                    ?>
					</div>
                </div>            
        </section>

<!--
        <section class="story-area left-text center-text">
                <div class="container">
                    <form class="form-style-1" method="POST" action="sendMessage.php">
                    <h3 class="button-p">Perditeso ofertat ne pjesen e Menuse</h3>
                    <div class="button-p">
                        <div><input class="margin-b-20 col hije" type="text" style="width:300px;" placeholder="Oferta" name="Header"></div>
                        <div><input class="margin-b-20 col hije" type="text" style="width:150px;" placeholder="Qmimi" name="Header"></div>
                        <div>
                            <textarea class="hije height-200x padding-tb-20 col" style="width:300px;" placeholder="Pershkrimi" name="content"></textarea>
                        </div>
                    </div>
                                
                        <input type="submit" class="center-text margin-tb-30 button-s" style="margin-top:20px;" value="Submit">          

                    </form>
                </div>            
        </section> 
		-->
		        
					
</body>
</html>
