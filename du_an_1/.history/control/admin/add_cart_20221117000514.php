<?php
    $id = $_GET["id"];
    if(empty($_SESSION["cart"][$id])){
        $query = "SELECT * FROM product where product_id =$id";
        $product= getAll($query); 
        $_SESSION["cart"][$id]["product_avatar"]= $product["product_avatar"];
        $_SESSION["cart"][$id]["product_name"]= $product["productName"];
        $_SESSION["cart"][$id]["productPrice"]= $product["productPrice"];
        $_SESSION["cart"][$id]["quantity"]= 1;
        $_SESSION["cart"][$id]["id"] = $id;
     }else{
  
       $_SESSION["cart"][$id]["quantity"]++;
     }
//    var_dump($_SESSION["cart"]);die;
    header("location:../detail.php?id=$id"); 
?>