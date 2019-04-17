<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: dash/production/index.php");
    exit;
}
 
// Include config file
require_once "dbconn.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, user, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $user, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){

                      // This is to create hashed password
                      //echo $param_password = password_hash($password, PASSWORD_DEFAULT);

                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username; 
                            $_SESSION["user"] = $user;                           
                            
                            // Redirect user to welcome page
                            header("location: dash/production/index.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
<html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="dash/production/images/favicon.ico" type="image/ico" />
    <title>Data R&D | </title>

    <link href="bootstrap_4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap_4.1.3/js/bootstrap.min.js"></script>
    <script src="bootstrap_4.1.3/js/jquery-3.3.1.slim.min.js"></script>
    <link href="bootstrap_4.1.3/css/style.css" rel="stylesheet">
  </head>

  <body id="LoginForm">
  <div class="container">
        <h1 class="form-heading">Research & Development</h1>
      <div class="login-form">
        <div class="main-div">
          <div class="panel">
             <h2>Corporate Name</h2>
             <p>Reporting Tool</p>
          </div>
              <form id="Login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                      <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" placeholder="Username">
                      <span class="help-block"><?php echo $username_err; ?></span>
                  </div>
                  <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                      <span class="help-block"><?php echo $password_err; ?>
                  </div>
                  <div class="forgot">
                      <a href=""></a>
                  </div>
                      <button type="submit" class="btn btn-primary">Login</button>
              </form>
        </div>
      </div>
  </div>
  </body>

</html>
