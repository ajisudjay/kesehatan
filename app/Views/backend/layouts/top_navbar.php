<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <?php
            for ($x = 0; $x <= 10; $x++) {
                echo "<div class='ring'>
                    <div class='frame'></div>
                </div>";
            }
            ?>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">

        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu"></i>
            </a>
            <a href="index-1.htm">
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
                            <span class="badge bg-c-pink">5</span>
                        </div>
                        <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <h6>Pemberitahuan</h6>
                                <label class="label label-danger">Berita Baru</label>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="d-flex align-self-center img-radius" src="libraries_backend\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="notification-user">Judul Berita</h5>
                                        <p class="notification-msg">Isi.</p>
                                        <span class="notification-time">Kategori</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="d-flex align-self-center img-radius" src="libraries_backend\assets\images\avatar-3.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="notification-user">Judul Berita</h5>
                                        <p class="notification-msg">Isi.</p>
                                        <span class="notification-time">Kategori</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="media">
                                    <img class="d-flex align-self-center img-radius" src="libraries_backend\assets\images\avatar-4.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <h5 class="notification-user">Judul Berita</h5>
                                        <p class="notification-msg">Isi.</p>
                                        <span class="notification-time">Kategori</span>
                                    </div>
                                </div>
                            </li>
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
                            <img src="libraries_backend\assets\images\avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                            <span>John Doe</span>
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