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
                    <div class="col-lg-5">
                        <h1>Personal Prevention Check Up</h1>
                    </div>
                    <div class="col-lg-5">
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-lg-5">
                        <a class="btn btn-sm btn-primary rounded-pill" href="/#checkup" role="button">Check Up di sini</a>
                    </div>
                </div>
        </section>
        <!-- SECTION2 -->
        <br>
        <div class="container-xl">
            <div class="row">
                <!--/.bg-holder-->
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Nama</label>
                            <input class="form-control form-livedoc-control" name="nama" type="text" value="<?= $nama ?>" required>
                        </div>
                        <div class="col-md-6">
                            <label>Telepon</label>
                            <input class="form-control form-livedoc-control" name="telepon" type="text" value="<?= $telepon ?>" required>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
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
                                            <th style="max-width:5%; text-align: center;">No.</th>
                                            <th style="max-width:25%; text-align: center;">Nama</th>
                                            <th style="max-width:20%; text-align: center;">Kontak</th>
                                            <th style="max-width:10%; text-align: center;">Jenis Kelamin</th>
                                            <th style="max-width:10%; text-align: center;">Umur (Tahun)</th>
                                            <th style="max-width:10%; text-align: center;">Tanggal</th>
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
                                            <table class="table table-responsive" style="text-align: left;max-width: 100%;">
                                                <tr>
                                                    <th>
                                                        No
                                                    </th>
                                                    <th>
                                                        Dampak
                                                    </th>
                                                    <th>
                                                        Risiko
                                                    </th>
                                                    <th>
                                                        Anjuran
                                                    </th>
                                                </tr>
                                                <?php
                                                if ($item['nilai_a'] > 5) {
                                                    echo "<tr><td>A</td><td>Gangguan fungsi penglihatan, otot, tulang dan kesehatan kulit, risiko Kanker dan Anemia <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Mata Minus / Plus</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_a'] >= 5) {
                                                    echo "<tr><td>A</td><td>Gangguan fungsi penglihatan, otot, tulang dan kesehatan kulit, risiko Kanker dan Anemia <span style='color:orange;'>(Waspada)</span></td><td>Masalah Mata Minus / Plus</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_b'] > 5) {
                                                    echo "<tr><td>B</td><td>Gangguan fungsi persyarafan, pencernaan, kulit, daya konsentrasi dan metabolisme tubuh <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Vertigo, Migrain</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_b'] >= 5) {
                                                    echo "<tr><td>B</td><td>Gangguan fungsi persyarafan, pencernaan, kulit, daya konsentrasi dan metabolisme tubuh <span style='color:orange;'>(Waspada)</span></td><td>Masalah Vertigo, Migrain</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_c'] > 5) {
                                                    echo "<tr><td>C</td><td>Gangguan fungsi daya tahan tubuh, tulang, pembuluh darah, risiko Kanker dan Anemia <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Flu, Pilek</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_c'] >= 5) {
                                                    echo "<tr><td>C</td><td>Gangguan fungsi daya tahan tubuh, tulang, pembuluh darah, risiko Kanker dan Anemia <span style='color:orange;'>(Waspada)</span></td><td>Masalah Flu, Pilek</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_d'] > 5) {
                                                    echo "<tr><td>D</td><td>Gangguan fungsi tulang, otot, lambung, pembuluh darah, persyarafan dan kesehatan jantung <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Rematik, Tulang</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_d'] >= 5) {
                                                    echo "<tr><td>D</td><td>Gangguan fungsi tulang, otot, lambung, pembuluh darah, persyarafan dan kesehatan jantung <span style='color:orange;'>(Waspada)</span></td><td>Masalah Rematik, Tulang</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_e'] > 5) {
                                                    echo "<tr><td>E</td><td>Gangguan fungsi persyarafan, otot, tumbuh kembang, kulit, kesuburan dan risiko Kanker <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Infertil, Kulit Kusam</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_e'] >= 5) {
                                                    echo "<tr><td>E</td><td>Gangguan fungsi persyarafan, otot, tumbuh kembang, kulit, kesuburan dan risiko Kanker <span style='color:orange;'>(Waspada)</span></td><td>Masalah Infertil, Kulit Kusam</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_f'] > 5) {
                                                    echo "<tr><td>F</td><td>Gangguan fungsi pencernaan, kurang darah (anemia), daya konsentrasi, perkembangan janin <span style='color:red;'>(Risiko Tinggi)</span></td><td>Anemia, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_f'] >= 5) {
                                                    echo "<tr><td>F</td><td>Gangguan fungsi pencernaan, kurang darah (anemia), daya konsentrasi, perkembangan janin <span style='color:orange;'>(Waspada)</span></td><td>Anemia, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_g'] > 5) {
                                                    echo "<tr><td>G</td><td>Gangguan fungsi pencernaan, stamina, kesuburan <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Stamina, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_g'] >= 5) {
                                                    echo "<tr><td>G</td><td>Gangguan fungsi pencernaan, stamina, kesuburan <span style='color:orange;'>(Waspada)</span></td><td>Masalah Stamina, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_h'] > 5) {
                                                    echo "<tr><td>H</td><td>Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Degeneratif</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_h'] >= 5) {
                                                    echo "<tr><td>H</td><td>Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker <span style='color:orange;'>(Waspada)</span></td><td>Masalah Degeneratif</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_i'] > 5) {
                                                    echo "<tr><td>I</td><td>Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Jantung, Stroke</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_i'] >= 5) {
                                                    echo "<tr><td>I</td><td>Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol <span style='color:orange;'>(Waspada)</span></td><td>Masalah Jantung, Stroke</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_j'] > 5) {
                                                    echo "<tr><td>J</td><td>Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Liver, Obesitas</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_j'] >= 5) {
                                                    echo "<tr><td>J</td><td>Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh <span style='color:orange;'>(Waspada)</span></td><td>Masalah Liver, Obesitas</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_k'] > 5) {
                                                    echo "<tr><td>K</td><td>Gangguan fungsi perdaran darah, hipertensi dan kholesterol <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Hipertensi, Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_k'] >= 5) {
                                                    echo "<tr><td>K</td><td>Gangguan fungsi perdaran darah, hipertensi dan kholesterol <span style='color:orange;'>(Waspada)</span></td><td>Masalah Hipertensi, Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_l'] > 5) {
                                                    echo "<tr><td>L</td><td>Gangguan fungsi pencernaan, berat badan <span style='color:red;'>(Risiko Tinggi)</span></td><td>Konstipasi</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_l'] >= 5) {
                                                    echo "<tr><td>L</td><td>Gangguan fungsi pencernaan, berat badan <span style='color:orange;'>(Waspada)</span></td><td>Konstipasi</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_m'] > 5) {
                                                    echo "<tr><td>M</td><td>Gangguan fungsi hormon, kholesterol <span style='color:red;'>(Risiko Tinggi)</span></td><td>Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_m'] >= 5) {
                                                    echo "<tr><td>M</td><td>Gangguan fungsi hormon, kholesterol <span style='color:orange;'>(Waspada)</span></td><td>Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_n'] > 5) {
                                                    echo "<tr><td>N</td><td>Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah regenerasi sel</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_n'] >= 5) {
                                                    echo "<tr><td>N</td><td>Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas <span style='color:orange;'>(Waspada)</span></td><td>Masalah regenerasi sel</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_o'] > 5) {
                                                    echo "<tr><td>O</td><td>Gangguan fungsi hormon, kholesterol <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Liver</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_o'] >= 5) {
                                                    echo "<tr><td>O</td><td>Gangguan fungsi hormon, kholesterol <span style='color:orange;'>(Waspada)</span></td><td>Masalah Liver</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_p'] > 5) {
                                                    echo "<tr><td>P</td><td>Gangguan fungsi memori (daya ingat) <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Daya Ingat</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_p'] >= 5) {
                                                    echo "<tr><td>P</td><td>Gangguan fungsi memori (daya ingat) <span style='color:orange;'>(Waspada)</span></td><td>Masalah Daya Ingat</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_q'] > 5) {
                                                    echo "<tr><td>Q</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tujuan Hidup,<br> Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_q'] >= 5) {
                                                    echo "<tr><td>Q</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:orange;'>(Waspada)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tujuan Hidup,<br> Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_r'] > 5) {
                                                    echo "<tr><td>R</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tujuan Hidup,<br> Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_r'] >= 5) {
                                                    echo "<tr><td>R</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:orange;'>(Waspada)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tujuan Hidup,<br> Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                if ($item['nilai_s'] > 5) {
                                                    echo "<tr><td>S</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tujuan Hidup,<br> Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } elseif ($item['nilai_s'] >= 5) {
                                                    echo "<tr><td>S</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:orange;'>(Waspada)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tujuan Hidup,<br> Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                                                } else {
                                                    echo "";
                                                }
                                                ?>
                                            </table>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>

                            <p style="text-align: center;">
                                <a href="/"><button type="button" class="btn btn-danger">Kembali</button></a>
                            </p>
                        </div>
                        <!-- Content end -->
                    </div>
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