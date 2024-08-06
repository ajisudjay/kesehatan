<br>
<br>
<?php foreach ($koresponden as $item) : ?>
    <div class="row">
        <?php if ($bahasa === 'Indonesia') { ?>
            <div class="col-md-5">
                <b>Nama : <?= $item['nama'] ?></b>
            </div>
            <div class="col-md-2">
                <b>Kontak : <?= $item['telepon'] ?></b>
            </div>
            <div class="col-md-3">
                <b>Jenis Kelamin : <?= $item['jk'] ?></b>
            </div>
            <div class="col-md-2">
                <b>Umur : <?= $item['umur'] ?></b>
            </div>
        <?php } else { ?>
            <div class="col-md-5">
                <b>Name : <?= $item['nama'] ?></b>
            </div>
            <div class="col-md-2">
                <b>Contact : <?= $item['telepon'] ?></b>
            </div>
            <div class="col-md-3">
                <b>Gender : <?= $item['jk'] ?></b>
            </div>
            <div class="col-md-2">
                <b>Age : <?= $item['umur'] ?></b>
            </div>
        <?php }  ?>
    </div>

    <?php if ($bahasa === 'Indonesia') { ?>
        <!-- tampilan desktop -->
        <h5 align="center">Hasil Analisa Personal Prevention Check Up</h5>
        <div align="center">
            <span style="color:red;">[merah : risiko tinggi]</span> - <span style="color:orange;">[jingga : risiko sedang]</span> - <span style="color:green;">[hijau : risiko rendah]</span>
        </div>
        <div class="col-12" style="text-align: justify;">
            <table id="alt-pg-dt" class="table table-primary table-hover" width="100%">
                <tr>
                    <th style="vertical-align: top;min-width: 150px;max-width:300px; white-space: normal;">
                        Risiko Masalah Kesehatan
                    </th>
                    <th style="vertical-align: top;min-width: 200px;max-width: 300px; white-space: normal;">
                        Dampak
                    </th>
                    <th style="vertical-align: top;min-width: 100px;max-width: 200px; white-space: normal;">
                        Hasil
                    </th>
                </tr>
                <?php
                if ($nilai_a > 5) {
                    echo "<tr><td>$risiko_a</td><td>$dampak_a</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_a >= 5) {
                    echo "<tr><td>$risiko_a</td><td>$dampak_a</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_a</td><td>$dampak_a</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_b > 5) {
                    echo "<tr><td>$risiko_b</td><td>$dampak_b</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_b >= 5) {
                    echo "<tr><td>$risiko_b</td><td>$dampak_b</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_c</td><td>$dampak_c</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_c > 5) {
                    echo "<tr><td>$risiko_c</td><td>$dampak_c</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_c >= 5) {
                    echo "<tr><td>$risiko_c</td><td>$dampak_c</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_c</td><td>$dampak_c</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_d > 5) {
                    echo "<tr><td>$risiko_d</td><td>$dampak_d</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_d >= 5) {
                    echo "<tr><td>$risiko_d</td><td>$dampak_d</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_d</td><td>$dampak_d</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_e > 5) {
                    echo "<tr><td>$risiko_e</td><td>$dampak_e</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_e >= 5) {
                    echo "<tr><td>$risiko_e</td><td>$dampak_e</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_e</td><td>$dampak_e</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_f > 5) {
                    echo "<tr><td>$risiko_f</td><td>$dampak_f</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_f >= 5) {
                    echo "<tr><td>$risiko_f</td><td>$dampak_f</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_f</td><td>$dampak_f</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_g > 5) {
                    echo "<tr><td>$risiko_g</td><td>$dampak_g</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_g >= 5) {
                    echo "<tr><td>$risiko_g</td><td>$dampak_g</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_g</td><td>$dampak_g</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_h > 5) {
                    echo "<tr><td>$risiko_h</td><td>$dampak_h</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_h >= 5) {
                    echo "<tr><td>$risiko_h</td><td>$dampak_h</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_h</td><td>$dampak_h</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_i > 5) {
                    echo "<tr><td>$risiko_i</td><td>$dampak_i</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_i >= 5) {
                    echo "<tr><td>$risiko_i</td><td>$dampak_i</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_i</td><td>$dampak_i</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_j > 5) {
                    echo "<tr><td>$risiko_j</td><td>$dampak_j</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_j >= 5) {
                    echo "<tr><td>$risiko_j</td><td>$dampak_j</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_j</td><td>$dampak_j</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_k > 5) {
                    echo "<tr><td>$risiko_k</td><td>$dampak_k</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_k >= 5) {
                    echo "<tr><td>$risiko_k</td><td>$dampak_k</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_k</td><td>$dampak_k</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_l > 5) {
                    echo "<tr><td>$risiko_l</td><td>$dampak_l</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_l >= 5) {
                    echo "<tr><td>$risiko_l</td><td>$dampak_l</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_l</td><td>$dampak_l</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_m > 5) {
                    echo "<tr><td>$risiko_m</td><td>$dampak_m</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_m >= 5) {
                    echo "<tr><td>$risiko_m</td><td>$dampak_m</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_m</td><td>$dampak_m</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_n > 5) {
                    echo "<tr><td>$risiko_n</td><td>$dampak_n</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_n >= 5) {
                    echo "<tr><td>$risiko_n</td><td>$dampak_n</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_n</td><td>$dampak_n</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_o > 5) {
                    echo "<tr><td>$risiko_o</td><td>$dampak_o</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_o >= 5) {
                    echo "<tr><td>$risiko_o</td><td>$dampak_o</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_o</td><td>$dampak_o</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_p > 5) {
                    echo "<tr><td>$risiko_p</td><td>$dampak_p</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_p >= 5) {
                    echo "<tr><td>$risiko_p</td><td>$dampak_p</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_p</td><td>$dampak_p</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_q > 5) {
                    echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_q >= 5) {
                    echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_r > 5) {
                    echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_r >= 5) {
                    echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                if ($nilai_s > 5) {
                    echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                } elseif ($nilai_s >= 5) {
                    echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                }
                ?>
            </table>
        </div>
    <?php } else { ?>
        <!-- tampilan desktop -->
        <h5 align="center">Results of the Personal Prevention Check-Up Analysis</h5>
        <div align="center">
            <span style="color:red;">[red : high risk]</span> - <span style="color:orange;">[orange : medium risk needs to be alert]</span> - <span style="color:green;">[green : low risk]</span>
        </div>
        <div class="col-12" style="text-align: justify;">
            <table id="alt-pg-dt" class="table table-primary table-hover" width="100%">
                <tr>
                    <th style="vertical-align: top;min-width: 150px;max-width:300px; white-space: normal;">
                        Risk of health problems
                    </th>
                    <th style="vertical-align: top;min-width: 200px;max-width: 300px; white-space: normal;">
                        Impact
                    </th>
                    <th style="vertical-align: top;min-width: 100px;max-width: 200px; white-space: normal;">
                        Results
                    </th>
                </tr>
                <?php
                if ($nilai_a > 5) {
                    echo "<tr><td>$risiko_eng_a</td><td>$dampak_eng_a</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_a >= 5) {
                    echo "<tr><td>$risiko_eng_a</td><td>$dampak_eng_a</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_a</td><td>$dampak_eng_a</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_b > 5) {
                    echo "<tr><td>$risiko_eng_b</td><td>$dampak_eng_b</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_b >= 5) {
                    echo "<tr><td>$risiko_eng_b</td><td>$dampak_eng_b</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_b</td><td>$dampak_eng_b</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_c > 5) {
                    echo "<tr><td>$risiko_eng_c</td><td>$dampak_eng_c</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_c >= 5) {
                    echo "<tr><td>$risiko_eng_c</td><td>$dampak_eng_c</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_c</td><td>$risiko_eng_c</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_d > 5) {
                    echo "<tr><td>$risiko_eng_d</td><td>$dampak_eng_d</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_d >= 5) {
                    echo "<tr><td>$risiko_eng_d</td><td>$dampak_eng_d</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_d</td><td>$dampak_eng_d</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_e > 5) {
                    echo "<tr><td>$risiko_eng_e</td><td>$dampak_eng_e</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_e >= 5) {
                    echo "<tr><td>$risiko_eng_e</td><td>$dampak_eng_e</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_e</td><td>$dampak_eng_e</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_f > 5) {
                    echo "<tr><td>$risiko_eng_f</td><td>$dampak_eng_f</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_f >= 5) {
                    echo "<tr><td>$risiko_eng_f</td><td>$dampak_eng_f</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_f</td><td>$dampak_eng_f</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_g > 5) {
                    echo "<tr><td>$risiko_eng_g</td><td>$dampak_eng_g</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_g >= 5) {
                    echo "<tr><td>$risiko_eng_g</td><td>$dampak_eng_g</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_g</td><td>$dampak_eng_g</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_h > 5) {
                    echo "<tr><td>$risiko_eng_h</td><td>$dampak_eng_h</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_h >= 5) {
                    echo "<tr><td>$risiko_eng_h</td><td>$dampak_eng_h</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_h</td><td>$dampak_eng_h</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_i > 5) {
                    echo "<tr><td>$risiko_eng_i</td><td>$dampak_eng_i</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_i >= 5) {
                    echo "<tr><td>$risiko_eng_i</td><td>$dampak_eng_i</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_i</td><td>$dampak_eng_i</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_j > 5) {
                    echo "<tr><td>$risiko_eng_j</td><td>$dampak_eng_j</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_j >= 5) {
                    echo "<tr><td>$risiko_eng_j</td><td>$dampak_eng_j</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_j</td><td>$dampak_eng_j</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_k > 5) {
                    echo "<tr><td>$risiko_eng_k</td><td>$dampak_eng_k</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_k >= 5) {
                    echo "<tr><td>$risiko_eng_k</td><td>$dampak_eng_k</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_k</td><td>$dampak_eng_k</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_l > 5) {
                    echo "<tr><td>$risiko_eng_l</td><td>$dampak_eng_l</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_l >= 5) {
                    echo "<tr><td>$risiko_eng_l</td><td>$dampak_eng_l</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_l</td><td>$dampak_eng_l</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_m > 5) {
                    echo "<tr><td>$risiko_eng_m</td><td>$dampak_eng_m</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_m >= 5) {
                    echo "<tr><td>$risiko_eng_m</td><td>$dampak_eng_m</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_m</td><td>$dampak_eng_m</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_n > 5) {
                    echo "<tr><td>$risiko_eng_n</td><td>$dampak_eng_n</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_n >= 5) {
                    echo "<tr><td>$risiko_eng_n</td><td>$dampak_eng_n</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_n</td><td>$dampak_eng_n</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_o > 5) {
                    echo "<tr><td>$risiko_eng_o</td><td>$dampak_eng_o</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_o >= 5) {
                    echo "<tr><td>$risiko_eng_o</td><td>$dampak_eng_o</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_o</td><td>$dampak_eng_o</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_p > 5) {
                    echo "<tr><td>$risiko_eng_p</td><td>$dampak_eng_p</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_p >= 5) {
                    echo "<tr><td>$risiko_eng_p</td><td>$dampak_eng_p</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_p</td><td>$dampak_eng_p</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_q > 5) {
                    echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_q >= 5) {
                    echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_r > 5) {
                    echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_r >= 5) {
                    echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                if ($nilai_s > 5) {
                    echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                } elseif ($nilai_s >= 5) {
                    echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                } else {
                    echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                }
                ?>
            </table>
        </div>
    <?php } ?>

    <!-- perhitungan lengkap -->
    <!-- <div class=" dropdown" style="text-align: center;">
                                <button onclick="myFunction()" class="btn-outline-primary">Tampilkan Perhitungan</button>
                                <div id="myDropdown" class="dropdown-content">
                                    <div class="kuesioner">
                                        <div class="desktop">
                                            <table class="table table-striped" style="border:1;text-align: center;">
                                                <tr>
                                                    <td>
                                                        A
                                                    </td>
                                                    <td>
                                                        B
                                                    </td>
                                                    <td>
                                                        C
                                                    </td>
                                                    <td>
                                                        D
                                                    </td>
                                                    <td>
                                                        E
                                                    </td>
                                                    <td>
                                                        F
                                                    </td>
                                                    <td>
                                                        G
                                                    </td>
                                                    <td>
                                                        H
                                                    </td>
                                                    <td>
                                                        I
                                                    </td>
                                                    <td>
                                                        J
                                                    </td>
                                                    <td>
                                                        K
                                                    </td>
                                                    <td>
                                                        L
                                                    </td>
                                                    <td>
                                                        M
                                                    </td>
                                                    <td>
                                                        N
                                                    </td>
                                                    <td>
                                                        O
                                                    </td>
                                                    <td>
                                                        P
                                                    </td>
                                                    <td>
                                                        Q
                                                    </td>
                                                    <td>
                                                        R
                                                    </td>
                                                    <td>
                                                        S
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?= $nilai_a ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_b ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_c ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_d ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_e ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_f ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_g ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_h ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_i ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_j ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_k ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_l ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_m ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_n ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_o ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_p ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_q ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_r ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_s ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="mobile">
                                            <table class="table table-striped" style="border:1;text-align: center;">
                                                <tr>
                                                    <td>
                                                        A
                                                    </td>
                                                    <td>
                                                        B
                                                    </td>
                                                    <td>
                                                        C
                                                    </td>
                                                    <td>
                                                        D
                                                    </td>
                                                    <td>
                                                        E
                                                    </td>
                                                    <td>
                                                        F
                                                    </td>
                                                    <td>
                                                        G
                                                    </td>
                                                    <td>
                                                        H
                                                    </td>
                                                    <td>
                                                        I
                                                    </td>
                                                    <td>
                                                        J
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?= $nilai_a ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_b ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_c ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_d ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_e ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_f ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_g ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_h ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_i ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_j ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        K
                                                    </td>
                                                    <td>
                                                        L
                                                    </td>
                                                    <td>
                                                        M
                                                    </td>
                                                    <td>
                                                        N
                                                    </td>
                                                    <td>
                                                        O
                                                    </td>
                                                    <td>
                                                        P
                                                    </td>
                                                    <td>
                                                        Q
                                                    </td>
                                                    <td>
                                                        R
                                                    </td>
                                                    <td>
                                                        S
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <?= $nilai_k ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_l ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_m ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_n ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_o ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_p ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_q ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_r ?>
                                                    </td>
                                                    <td>
                                                        <?= $nilai_s ?>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
            </div> -->



    <!-- <script>
        /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        function filterFunction() {
            var input, filter, ul, li, a, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            div = document.getElementById("myDropdown");
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                txtValue = a[i].textContent || a[i].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
    </script> -->
<?php endforeach ?>
<br>