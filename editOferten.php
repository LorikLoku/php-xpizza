	<?php
// Include config file
require_once "php/connect.php";
 
// Define variables and initialize with empty values
$emri = $cmimi = $pershkrimi = "";
$emri_err = $cmimi_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["id"]) && !empty($_POST["id"])){
    // Get hidden input value
    $id = $_POST["id"];
    
    
    $input_name = trim($_POST["emri"]);
    if(empty($input_name)){
        $emri_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $emri_err = "Please enter a valid name.";
    } else{
        $emri = $input_name;
    }
    
     
    $input_cmimi = trim($_POST["cmimi"]);
    if(empty($input_cmimi)){
        $cmimi_err = "Please enter a price.";  	
    } else{
        $cmimi = $input_cmimi;
    }
    
    // Check input errors before inserting in database
    if(empty($emri_err) && empty($cmimi_err)){
        // Prepare an update statement
        $sql = "UPDATE ofertat SET emri=?, cmimi=?, pershkrimi=? WHERE id=?";
         
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt,"ssii", $param_emri,$param_pershkrimi, $param_cmimi, $param_id);
           
            // Set parameters
            $param_emri = $emri;
            $param_cmimi = $cmimi;
			$param_pershkrimi = $pershkrimi;
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
                header("location: admin.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($db);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM ofertat WHERE id = ?";
        if($stmt = mysqli_prepare($db, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $id;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $emri = $row["emri"];
                    $cmimi = $row["cmimi"];
					$pershkrimi = $row["pershkrimi"];
                } else{
                    // URL doesn't contain valid id. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($db);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Update Record</h2>
                    </div>
                    <p>Please edit the input values and submit to update the record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group <?php echo (!empty($emri_err)) ? 'has-error' : ''; ?>">
                            <label>Emri</label>
                            <input type="text" name="emri" class="form-control" value="<?php echo $emri; ?>">
                            <span class="help-block"><?php echo $emri_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($cmimi_err)) ? 'has-error' : ''; ?>">
                            <label>Cmimi</label>
                            <textarea name="cmimi" class="form-control"><?php echo $cmimi; ?></textarea>
                            <span class="help-block"><?php echo $cmimi_err;?></span>
                        </div>
						<div class="form-group ">
                            <label>Pershkrimi</label>
                            <textarea name="pershkrimi" class="form-control"><?php echo $pershkrimi; ?></textarea>
                            <span class="help-block"></span>
                        </div>
						
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="admin.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
