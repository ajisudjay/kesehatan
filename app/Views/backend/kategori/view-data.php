<!-- button tambah modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahmodal">
    <span class="feather icon-plus text-light"></span>
</button>
<!-- tambah modal-->
<div class="modal fade" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('kategori/tambah'); ?>" method="post" class="tambah">
                    <?php csrf_field() ?>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <label class="text-primary">Kategori</label>
                                <input type="text" name="kategori" class="form-control kategori" placeholder="Kategori">
                                <div class="invalid-feedback errorKategori"></div>
                                <hr>
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
    <!-- id bisa diganti => simpletable -->
    <table id="scr-vtr-dynamic" class="table table-striped table-bordered nowrap">
        <thead>
            <tr>
                <th style="max-width:5%; text-align: center;">No.</th>
                <th style="max-width:10%; text-align: center;">Aksi</th>
                <th style="max-width:85%; text-align: center;">Kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>

            <?php foreach ($kategori as $item) : ?>
                <?php $id = $item['id'] ?>
                <tr style="text-align: center;">
                    <td><?= $no++ ?></td>
                    <td>
                        <!-- button edit modal -->
                        <button type="button" class="bg-transparent border-0" data-toggle="modal" data-target="#editmodal">
                            <span class="feather icon-edit-1 text-primary"></span>
                        </button>

                        <!-- button hapus modal-->
                        <a href="<?= base_url('kategori/hapus/' . $item['id']); ?>" class="hapusKegiatan">
                            <span class="feather icon-trash-2 text-danger"></span>
                        </a>
                    </td>

                    <!-- ISI VIEW -->
                    <td><?= $item['kategori'] ?></td>
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
                        if (response.error.kategori) {
                            $('.kategori').addClass('is-invalid');
                            $('.errorKategori').html(response.error.kategori);
                        } else {
                            $('.kategori').removeClass('is-invalid');
                            $('.errorKategori').html('');
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
    });
</script>
<?= $this->include('backend/layouts/js_view') ?>