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
                                <div class="desktop">
                                    <br>
                                    <h5 align="center">Hasil Analisa Personal Prevention Check Up</h5>
                                    <div align="center">
                                        <span style="color:red;">[merah : risiko tinggi]</span> - <span style="color:orange;">[jingga : risiko sedang]</span>
                                    </div>
                                    <div class="col-12" style="text-align: justify;">
                                        <table id="alt-pg-dt" class="table table-primary table-hover" width="100%" style="font-size: small;">
                                            <tr>
                                                <th style="vertical-align: top;" width="40%">
                                                    Risiko Masalah Kesehatan
                                                </th>
                                                <th style="vertical-align: top;">
                                                    Dampak
                                                </th>
                                                <th style="vertical-align: top;">
                                                    Saran
                                                </th>
                                            </tr>
                                            <?php
                                            if ($item['nilai_a'] > 5) {
                                                echo "<tr><td>$risiko_a</td><td>$dampak_a</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_a'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_a</span></td><td>$dampak_a</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_b'] > 5) {
                                                echo "<tr><td>$risiko_b</td><td>$dampak_b</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_b'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_b</span></td><td>$dampak_b</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_c'] > 5) {
                                                echo "<tr><td>$risiko_c</td><td>$dampak_c</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_c'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_c</span></td><td>$dampak_c</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_d'] > 5) {
                                                echo "<tr><td>$risiko_d</td><td>$dampak_d</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_d'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_d</span></td><td>$dampak_d</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_e'] > 5) {
                                                echo "<tr><td>$risiko_e</td><td>$dampak_e</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_e'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_e</span></td><td>$dampak_e</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_f'] > 5) {
                                                echo "<tr><td>$risiko_f</td><td>$dampak_f</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_f'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_f</span></td><td>$dampak_f</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_g'] > 5) {
                                                echo "<tr><td>$risiko_g</td><td>$dampak_g</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_g'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_g</span></td><td>$dampak_g</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_h'] > 5) {
                                                echo "<tr><td>$risiko_h</td><td>$dampak_h</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_h'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_h</span></td><td>$dampak_h</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_i'] > 5) {
                                                echo "<tr><td>$risiko_i</td><td>$dampak_i</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_i'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_i</span></td><td>$dampak_i</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_j'] > 5) {
                                                echo "<tr><td>$risiko_j</td><td>$dampak_j</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_j'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_j</span></td><td>$dampak_j</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_k'] > 5) {
                                                echo "<tr><td>$risiko_k</td><td>$dampak_k</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_k'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_k</span></td><td>$dampak_k</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_l'] > 5) {
                                                echo "<tr><td>$risiko_l</td><td>$dampak_l</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_l'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_l</span></td><td>$dampak_l</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_m'] > 5) {
                                                echo "<tr><td>$risiko_m</td><td>$dampak_m</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_m'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_m</span></td><td>$dampak_m</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_n'] > 5) {
                                                echo "<tr><td>$risiko_n</td><td>$dampak_n</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_n'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_n</span></td><td>$dampak_n</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_o'] > 5) {
                                                echo "<tr><td>$risiko_o</td><td>$dampak_o</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_o'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_o</span></td><td>$dampak_o</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_p'] > 5) {
                                                echo "<tr><td>$risiko_p</td><td>$dampak_p</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_p'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_p</span></td><td>$dampak_p</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_q'] > 5) {
                                                echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_q'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_qrs</span></td><td>$dampak_qrs</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_r'] > 5) {
                                                echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_r'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_qrs</span></td><td>$dampak_qrs</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_s'] > 5) {
                                                echo "<tr><td>$risiko_qrs</td><td>$dampak_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_s'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_qrs</span></td><td>$dampak_qrs</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            ?>
                                        </table>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <!-- tampilan desktop -->
                                <div class="desktop">
                                    <br>
                                    <h5 align="center">Results of the Personal Prevention Check-Up Analysis</h5>
                                    <div align="center">
                                        <span style="color:red;">[red : high risk]</span> - <span style="color:orange;">[orange : medium risk needs to be alert]</span>
                                    </div>
                                    <div class="col-12" style="text-align: justify;">
                                        <table class="table table-hover" width="100%" style="font-size: small;">
                                            <tr>
                                                <th style="vertical-align: top;" width="40%">
                                                    Risk of health problems
                                                </th>
                                                <th style="vertical-align: top;">
                                                    Impact
                                                </th>
                                            </tr>
                                            <?php
                                            if ($item['nilai_a'] > 5) {
                                                echo "<tr><td>$risiko_eng_a</td><td>$dampak_eng_a</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_a'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_a</span></td><td>$dampak_eng_a</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_b'] > 5) {
                                                echo "<tr><td>$risiko_eng_b</td><td>$dampak_eng_b</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_b'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_b</span></td><td>$dampak_eng_b</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_c'] > 5) {
                                                echo "<tr><td>$risiko_eng_c</td><td>$dampak_eng_c</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_c'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_c</span></td><td>$dampak_eng_c</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_d'] > 5) {
                                                echo "<tr><td>$risiko_eng_d</td><td>$dampak_eng_d</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_d'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_d</span></td><td>$dampak_eng_d</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_e'] > 5) {
                                                echo "<tr><td>$risiko_eng_e</td><td>$dampak_eng_e</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_e'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_e</span></td><td>$dampak_eng_e</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_f'] > 5) {
                                                echo "<tr><td>$risiko_eng_f</td><td>$dampak_eng_f</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_f'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_f</span></td><td>$dampak_eng_f</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_g'] > 5) {
                                                echo "<tr><td>$risiko_eng_g</td><td>$dampak_eng_g</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_g'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_g</span></td><td>$dampak_eng_g</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_h'] > 5) {
                                                echo "<tr><td>$risiko_eng_h</td><td>$dampak_eng_h</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_h'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_h</span></td><td>$dampak_eng_h</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_i'] > 5) {
                                                echo "<tr><td>$risiko_eng_i</td><td>$dampak_eng_i</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_i'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_i</span></td><td>$dampak_eng_i</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_j'] > 5) {
                                                echo "<tr><td>$risiko_eng_j</td><td>$dampak_eng_j</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_j'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_j</span></td><td>$dampak_eng_j</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_k'] > 5) {
                                                echo "<tr><td>$risiko_eng_k</td><td>$dampak_eng_k</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_k'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_k</span></td><td>$dampak_eng_k</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_l'] > 5) {
                                                echo "<tr><td>$risiko_eng_l</td><td>$dampak_eng_l</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_l'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_l</span></td><td>$dampak_eng_l</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_m'] > 5) {
                                                echo "<tr><td>$risiko_eng_m</td><td>$dampak_eng_m</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_m'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_m</span></td><td>$dampak_eng_m</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_n'] > 5) {
                                                echo "<tr><td>$risiko_eng_n</td><td>$dampak_eng_n</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_n'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_n</span></td><td>$dampak_eng_n</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_o'] > 5) {
                                                echo "<tr><td>$risiko_eng_o</td><td>$dampak_eng_o</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_o'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_o</span></td><td>$dampak_eng_o</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_p'] > 5) {
                                                echo "<tr><td>$risiko_eng_p</td><td>$dampak_eng_p</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_p'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_p</span></td><td>$dampak_eng_p</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_q'] > 5) {
                                                echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_q'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_qrs</span></td><td>$dampak_eng_qrs</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_r'] > 5) {
                                                echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_r'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_qrs</span></td><td>$dampak_eng_qrs</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            if ($item['nilai_s'] > 5) {
                                                echo "<tr><td>$risiko_eng_qrs</td><td>$dampak_eng_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                            } elseif ($item['nilai_s'] >= 5) {
                                                echo "<tr><td><span style='color:orange;'>$risiko_eng_qrs</span></td><td>$dampak_eng_qrs</td><td><span style='color:orange;'>waspada</span>, bisakah anjuran nya mencegah kesakitan (jangan sakit)</td></tr>";
                                            } else {
                                                echo "";
                                            }
                                            ?>
                                        </table>
                                    </div>
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
<!-- SCRIPT AJAX -->
<script>
    $(document).ready(function() {
        $.ajax({
            url: '<?= base_url('klien/RiwayatKlien') ?>',
            dataType: 'json',
            success: function(response) {
                $("#result").html(response.data);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });

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


        window.setTimeout(function() {
            $(".flashAjax").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 5000);
    });
</script>
<?= $this->include('frontend/layouts/javascript') ?>
<?= $this->include('backend/layouts/js_viewData') ?>
</body>

</html>