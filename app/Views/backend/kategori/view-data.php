<!-- button tambah modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahKegiatanmodal">
    <span class="feather icon-plus text-light"></span>
</button>
<?= $this->include('backend/kategori/modals/tambah') ?>
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
                        U | D
                    </td>

                    <!-- ISI VIEW -->
                    <td><?= $item['kategori'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->include('backend/layouts/js_view') ?>