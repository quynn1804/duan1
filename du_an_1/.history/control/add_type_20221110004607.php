<?php
    require "../model/connect.php";
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $sql = "INSERT INTO type (`type_name`) VALUES (N'$name')";
    }

?>
<main>
            <h1>Add Category</h1>
            <link rel="stylesheet" href="./src/css/kkk.css">
            <div class="date">
                <input type="date">
            </div>

            <div class="add_categories_wrap_form">
        
        <form action="" method="POST">
            <label for="">Tên loại hàng:</label> <br>
            <input type="text" class="form-control mb3" name="name" required>
            <br>
            <button type="submit" class="btn " style="margin-top:20px ;" name="submit">Thêm</button>
        </form>
    </div>


</main>

