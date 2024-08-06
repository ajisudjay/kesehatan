<!DOCTYPE html>
<?= $this->include('frontend/layouts/header') ?>
<html lang="en-US" dir="ltr">

<body>
    <!-- SECTION1 -->
    <main class="main" id="top">
        <section id="home">
            <div class="bg-holder bg-size" style="background-image:url(<?= base_url('libraries_frontend/assets/img/gallery/hero-bg.png') ?>);background-position:top center;background-size:cover;">
            </div>
            <div class="container-xl" style="background-image:url(<?= base_url('libraries_frontend/assets/img/gallery/bghand.png') ?>);background-position:top center;background-repeat: no-repeat;">
                <div class="col-lg-12">
                    <div class="row" align="center">
                        <div class="col-lg-4">
                            &nbsp;
                        </div>
                        <div class="col-lg-2">
                            <form action="/pages/bahasa" method="post">
                                <input type="text" name="bahasa" value="Indonesia" hidden>
                                <button type="submit" class="btn-primary form-livedoc-control">Indonesian</button>
                            </form>
                        </div>
                        <div class="col-lg-2">
                            <form action="/pages/bahasa" method="post">
                                <input type="text" name="bahasa" value="English" hidden>
                                <button type="submit" class="btn-primary form-livedoc-control">English</button>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            &nbsp;
                        </div>
                    </div>
                </div>
                <?php if ($bahasa === 'Indonesia') { ?>
                    <h1 align="center">Personal Prevention Check Up</h1>
                    <br>
                    <h1 align="center">MENCEGAH LEBIH BAIK</h1>
                    <br>
                    <br>
                    <br>
                    <h3 align="center">YUK !!! <br> MENCEGAH DENGAN CHECK UP PENCEGAHAN</h3>
                    <h1 style="color:red;text-align: center;">GRATIS</h1>
                    <div class="col-lg-12" align="center">
                        <a class="btn btn-sm btn-primary rounded-pill" href="#checkup" role="button">Periksa Sekarang</a>
                    </div>
                    <br>
                    <br>
                <?php } else { ?>
                    <h1 align="center">Personal Prevention Check Up</h1>
                    <br>
                    <h1 align="center">Prevention is Better</h1>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3 align="center">Lets !!! <br> Personal Prevention Check Up</h3>
                    <h1 style="color:red;text-align: center;">FREE</h1>
                    <div class="col-lg-12" align="center">
                        <a class="btn btn-sm btn-primary rounded-pill" href="#checkup" role="button">Check Up</a>
                    </div>
                    <br>
                    <br>
                <?php } ?>

                <form action="<?= base_url('klien/cek'); ?>" method="post" class="Riwayatklien">
                    <div class="row">
                        <?php if ($bahasa === 'Indonesia') { ?>
                            <div class="col-lg-3">
                                <h5>Cek riwayat PPCU disini ?</h5>
                            </div>
                            <div class="col-lg-3">
                                <input name="bahasa" type="text" value="<?= $bahasa ?>" hidden>
                                <input class="form-livedoc-control" name="nama" type="text" placeholder="Nama" required>
                            </div>
                            <div class="col-lg-3">
                                <input class="form-livedoc-control" name="telepon" type="text" placeholder="No. HP/WA" required>
                            </div>
                            <div class="col-lg-3">
                                <button class="btn btn-sm btn-primary rounded-pill" type="submit">Cek di sini</button>
                            </div>
                        <?php } else { ?>
                            <div class="col-lg-3">
                                <h5>Check PPCU history here ?</h5>
                            </div>
                            <div class="col-lg-3">
                                <input name="bahasa" type="text" value="<?= $bahasa ?>" hidden>
                                <input class="form-livedoc-control" name="nama" type="text" placeholder="Name" required>
                            </div>
                            <div class="col-lg-3">
                                <input class="form-livedoc-control" name="telepon" type="text" placeholder="Contact/WA" required>
                            </div>
                            <div class="col-lg-3">
                                <button class="btn btn-sm btn-primary rounded-pill" type="submit">Check here</button>
                            </div>
                        <?php } ?>

                    </div>
                </form>
            </div>
            <br>
            <br>
            <br>
        </section>
        <!-- SECTION2 -->
        <section id="checkup" style="padding-top:1rem;
    padding-bottom: 2.5rem;">
            <div class="container-xl">
                <div class="row">
                    <!--/.bg-holder-->
                    <div class="col-lg-12">
                        <form action="<?= base_url('Checkup/baru'); ?>" method="post" class="baru">
                            <h3 align="center">Personal Prevention Check Up</h3>
                            <div class="row">
                                <div class="col-md-5">
                                    <input name="bahasa" type="text" value="<?= $bahasa ?>" hidden>
                                    <input class="form-control form-livedoc-control" name="nama" type="text" placeholder="Nama / Name" required>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control form-livedoc-control" name="telepon" type="text" placeholder="No. HP(WA) / Contact" required>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" name="jk" required>
                                        <option selected="selected" value="">Jenis Kelamin / Gender</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control form-livedoc-control" name="umur" type="number" placeholder="Umur / Age" min="1" required>
                                </div>
                            </div>
                            <?= $this->include('frontend/pages/kuesioner') ?>

                            <div class="col-12">
                                <div class="d-grid">
                                    <p align="center"><button class="btn btn-primary rounded-pill" type="submit">Check Up</button></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?= $this->include('frontend/layouts/footer') ?>
    </main>
</body>

</html>
<!-- SCRIPT AJAX -->
</body>

</html>