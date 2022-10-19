<!DOCTYPE html>
<html lang="en">
<?= $this->include('frontend/layouts/header') ?>

<body>
    <?= $this->include('frontend/layouts/top_navbar') ?>


    <main id="main">

        <section class="single-post-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 post-content" data-aos="fade-up">
                        <!-- ======= Single Post Content ======= -->
                        <?php foreach ($berita as $item) : ?>
                            <div class="single-post">
                                <div class="post-metaheader"><span class="date"><?= $item['tingkat'] ?></span> <span class="mx-1">&bullet;</span> <span><?= $item['nama_kategori'] ?></span><span class="mx-1">&bullet;</span> <span><?= $item['tanggal'] ?></span></div>
                                <h1 class="mb-5"><?= $item['judul'] ?></h1>

                                <figure class="my-8">
                                    <img src="<?= base_url('content/gambar/' . $item['gambar']); ?>" class="rounded-1" style="max-width:100% ;height:150px;text-align: center;">
                                </figure>
                                <?php
                                if ($setengah > 300) {
                                    $bagian_pertama = substr($item['isi'], 0, $setengah);
                                    $bagian_kedua = substr($item['isi'], $lanjut);
                                } else {
                                    $bagian_pertama = $item['isi'];
                                    $bagian_kedua = '';
                                }
                                ?>
                                <p><?= $bagian_pertama ?></p>
                                <figure class="my-4">
                                    <!-- ======= Iklan Slider Section ======= -->
                                    <section id="hero-slider" class="hero-slider">
                                        <div class="swiper sliderFeaturedPosts">
                                            <div class="swiper-wrapper">
                                                <?php foreach ($iklan as $item) : ?>
                                                    <div class="swiper-slide ">
                                                        <div class="img-bg-inner">
                                                            <img src="<?= base_url('content/iklan/' . $item['file']) ?>" style="height:200px;width:100%; border-radius: 4%;">
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
                                    </section><!-- End Hero Slider Section -->
                                </figure>
                                <p><?= $bagian_kedua ?></p>
                            </div><!-- End Single Post Content -->
                        <?php endforeach ?>
                    </div>
                    <div class="col-md-3">
                        <!-- ======= Sidebar ======= -->
                        <div class="aside-block">

                            <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true"><img src="<?= base_url('libraries_frontend/assets/img/trending.png') ?>"></button>
                                </li>
                            </ul>

                            <div class="tab-content" id="pills-tabContent">

                                <!-- Trending -->
                                <div class="tab-pane fade show active" id="pills-popular" role="tabpanel" aria-labelledby="pills-popular-tab">
                                    <?php foreach ($trending as $trend) : ?>
                                        <div class="post-entry-1 border-bottom">
                                            <div class="post-meta"><span class="date"><?= $trend['tingkat'] ?></span> &bullet; <span class="date"><?= $trend['nama_kategori'] ?></span> <br><span><?= $trend['tanggal'] ?></span></div>
                                            <h2 class="mb-2"><a href="#"><?= $trend['judul'] ?></a></h2>
                                            <span class="author mb-3 d-block">dilihat : <?= $trend['dilihat'] ?></span>
                                        </div>
                                    <?php endforeach ?>
                                </div> <!-- End Trending -->
                            </div>
                        </div>

                        <div class="aside-block">
                            <h3 class="aside-title">Video</h3>
                            <div class="video-post">
                                <a href="https://www.youtube.com/watch?v=AiFfDjmd0jU" class="glightbox link-video">
                                    <span class="bi-play-fill"></span>
                                    <img src="<?= base_url() ?>/libraries_frontend/assets/img/post-landscape-5.jpg" alt="" class="img-fluid">
                                </a>
                            </div>
                        </div><!-- End Video -->

                        <div class="aside-block">
                            <h3 class="aside-title">Categories</h3>
                            <ul class="aside-links list-unstyled">
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li>
                            </ul>
                        </div><!-- End Categories -->

                        <div class="aside-block">
                            <h3 class="aside-title">Tags</h3>
                            <ul class="aside-tags list-unstyled">
                                <li><a href="category.html">Business</a></li>
                                <li><a href="category.html">Culture</a></li>
                                <li><a href="category.html">Sport</a></li>
                                <li><a href="category.html">Food</a></li>
                                <li><a href="category.html">Politics</a></li>
                                <li><a href="category.html">Celebrity</a></li>
                                <li><a href="category.html">Startups</a></li>
                                <li><a href="category.html">Travel</a></li>
                            </ul>
                        </div><!-- End Tags -->

                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->





    <?= $this->include('frontend/layouts/footer') ?>
    <?= $this->include('frontend/layouts/javascript') ?>


</body>

</html>