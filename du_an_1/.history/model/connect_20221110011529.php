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
            $sql = "INSERT INTO type (`type_name`) VALUES (N'$name')";
            connect($sql);
        }
    }
    function add_product(){
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $price = $_POST['price'];
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
                $image_name = $image['name'];
                $sql = "INSERT INTO product 
                (`product_name`, `product_avatar`,`type_id`, `product_price`, `product_sale`, `product_desc`, `product_date`, `size_id` ) VALUES
                ('$name', '$image', '$type', '$price', '$sale', '$desc', '$date', '$size')";
                move_uploaded_file($image['tmp_name'], 'src/imgs/' . $image_name);
                $msg = 'Thêm dữ liệu thành công';

                header("location: index.php?act=show_product&msg=$msg");
            }
    }
}
?>