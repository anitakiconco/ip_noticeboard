<?php
session_start();
    if(!$_SESSION["username"]){  header("location: login.php");}

    if(isset($_POST['save_item'])){ saveItem(); }

    if($_GET['id']){ approveItem();}

    if(isset($_POST['item_to_puchase'])){ purchaseItem();}
    /**
     * this function saves the item
     */
    function saveItem(){
        include('db.php');
        $item_name = $_POST['item'];
        $cost      = $_POST['cost'];
        $quantity  = $_POST['quantity'];
        $created_by = $_SESSION['id'];
        $created_at = date('Y-m-d H:i:s');

        $mysql_insert = mysqli_query($link, "insert into items values ('$item_name','$cost','$quantity','$created_by','$created_at')");
        if($mysql_insert){
            $_SESSION['flash_message'] = "New Item Added sucessfully";
            header('location: noticeboard.php');
        }
    }
    /**
     * this function approves the item
     */
    function approveItem(){
        include('db.php'); 
        $id = $_GET['id'];
        $mysql_update = mysqli_query($link, "update items set status = 'approved' where id = '$id'");
        if($mysql_update){
            $_SESSION['flash_message'] = "Operation successful";
            header('location: items.php');
        }
    }
    
    /**
     * this functoin puchases an item
     */
?>