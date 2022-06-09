<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="http://localhost/rocket_chicken/login/fonts/icomoon/style.css">

    <link rel="stylesheet" href="http://localhost/rocket_chicken/login/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="http://localhost/rocket_chicken/login/css/bootstrap.min.css">



</head>

<body>
    <br>
    <br>
    <br>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-2">
                    <img src="http://localhost/rocket_chicken/login/images/4.png" alt="Image" width="600px">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <h1><strong>Buat Akun <?php echo get_store_name(); ?></h1>
                                <hr>
                                <?php echo form_open('auth/register/verify'); ?>
                                <div class="w3l-login-form">
                                    <label>Username: </label>
                                    <div class="group">
                                        <input class="form-control" type="text" placeholder="Username" minlength="4" maxlength="16" name="username" value="<?php echo set_value('username'); ?>" required>
                                    </div>
                                    <?php echo form_error('username'); ?>
                                </div>

                                <div class=" w3l-login-form">
                                    <label>Password: </label>
                                    <div class="group">
                                        <input class="form-control" type="password" placeholder="Password" name="password" value="<?php echo set_value('password'); ?>" required>
                                        <?php echo form_error('password'); ?>
                                    </div>
                                </div>

                                <div class=" w3l-login-form">
                                    <label>Nama Lengkap: </label>
                                    <div class="group">
                                        <input class="form-control" type="text" placeholder="Nama lengkap" name="name" value="<?php echo set_value('name'); ?>" required>
                                        <?php echo form_error('name'); ?>
                                    </div>
                                </div>


                                <div class=" w3l-login-form">
                                    <label>No.hp: </label>
                                    <div class="group">
                                        <input class="form-control" type="text" placeholder="No. HP" minlength="9" maxlength="15" name="phone_number" value="<?php echo set_value('phone_number'); ?>" required>
                                        <?php echo form_error('phone_number'); ?>
                                    </div>
                                </div>


                                <div class=" w3l-login-form">
                                    <label>Email: </label>
                                    <div class="group">
                                        <input class="form-control" minlength="10" type="email" placeholder="Email" name="email" value="<?php echo set_value('email'); ?>" required>
                                        <?php echo form_error('email'); ?>
                                    </div>
                                </div>


                                <div class=" w3l-login-form">
                                    <label>Alamat Lengkap: </label>
                                    <div class="group">
                                        <input class="form-control" type="text" placeholder="Alamat" name="address" value="<?php echo set_value('address'); ?>" required>
                                        <?php echo form_error('address'); ?>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="daftar" class="btn text-white btn-block btn-primary">
                        </div>






                    </div>
                </div>

            </div>

        </div>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>
    </div>
</body>
<footer>
    <center>
        <p class="copyright-agileinfo"> copyright &copy; 2022 <br> Anda sudah punya akun klik -><a href="http://localhost/rocket_chicken/index.php/auth/login">LOGIN</a></p>
    </center>
</footer>

</html>