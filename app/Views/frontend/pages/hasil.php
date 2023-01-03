<!DOCTYPE html>
<?= $this->include('frontend/layouts/header') ?>
<html lang="en-US" dir="ltr">

<body>
    <main class="main" id="top">
        <?= $this->include('frontend/layouts/guest') ?>
        <!-- SECTION2 -->
        <section class="pb-0" id="checkup">
            <div class="container">
                <div class="row">
                    <div class="col-12 py-3">
                        <h1 class="text-center">Personal Prevention Checkup Result</h1>
                    </div>
                </div>
            </div>
            <div class="bg-holder bg-size" style="background-image:url(<?= base_url('assets/img/gallery/about-bg.png') ?>);background-position:top center;background-size:contain;">
            </div>

            <div class="container">
                <div class="row">
                    <div class="bg-holder bg-size" style="background-image:url(<?= base_url('assets/img/gallery/dot-bg.png') ?>);background-position:bottom right;background-size:auto;">
                    </div>
                    <!--/.bg-holder-->
                    <div class="col-lg-12 z-index-2">
                        <?php foreach ($koresponden as $item) : ?>
                            <div class="row">
                                <div class="col-md-5">
                                    <input class="form-control form-livedoc-control" name="nama" type="text" value="<?= $item['nama'] ?>" readonly>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control form-livedoc-control" name="hp" type="text" value="<?= $item['telepon'] ?>" readonly>
                                </div>
                                <div class="col-md-3">
                                    <input class="form-control form-livedoc-control" name="jk" type="text" value="<?= $item['jk'] ?>" readonly>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control form-livedoc-control" name="umur" type="text" value="<?= $item['umur'] ?>" readonly>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <?= $this->include('frontend/pages/kuesioner_hasil') ?>
                        <div class="col-12">
                            <div class="d-grid">
                                <p align="center"><button class="btn btn-primary rounded-pill" type="submit">Check Up</button></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?= $this->include('frontend/layouts/footer') ?>
    </main>
</body>

</html>

<?= $this->include('frontend/layouts/javascript') ?>
</body>

</html>