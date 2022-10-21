<!DOCTYPE html>
<html lang="en">
<?= $this->include('backend/layouts/header') ?>

<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <?= $this->include('backend/layouts/top_navbar') ?>
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="/superadmin">
                            <img class="img-fluid" src="libraries_backend\assets\images\logo.png" alt="Theme-Logo">
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-pink"><?= count($berita_belum_publish) ?></span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Pemberitahuan</h6>
                                            <label class="label label-danger">Berita Baru</label>
                                        </li>
                                        <?php foreach ($berita_belum_publish as $item) : ?>
                                            <li>
                                                <div class="media">
                                                    <a href="/berita">
                                                        <div class="media-body">
                                                            <h5 class="notification-user"><?= $item['judul'] ?></h5>
                                                            <p class="notification-msg"><?= substr($item['isi'], 0, 50) ?></p>
                                                            <span class="notification-time"><?= $item['tingkat'] ?>&bullet;<?= $item['kategori'] ?></span>
                                                        </div>
                                                    </a>
                                                </div>
                                            </li>
                                        <?php endforeach ?>

                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="<?= base_url('/'); ?>" target="_blank">
                                    <i class="feather icon-eye"></i>
                                </a>
                            </li>

                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <span><?= $admin ?></span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="user-profile.htm">
                                                <i class="feather icon-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('auth/logout'); ?>">
                                                <i class="feather icon-log-out"></i> Logout
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?= $this->include('backend/layouts/side_navbar/superadmin') ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>DIVISI.ID</h4>
                                                        <span>Detail Inovatif dan Berintegritas</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                    <ul class="breadcrumb-title">
                                                        <li class="breadcrumb-item">
                                                            <a href="index-1.htm"> <i class="feather icon-home"></i> </a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!"><?= $top_header ?></a></li>
                                                        <li class="breadcrumb-item"><a href="#!"><?= $header ?></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Content Start -->
                                                <div class="card">
                                                    <div class="card-header" align="center">
                                                        <br><br><br><br>
                                                        <img src="libraries_backend/assets/images/home.png" alt="">
                                                        <br><br><br><br>
                                                    </div>
                                                </div>
                                                <!-- Content End -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
                            <!-- Main-body end -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?= $this->include('backend/layouts/js_index') ?>

</html>