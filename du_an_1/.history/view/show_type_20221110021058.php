<main>
            <h1>Category</h1>
            <div class="date">
                <input type="date">
            </div>
          
            <div class="wrap_show_categories">
    <?php if(isset($_GET['msg'])): ?>

  <div class="alert alert-success"><?= $_GET['msg']?></div>
    <?php endif ?>
    <div class="wrap_table">
    <table class="table">


        <tr>
            <th>ID</th>
            <th>Tên thể loại</th>
            
            <th>Ảnh </th>
            
            <th>
                    <a href="index.php?act=add_type" class="btn-them">Thêm thể loại</a>
                </th>
            
        </tr>


        <!-- Đổ dữ liệu -->
        <?php 
         $sql = "SELECT * FROM `type`";
         $cates = getALl($sql);
        foreach($cates as $cate ): ?>
            <tr>
                <td><?= $cate['type_id']  ?></td>
                <td><?= $cate['type_name']  ?></td>
                
                <td>
                    <img src="../src/img/img_type/<?= $cate['image']  ?>" alt="">
                </td>
                
               
                
                <td>
                    <a href="index.php?act=sua_category&id=<?=$cate['id']?> " class="btn-sua" >Sửa</a>
                    <a href="index.php?act=xoa_category&id=<?=$cate['id']?> " class="btn-xoa"   onclick="return confirm('Bạn có chắc xóa không?')">Xóa</a>
                </td>
                
            </tr>


            <?php  endforeach ?>
         </table>
    </div>


        </main>
 