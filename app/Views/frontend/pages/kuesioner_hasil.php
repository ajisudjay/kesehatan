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
            <div class="col-md-2">
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
            <div class="col-md-2">
                <b>Gender : <?= $item['jk'] ?></b>
            </div>
            <div class="col-md-2">
                <b>Age : <?= $item['umur'] ?></b>
            </div>
        <?php }  ?>
    </div>

    <?php if ($bahasa === 'Indonesia') { ?>
        <div class="mobile">
            <h5 align="center"> Results of the Personal Prevention Check-Up Analysis </h5>
            <div class="col-12" style="text-align: left ;">
                <?php
                if ($nilai_a > 5) {
                    echo "~ Risiko masalah kesehatan mata <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_a >= 5) {
                    echo "~ Risiko masalah kesehatan mata <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_b > 5) {
                    echo "~ Risiko masalah kesehatan persarafan <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_b >= 5) {
                    echo "~ Risiko masalah kesehatan persarafan <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_c > 5) {
                    echo "~ Risiko masalah daya tahan tubuh <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_c >= 5) {
                    echo "~ Risiko masalah daya tahan tubuh <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_d > 5) {
                    echo "~ Risiko masalah kesehatan tulang dan otot serta lambung <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_d >= 5) {
                    echo "~ Risiko masalah kesehatan tulang dan otot serta lambung <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_e > 5) {
                    echo "~ Risiko masalah kesehatan kulit dan kesuburan  <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_e >= 5) {
                    echo "~ Risiko masalah kesehatan kulit dan kesuburan  <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_f > 5) {
                    echo "~ Risiko masalah kesehatan darah <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_f >= 5) {
                    echo "~ Risiko masalah kesehatan darah <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_g > 5) {
                    echo "~ Gangguan fungsi pencernaan, stamina, kesuburan <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_g >= 5) {
                    echo "~ Gangguan fungsi pencernaan, stamina, kesuburan <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_h > 5) {
                    echo "~ Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_h >= 5) {
                    echo "~ Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_i > 5) {
                    echo "~ Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_i >= 5) {
                    echo "~ Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_j > 5) {
                    echo "~ Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_j >= 5) {
                    echo "~ Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_k > 5) {
                    echo "~ Gangguan fungsi perdaran darah, hipertensi dan kholesterol <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_k >= 5) {
                    echo "~ Gangguan fungsi perdaran darah, hipertensi dan kholesterol <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_l > 5) {
                    echo "~ Gangguan fungsi pencernaan, berat badan <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_l >= 5) {
                    echo "~ Gangguan fungsi pencernaan, berat badan <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_m > 5) {
                    echo "~ Gangguan fungsi hormon, kholesterol <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_m >= 5) {
                    echo "~ Gangguan fungsi hormon, kholesterol <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_n > 5) {
                    echo "~ Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_n >= 5) {
                    echo "~ Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_o > 5) {
                    echo "~ Gangguan fungsi hormon, kholesterol <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_o >= 5) {
                    echo "~ Gangguan fungsi hormon, kholesterol <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_p > 5) {
                    echo "~ Gangguan fungsi memori (daya ingat) <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_p >= 5) {
                    echo "~ Gangguan fungsi memori (daya ingat) <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_q > 5) {
                    echo "~ Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_q >= 5) {
                    echo "~ Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_r > 5) {
                    echo "~ Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_r >= 5) {
                    echo "~ Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_s > 5) {
                    echo "~ Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_s >= 5) {
                    echo "~ Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                ?>
            </div>
            <br>
            <div class="col-12" style="text-align: left;">
                <b> Risiko Masalah Kesehatan : </b> <br>
                <table class="table table-striped table-hover" border="1" width="100%" style="font-size: xx-small;">
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;">
                            No
                        </th>
                        <th rowspan="2" style="vertical-align: middle;">
                            Risiko Masalah Kesehatan
                        </th>
                        <th rowspan="2">
                            Anjuran : <br>Program Sehat 90 Hari <br> Untuk anda yang
                        </th>
                    </tr>
                    <tr></tr>

                    <?php
                    if ($nilai_a >= 5) {
                        echo "<tr><td>A</td><td>Masalah Mata Minus / Plus</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_b >= 5) {
                        echo "<tr><td>B</td><td>Masalah Vertigo, Migrain</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_c >= 5) {
                        echo "<tr><td>C</td><td>Masalah Flu, Pilek</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_d >= 5) {
                        echo "<tr><td>D</td><td>Masalah Rematik, Tulang</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_e >= 5) {
                        echo "<tr><td>E</td><td>Masalah Infertil, Kulit Kusam</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_f >= 5) {
                        echo "<tr><td>F</td><td>Anemia, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_g >= 5) {
                        echo "<tr><td>G</td><td>Masalah Stamina, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_h >= 5) {
                        echo "<tr><td>H</td><td>Masalah Degeneratif</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_i >= 5) {
                        echo "<tr><td>I</td><td>Masalah Jantung, Stroke</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_j >= 5) {
                        echo "<tr><td>J</td><td>Masalah Liver, Obesitas</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_k >= 5) {
                        echo "<tr><td>K</td><td>Masalah Hipertensi, Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_l >= 5) {
                        echo "<tr><td>L</td><td>Konstipasi</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_m >= 5) {
                        echo "<tr><td>M</td><td>Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_n >= 5) {
                        echo "<tr><td>N</td><td>Masalah regenerasi sel</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_o >= 5) {
                        echo "<tr><td>O</td><td>Masalah Liver</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_p >= 5) {
                        echo "<tr><td>P</td><td>Masalah Daya Ingat</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_q >= 5) {
                        echo "<tr><td>Q</td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_r >= 5) {
                        echo "<tr><td>R</td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_s >= 5) {
                        echo "<tr><td>S</td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    ?>
                </table>
            </div>
        </div>
        <!-- risiko kesehatan -->
        <!-- tampilan desktop -->
        <div class="desktop">
            <div class="col-12" style="text-align: justify;">
                <table class="table table-hover" border="3" width="100%" style="font-size: small;">
                    <tr>
                        <th rowspan="2" style="vertical-align: top;">
                            No
                        </th>
                        <th rowspan="2" style="vertical-align: top;max-width:min-content;">
                            Dampak kesehatan yang akan muncul bila tidak ada upaya pencegahan
                        </th>
                        <th rowspan="2" style="vertical-align: top;">
                            Tingkat
                        </th>
                        <th rowspan="2" style="vertical-align: top;text-align: left;">
                            Risiko Masalah Kesehatan
                        </th>
                        <th rowspan="2">
                            Anjuran : <br>Program Sehat 90 Hari <br> Untuk anda yang
                        </th>
                    </tr>
                    <tr></tr>
                    <?php foreach ($rule as $item2) : ?>
                    <?php endforeach ?>
                    <?php
                    if ($nilai_a > 5) {
                        echo "<tr><td align='center'>1</td><td>Gangguan fungsi penglihatan, otot, tulang dan kesehatan kulit, risiko Kanker dan Anemia</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>A. Masalah Mata Minus / Plus</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_a >= 5) {
                        echo "<tr><td align='center'>A</td><td>Gangguan fungsi penglihatan, otot, tulang dan kesehatan kulit, risiko Kanker dan Anemia</td><td><span style='color:orange;'>(Waspada)</span></td><td>A. Masalah Mata Minus / Plus</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_b > 5) {
                        echo "<tr><td align='center'>B</td><td>Gangguan fungsi persyarafan, pencernaan, kulit, daya konsentrasi dan metabolisme tubuh</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Vertigo, Migrain</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_b >= 5) {
                        echo "<tr><td align='center'>B</td><td>Gangguan fungsi persyarafan, pencernaan, kulit, daya konsentrasi dan metabolisme tubuh</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Vertigo, Migrain</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_c > 5) {
                        echo "<tr><td align='center'>C</td><td>Gangguan fungsi daya tahan tubuh, tulang, pembuluh darah, risiko Kanker dan Anemia</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Flu, Pilek</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_c >= 5) {
                        echo "<tr><td align='center'>C</td><td>Gangguan fungsi daya tahan tubuh, tulang, pembuluh darah, risiko Kanker dan Anemia</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Flu, Pilek</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_d > 5) {
                        echo "<tr><td align='center'>D</td><td>Gangguan fungsi tulang, otot, lambung, pembuluh darah, persyarafan dan kesehatan jantung</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Rematik, Tulang</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_d >= 5) {
                        echo "<tr><td align='center'>D</td><td>Gangguan fungsi tulang, otot, lambung, pembuluh darah, persyarafan dan kesehatan jantung</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Rematik, Tulang</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_e > 5) {
                        echo "<tr><td align='center'>E</td><td>Gangguan fungsi persyarafan, otot, tumbuh kembang, kulit, kesuburan dan risiko Kanker</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Infertil, Kulit Kusam</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_e >= 5) {
                        echo "<tr><td align='center'>E</td><td>Gangguan fungsi persyarafan, otot, tumbuh kembang, kulit, kesuburan dan risiko Kanker</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Infertil, Kulit Kusam</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_f > 5) {
                        echo "<tr><td align='center'>F</td><td>Gangguan fungsi pencernaan, kurang darah (anemia), daya konsentrasi, perkembangan janin</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Anemia, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_f >= 5) {
                        echo "<tr><td align='center'>F</td><td>Gangguan fungsi pencernaan, kurang darah (anemia), daya konsentrasi, perkembangan janin</td><td><span style='color:orange;'>(Waspada)</span></td><td>Anemia, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_g > 5) {
                        echo "<tr><td align='center'>G</td><td>Gangguan fungsi pencernaan, stamina, kesuburan</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Stamina, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_g >= 5) {
                        echo "<tr><td align='center'>G</td><td>Gangguan fungsi pencernaan, stamina, kesuburan</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Stamina, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_h > 5) {
                        echo "<tr><td align='center'>H</td><td>Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Degeneratif</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_h >= 5) {
                        echo "<tr><td align='center'>H</td><td>Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Degeneratif</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_i > 5) {
                        echo "<tr><td align='center'>I</td><td>Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Jantung, Stroke</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_i >= 5) {
                        echo "<tr><td align='center'>I</td><td>Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Jantung, Stroke</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_j > 5) {
                        echo "<tr><td align='center'>J</td><td>Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Liver, Obesitas</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_j >= 5) {
                        echo "<tr><td align='center'>J</td><td>Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Liver, Obesitas</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_k > 5) {
                        echo "<tr><td align='center'>K</td><td>Gangguan fungsi perdaran darah, hipertensi dan kholesterol</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Hipertensi, Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_k >= 5) {
                        echo "<tr><td align='center'>K</td><td>Gangguan fungsi perdaran darah, hipertensi dan kholesterol</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Hipertensi, Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_l > 5) {
                        echo "<tr><td align='center'>L</td><td>Gangguan fungsi pencernaan, berat badan</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Konstipasi</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_l >= 5) {
                        echo "<tr><td align='center'>L</td><td>Gangguan fungsi pencernaan, berat badan</td><td><span style='color:orange;'>(Waspada)</span></td><td>Konstipasi</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_m > 5) {
                        echo "<tr><td align='center'>M</td><td>Gangguan fungsi hormon, kholesterol</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_m >= 5) {
                        echo "<tr><td align='center'>M</td><td>Gangguan fungsi hormon, kholesterol</td><td><span style='color:orange;'>(Waspada)</span></td><td>Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_n > 5) {
                        echo "<tr><td align='center'>N</td><td>Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah regenerasi sel</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_n >= 5) {
                        echo "<tr><td align='center'>N</td><td>Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah regenerasi sel</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_o > 5) {
                        echo "<tr><td align='center'>O</td><td>Gangguan fungsi hormon, kholesterol</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Liver</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_o >= 5) {
                        echo "<tr><td align='center'>O</td><td>Gangguan fungsi hormon, kholesterol</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Liver</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_p > 5) {
                        echo "<tr><td align='center'>P</td><td>Gangguan fungsi memori (daya ingat)</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Daya Ingat</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_p >= 5) {
                        echo "<tr><td align='center'>P</td><td>Gangguan fungsi memori (daya ingat)</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Daya Ingat</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_q > 5) {
                        echo "<tr><td align='center'>Q</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_q >= 5) {
                        echo "<tr><td align='center'>Q</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_r > 5) {
                        echo "<tr><td align='center'>R</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_r >= 5) {
                        echo "<tr><td align='center'>R</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_s > 5) {
                        echo "<tr><td align='center'>S</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_s >= 5) {
                        echo "<tr><td align='center'>S</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    ?>
                </table>
            </div>
        </div>
    <?php } else { ?>
        <div class="mobile">
            <h5 align="center"> Results of the Personal Prevention Check-Up Analysis </h5>
            <div class="col-12" style="text-align: left ;">
                <?php
                if ($nilai_a > 5) {
                    echo "~ Gangguan fungsi penglihatan, otot, tulang dan kesehatan kulit, risiko Kanker dan Anemia <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_a >= 5) {
                    echo "~ Gangguan fungsi penglihatan, otot, tulang dan kesehatan kulit, risiko Kanker dan Anemia <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_b > 5) {
                    echo "~ Gangguan fungsi persyarafan, pencernaan, kulit, daya konsentrasi dan metabolisme tubuh <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_b >= 5) {
                    echo "~ Gangguan fungsi persyarafan, pencernaan, kulit, daya konsentrasi dan metabolisme tubuh <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_c > 5) {
                    echo "~ Gangguan fungsi daya tahan tubuh, tulang, pembuluh darah, risiko Kanker dan Anemia <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_c >= 5) {
                    echo "~ Gangguan fungsi daya tahan tubuh, tulang, pembuluh darah, risiko Kanker dan Anemia <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_d > 5) {
                    echo "~ Gangguan fungsi tulang, otot, lambung, pembuluh darah, persyarafan dan kesehatan jantung <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_d >= 5) {
                    echo "~ Gangguan fungsi tulang, otot, lambung, pembuluh darah, persyarafan dan kesehatan jantung <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_e > 5) {
                    echo "~ Gangguan fungsi persyarafan, otot, tumbuh kembang, kulit, kesuburan dan risiko Kanker <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_e >= 5) {
                    echo "~ Gangguan fungsi persyarafan, otot, tumbuh kembang, kulit, kesuburan dan risiko Kanker <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_f > 5) {
                    echo "~ Gangguan fungsi pencernaan, kurang darah (anemia), daya konsentrasi, perkembangan janin <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_f >= 5) {
                    echo "~ Gangguan fungsi pencernaan, kurang darah (anemia), daya konsentrasi, perkembangan janin <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_g > 5) {
                    echo "~ Gangguan fungsi pencernaan, stamina, kesuburan <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_g >= 5) {
                    echo "~ Gangguan fungsi pencernaan, stamina, kesuburan <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_h > 5) {
                    echo "~ Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_h >= 5) {
                    echo "~ Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_i > 5) {
                    echo "~ Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_i >= 5) {
                    echo "~ Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_j > 5) {
                    echo "~ Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_j >= 5) {
                    echo "~ Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_k > 5) {
                    echo "~ Gangguan fungsi perdaran darah, hipertensi dan kholesterol <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_k >= 5) {
                    echo "~ Gangguan fungsi perdaran darah, hipertensi dan kholesterol <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_l > 5) {
                    echo "~ Gangguan fungsi pencernaan, berat badan <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_l >= 5) {
                    echo "~ Gangguan fungsi pencernaan, berat badan <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_m > 5) {
                    echo "~ Gangguan fungsi hormon, kholesterol <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_m >= 5) {
                    echo "~ Gangguan fungsi hormon, kholesterol <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_n > 5) {
                    echo "~ Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_n >= 5) {
                    echo "~ Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_o > 5) {
                    echo "~ Gangguan fungsi hormon, kholesterol <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_o >= 5) {
                    echo "~ Gangguan fungsi hormon, kholesterol <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_p > 5) {
                    echo "~ Gangguan fungsi memori (daya ingat) <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_p >= 5) {
                    echo "~ Gangguan fungsi memori (daya ingat) <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_q > 5) {
                    echo "~ Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_q >= 5) {
                    echo "~ Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_r > 5) {
                    echo "~ Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_r >= 5) {
                    echo "~ Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                if ($nilai_s > 5) {
                    echo "~ Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:red;'>(Risiko Tinggi)</span><br>";
                } elseif ($nilai_s >= 5) {
                    echo "~ Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:orange;'>(Waspada)</span><br>";
                } else {
                    echo "";
                }
                ?>
            </div>
            <br>
            <div class="col-12" style="text-align: left;">
                <table class="table table-striped table-hover" border="1" width="100%" style="font-size: xx-small;">
                    <tr>
                        <th rowspan="2" style="vertical-align: middle;">
                            Risiko Masalah Kesehatan
                        </th>
                        <th rowspan="2">
                            Anjuran : <br>Program Sehat 90 Hari <br> Untuk anda yang
                        </th>
                    </tr>
                    <tr></tr>

                    <?php
                    if ($nilai_a >= 5) {
                        echo "<tr><td>Masalah Mata Minus / Plus</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_b >= 5) {
                        echo "<tr><td>Masalah Vertigo, Migrain</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_c >= 5) {
                        echo "<tr><td>Masalah Flu, Pilek</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_d >= 5) {
                        echo "<tr><td>Masalah Rematik, Tulang</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_e >= 5) {
                        echo "<tr><td>Masalah Infertil, Kulit Kusam</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_f >= 5) {
                        echo "<tr><td>Anemia, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_g >= 5) {
                        echo "<tr><td>Masalah Stamina, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_h >= 5) {
                        echo "<tr><td>Masalah Degeneratif</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_i >= 5) {
                        echo "<tr><td>Masalah Jantung, Stroke</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_j >= 5) {
                        echo "<tr><td>Masalah Liver, Obesitas</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_k >= 5) {
                        echo "<tr><td>Masalah Hipertensi, Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_l >= 5) {
                        echo "<tr><td>Konstipasi</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_m >= 5) {
                        echo "<tr><td>Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_n >= 5) {
                        echo "<tr><td>Masalah regenerasi sel</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_o >= 5) {
                        echo "<tr><td>Masalah Liver</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_p >= 5) {
                        echo "<tr><td>Masalah Daya Ingat</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_q >= 5) {
                        echo "<tr><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_r >= 5) {
                        echo "<tr><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_s >= 5) {
                        echo "<tr><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    ?>
                </table>
            </div>
        </div>
        <!-- tampilan desktop -->
        <div class="desktop">
            <br>
            <h5 align="center"> Results of the Personal Prevention Check-Up Analysis </h5>
            <div class="col-12" style="text-align: justify;">
                <table class="table table-hover" border="3" width="100%" style="font-size: small;">
                    <tr>

                        <th style="vertical-align: top;max-width:min-content;">
                            Dampak kesehatan yang akan muncul bila tidak ada upaya pencegahan
                        </th>
                        <th style="vertical-align: top;">
                            Tingkat
                        </th>
                        <th style="vertical-align: top;text-align: left;">
                            Risiko Masalah Kesehatan
                        </th>
                        <th>
                            Anjuran : <br>Program Sehat 90 Hari <br> Untuk anda yang
                        </th>
                    </tr>
                    <tr></tr>
                    <?php foreach ($rule as $item2) : ?>
                    <?php endforeach ?>
                    <?php
                    if ($nilai_a > 5) {
                        echo "<tr><td>Gangguan fungsi penglihatan, otot, tulang dan kesehatan kulit, risiko Kanker dan Anemia</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>A. Masalah Mata Minus / Plus</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_a >= 5) {
                        echo "<tr><td>Gangguan fungsi penglihatan, otot, tulang dan kesehatan kulit, risiko Kanker dan Anemia</td><td><span style='color:orange;'>(Waspada)</span></td><td>A. Masalah Mata Minus / Plus</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_b > 5) {
                        echo "<tr><td>Gangguan fungsi persyarafan, pencernaan, kulit, daya konsentrasi dan metabolisme tubuh</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Vertigo, Migrain</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_b >= 5) {
                        echo "<tr><td>Gangguan fungsi persyarafan, pencernaan, kulit, daya konsentrasi dan metabolisme tubuh</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Vertigo, Migrain</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_c > 5) {
                        echo "<tr><td>Gangguan fungsi daya tahan tubuh, tulang, pembuluh darah, risiko Kanker dan Anemia</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Flu, Pilek</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_c >= 5) {
                        echo "<tr><td>Gangguan fungsi daya tahan tubuh, tulang, pembuluh darah, risiko Kanker dan Anemia</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Flu, Pilek</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_d > 5) {
                        echo "<tr><td>Gangguan fungsi tulang, otot, lambung, pembuluh darah, persyarafan dan kesehatan jantung</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Rematik, Tulang</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_d >= 5) {
                        echo "<tr><td>Gangguan fungsi tulang, otot, lambung, pembuluh darah, persyarafan dan kesehatan jantung</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Rematik, Tulang</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_e > 5) {
                        echo "<tr><td>Gangguan fungsi persyarafan, otot, tumbuh kembang, kulit, kesuburan dan risiko Kanker</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Infertil, Kulit Kusam</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_e >= 5) {
                        echo "<tr><td>Gangguan fungsi persyarafan, otot, tumbuh kembang, kulit, kesuburan dan risiko Kanker</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Infertil, Kulit Kusam</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_f > 5) {
                        echo "<tr><td>Gangguan fungsi pencernaan, kurang darah (anemia), daya konsentrasi, perkembangan janin</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Anemia, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_f >= 5) {
                        echo "<tr><td>Gangguan fungsi pencernaan, kurang darah (anemia), daya konsentrasi, perkembangan janin</td><td><span style='color:orange;'>(Waspada)</span></td><td>Anemia, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_g > 5) {
                        echo "<tr><td>Gangguan fungsi pencernaan, stamina, kesuburan</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Stamina, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_g >= 5) {
                        echo "<tr><td>Gangguan fungsi pencernaan, stamina, kesuburan</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Stamina, Sembelit</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_h > 5) {
                        echo "<tr><td>Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Degeneratif</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_h >= 5) {
                        echo "<tr><td>Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Degeneratif</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_i > 5) {
                        echo "<tr><td>Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Jantung, Stroke</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_i >= 5) {
                        echo "<tr><td>Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Jantung, Stroke</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_j > 5) {
                        echo "<tr><td>Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Liver, Obesitas</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_j >= 5) {
                        echo "<tr><td>Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Liver, Obesitas</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_k > 5) {
                        echo "<tr><td>Gangguan fungsi perdaran darah, hipertensi dan kholesterol</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Hipertensi, Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_k >= 5) {
                        echo "<tr><td>Gangguan fungsi perdaran darah, hipertensi dan kholesterol</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Hipertensi, Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_l > 5) {
                        echo "<tr><td>Gangguan fungsi pencernaan, berat badan</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Konstipasi</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_l >= 5) {
                        echo "<tr><td>Gangguan fungsi pencernaan, berat badan</td><td><span style='color:orange;'>(Waspada)</span></td><td>Konstipasi</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_m > 5) {
                        echo "<tr><td>Gangguan fungsi hormon, kholesterol</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_m >= 5) {
                        echo "<tr><td>Gangguan fungsi hormon, kholesterol</td><td><span style='color:orange;'>(Waspada)</span></td><td>Kholesterol</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_n > 5) {
                        echo "<tr><td>Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah regenerasi sel</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_n >= 5) {
                        echo "<tr><td>Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah regenerasi sel</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_o > 5) {
                        echo "<tr><td>Gangguan fungsi hormon, kholesterol</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Liver</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_o >= 5) {
                        echo "<tr><td>Gangguan fungsi hormon, kholesterol</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Liver</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_p > 5) {
                        echo "<tr><td>Gangguan fungsi memori (daya ingat)</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Daya Ingat</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_p >= 5) {
                        echo "<tr><td>Gangguan fungsi memori (daya ingat)</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Daya Ingat</td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_q > 5) {
                        echo "<tr><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_q >= 5) {
                        echo "<tr><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_r > 5) {
                        echo "<tr><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_r >= 5) {
                        echo "<tr><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_s > 5) {
                        echo "<tr><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)</td><td><span style='color:red;'>Risiko Tinggi</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } elseif ($nilai_s >= 5) {
                        echo "<tr><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu)</td><td><span style='color:orange;'>(Waspada)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tn Hidup, Kecemasan, Stress dan Manajemen Waktu<br></td><td>Ikuti Program Sehat 90 Hari untuk mencegah sakit, keparahan dan kekambuhan</td></tr>";
                    } else {
                        echo "";
                    }
                    ?>
                </table>
            </div>
        </div>
    <?php } ?>


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



    <script>
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
    </script>
<?php endforeach ?>
<br>