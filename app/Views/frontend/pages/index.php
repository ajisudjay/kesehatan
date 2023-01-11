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
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Personal Prevention Check Up</h1>
                        <p class="fs-1 mb-5">Lakukan check up disini <a class="btn btn-lg btn-primary rounded-pill" href="#checkup" role="button">Get Started</a></p>
                        <form action="<?= base_url('Checkup/riwayat'); ?>" method="post" class="baru">
                            <p class="fs-1 mb-5">Sudah pernah check up ? <br> cek riwayat disini <br>
                                <input class="form-livedoc-control" name="nama" type="text" placeholder="Nama" required>
                                <input class="form-livedoc-control" name="telepon" type="text" placeholder="Telepon" required>
                                <button class="btn btn-primary rounded-pill" type="submit">Cari</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION2 -->
        <section class="pb-0" id="checkup">
            <div class="container-xxl">
                <div class="row">
                    <!--/.bg-holder-->
                    <div class="col-lg-12">
                        <form action="<?= base_url('Checkup/baru'); ?>" method="post" class="baru">
                            <div class="row">
                                <div class="col-md-5">
                                    <input class="form-control form-livedoc-control" name="nama" type="text" placeholder="Nama" required>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control form-livedoc-control" name="telepon" type="text" placeholder="telepon" required>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select" name="jk" required>
                                        <option selected="selected" value="">Jenis Kelamin</option>
                                        <option value="Laki-laki">Laki-laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <input class="form-control form-livedoc-control" name="umur" type="text" placeholder="Umur" required>
                                </div>
                            </div>

                            <?= $this->include('frontend/pages/kuesioner') ?>

                            <div class="col-12">
                                <div class="d-grid">
                                    <p align="center"><button class="btn btn-primary rounded-pill" type="submit">Check Up</button></p>
                                </div>
                            </div>
                        </form>
                        <br>
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