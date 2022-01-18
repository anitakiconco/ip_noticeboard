<?php
session_start();
    include("db.php");
    include("login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign-up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body style="background-color:grey;">
    <div class="wrapper" style="font-size: 20px; margin:10px; background-color:aqua; border:3mm dotted red;">
        <h2>Sign-up</h2>
        <p>Please fill in your credentials to sign-up.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="signup.php" method="post">
            <div class="form-group" style="font-size: 20px; text-align:center; margin:10px; border:1px solid black;">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
              <!-- /*<span class="invalid-feedback"><?php echo $username_err; ?></span>*/-->
           <!-- </div> -->   
           <!-- <div class="form-group">-->
                <label>Password</label>
                <input type="password" name="password" class="form-control"><br/>
            <!-- /*<span class="invalid-feedback"><?php echo $password_err; ?></span>*/-->
           <!-- </div>-->
            <!--<div class="form-group">-->
                <input type="submit" class="btn btn-primary" value="signup"><br/>
            </div>
            <p>Already have an account? <a href="index.php">Login</a>.</p>
        </form>
    </div>
</body>
</html>