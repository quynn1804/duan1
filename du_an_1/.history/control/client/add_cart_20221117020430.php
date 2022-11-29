<?php
// unset($_SESSION['cart']);
// die();
$id = $_GET['id'];
if(empty($_SESSION['cart'][$id])){
    $query = "SELECT * FROM `product` WHERE `product_id` =$id";
    $product = getOne($query); 
    $_SESSION['cart'][$id]['product_avatar']= $product['product_avatar'];
    $_SESSION['cart'][$id]['product_name']= $product['product_name'];
    $_SESSION['cart'][$id]['product_price']= $product['product_price'];
    $_SESSION['cart'][$id]['quantity']= 1;
    $_SESSION['cart'][$id]['product_id'] = $id;
 }else{

   $_SESSION['cart'][$id]['quantity']++;
 }
//    var_dump($_SESSION["cart"]);die; 
// echo "<script> window.location.href='./index.php?act=detail_product</script>";
header("./index.php?act=detail_product&id=".$id); 
?>