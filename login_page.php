<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; }
    </style>
</head>
<body style="background-color:grey;">
    <div class="wrapper" style="font-size: 20px; margin:10px; background-color:aqua; border:3mm dotted red;">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="login.php" method="post">
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
                <input type="submit" class="btn btn-primary" value="Login"><br/>
            </div>
            <p>Don't have an account? <a href="signup.php">Sign up now</a>.</p>
        </form>
    </div>
</body>
</html>