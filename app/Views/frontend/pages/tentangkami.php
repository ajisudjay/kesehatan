<!DOCTYPE html>
<html lang="en">
<?= $this->include('frontend/layouts/header') ?>

<body>
    <?= $this->include('frontend/layouts/top_navbar') ?>


    <main id="main">
        <section>
            <div class="container" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-12 text-center mb-5">
                        <h1 class="page-title">Tentang Kami</h1>
                    </div>
                </div>

                <div class="row mb-5">
                    <?php foreach ($konfigurasi as $item) : ?>
                        <section id="<?= $item['judul'] ?>">
                            <div class="d-md-flex post-entry-2 half">
                                <div class="ps-md-5 mt-4 mt-md-0">
                                    <h2 class="mb-4 display-4"><?= $item['judul'] ?></h2>
                                    <p><?= $item['isi'] ?></p>
                                </div>
                            </div>
                        </section>
                    <?php endforeach ?>
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