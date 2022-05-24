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
                    <img src="http://localhost/rocket_chicken/login/images/bg1.jpg" alt="Image" width="600px">
                </div>
                <div class="col-md-6 contents">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="mb-4">
                                <?= $this->session->flashdata('pesan'); ?>
                                <center>
                                    <h1><strong><?php echo get_store_name(); ?></h1>
                                </center>
                                <br><br>
                                <div class=" w3l-login-form">
                                    <h2>Login Akun</h2>
                                    <?php if ($flash_message) : ?>
                                        <div class="flash-message">
                                            <?php echo $flash_message; ?>
                                        </div>
                                    <?php endif; ?>

                                    <?php if ($redirection) : ?>
                                        <div class="flash-message">
                                            Silahkan login untuk melanjutkan...
                                        </div>
                                    <?php endif; ?>

                                    <?php echo form_open('auth/login/do_login'); ?>

                                    <div class=" w3l-form-group">
                                        <label>Username:</label>
                                        <div class="group">
                                            <i class="fas fa-user"></i>
                                            <input type="text" name="username" value="<?php echo set_value('username', $old_username); ?>" class="form-control" placeholder="Username" minlength="4" maxlength="16" required>
                                        </div>
                                        <?php echo form_error('username'); ?>
                                    </div>
                                    <div class=" w3l-form-group">
                                        <label>Password:</label>
                                        <div class="group">
                                            <i class="fas fa-unlock"></i>
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        </div>
                                        <?php echo form_error('password'); ?>
                                    </div>
                                    <div class="forgot">
                                        <!-- <?php echo anchor('auth/forget-password', 'Lupa password?'); ?> -->
                                        <p><input type="checkbox" name="remember_me" value="1">Ingat saya</p>
                                    </div>
                                    <input type="submit" value="Login" class="btn text-white btn-block btn-primary">
                                    <?php echo form_close(); ?>
                                </div>

                            </div>
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
        <p class="copyright-agileinfo"> copyright &copy; 2022 <br> kembali ke beranda klik -><?php echo anchor(base_url(), get_store_name()); ?></p>
    </center>
</footer>

</html>