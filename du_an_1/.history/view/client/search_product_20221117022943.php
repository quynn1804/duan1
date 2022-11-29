<?php
if(isset($_POST['submit'])){
    $search = $_POST['search_product'];
    $sql = "SELECT * FROM `product` WHERE `product_name` LIKE '%$search%'
}
?>