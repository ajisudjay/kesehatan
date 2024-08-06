<!DOCTYPE html>
<?= $this->include('frontend/layouts/header') ?>
<html lang="en-US" dir="ltr">

<body>
    <!-- SECTION1 -->
    <main class="main" id="top">
        <section id="home">
            <div class="bg-holder bg-size" style="background-image:url(<?= base_url('libraries_frontend/assets/img/gallery/hero-bg.png') ?>);background-position:top center;background-size:cover;">
            </div>
            <div class="container-xl">
                <div class="row">
                    <div class="col-lg-12">
                        <h1>Personal Prevention Check Up</h1>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-3">
                        <a class="btn btn-sm btn-primary rounded-pill" href="/#checkup" role="button">Check Up</a>
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
                                            <th style="max-width:25%; text-align: center;">Nama</th>
                                            <th style="max-width:20%; text-align: center;">Kontak</th>
                                            <th style="max-width:10%; text-align: center;">Jenis Kelamin</th>
                                            <th style="max-width:10%; text-align: center;">Umur (Tahun)</th>
                                            <th style="max-width:10%; text-align: center;">Tanggal</th>
                                        <?php } else { ?>
                                            <th style="max-width:5%; text-align: center;">No.</th>
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
                                            <td><?= $item['nama'] ?></td>
                                            <td><?= $item['telepon'] ?></td>
                                            <td><?= $item['jk'] ?></td>
                                            <td><?= $item['umur'] ?></td>
                                            <td><?= $item['datetime'] ?></td>
                                        </tr>
                                </tbody>
                            </table>
                            <?php if ($bahasa === 'Indonesia') { ?>
                                <!-- tampilan desktop -->
                                <h5 align="center">Hasil Analisa Personal Prevention Check Up</h5>
                                <div align="center">
                                    <span style="color:red;">[merah : risiko tinggi]</span> - <span style="color:orange;">[jingga : risiko sedang]</span> - <span style="color:green;">[hijau : risiko rendah]</span>
                                </div>
                                <div class="col-12" style="text-align: justify;">
                                    <table id="alt-pg-dt" class="table table-primary table-hover" width="100%">
                                        <tr>
                                            <th style="vertical-align: top;min-width: 100px;max-width: 200px; white-space: normal;">
                                                Risiko Masalah Kesehatan
                                            </th>
                                            <th style="vertical-align: top;min-width: 200px;max-width: 400px; white-space: normal;">
                                                Dampak
                                            </th>
                                            <th style="vertical-align: top;min-width: 100px;max-width: 200px; white-space: normal;">
                                                Hasil
                                            </th>
                                        </tr>
                                        <?php
                                            if ($item['nilai_a'] > 5) {
                                                echo "<tr><td>$risiko_a</td><td>$dampak_a</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_a'] >= 5) {
                                                echo "<tr><td>$risiko_a</td><td>$dampak_a</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_a</td><td>$dampak_a</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_b'] > 5) {
                                                echo "<tr><td>$risiko_b</td><td>$dampak_b</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_b'] >= 5) {
                                                echo "<tr><td>$risiko_b</td><td>$dampak_b</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_b</td><td>$dampak_b</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_c'] > 5) {
                                                echo "<tr><td>$risiko_c</td><td>$dampak_c</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_c'] >= 5) {
                                                echo "<tr><td>$risiko_c</td><td>$dampak_c</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_c</td><td>$dampak_c</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_d'] > 5) {
                                                echo "<tr><td>$risiko_d</td><td>$dampak_d</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_d'] >= 5) {
                                                echo "<tr><td>$risiko_d</td><td>$dampak_d</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_d</td><td>$dampak_d</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_e'] > 5) {
                                                echo "<tr><td>$risiko_e</td><td>$dampak_e</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_e'] >= 5) {
                                                echo "<tr><td>$risiko_e</td><td>$dampak_e</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_e</td><td>$dampak_e</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_f'] > 5) {
                                                echo "<tr><td>$risiko_f</td><td>$dampak_f</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_f'] >= 5) {
                                                echo "<tr><td>$risiko_f</td><td>$dampak_f</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_f</td><td>$dampak_f</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_g'] > 5) {
                                                echo "<tr><td>$risiko_g</td><td>$dampak_g</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_g'] >= 5) {
                                                echo "<tr><td>$risiko_g</td><td>$dampak_g</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_g</td><td>$dampak_g</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_h'] > 5) {
                                                echo "<tr><td>$risiko_h</td><td>$dampak_h</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_h'] >= 5) {
                                                echo "<tr><td>$risiko_h</td><td>$dampak_h</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_h</td><td>$dampak_h</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_i'] > 5) {
                                                echo "<tr><td>$risiko_i</td><td>$dampak_i</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_i'] >= 5) {
                                                echo "<tr><td>$risiko_i</td><td>$dampak_i</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_i</td><td>$dampak_i</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_j'] > 5) {
                                                echo "<tr><td>$risiko_j</td><td>$dampak_j</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_j'] >= 5) {
                                                echo "<tr><td>$risiko_j</td><td>$dampak_j</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_j</td><td>$dampak_j</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_k'] > 5) {
                                                echo "<tr><td>$risiko_k</td><td>$dampak_k</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_k'] >= 5) {
                                                echo "<tr><td>$risiko_k</td><td>$dampak_k</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_k</td><td>$dampak_k</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_l'] > 5) {
                                                echo "<tr><td>$risiko_l</td><td>$dampak_l</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_l'] >= 5) {
                                                echo "<tr><td>$risiko_l</td><td>$dampak_l</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_l</td><td>$dampak_l</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_m'] > 5) {
                                                echo "<tr><td>$risiko_m</td><td>$dampak_m</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_m'] >= 5) {
                                                echo "<tr><td>$risiko_m</td><td>$dampak_m</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_m</td><td>$dampak_m</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_n'] > 5) {
                                                echo "<tr><td>$risiko_n</td><td>$dampak_n</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_n'] >= 5) {
                                                echo "<tr><td>$risiko_n</td><td>$dampak_n</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_n</td><td>$dampak_n</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_o'] > 5) {
                                                echo "<tr><td>$risiko_o</td><td>$dampak_o</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_o'] >= 5) {
                                                echo "<tr><td>$risiko_o</td><td>$dampak_o</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_o</td><td>$dampak_o</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_p'] > 5) {
                                                echo "<tr><td>$risiko_p</td><td>$dampak_p</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_p'] >= 5) {
                                                echo "<tr><td>$risiko_p</td><td>$dampak_p</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_p</td><td>$dampak_p</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_q'] > 5) {
                                                echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_q'] >= 5) {
                                                echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_r'] > 5) {
                                                echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_r'] >= 5) {
                                                echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                            if ($item['nilai_s'] > 5) {
                                                echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_s'] >= 5) {
                                                echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:green;'>risiko rendah</span>, memiliki risiko rendah</td></tr>";
                                            }
                                        ?>
                                    </table>
                                </div>
                            <?php } else { ?>
                                <!-- tampilan desktop -->
                                <br>
                                <h5 align="center">Results of the Personal Prevention Check-Up Analysis</h5>
                                <div align="center">
                                    <span style="color:red;">[red : high risk]</span> - <span style="color:orange;">[orange : medium risk needs to be alert]</span> - <span style="color:green;">[green : low risk]</span>
                                </div>
                                <div class="col-12" style="text-align: justify;">
                                    <table id="alt-pg-dt" class="table table-primary table-hover" width="100%">
                                        <tr>
                                            <th style="vertical-align: top;min-width: 150px;max-width: 250px; white-space: normal;">
                                                Risk of health problems
                                            </th>
                                            <th style="vertical-align: top;min-width: 200px;max-width: 250px; white-space: normal;">
                                                Impact
                                            </th>
                                            <th style="vertical-align: top;min-width: 150px;max-width: 200px; white-space: normal;">
                                                Results
                                            </th>
                                        </tr>
                                        <?php
                                            if ($item['nilai_a'] > 5) {
                                                echo "<tr><td>$risiko_eng_a</td><td>$dampak_eng_a</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_a'] >= 5) {
                                                echo "<tr><td>$risiko_eng_a</td><td>$dampak_eng_a</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_a</td><td>$dampak_eng_a</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_b'] > 5) {
                                                echo "<tr><td>$risiko_eng_b</td><td>$dampak_eng_b</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_b'] >= 5) {
                                                echo "<tr><td>$risiko_eng_b</td><td>$dampak_eng_b</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_a</td><td>$dampak_eng_a</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_c'] > 5) {
                                                echo "<tr><td>$risiko_eng_c</td><td>$dampak_eng_c</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_c'] >= 5) {
                                                echo "<tr><td>$risiko_eng_c</td><td>$dampak_eng_c</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_c</td><td>$dampak_eng_c</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_d'] > 5) {
                                                echo "<tr><td>$risiko_eng_d</td><td>$dampak_eng_d</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_d'] >= 5) {
                                                echo "<tr><td>$risiko_eng_d</td><td>$dampak_eng_d</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_d</td><td>$dampak_eng_d</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_e'] > 5) {
                                                echo "<tr><td>$risiko_eng_e</td><td>$dampak_eng_e</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_e'] >= 5) {
                                                echo "<tr><td>$risiko_eng_e</td><td>$dampak_eng_e</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_e</td><td>$dampak_eng_e</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_f'] > 5) {
                                                echo "<tr><td>$risiko_eng_f</td><td>$dampak_eng_f</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_f'] >= 5) {
                                                echo "<tr><td>$risiko_eng_f</td><td>$dampak_eng_f</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_f</td><td>$dampak_eng_f</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_g'] > 5) {
                                                echo "<tr><td>$risiko_eng_g</td><td>$dampak_eng_g</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_g'] >= 5) {
                                                echo "<tr><td>$risiko_eng_g</td><td>$dampak_eng_g</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_g</td><td>$dampak_eng_g</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_h'] > 5) {
                                                echo "<tr><td>$risiko_eng_h</td><td>$dampak_eng_h</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_h'] >= 5) {
                                                echo "<tr><td>$risiko_eng_h</td><td>$dampak_eng_h</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_h</td><td>$dampak_eng_h</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_i'] > 5) {
                                                echo "<tr><td>$risiko_eng_i</td><td>$dampak_eng_i</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_i'] >= 5) {
                                                echo "<tr><td>$risiko_eng_i</td><td>$dampak_eng_i</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_i</td><td>$dampak_eng_i</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_j'] > 5) {
                                                echo "<tr><td>$risiko_eng_j</td><td>$dampak_eng_j</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_j'] >= 5) {
                                                echo "<tr><td>$risiko_eng_j</td><td>$dampak_eng_j</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_j</td><td>$dampak_eng_j</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_k'] > 5) {
                                                echo "<tr><td>$risiko_eng_k</td><td>$dampak_eng_k</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_k'] >= 5) {
                                                echo "<tr><td>$risiko_eng_k</td><td>$dampak_eng_k</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_k</td><td>$dampak_eng_k</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_l'] > 5) {
                                                echo "<tr><td>$risiko_eng_l</td><td>$dampak_eng_l</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_l'] >= 5) {
                                                echo "<tr><td>$risiko_eng_l</td><td>$dampak_eng_l</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_l</td><td>$dampak_eng_l</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_m'] > 5) {
                                                echo "<tr><td>$risiko_eng_m</td><td>$dampak_eng_m</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_m'] >= 5) {
                                                echo "<tr><td>$risiko_eng_m</td><td>$dampak_eng_m</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_m</td><td>$dampak_eng_m</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_n'] > 5) {
                                                echo "<tr><td>$risiko_eng_n</td><td>$dampak_eng_n</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_n'] >= 5) {
                                                echo "<tr><td>$risiko_eng_n</td><td>$dampak_eng_n</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_n</td><td>$dampak_eng_n</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_o'] > 5) {
                                                echo "<tr><td>$risiko_eng_o</td><td>$dampak_eng_o</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_o'] >= 5) {
                                                echo "<tr><td>$risiko_eng_o</td><td>$dampak_eng_o</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_o</td><td>$dampak_eng_o</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_p'] > 5) {
                                                echo "<tr><td>$risiko_eng_p</td><td>$dampak_eng_p</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_p'] >= 5) {
                                                echo "<tr><td>$risiko_eng_p</td><td>$dampak_eng_p</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_p</td><td>$dampak_eng_p</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_q'] > 5) {
                                                echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_q'] >= 5) {
                                                echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_r'] > 5) {
                                                echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_r'] >= 5) {
                                                echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                            if ($item['nilai_s'] > 5) {
                                                echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:red;'>high risk</span>, the recommendation is to prevent severity (don't get worse) and recurrence (don't relapse)</td></tr>";
                                            } elseif ($item['nilai_s'] >= 5) {
                                                echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:orange;'>be alert</span>, the recommendation is to prevent pain (don't get sick)</td></tr>";
                                            } else {
                                                echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:green;'>low risk</span>, has low risk</td></tr>";
                                            }
                                        ?>
                                    </table>
                                </div>
                            <?php } ?>
                        <?php endforeach ?>
                        </div>

                        <p style="text-align: center;">
                            <?php if ($bahasa === 'Indonesia') { ?>
                                <a href="/"><button type="button" class="btn btn-danger">Kembali</button></a>
                            <?php } else { ?>
                                <a href="/"><button type="button" class="btn btn-danger">Back</button></a>
                            <?php } ?>
                        </p>
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
</body>

</html>