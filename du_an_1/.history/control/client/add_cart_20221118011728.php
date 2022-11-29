<?php
// unset($_SESSION['cart'][$id]);
// die();
$id = $_GET['id'];
  if(isset($_POST['submit'])){
    if(empty($quantity)){
      $quantity = $_POST['quantity'];
    }
  }
if(empty($_SESSION['cart'][$id])){
    $query = "SELECT * FROM `product` WHERE `product_id` =$id";
    $product = getOne($query); 
    $_SESSION['cart'][$id]['product_avatar']= $product['product_avatar'];
    $_SESSION['cart'][$id]['product_name']= $product['product_name'];
    $_SESSION['cart'][$id]['product_price']= $product['product_price'];
    $_SESSION['cart'][$id]['product_id'] = $id;
    if(empty($quantity)){
    $_SESSION['cart'][$id]['product_quantity'] = $quantity;
  }
  else{
    $_SESSION['cart'][$id]['product_quantity'] = 1;
  }
 }else{

   $_SESSION['cart'][$id]['product_quantity']++;
 }
 echo "$_SESSION['cart'][$id]['product_quantity']"
//    var_dump($_SESSION["cart"]);die; 
// echo "<script> window.location.href='./index.php?act=detail_product</script>";
// $noti = "Đặt hàng thành công";
  // header("location: ./index.php?act=shop&noti=$noti"); 
  header("location: ./index.php?act=cart");
?>