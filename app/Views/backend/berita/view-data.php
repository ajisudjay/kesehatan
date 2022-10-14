<!-- button tambah modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmodal">
    <span class="feather icon-plus text-light"></span>
</button>
<!-- tambah modal-->
<div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Berita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('berita/tambah'); ?>" method="post" class="tambah">
                    <?php csrf_field() ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="text-primary">Judul</label>
                                <input type="text" name="judul" class="form-control judul" placeholder="Judul">
                                <div class="invalid-feedback errorJudul"></div>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="text-primary">Kategori</label>
                                <select name="kategori" class="form-control kategori">
                                    <option value="">-- Pilih Kategori --</option>
                                    <?php foreach ($kategori as $item_kategori) : ?>
                                        <option value="<?= $item_kategori['id'] ?>"><?= $item_kategori['kategori'] ?></option>
                                    <?php endforeach ?>
                                </select>
                                <div class="invalid-feedback errorKategori"></div>
                            </div>
                            <div class="col-lg-6">
                                <label class="text-primary">Tanggal</label>
                                <input type="date" name="tanggal" class="form-control tanggal" placeholder="Tanggal">
                                <div class="invalid-feedback errorTanggal"></div>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="text-primary">Gambar</label>
                                <input type="file" name="gambar" class="form-control gambar" placeholder="Gambar">
                                <div class="invalid-feedback errorGambar"></div>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="text-primary">Isi</label>
                                <textarea name="isi" class="form-control" cols="30" rows="10"></textarea>
                                <div class="invalid-feedback errorIsi"></div>
                                <br>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="text-primary">Tag <span>(pisahkan dengan tanda (,))</span></label>
                                <input type="text" name="tag" class="form-control tag" placeholder="Tag">
                                <div class="invalid-feedback errorTag"></div>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                        <button type="submit" class="btn btn-primary btnSimpan">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="dt-responsive table-responsive">
    <!-- id dibawah bisa diganti => simpletable -->
    <table id="scr-vtr-dynamic" class="table table-striped table-bordered nowrap">
        <thead>
            <tr>
                <th style="max-width:5%; text-align: center;">No.</th>
                <th style="max-width:10%; text-align: center;">Aksi</th>
                <th style="max-width:35%; text-align: center;">Judul</th>
                <th style="max-width:15%; text-align: center;">Kategori</th>
                <th style="max-width:10%; text-align: center;">Tanggal</th>
                <th style="max-width:10%; text-align: center;">Status</th>
                <th style="max-width:15%; text-align: center;">Log</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>

            <?php foreach ($berita as $item) : ?>
                <?php $id = $item['id'] ?>
                <tr style="text-align: center;">
                    <td><?= $no++ ?></td>
                    <td>
                        <!-- button detail modal -->
                        <button type="button" class="bg-transparent border-0" data-toggle="modal" data-target="#editmodal<?= $id = $item['id'] ?>">
                            <span class="feather icon-eye text-primary"></span>
                        </button>
                        <!-- button edit modal -->
                        <button type="button" class="bg-transparent border-0" data-toggle="modal" data-target="#editmodal<?= $id = $item['id'] ?>">
                            <span class="feather icon-edit-1 text-primary"></span>
                        </button>
                        <!-- Modal Edit Berita-->
                        <div class="modal fade" id="editmodal<?= $id = $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Berita : <?= $item['judul'] ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('berita/edit'); ?>" method="post" class="edit">
                                        <?= csrf_field() ?>
                                        <div class="modal-body">
                                            <div class="col-lg-11">
                                                <input type="text" name="id" class="form-control" value="<?= $item['id'] ?>" hidden>
                                                <label>Judul</label>
                                                <input type="text" name="judul" class="form-control" value="<?= $item['judul'] ?>">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                                            <button type="submit" class="btn btn-primary btnEdit">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- button hapus modal-->
                        <a href="<?= base_url('berita/hapus/' . $item['id_berita']); ?>" class="hapus">
                            <span class="feather icon-trash-2 text-danger"></span>
                        </a>
                        <!-- button publish -->
                        <button type="button" class="bg-transparent border-0" data-toggle="modal" data-target="#editmodal<?= $id = $item['id'] ?>">
                            <span class="fa fa-check-circle-o text-primary"></span>
                        </button>
                        <!-- button unpublish -->
                        <button type="button" class="bg-transparent border-0" data-toggle="modal" data-target="#editmodal<?= $id = $item['id'] ?>">
                            <span class="fa fa-times-circle text-danger"></span>
                        </button>

                    </td>

                    <!-- ISI VIEW -->
                    <td><?= $item['judul'] ?></td>
                    <td><?= $item['nama_kategori'] ?></td>
                    <td><?= $item['tanggal'] ?></td>
                    <td><?= $item['status'] ?></td>
                    <td><?= $item['admin'] ?>|<?= $item['timestamp'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<!-- SCRIPT AJAX -->
<script>
    $(document).ready(function() {
        //  function tambah
        $('.tambah').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
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
                        if (response.error.judul) {
                            $('.judul').addClass('is-invalid');
                            $('.errorJudul').html(response.error.judul);
                        } else {
                            $('.judul').removeClass('is-invalid');
                            $('.errorJudul').html('');
                        }
                    } else {
                        if (response.status == 'gagal') {
                            Swal.fire({
                                icon: 'error',
                                title: 'GAGAL',
                                text: response.sukses,
                            })
                        } else if (response.status == 'berhasil') {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil',
                                text: response.sukses,
                            });
                        }
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        $('#result').html(response.data);
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            })
        });

        $('.edit').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btnEdit').attr('disable', 'disabled');
                    $('.btnEdit').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btnEdit').removeAttr('disable', 'disabled');
                    $('.btnEdit').html('Simpan');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.kategori) {
                            $('.kategori').addClass('is-invalid');
                            $('.errorkategoriEdit').html(response.error.kategori);
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

        //  function hapus
        $('.hapus').on('click', function(e) {
            e.preventDefault();
            const href = $(this).attr('href')
            Swal.fire({
                title: 'Anda Yakin?',
                text: "Data Akan Dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Hapus!'
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                }
            });
        });
        window.setTimeout(function() {
            $(".flashAjax").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 5000);
    });
</script>
<?= $this->include('backend/layouts/js_viewData') ?>