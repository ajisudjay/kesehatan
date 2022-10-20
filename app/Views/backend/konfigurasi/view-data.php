<div class="dt-responsive table-responsive">
    <!-- id dibawah bisa diganti => simpletable -->
    <table id="scr-vtr-dynamic" class="table table-striped table-bordered nowrap">
        <thead>
            <tr>
                <th style="max-width:5%;">No.</th>
                <th style="max-width:10%;">Aksi</th>
                <th style="max-width:35%;">Konfigurasi</th>
                <th style="max-width:50%;">Isi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>

            <?php foreach ($konfigurasi as $item) : ?>
                <?php $id = $item['id'] ?>
                <tr style="text-align:left;">
                    <td><?= $no++ ?></td>
                    <td>
                        <!-- button edit modal -->
                        <button type="button" class="bg-transparent border-0" data-toggle="modal" data-target="#editmodal<?= $id = $item['id'] ?>">
                            <span class="feather icon-edit-1 text-primary"></span>
                        </button>
                        <!-- Modal Edit Konfigurasi-->
                        <div class="modal fade" id="editmodal<?= $id = $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Edit Konfigurasi : <?= $item['judul'] ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('konfigurasi/edit'); ?>" method="post" class="edit">
                                        <?= csrf_field() ?>
                                        <div class="modal-body">
                                            <div class="col-lg-11">
                                                <input type="text" name="id" class="form-control" value="<?= $item['id'] ?>" hidden>
                                                <label>Konfigurasi</label>
                                                <input type="text" name="judul" class="form-control" value="<?= $item['judul'] ?>">
                                                <br>
                                                <label>Isi</label>
                                                <textarea name="isi" class="form-control" id="" cols="30" rows="10"><?= $item['isi'] ?></textarea>
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
                    </td>

                    <!-- ISI VIEW -->
                    <td><?= $item['judul'] ?></td>
                    <td style="height:50px;"><?= $item['isi'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<!-- SCRIPT AJAX -->
<script>
    $(document).ready(function() {
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
                        if (response.error.judul) {
                            $('.judul').addClass('is-invalid');
                            $('.errorjudulEdit').html(response.error.judul);
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
<?= $this->include('backend/layouts/js_viewData') ?>