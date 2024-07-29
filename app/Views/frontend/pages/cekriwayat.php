<!DOCTYPE html>
<?= $this->include('frontend/layouts/header') ?>
<html lang="en-US" dir="ltr">

<body>
    <!-- SECTION1 -->
    <main class="main" id="top">
        <?= $this->include('frontend/layouts/topnavbar') ?>
        <section id="home">
            <div class="bg-holder bg-size" style="background-image:url(<?= base_url('libraries_frontend/assets/img/gallery/hero-bg.png') ?>);background-position:top center;background-size:cover;">
            </div>
            <div class="container-xl">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Personal Prevention Check Up</h1>
                    </div>
                    <?php if ($bahasa === 'Indonesia') { ?>
                        <div class="col-lg-12">
                            <b>Ingin konsultasi lebih lanjut?,</b> Yuk Gabung Whatsapp Group Pendampingan PS90 Hari! <a href="https://chat.whatsapp.com/CSN57aUvIRC2b9LaF3ORcV"><button class="btn btn-sm btn-primary rounded-pill" target="_blank">Klik Di sini</button></a>
                        </div>
                    <?php } else { ?>
                        <div class="col-12">
                            <b>Want further consultation?,</b>Come join the "PS90 Days" Assistance Whatsapp Group! <a href="https://chat.whatsapp.com/CSN57aUvIRC2b9LaF3ORcV"><button class="btn btn-sm btn-primary rounded-pill" target="_blank">Click Here</button></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- SECTION2 -->
        <br>
        <div class="container-xl">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Content Start -->
                    <div class="card">
                        <div class="dt-responsive table-responsive">
                            <!-- id dibawah bisa diganti => simpletable -->
                            <table id="alt-pg-dt" class="table table-primary table-hover">
                                <thead>
                                    <tr>
                                        <?php if ($bahasa === 'Indonesia') { ?>
                                            <th style="max-width:5%; text-align: center;">No.</th>
                                            <th style="max-width:10%; text-align: center;">Aksi</th>
                                            <th style="max-width:25%; text-align: center;">Nama</th>
                                            <th style="max-width:20%; text-align: center;">Kontak</th>
                                            <th style="max-width:10%; text-align: center;">Jenis Kelamin</th>
                                            <th style="max-width:10%; text-align: center;">Umur (Tahun)</th>
                                            <th style="max-width:10%; text-align: center;">Tanggal</th>
                                        <?php } else { ?>
                                            <th style="max-width:5%; text-align: center;">No.</th>
                                            <th style="max-width:10%; text-align: center;">Action</th>
                                            <th style="max-width:25%; text-align: center;">Name</th>
                                            <th style="max-width:20%; text-align: center;">Contact</th>
                                            <th style="max-width:10%; text-align: center;">Gender</th>
                                            <th style="max-width:10%; text-align: center;">Age</th>
                                            <th style="max-width:10%; text-align: center;">Date</th>
                                        <?php } ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1 ?>
                                    <?php foreach ($ppcu as $item) : ?>
                                        <?php $id = $item['id'] ?>
                                        <tr style="text-align: center;">
                                            <td><?= $no++ ?></td>
                                            <td>
                                                <form action="<?= base_url('klien/cekhasil'); ?>" method="post" class="Riwayatklien">
                                                    <input name="bahasa" type="text" value="<?= $bahasa ?>" hidden>
                                                    <input class="form-livedoc-control" name="slug" type="text" value="<?= $item['slug'] ?>" hidden>
                                                    <input class="form-livedoc-control" name="nama" type="text" value="<?= $item['nama'] ?>" hidden>
                                                    <input class="form-livedoc-control" name="telepon" type="text" value="<?= $item['telepon'] ?>" hidden>
                                                    <button class="btn btn-sm btn-primary rounded-pill" type="submit">
                                                        Detail
                                                    </button>
                                                </form>
                                            </td>
                                            <td><?= $item['nama'] ?></td>
                                            <td><?= $item['telepon'] ?></td>
                                            <td><?= $item['jk'] ?></td>
                                            <td><?= $item['umur'] ?></td>
                                            <td><?= $item['datetime'] ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                            <p style="text-align: center;">
                                <?php if ($bahasa === 'Indonesia') { ?>
                                    <a href="/"><button type="button" class="btn btn-danger">Kembali</button></a>
                                <?php } else { ?>
                                    <a href="/"><button type="button" class="btn btn-danger">Kembali</button></a>
                                <?php } ?>

                            </p>
                        </div>
                    </div>
                    <!-- Content end -->
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <?= $this->include('frontend/layouts/footer') ?>
    </main>
</body>

</html>
<!-- SCRIPT AJAX -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: '<?= base_url('klien/RiwayatKlien') ?>',
            dataType: 'json',
            success: function(response) {
                $("#result").html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });

        function dataKlien() {
            $(".Riwayatklien").submit(function(e) {
                var formObj = $(this);
                var formURL = formObj.attr("action");
                var formData = new FormData(this);
                $.ajax({
                    url: formURL,
                    type: 'POST',
                    data: formData,
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        $("#result").html(response.data);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {}
                });
                e.preventDefault(); //Prevent Default action.
            });
        }

        $(document).ready(function() {
            dataKlien();
        });


        window.setTimeout(function() {
            $(".flashAjax").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 5000);
    });
</script>
<?= $this->include('frontend/layouts/javascript') ?>
</body>

</html>