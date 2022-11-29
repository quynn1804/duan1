<?php
require_once "../model/connect.php";
if(isset($_GET['id'])){
$id = $_GET['id'];


$sql = "DELETE FROM category WHERE `type_id` =$id ";

connect($sql);

$msg = 'Xóa dữ liệu thành công';

header("location: index.php?act=show_type&msg=$msg");

};
?>