<main>
    <link rel="stylesheet" href="./src/css/kkk.css">
    <h1>Add Product</h1>
    <div class="date">
        <input type="date">
    </div>

    <div class="add_product">

        <form action="" method="POST" enctype="multipart/form-data">

            <label for="">Title</label> <br>
            <input type="text" name="title" required>
            <br>

            <label for=""> Image:</label> <br>
            <input type="file" class="image" name="image" multiple>
            <br>
            <?php if (isset($image_err)) : ?>
                <div style="color: red;">
                    <?= $image_err  ?>
                </div>
            <?php endif ?>

            <label for="">Desc:</label> <br>
            <input type="text" name="desc" required>
            <br>







            <label for="">Content:</label> <br>
            <textarea class="form-control" placeholder="Leave a comment here" name="content"></textarea>
            <br>

            <Label>Time:</Label> <br>
            <input type="text" name="view" readonly placeholder="Tự động">
            <br>

            <button type="submit" class="btn" style="margin-top:20px ;" name="submit">Thêm</button>


        </form>

    </div>

</main>