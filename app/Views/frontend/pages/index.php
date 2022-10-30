<!DOCTYPE html>
<html lang="en">
<?= $this->include('frontend/layouts/header') ?>

<body>
    <?= $this->include('frontend/layouts/top_navbar') ?>
    <?php error_reporting(0); ?>

    <!-- <main id="main"> -->
    <main id="main">
        <div class="bgmain" style="background:url(libraries_frontend/assets/img/bg2.png) no-repeat;background-size: contain;background-position-x: center;background-position-y: center; margin: 75px;">
            <!-- ======= Hero Slider Section ======= -->
            <section id="hero-slider" class="hero-slider">
                <div class="container-md" data-aos="fade-in">
                    <div class="row-">
                        <div class="col-12">
                            <div class="swiper sliderFeaturedPosts rounded-4">
                                <div class="swiper-wrapper">
                                    <?php foreach ($trending as $trend) : ?>
                                        <div class="swiper-slide">
                                            <a href="berita-detail/<?= $trend['slug'] ?>" class="img-bg d-flex align-items-end rounded-4 slider1" style="background-image: url('content/gambar/<?= $trend['gambar'] ?>');">
                                                <!-- background-size: auto|length|cover|contain|initial|inherit; -->
                                                <div class=" img-bg-inner">
                                                    <h2><?= $trend['judul'] ?></h2>
                                                    <p><?= substr($trend['isi'], 0, 100) ?></p>
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                                <div class="custom-swiper-button-next">
                                    <span class="bi-chevron-right"></span>
                                </div>
                                <div class="custom-swiper-button-prev">
                                    <span class="bi-chevron-left"></span>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End Hero Slider Section -->
            <!-- <div style="background-image: url('libraries_frontend/assets/img/bg.png');background-size: contain;background-repeat: no-repeat; "> -->
            <!-- ======= Post Grid Section ======= -->
            <section id="posts" class="posts">
                <div class="container" data-aos="fade-up">
                    <div class="row g-5">
                        <div class="col-lg-5">
                            <div class="post-entry-1 lg" style="text-align:justify ;">

                                <?php foreach ($hot as $hot) : ?>
                                    <a href="berita-detail/<?= $hot['slug'] ?>"><img src="content/gambar/<?= $hot['gambar'] ?>" style="height:300px;width:100%;" class="img-fluid rounded-2 slider2">
                                        <div class="top-left">Hot</div>
                                    </a>
                                    <h3><a href="single-post.html"><?= $hot['judul'] ?></a></h3>
                                    <p class="mb-4 d-block"><?= substr($hot['isi'], 0, 375) ?></p>
                                <?php endforeach ?>

                                <!-- ======= Iklan Slider Section ======= -->
                                <section id="hero-slider" class="hero-slider">
                                    <div class="container-md" data-aos="fade-in">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="swiper sliderFeaturedPosts">
                                                    <div class="swiper-wrapper">
                                                        <?php foreach ($iklan as $item) : ?>
                                                            <div class="swiper-slide ">
                                                                <div class="img-bg-inner">
                                                                    <img src="content/iklan/<?= $item['file'] ?>" class="slider1" style="height:200px;width:100%; border-radius: 4%;">
                                                                </div>
                                                                </a>
                                                            </div>
                                                        <?php endforeach ?>
                                                    </div>
                                                    <div class="custom-swiper-button-next">
                                                        <span class="bi-chevron-right"></span>
                                                    </div>
                                                    <div class="custom-swiper-button-prev">
                                                        <span class="bi-chevron-left"></span>
                                                    </div>
                                                    <div class="swiper-pagination"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section><!-- End Hero Slider Section -->

                                <div class="top-left">Hot</div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="row g-5" style="text-align:center ;">
                                <div class="col-lg-4 border-start custom-border">
                                    <?php foreach ($berita_3 as $berita3) : ?>
                                        <div class="post-entry-1">
                                            <a href="berita-detail/<?= $berita3['slug'] ?>"><img src="content/gambar/<?= $berita3['gambar'] ?>" class="rounded-1" style="max-width:175px ;height:150px"></a>
                                            <div class="post-meta"><span class="date"><?= $berita3['tingkat'] ?></span>&bullet;<span class="date"><?= $berita3['kategori'] ?></span>&bullet;<span><?= $berita3['tanggal'] ?></span></div>
                                            <h2><a href="berita-detail/<?= $berita3['slug'] ?>"><?= $berita3['judul'] ?></a></h2>
                                        </div>
                                    <?php endforeach ?>
                                    <?php foreach ($berita_1 as $berita1) : ?>
                                        <div class="post-entry-1">
                                            <a href="berita-detail/<?= $berita1['slug'] ?>">
                                                <img src="content/gambar/<?= $berita1['gambar'] ?>" class="rounded-1" style="max-width:175px ;height:150px">
                                            </a>
                                            <div class="post-meta"><span class="date"><?= $berita1['tingkat'] ?></span>&bullet;<span class="date"><?= $berita1['kategori'] ?></span>&bullet;<span><?= $berita1['tanggal'] ?></span></div>
                                            <h2><a href="berita-detail/<?= $berita1['slug'] ?>"><?= $berita1['judul'] ?></a></h2>
                                        </div>
                                    <?php endforeach ?>
                                    <?php foreach ($berita_5 as $berita5) : ?>
                                        <div class="post-entry-1">
                                            <a href="berita-detail/<?= $berita5['slug'] ?>"><img src="content/gambar/<?= $berita5['gambar'] ?>" class="rounded-1" style="max-width:175px ;height:150px"></a>
                                            <div class="post-meta"><span class="date"><?= $berita5['tingkat'] ?></span>&bullet;<span class="date"><?= $berita5['kategori'] ?></span>&bullet;<span><?= $berita5['tanggal'] ?></span></div>
                                            <h2><a href="berita-detail/<?= $berita5['slug'] ?>"><?= $berita5['judul'] ?></a></h2>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                                <div class="col-lg-4 border-start custom-border">
                                    <?php foreach ($berita_2 as $berita2) : ?>
                                        <div class="post-entry-1">
                                            <a href="berita-detail/<?= $berita2['slug'] ?>"><img src="content/gambar/<?= $berita2['gambar'] ?>" class="rounded-1" style="max-width:175px ;height:150px"></a>
                                            <div class="post-meta"><span class="date"><?= $berita2['tingkat'] ?></span>&bullet;<span class="date"><?= $berita2['kategori'] ?></span>&bullet;<span><?= $berita2['tanggal'] ?></span></div>
                                            <h2><a href="berita-detail/<?= $berita2['slug'] ?>"><?= $berita2['judul'] ?></a></h2>
                                        </div>
                                    <?php endforeach ?>
                                    <?php foreach ($berita_6 as $berita6) : ?>
                                        <div class="post-entry-1">
                                            <a href="berita-detail/<?= $berita6['slug'] ?>"><img src="content/gambar/<?= $berita6['gambar'] ?>" class="rounded-1" style="max-width:175px ;height:150px"></a>
                                            <div class="post-meta"><span class="date"><?= $berita6['tingkat'] ?></span>&bullet;<span class="date"><?= $berita6['kategori'] ?></span>&bullet;<span><?= $berita6['tanggal'] ?></span></div>
                                            <h2><a href="berita-detail/<?= $berita6['slug'] ?>"><?= $berita6['judul'] ?></a></h2>
                                        </div>
                                    <?php endforeach ?>
                                    <?php foreach ($berita_4 as $berita4) : ?>
                                        <div class="post-entry-1">
                                            <a href="berita-detail/<?= $berita4['slug'] ?>"><img src="content/gambar/<?= $berita4['gambar'] ?>" class="rounded-1" style="max-width:175px ;height:150px"></a>
                                            <div class="post-meta"><span class="date"><?= $berita4['tingkat'] ?></span>&bullet;<span class="date"><?= $berita4['kategori'] ?></span>&bullet;<span><?= $berita4['tanggal'] ?></span></div>
                                            <h2><a href="berita-detail/<?= $berita4['slug'] ?>"><?= $berita4['judul'] ?></a></h2>
                                        </div>
                                    <?php endforeach ?>
                                </div>

                                <!-- Trending Section -->
                                <div class="col-lg-4">

                                    <!-- ======= Sidebar ======= -->
                                    <div class="aside-block">

                                        <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true"><img src="libraries_frontend/assets/img/trending.png"></button>
                                            </li>
                                        </ul>
                                        <!-- Trending -->
                                        <?php foreach ($trending as $trend) : ?>
                                            <div class="post-entry-1 border-bottom" style="text-align:left ;">
                                                <div class="post-meta"><span class="date"><?= $trend['tingkat'] ?></span> &bullet; <span class="date"><?= $trend['nama_kategori'] ?></span> &bullet;<span><?= $trend['tanggal'] ?></span></div>
                                                <h2 class="mb-2"><a href="berita-detail/<?= $trend['slug'] ?>"><?= $trend['judul'] ?></a></h2>
                                                <div class="post-meta-heading"><span class="date">dilihat : <?= $trend['dilihat'] ?></span></div>
                                            </div>
                                        <?php endforeach ?>
                                        <!-- End Trending -->
                                        <!-- ======= Iklan Slider Section ======= -->
                                        <section id="hero-slider" class="hero-slider">
                                            <div class="container-md" data-aos="fade-in">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="swiper sliderFeaturedPosts rounded-4">
                                                            <div class="swiper-wrapper">
                                                                <?php foreach ($iklan as $item) : ?>
                                                                    <div class="swiper-slide ">
                                                                        <div class="img-bg-inner">
                                                                            <img src="content/iklan/<?= $item['file'] ?>" style="height:115px;width:100%;">
                                                                        </div>
                                                                        </a>
                                                                    </div>
                                                                <?php endforeach ?>
                                                            </div>
                                                            <div class="custom-swiper-button-next">
                                                                <span class="bi-chevron-right"></span>
                                                            </div>
                                                            <div class="custom-swiper-button-prev">
                                                                <span class="bi-chevron-left"></span>
                                                            </div>
                                                            <div class="swiper-pagination"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section><!-- End Iklan Slider Section -->
                                        <!-- Kategori -->
                                        <div class="aside-block" style="text-align:left ;">
                                            <h3 class="aside-title">Kategori</h3>
                                            <ul class=" footer-links list-unstyled">
                                                <?php foreach ($kategori as $item) : ?>
                                                    <li><a href="berita-kategoriall/<?= $item['kategori'] ?>"><i class="bi bi-chevron-right"></i><?= $item['kategori'] ?></a></li>
                                                <?php endforeach ?>
                                            </ul>
                                        </div>
                                        <!-- Kategori -->
                                    </div> <!-- End Sidebar Section -->
                                </div>
                            </div>
                        </div> <!-- End .row -->
                    </div>
            </section> <!-- End Post Grid Section -->
            <!-- </div> -->
        </div>
    </main><!-- End #main -->
    <?= $this->include('frontend/layouts/footer') ?>
    <?= $this->include('frontend/layouts/javascript') ?>
</body>

</html>