<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Notice Board Development</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="login_page.php">Login</a></li>
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                    function fetch(){
                        include("db.php");
                        $query = "select items.*, users.username from items INNER JOIN users ON users.id = items.created_by where status = 'approved'";
                        $display = mysqli_query($link, $query);
                        while($row = mysqli_fetch_array($display,MYSQLI_ASSOC)){
                            // echo'<tr>';
                            // echo'<td>'.$row['item_name'].'</td>';
                            // echo'<td>'.number_format($row['cost']).'/=</td>';
                            // echo'<td>'.number_format($row['quantity']).'</td>';
                            // echo'<td>'.number_format($row['cost'] * $row['quantity']).'/=</td>';
                            // echo'<td>'.$row['username'].'</td>';
                            // echo'<td>'.$row['created_at'].'</td>';
                            // echo'</tr>';
                            echo'<div class="col mb-5">';
                            echo'<div class="card h-100">';
                            echo'<img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />';
                            echo'<div class="card-body p-4">';
                            echo'<div class="text-center">';
                            echo'<h5 class="fw-bolder">'.$row['item_name'].'</h5>';
                            echo number_format($row['cost']) . '/=';
                            echo'</div>';
                            echo'</div>';
                            echo'<div class="card-footer p-4 pt-0 border-top-0 bg-transparent">';
                            echo'<div class="text-center"><a class="btn btn-outline-dark mt-auto" href="puchase_item_page.php?id='.$row['id'].'" name="purchase_item">Purchase Item</a></div>';
                            echo'</div>';
                            echo'</div>';
                            echo'</div>';
                        }
                    }
                    fetch();
                ?>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Notice Board Development by KICONCO ANITA ARINAITWE 20/U/2020/EVE.</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
