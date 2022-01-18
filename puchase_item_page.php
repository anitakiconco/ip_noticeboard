
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Puchase Item</title>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
    </head>
    <body>
        <div class="row">
            <div class="col-lg-2 col-sm-2 col-md-2"></div>
            <div class="col-lg-8 col-sm-8 col-md-8">
                <div class="container">
                    <div class="row">
                        <br>
                        <div class="col-xs-8">
                            <div class="panel panel-info">
                                <div class="panel-body">
                                <?php
                                    include('db.php'); 
                                    $id = $_GET['id'];
                                    $query = "select items.* from items where id = '$id'";
                                    $display = mysqli_query($link, $query);
                                    while($row = mysqli_fetch_array($display,MYSQLI_ASSOC)){
                                        echo'<div class="row">';
                                        echo'<div class="col-xs-2"><img class="img-responsive" src="http://placehold.it/100x70">';
                                        echo'</div>';
                                        echo'<div class="col-xs-4">';
                                        echo'<h4 class="product-name"><strong>'.$row['item_name'].'</strong></h4>';
                                        echo'</div>';
                                        echo'<div class="col-xs-6">';
                                        echo'<div class="col-xs-6 text-right">';
                                        echo'<h6><strong><span id="cost">'.$row['cost'].'</span> <span class="text-muted">x</span></strong></h6>';
                                        echo'</div>';
                                        echo'<div class="col-xs-4">';
                                        echo'<input type="text" class="form-control input-sm" id="item_quantity" min="1" onKeyup="updateAmount()">';
                                        echo'</div>';
                                        echo'<div class="col-xs-2">';
                                        echo'<button type="button" class="btn btn-link btn-xs">';
                                        echo'</button>';
                                        echo'</div>';
                                        echo'</div>';
                                        echo'</div>';
                                    }
                                ?>
                                </div>
                                <div class="panel-footer">
                                    <div class="row text-center">
                                        <div class="col-xs-9">
                                            <h4 class="text-right">Total Cost: <strong id="price">0</strong></h4>
                                        </div>
                                        <div class="col-xs-3">
                                            <button type="button" class="btn btn-success btn-block">
                                            Place Order
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2"></div>
        </div>
    </body>
    <script>
        function updateAmount(){
            console.log(document.getElementById('cost').innerHTML);
            document.getElementById('price').innerHTML = document.getElementById('cost').innerHTML * 
                                                        document.getElementById('item_quantity').value;
        }
    </script>
</html>