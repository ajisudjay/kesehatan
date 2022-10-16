<div class="dt-responsive table-responsive">
    <!-- id dibawah bisa diganti => simpletable -->
    <table id="scr-vtr-dynamic" class="table table-striped table-bordered nowrap">
        <thead>
            <tr>
                <th style="max-width:5%; text-align: center;">No.</th>
                <th style="max-width:10%; text-align: center;">Aksi</th>
                <th style="max-width:15%; text-align: center;">Judul</th>
                <th style="max-width:70%; text-align: center;">Isi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1 ?>

            <?php foreach ($konfigurasi as $item) : ?>
                <?php $id = $item['id'] ?>
                <tr style="text-align: center;">
                    <td><?= $no++ ?></td>
                    <td>


                        <!-- button edit modal -->
                        <button type="button" class="bg-transparent border-0" data-toggle="modal" data-target="#editmodal<?= $id = $item['id'] ?>">
                            <span class="feather icon-edit-1 text-primary"></span>
                        </button>

                        <!-- Modal Edit-->
                        <div class="modal fade" id="editmodal<?= $id = $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><?= $item['judul'] ?></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('konfigurasi/edit'); ?>" method="post" enctype="multipart/form-data" class="edit">
                                        <?php csrf_field() ?>
                                        <div class="modal-body" style="text-align: left;">
                                            <div class="row">
                                                <div class="col-lg-11">
                                                    <label class="text-primary">Isi</label>
                                                    <input type="text" name="id" class="form-control id" value="<?= $item['id'] ?>" hidden>
                                                    <textarea name="isi" class="form-control" required><?= $item['isi'] ?></textarea>
                                                    <div class=" invalid-feedback errorIsi"></div>
                                                    <br>
                                                </div>
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
                    <td><?= substr($item['isi'], 0, 60) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<?= $this->include('backend/konfigurasi/ajax') ?>
<?= $this->include('backend/layouts/js_viewData') ?>