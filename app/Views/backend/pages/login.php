<!DOCTYPE html>
<html lang="en">

<?= $this->include('backend/layouts/header') ?>

<body class="fix-menu">
    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form class="md-float-material form-material login-form" action="<?= base_url('auth/index'); ?>" method="post">
                        <?= csrf_field() ?>
                        <div class="text-center">
                            <img src="libraries_backend\assets\images\logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center">Sign In</h3>
                                    </div>
                                </div>
                                <?php if (session()->get('pesanGagal')) { ?>
                                    <div class="alert alert-danger alert-dismissible fade show flash text-center" role="alert">
                                        <strong>Gagal Login !</strong> <?= session()->getFlashdata('pesanGagal') ?>
                                    </div>
                                <?php } ?>
                                <?php if (session()->get('pesanLogout')) { ?>
                                    <div class="alert alert-danger alert-dismissible fade show flash text-center" role="alert">
                                        <strong>Gagal Login !</strong> <?= session()->getFlashdata('pesanLogout') ?>
                                    </div>
                                <?php } ?>
                                <div class="form-group form-primary">
                                    <input type="text" name="username" class="form-control username" required="" placeholder="Username">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="password" name="password" class="form-control password" required="" placeholder="Password">
                                    <span class="form-bar"></span>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary d-">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20 btnLogin">Sign in</button>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-10">
                                        <p class="text-inverse text-left m-b-0">Thank you.</p>
                                        <p class="text-inverse text-left"><a href="/"><b class="f-w-600">Kembali ke Beranda</b></a></p>
                                    </div>
                                    <div class="col-md-2">
                                        <img src="libraries_backend\assets\images\auth\Logo-small-bottom.png" alt="small-logo.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- end of form -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <script>
        $('.login-form').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btnLogin').attr('disable', 'disabled');
                    $('.btnLogin').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btnLogin').removeAttr('disable', 'disabled');
                    $('.btnLogin').html('Login');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.username) {
                            $('.username').addClass('is-invalid');
                            $('.errorusername').html(response.error.username);
                        } else {
                            $('.username').removeClass('is-invalid');
                            $('.errorusername').html('');
                        }

                        if (response.error.password) {
                            $('.password').addClass('is-invalid');
                            $('.errorpassword').html(response.error.password);
                        } else {
                            $('.password').removeClass('is-invalid');
                            $('.errorpassword').html('');
                        }
                    } else {
                        if (response.title == 'gagaluser') {
                            $('.errorgagal_user').html(response.usernamegagal);
                            $('.errorpassword').html('');
                            $('.errorusername').html('');
                        } else {
                            $('.errorgagal_user').html('');
                            $('.errorpassword').html('');
                            $('.errorusername').html('');
                        }

                        if (response.title == 'gagallogin') {
                            $('.errorgagal_login').html(response.usernamelogin);
                            $('.errorpassword').html('');
                            $('.errorusername').html('');
                        } else {
                            $('.errorgagal_login').html('');
                            $('.errorpassword').html('');
                            $('.errorusername').html('');
                        }

                        if (response.title == 'berhasiloperator') {
                            window.location.href = '<?= base_url(''); ?>' + response.urloperator;
                        }
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            })
        })
    </script>
    <?= $this->include('backend/layouts/js_index') ?>
</body>

</html>