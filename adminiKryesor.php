<?php include_once "php/connect.php";?>
<!DOCTYPE HTML>

<head>
	<title>AdminKryesor</title>

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
            margin: 3% 20% 0 20%;
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

                        <button type="button" class="button"><a href="Singup.php"><b>Regjistro</b><a></button>
                        
                        <div class="menu main-menu font-mountainsre">
                                <a href="Home.php">HOME</a>
                                <a href="Rreth_Nesh.php">RETH NESH</a>
                                <a href="Menu.php">MENU</a>
                                <a href="Kontakt.php">KONTAKT</a>
                                <a href="PunoPerNe.php">PUNO PER NE</a>
                        </div>
                </div>
        </header> 

    
        <h3 class="button-p" style="margin:15% 0 0 20%;">Tabela e Perdoruesve</h3>
			<div>
					 <?php
                    // Include config file
                    require_once "php/connect.php";
                    
                    // Attempt select query execution
                    $select = "SELECT * FROM user";
                    if($result = mysqli_query($db, $select)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered hije table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Emri</th>";
                                        echo "<th>Mbiemri</th>";
										echo "<th>Email</th>";
                                        echo "<th>Fjalkalimi</th>";
										echo "<th>Gjinia</th>";
                                        echo "<th>Admin</th>";
										echo "<th>Menagjer</th>";
                                        echo "<th>Aksionet</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                           echo "<tr>";
											  echo "<td>" . $row['id'] . "</td>";
											  echo "<td>" . $row['firstname'] . "</td>";
											  echo "<td>" . $row['lastname'] . "</td>";
											  echo "<td>" . $row['email'] . "</td>";
											  echo "<td> ********* </td>";
											  echo "<td>" . $row['gender'] . "</td>";
											  echo "<td>" . $row['admin'] . "</td>";
											  echo "<td>" . $row['menager'] . "</td>";
											  echo "<td>";
                                            echo "<button type='button' class='button1'><a href='update.php?id=". $row['id'] ."' title='Update Record' data-toggle='tooltip'>edit</a></button>";
                                            echo "<button type='button' style='float:right; border-color:green;' class='button1'><a href='deleteUser.php?id=". $row['id'] ."' title='Delete Record' data-toggle='tooltip'>delete</a></button>";
                                            
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

</body>
</html>
