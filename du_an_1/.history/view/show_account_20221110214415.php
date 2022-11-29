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

    <h1>Show Account</h1>
    <div class="wrap_date_form">
    
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
                    <th>User_ID</th>
                    <th>User_name</th>
                    <th>Password</th>
                    <th>Email</th>
                </tr>


                <!-- Đổ dữ liệu -->
                
                <?php 
                 $sql = "SELECT * FROM `account`";
                 $query = connect($sql);
                 $accounts = $query->fetchAll();
                foreach ($accounts as $account) : ?>
                    <tr>
                        <td><?= $account['user_id']  ?></td>
                        <td><?= $account['user_name'] ?></td>
                        <td><?= $account['user_password'] ?></td>
                        <td><?= $account['user_email'] ?></td>
                    </tr>


                <?php endforeach ?>
            </table>
        </div>

    </div>





</main>