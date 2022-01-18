<?php
session_start();
    if(!$_SESSION["username"]){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <!-- Core theme CSS (includes Bootstrap)-->
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
<div class="container">
  <h2>A table of Items created</h2>        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Item</th>
        <th>Cost</th>
        <th>Quantity</th>
        <th>Total Cost</th>
        <th>Status</th>
        <th>Created By</th>
        <th>Created At</th>
        <th>Options</th>
      </tr>
    </thead>
    <tbody>
        <?php
        function fetch(){
            include("db.php");
            $query = "select items.*, users.username from items INNER JOIN users ON users.id = items.created_by";
            $display = mysqli_query($link, $query);
            while($row = mysqli_fetch_array($display,MYSQLI_ASSOC)){
                echo'<tr>';
                echo'<td>'.$row['item_name'].'</td>';
                echo'<td>'.number_format($row['cost']).'/=</td>';
                echo'<td>'.number_format($row['quantity']).'</td>';
                echo'<td>'.number_format($row['cost'] * $row['quantity']).'/=</td>';
                echo'<td class="bg-primary">'.$row['status'].'</td>';
                echo'<td>'.$row['username'].'</td>';
                echo'<td>'.$row['created_at'].'</td>';
                echo'<td><a href="functions.php?id='.$row['id'].'"><button class="btn btn-sm btn-warning" name="approve" type="submit">Approve Item</button></a></td>';
                echo'</tr>';
            }
        }
        fetch();
      ?>
    </tbody>
  </table>
  
  <a href="noticeboard.php"><button type="button" class="btn btn-info">create new item</button></a>
</div>

</body><br>
<footer class="py-5 bg-dark" style="background-color:darkgray">
            <div class="container"><p class="m-0 text-center text-white">Notice Board Development by KICONCO ANITA ARINAITWE 20/U/2020/EVE.</p></div>
</footer>
</html>
