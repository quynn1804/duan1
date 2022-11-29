<?php
    function connect($x){
        $connect = new PDO("mysql:host=localhost;dbname=dkqt_shop;charset=utf8","root","");
        $query = $connect -> prepare($x);
        $query -> execute();
        return $query;
    }
    function getAll($x){
        $query = connect($x) -> fetchAll(); 
        return $query; 
    }
    function getOne($x){
        $query = connect($x) -> fetch(); 
        return $query;  
    }
    function add_type(){
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $image = $_FILES['image'];

        if ($image['size'] > 0) {
            $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif' && $ext != 'jpeg') {
                $image_err = "Anh khong dung dinh dang";
            }
        } else {
            $image_err = "Ban chua nhap anh";
        }

        if (!isset($image_err)) {
            $image = $image['name'];
            $sql = "INSERT INTO `type` (`type_name`, `type_avatar`) VALUES ('$name', '$image')";
            move_uploaded_file($image['tmp_name'], './src/imgs/img_type/' . $image);
            connect($sql);
            $msg = 'Thêm dữ liệu thành công';
            header("location: index.php?act=show_type&msg=$msg");
        };
    }
}
    function add_product(){     
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $color = $_POST['color'];
            $image = $_FILES['image'];
            $type = $_POST['type'];
            $desc = $_POST['description'];
            $size = $_POST['size'];
            $date = $_POST['date'];
            $sale = $_POST['sale'];

            if ($image['size'] > 0) {
                $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
                if ($ext != 'jpg' && $ext != 'png' && $ext != 'gif' && $ext != 'jpeg') {
                    $image_err = "Anh khong dung dinh dang";
                }
            } else {
                $image_err = "Ban chua nhap anh";
            }

            if (!isset($image_err)) {
                $image = $image['name'];
                $sql = "INSERT INTO product 
                (`product_name`, `product_avatar`,`type_id`, `product_price`, `color_id`, `product_sale`, `product_desc`, `size_id` ) VALUES
                ('$name', '$image', '$type', '$price', '$color', '$sale', '$desc', '$size')";
                move_uploaded_file($image['tmp_name'], '../src/imgs/img_product/' . $image);
                connect($sql);
                
                $msg = 'Thêm dữ liệu thành công';

                header("location: index.php?act=show_product&msg=$msg");
            }
    }
    function xoa_type(){
        $id = $_GET['id']
        $sql = "DELETE FROM `type` WHERE `type_id` = $id";
    }
}
?>