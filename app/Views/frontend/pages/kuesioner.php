<br>
<div class="kuesioner">
    <table class="table table-striped table-hover table-responsive">

        <tr>
            <th>
                Pertanyaan
            </th>
            <th style="text-align: center;" width="10%">
                Ya
            </th>
            <th style="text-align: center;" width="10%">
                Tidak
            </th>
        </tr>
        <?php foreach ($pertanyaan as $item) : ?>
            <tr>
                <td>
                    <?= $item['nomor'] ?>. <?= $item['pertanyaan'] ?>
                </td>
                <td style="text-align: center;">
                    <input class="form-check-input" type="radio" name="p<?= $item['nomor'] ?>" value="Ya" required>
                </td>
                <td style="text-align: center;">
                    <input class="form-check-input" type="radio" name="p<?= $item['nomor'] ?>" value="Tidak" required>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</div>
<br>