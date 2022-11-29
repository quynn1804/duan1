<?php

if (isset($_POST['submit'])) {
    $err = array();
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cf_password = $_POST['cf_password'];
    $email  = $_POST['email'];
    if ($name && $username && $password && $email && $cf_password) {
        $err = "Không được để trống trường";
    }
    if ($password !== $cf_password) {
        $err = "Mật khẩu không trùng khớp";
    }
    if (!empty($err)) {
        $sql = "INSERT INTO user (`user_id`, `user_name`, `user_password`, `user_email`) VALUES ('$username', '$name', '$password', '$email')";
        connect($sql);
        header("location: index.php?act=account&noti=Đăng kí thành công");
    }
}
?>
<link rel="stylesheet" href="./src/css/bootstrap.min.css">
<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="card" style="border-radius: 15px;">
                        <div class="card-body p-5">
                            <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                            <form>

                                <div class="form-outline mb-4">
                                    <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example1cg">Your Name</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                                    <label class="form-label" name="username" for="form3Example1cg">Your Username</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example3cg">Your Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4cg">Password</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="cf_password" id="form3Example4cdg" class="form-control form-control-lg" />
                                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                </div>

                                <div class="form-check d-flex justify-content-center mb-5">
                                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                                    <label class="form-check-label" for="form2Example3g">
                                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                                    </label>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <button type="button" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                </div>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="#!" class="fw-bold text-body"><u>Login here</u></a></p>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</html>