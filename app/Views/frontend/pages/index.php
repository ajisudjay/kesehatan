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
            <div class="container-xl" style="background-image:url(<?= base_url('libraries_frontend/assets/img/gallery/bghand.png') ?>);background-position:top center;background-repeat: no-repeat;">
                <form action="/pages/bahasa" method="post" align="center">
                    <select class="form-livedoc-control" name="bahasa">
                        <option value="Indonesia">Indonesia</option>
                        <option value="English">English</option>
                    </select>
                    <button type="submit" class="btn-primary form-livedoc-control">Language</button>
                </form>
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
                        <a class="btn btn-sm btn-primary rounded-pill" href="/#checkup" role="button">Periksa Sekarang</a>
                    </div>
                    <br>
                    <br>
                <?php } else { ?>
                    <h1 align="center">Personal Prevention Check Up</h1>
                    <br>
                    <h1 align="center">Prevention Better</h1>
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
                        <div class="col-lg-2">
                            <h5>Sudah pernah PPCU ?</h5>
                        </div>
                        <div class="col-lg-2">
                            <input class="form-livedoc-control" name="nama" type="text" placeholder="Nama" required>
                        </div>
                        <div class="col-lg-2">
                            <input class="form-livedoc-control" name="telepon" type="text" placeholder="No. HP/WA" required>
                        </div>
                        <div class="col-lg-2">
                            <button class="btn btn-sm btn-primary rounded-pill" type="submit">Cek di sini</button>
                        </div>
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
<script>
    $(document).ready(function() {
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

        //  function baru
        $('.baru').submit(function() {
            var nama = $('#nama').val();
            var hp = $('#hp').val();
            var jk = $('#jk').val();
            var fd = new FormData();

            fd.append('nama', nama);
            fd.append('hp', hp);
            fd.append('jk', jk);
            $.ajax({
                type: "post",
                data: fd,
                dataType: "json",
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.btnSimpan').attr('disable', 'disabled');
                    $('.btnSimpan').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btnSimpan').removeAttr('disable', 'disabled');
                    $('.btnSimpan').html('Simpan');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.nama) {
                            $('.nama').addClass('is-invalid');
                            $('.errorNama').html(response.error.nama);
                        } else {
                            $('.nama').removeClass('is-invalid');
                            $('.errorNama').html('');
                        }
                    } else {
                        Swal.fire({
                            icon: 'success',
                            title: 'berhasil',
                            text: response.sukses,
                        });
                        $('body').removeClass('modal-open');
                        //modal-open class is added on body so it has to be removed
                        $('.modal-backdrop').remove();
                        //need to remove div with modal-backdrop class
                        $("#result").html(response.data);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            })
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