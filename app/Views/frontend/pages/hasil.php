<!DOCTYPE html>
<?= $this->include('frontend/layouts/header') ?>
<html lang="en-US" dir="ltr">

<body>
    <main class="main" id="top">
        <?= $this->include('frontend/layouts/topnavbar') ?>
        <!-- SECTION2 -->
        <section class="pb-0" id="checkup">
            <div class="container-sm">
                <div class="row">
                    <div class="bg-holder bg-size" style="background-image:url(<?= base_url('assets/img/gallery/dot-bg.png') ?>);background-position:bottom right;background-size:auto;">
                    </div>
                    <!--/.bg-holder-->
                    <div class="col-lg-12 z-index-2">
                        <b>Ingin konsultasi lebih lanjut?,</b> <br> Yuk Gabung Whatsapp Group Pendampingan PS90 Hari! <a href="https://chat.whatsapp.com/CSN57aUvIRC2b9LaF3ORcV"><button class="btn btn-sm btn-primary rounded-pill">Klik Di sini</button></a>
                        <?= $this->include('frontend/pages/kuesioner_hasil') ?>
                        <div class="col-12">
                            <div class="d-grid">
                                <p align="center"><a href="/"><button class="btn btn-primary rounded-pill">Kembali</button></a></p>
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