<style>
    .select_search{
        width: 200px;
        margin-top: 20px;
        margin-bottom: 0px;
        padding: 2px;
    }
    .timkiem{
        position: absolute;
        right: 390px;
        top: 83px;
       color: var(--color-info-dark);
    }
    .timkiem:hover{
        cursor: pointer;
    }
    .wrap_date_form{
        display: flex;
        justify-content: space-between;
        
    }
    
</style>
<main>

    <h1>Show Product</h1>
    <div class="wrap_date_form">
    
    <div class="date">
        <input type="date">
    </div>
    <form action="" method="POST" class="form">
        
        
        <?php 
           
          ?>
     
        <select class="select_search" name="category_id" id="">
         <option  value="0" selected>Tất cả thể loại</option>

        <?php foreach ($pros as $pro) : ?>
                <option  value="<?= $cate['product_id'] ?>" >
                    <?= $cate['product_name'] ?>
                </option>
            <?php endforeach ?>
        </select>
       
       <button name="btn_submit" type="submit"><i class="timkiem fa-solid fa-magnifying-glass"></i></button>


    </form>
    </div>

    <div class="show_product">
        <div class="table_wrapper">
            <?php if (isset($_GET['msg'])) : ?>

                <div>
                    <h2 class="alert"> <?= $_GET['msg'] ?> </h2>
                </div>
            <?php endif ?>
            <table class="table">
                <tr>
                    <th>Product_ID</th>
                    <th>Product_name</th>
                    <th>Ảnh</th>
                    <th>Type_ID</th>
                    <th>Màu</th>
                    <th>Price</th>
                    <th>Sale</th>
                    <th>Size</th>
                    <th>Desciption</th>
                    <th>Time</th>

                    <th>
                        <a href="index.php?act=add_product" class="btn-them">Thêm Sản Phẩm</a>
                    </th>

                </tr>


                <!-- Đổ dữ liệu -->
                
                <?php 
                 $sql = "SELECT * FROM `product`";
                 $query = connect($sql);
                 $products = $query->fetchAll();
                foreach ($products as $product) : ?>
                    <tr>
                        <td><?= $product['product_id']  ?></td>
                        <td><?= $product['product_name']  ?></td>
                        <th>haha</th>
                        <!-- <td><img src="../src/imgs/img_product/<?php echo $product['avatar'] ?>" alt=""></td> -->
                        <?php
                        $type_id = $product['type_id'];
                        $sql = "Select * from type where type_id = '$type_id'  ";
                        $cate = getOne($sql);
                        ?>
                        <td> <?= $cate['type_name'] ?> </td>

                        <?php
                        $color_id = $product['color_id'];
                        $sql = "Select * from color where color_id = '$color_id'  ";
                        $color = getOne($sql);
                        ?>
                        <td> <?= $color['color_name'] ?> </td>

                        <td><?= $product['product_price'] ?></td>
                        <td><?= $product['product_sale']?></td>
                        <?php
                        $size_id = $product['size_id'];
                        $sql = "Select * from size where size_id = '$size_id'  ";
                        $cate = getOne($sql);
                        ?>
                       <td> <?= $cate['size_name'] ?> </td>
                       
                      

                        <td><?= $product['product_desc'] ?></td>
                        <td><?= $product['product_date'] ?></td>
                        <td>
                            <a href="index.php?act=sua_product&id=<?= $product['id'] ?>" class="btn-sua">Sửa</a>
                            <a href="index.php?act=xoa_product&id=<?= $product['id'] ?>" class="btn-xoa" onclick="return confirm('Bạn có chắc xóa không?')">Xóa</a>
                        </td>

                    </tr>


                <?php endforeach ?>
            </table>
        </div>

    </div>





</main>