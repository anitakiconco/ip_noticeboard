<?php
session_start();
include("db.php");
    if(!$_SESSION["username"]){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notice Board</title>
    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<?php if(@$_SESSION['flash_message'])
    echo '<div class="row"><br>';
            echo '<div class="col-lg-2 col-sm-2 col-md-2"></div>';
            echo '<div class="col-lg-8 col-md-8 col-sm-8">';
            echo '<div class="alert alert-success alert-dismissible">';
            echo '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
            echo '<strong>Success! </strong>'.@$_SESSION['flash_message'];
            echo '</div>';
            echo '</div>';
            echo '<div class="col-lg-2 col-sm-2 col-md-2"></div>';
            echo '</div>';
?>
    <form action="functions.php" method="post">
        <div class="row">
            <div class="col-lg-4 col-sm-4 col-md-4"></div>
            <div class="col-lg-4 col-sm-4 col-md-4 card">
            <div class="form-group box">
                <label for="item">Item</label>
                    <input type="text" name="item" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter item" required>
                </div>
                <div class="form-group">
                    <label for="cost">Cost</label>
                    <input type="text" name="cost" class="form-control" id="cost" placeholder="cost" required>
                </div>
                <div class="form-group">
                    <label for="quantity">Quantity</label>
                    <input type="text" name="quantity" class="form-control" id="quantity" placeholder="quantity" required>
                </div>
                <button type="submit" class="btn btn-primary" name="save_item">Submit</button>
                <a href="items.php"><button type="button" class="btn btn-info">view items</button></a>
            </div>
            <div class="col-lg-4 col-sm-4 col-md-4"></div>
        </div>
    </form>
</body><br><br><br><br>
        <footer class="py-5 bg-dark" style="background-color:darkgray">
            <div class="container"><p class="m-0 text-center text-white">Notice Board Development by KICONCO ANITA ARINAITWE 20/U/2020/EVE.</p></div>
        </footer>
</html>