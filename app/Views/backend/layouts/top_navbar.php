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
            <a href="/superadmin">
                <img class="img-fluid" src="libraries_backend\assets\images\logo-small.png" alt="Theme-Logo">
            </a>
            <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>

        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()">
                        <i class="feather icon-maximize full-screen"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
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
                                <a href="<?= base_url('/profil'); ?>">
                                    <i class="feather icon-user"></i> Ganti Profil
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