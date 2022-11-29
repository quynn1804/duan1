
<main>
    <link rel="stylesheet" href="./src/css/kkk.css">
    <h1>Add Product</h1>
    <div class="date">
        <input type="date">
    </div>

    <div class="add_product">


        <form action="" method="POST" enctype="multipart/form-data">

            <label for="">Product Name</label> <br>
            <input type="text" name="name" required>
            <br>
            
            <label for=""> Image:</label> <br>
            <input type="file" class="image" name="image" multiple>
            <br>
            <?php if (isset($image_err)) : ?>
            <div style="color: red;">
                <?= $image_err  ?>
            </div>
            <?php endif ?>

            <label for="">Price:</label> <br>
            <input type="number" name="price" required>
            <br>

            <label for="">Type</label> <br>
            <select class="form-select" aria-label="Default select example" name="type">
                
            </select>
            <br>

            <Label>Sale:</Label> <br>
            <input type="number" name="sale" required>
            <br>

            <Label>Size:</Label> <br>
            <input type="text" name="size" required>
            <br>

            <label for="">Desciption:</label> <br>
            <textarea class="form-control" placeholder="Leave a comment here" name="description"></textarea>
            <br>
            
            <Label>Time:</Label> <br>
            <input type="datetime-local" name="view" required>
            <br>

            <button type="submit" class="btn" style="margin-top:20px ;" name="submit">Thêm</button>


        </form>

    </div>

</main>
