<!DOCTYPE html>
<?= $this->include('frontend/layouts/header') ?>
<html lang="en-US" dir="ltr">

<body>
    <main class="main" id="top">
        <!-- SECTION2 -->
        <section class="pb-0" id="checkup">
            <div class="container-sm">
                <div class="row">
                    <!--/.bg-holder-->
                    <div class="col-lg-12">
                        <?php if ($bahasa === 'Indonesia') { ?>
                            <b>Ingin konsultasi lebih lanjut?,</b> Yuk Gabung Whatsapp Group Pendampingan PS90 Hari! <a href="https://chat.whatsapp.com/CSN57aUvIRC2b9LaF3ORcV"><button class="btn btn-sm btn-primary rounded-pill">Klik Di sini</button></a>
                            <?= $this->include('frontend/pages/kuesioner_hasil') ?>
                            <div class="col-12">
                                <div class="d-grid">
                                    <p align="center"><a href="/"><button class="btn btn-primary rounded-pill">Kembali</button></a></p>
                                </div>
                            </div>
                        <?php } else { ?>
                            <b>Want further consultation?,</b>Come join the "PS90 Days" Assistance Whatsapp Group! <a href="https://chat.whatsapp.com/CSN57aUvIRC2b9LaF3ORcV"><button class="btn btn-sm btn-primary rounded-pill">Click Here</button></a>
                            <?= $this->include('frontend/pages/kuesioner_hasil') ?>
                            <div class="col-12">
                                <div class="d-grid">
                                    <p align="center"><a href="/"><button class="btn btn-primary rounded-pill">Back</button></a></p>
                                </div>
                            </div>
                        <?php } ?>
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