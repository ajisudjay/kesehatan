<!DOCTYPE html>
<html lang="en">
<?= $this->include('frontend/layouts/header') ?>

<body>
    <?= $this->include('frontend/layouts/top_navbar') ?>


    <main id="main">
        <section>
            <div class="container">
                <div class="row">

                    <div class="col-md-9" data-aos="fade-up">
                        <h3 class="category-title">Tingkat: <?= $tingkat ?></h3>
                        <?php foreach ($berita_tingkat as $item) : ?>
                            <div class="d-md-flex post-entry-2 half">
                                <a href="single-post.html" class="me-4 thumbnail">
                                    <img src="<?= base_url('content/gambar/' . $item['gambar']); ?>" class="img-fluid" style="height:300px;width:300px;">
                                </a>
                                <div>
                                    <div class=" post-meta"><span class="date"><?= $item['tingkat'] ?></span>&bullet;<span class="date"><?= $item['kategori'] ?></span>&bullet;<span><?= $item['tanggal'] ?></span>
                                    </div>
                                    <h3><a href="single-post.html"><?= $item['judul'] ?></a></h3>
                                    <p><?= substr($item['isi'], 0, 100) ?></p>
                                </div>
                            </div>
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
                                            <div class="post-meta"><span class="date"><?= $trend['tingkat'] ?></span> &bullet; <span class="date"><?= $trend['nama_kategori'] ?></span>&bullet; <span><?= $trend['tanggal'] ?></span></div>
                                            <h2 class="mb-2"><a href="#"><?= $trend['judul'] ?></a></h2>
                                            <span class="author mb-3 d-block">dilihat : <?= $trend['dilihat'] ?></span>
                                        </div>
                                    <?php endforeach ?>
                                </div> <!-- End Trending -->
                            </div>
                        </div>
                        <!-- Kategori -->
                        <div class="aside-block" style="text-align:left ;">
                            <h3 class="aside-title">Kategori</h3>
                            <ul class=" footer-links list-unstyled">
                                <?php foreach ($kategori as $item) : ?>
                                    <li><a href="category.html"><i class="bi bi-chevron-right"></i><?= $item['kategori'] ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <!-- Kategori -->

                    </div>
                </div>
        </section>
    </main><!-- End #main -->
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
            <div class="container">

                <div class="row g-5">
                    <div class="col-lg-6">
                        <h3 class="footer-heading">Tentang Divisi.id</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
                        <p><a href="about.html" class="footer-heading">Lebih Lanjut . . . .</a></p>
                    </div>
                    <div class="col-6 col-lg-2">
                        <h3 class="footer-heading">Kategori</h3>
                        <ul class="footer-links list-unstyled">
                            <?php foreach ($kategori as $item) : ?>
                                <li><a href="category.html"><i class="bi bi-chevron-right"></i><?= $item['kategori'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>

                    <div class="col-lg-4">
                        <h3 class="footer-heading">Terbaru</h3>

                        <ul class="footer-links footer-blog-entry list-unstyled">
                            <?php foreach ($terbaru as $terbaru) : ?>
                                <li>
                                    <a href="single-post.html" class="d-flex align-items-center">
                                        <div>
                                            <div class="post-meta d-block"><span class="date" style="font-size: 8px;"><?= $terbaru['tingkat'] ?></span> <span class=" mx-1">&bullet;</span> <span style="font-size: 8px;"><?= $terbaru['nama_kategori'] ?></span><span class="mx-1">&bullet;</span><span style="font-size: 8px;"><?= $terbaru['tanggal'] ?></span></div>
                                            <span><?= $terbaru['judul'] ?></span>
                                        </div>
                                    </a>
                                </li>

                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->include('frontend/layouts/footer') ?>



        <?= $this->include('frontend/layouts/javascript') ?>


</body>

</html>