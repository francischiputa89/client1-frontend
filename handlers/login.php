<?php
// Initialize the session
session_start();
 // Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../Componets/admin-dashboard.php");
    exit;
}

// Include config file
include"./dbcon.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if (empty($username_err) && empty($password_err)) {
        // Prepare a select statement
        $sql = "SELECT id, username, user_password FROM users WHERE username = ?";
        
        if ($stmt = mysqli_prepare($conn, $sql)) {
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if (mysqli_stmt_num_rows($stmt) == 1) { 

                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {

                        if (password_verify($password, $hashed_password)) {

                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header('Locatiom: ../Componets/admin-dashboard.php');
                           
                        } else {
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else {
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>

    <style>
        .header{
            margin-top: 20px;
            margin-left: 29%;
        }
        .wraper{
            position: relative;
            background-color: #ee550e;
            border-radius: 9px;
            margin-top: 22%;
            padding: 2rem;
            
            
        }
        .logo{
            position: relative;
            margin-left: 42%;
            
        }
        #user-logo{
            position: absolute;
            margin-top: 17px;
            margin-left: 35%;
            
            
           
        }
        #login{
            color: white;
            text-align: center;
            padding-top: 2rem;
        }
        input{
            margin-left: 8rem;
            text-align: center;
            border-style: solid;
        }
        #user-input{
            position: absolute;
            margin-left: 30%;
            margin-top: 9px;
            width: 28px;
            height: 25px;
            
        }
        .btn{
            margin-left: 15rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="../Assets/Images/ekas-full-logo.png" alt="logo">
        </div>
            <img id="user-logo" src="../Assets/Images/user-286 2.svg" alt="user-logo">

        <div class="container-fluid col-md-8">
            <div class="container wraper">

                <h2 id="login">LOGIN</h2>
                
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="mb-4 col-md-8">
                        <img id="user-input" src="../Assets/Images/user-input.svg" alt="user-input">
                        <input type="text" name="username" class="form-control
                        <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>"
                        value="<?php echo $username; ?>" placeholder="Username"
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    </div>

                    <div class="mb-4 col-8">
                        <img id="user-input" src="../Assets/Images/lock-90 1.png" alt="user-input">
                        <input type="password" name="password" class="form-control
                        <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" placeholder="Password">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>

                   <a style="text-decoration: none;" href=""> <button class="btn btn-dark col-md-4 mb-4">Login</button></a>
                    

                </form>
            </div>

        </div>
    </div>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>