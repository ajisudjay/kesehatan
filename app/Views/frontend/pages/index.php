<!DOCTYPE html>
<html lang="en">
<?= $this->include('frontend/layouts/header') ?>

<body>
    <?= $this->include('frontend/layouts/top_navbar') ?>
    <main id="main">
        <!-- ======= Hero Slider Section ======= -->
        <section id="hero-slider" class="hero-slider">
            <div class="container-md" data-aos="fade-in">
                <div class="row">
                    <div class="col-12">
                        <div class="swiper sliderFeaturedPosts rounded-4">
                            <div class="swiper-wrapper ">
                                <?php foreach ($trending as $trend) : ?>
                                    <div class="swiper-slide ">
                                        <a href="#" class="img-bg d-flex align-items-end rounded-4" style="background-image: url('content/gambar/<?= $trend['gambar'] ?>');">
                                            <div class="img-bg-inner">
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

        <!-- ======= Post Grid Section ======= -->
        <section id="posts" class="posts">
            <div class="container" data-aos="fade-up">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="post-entry-1 lg">

                            <?php foreach ($hot as $hot) : ?>
                                <a href="single-post.html"><img src="content/gambar/<?= $hot['gambar'] ?>" style="height:240px;" class="img-fluid rounded-2">
                                    <div class="top-left">Hot</div>
                                </a>
                                <div class="post-meta"><span class="date"><?= $hot['tingkat'] ?> - <?= $hot['nama_kategori'] ?></span> <span class="mx-1">&bullet;</span> <br><span><?= $hot['tanggal'] ?></span></div>
                                <h2><a href="single-post.html"><?= $hot['judul'] ?></a></h2>
                                <p class="mb-4 d-block"><?= substr($hot['isi'], 0, 375) ?></p>
                            <?php endforeach ?>

                            <!-- ======= Hero Slider Section ======= -->
                            <section id="hero-slider" class="hero-slider">
                                <div class="container-md" data-aos="fade-in">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="swiper sliderFeaturedPosts rounded-4">
                                                <div class="swiper-wrapper ">
                                                    <?php foreach ($iklan as $item) : ?>
                                                        <div class="swiper-slide ">
                                                            <div class="img-bg-inner">
                                                                <img src="content/iklan/<?= $item['file'] ?>" style="height:240px;">
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
                    <div class="col-lg-8">
                        <div class="row g-5">
                            <div class="col-lg-4 border-start custom-border">
                                <?php foreach ($berita1 as $berita1) : ?>
                                    <div class="post-entry-1">
                                        <a href="<?= base_url('detailberita/' . $berita1['slug']); ?>"><img src="content/gambar/<?= $berita1['gambar'] ?>" alt="" class="img-fluid rounded-1"></a>
                                        <div class="post-meta"><span class="date"><?= $berita1['tingkat'] ?></span> &bullet; <span class="date"><?= $berita1['kategori'] ?></span> <br><span><?= $berita1['tanggal'] ?></span></div>
                                        <h2><a href="single-post.html"><?= $berita1['judul'] ?></a></h2>
                                    </div>
                                <?php endforeach ?>
                            </div>
                            <div class="col-lg-4 border-start custom-border">
                                <?php foreach ($berita2 as $berita2) : ?>
                                    <div class="post-entry-1">
                                        <a href="single-post.html"><img src="content/gambar/<?= $berita2['gambar'] ?>" alt="" class="img-fluid rounded-1"></a>
                                        <div class="post-meta"><span class="date"><?= $berita2['tingkat'] ?></span> &bullet; <span class="date"><?= $berita2['kategori'] ?></span> <br><span><?= $berita2['tanggal'] ?></span></div>
                                        <h2><a href="single-post.html"><?= $berita2['judul'] ?></a></h2>
                                    </div>
                                <?php endforeach ?>
                            </div>

                            <!-- Trending Section -->
                            <div class="col-lg-4">

                                <!-- ======= Sidebar ======= -->
                                <div class="aside-block">

                                    <ul class="nav nav-pills custom-tab-nav mb-4" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-popular-tab" data-bs-toggle="pill" data-bs-target="#pills-popular" type="button" role="tab" aria-controls="pills-popular" aria-selected="true">Trending</button>
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
                                        </div> <!-- End Popular -->
                                    </div>

                                </div> <!-- End Trending Section -->
                            </div>
                        </div>

                    </div> <!-- End .row -->
                </div>
        </section> <!-- End Post Grid Section -->



    </main><!-- End #main -->
    <?= $this->include('frontend/layouts/footer') ?>



    <?= $this->include('frontend/layouts/javascript') ?>


</body>

</html>