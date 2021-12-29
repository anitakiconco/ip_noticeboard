<?php
require_once ('db.php');
// Initialize the session
session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $sql = "SELECT id, username, password FROM users WHERE username = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        session_start();                            
                        // Store data in session variables
                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $id;
                        $_SESSION["username"] = $username; 
                        header("location: noticeboard.php");
                    }
                }else{
                    
                    echo "Invalid username or password.";
                }
            }
        }
    }else{
        echo "please enter the user name and password";
    }
?>