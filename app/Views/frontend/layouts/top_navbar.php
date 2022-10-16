  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
      <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

          <a href="index.html" class="logo d-flex align-items-center">
              <!-- Uncomment the line below if you also wish to use an image logo -->
              <!-- <img src="libraries/assets/img/logo.png" alt=""> -->
              <h1>Divisi.id</h1>
          </a>

          <nav id="navbar" class="navbar">
              <ul>
                  <li><a href="index.html">Beranda</a></li>
                  <div class="batas">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>|</strong>
                  </div>
                  <li class="dropdown"><a href="category.html"><span>Kategori</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li class="dropdown"><a href="#"><span>Internasional</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                              <ul>
                                  <?php foreach ($kategori as $item) : ?>
                                      <li><a href="#"><?= $item['kategori'] ?></a></li>
                                  <?php endforeach ?>
                              </ul>
                          </li>
                          <li class="dropdown"><a href="#"><span>Nasional</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                              <ul>
                                  <?php foreach ($kategori as $item) : ?>
                                      <li><a href="#"><?= $item['kategori'] ?></a></li>
                                  <?php endforeach ?>
                              </ul>
                          </li>
                          <li class="dropdown"><a href="#"><span>Kalimantan Timur</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                              <ul>
                                  <?php foreach ($kategori as $item) : ?>
                                      <li><a href="#"><?= $item['kategori'] ?></a></li>
                                  <?php endforeach ?>
                              </ul>
                          </li>
                      </ul>
                  </li>
                  <div class="batas">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>|</strong>
                  </div>
                  <li class="dropdown"><a href="category.html"><span>Tentang Kami</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                      <ul>
                          <li><a href="#">Pedoman Media Siber</a></li>
                          <li><a href="#">Privacy Policy</a></li>
                          <li><a href="#">Kode Etik</a></li>
                          <li><a href="#">Disclaimer</a></li>
                          <li><a href="contact.html">Kontak</a></li>
                      </ul>
                  </li>
              </ul>
          </nav><!-- .navbar -->
          <div class="position-relative">
              <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
              <a href="/login" class="mx-2"><span class="bi bi-door-open"></span></a>
              <i class="bi bi-list mobile-nav-toggle"></i>

              <!-- ======= Search Form ======= -->
              <div class="search-form-wrap js-search-form-wrap">
                  <form action="search-result.html" class="search-form">
                      <span class="icon bi-search"></span>
                      <input type="text" placeholder="Search" class="form-control">
                      <button class="btn js-search-close"><span class="bi-x"></span></button>
                  </form>
              </div><!-- End Search Form -->

          </div>

      </div>

  </header><!-- End Header -->