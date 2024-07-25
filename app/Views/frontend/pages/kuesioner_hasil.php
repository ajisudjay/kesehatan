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
        <div class="desktop">
            <br>
            <h5 align="center">Hasil Analisa Personal Prevention Check Up</h5>
            <div align="center">
                <span style="color:red;">[merah : risiko tinggi]</span> - <span style="color:orange;">[jingga : risiko sedang]</span>
            </div>
            <div class="col-12" style="text-align: justify;">
                <table class="table table-hover" width="100%" style="font-size: small;">
                    <tr>
                        <th style="vertical-align: top;" width="40%">
                            Risiko Masalah Kesehatan
                        </th>
                        <th style="vertical-align: top;">
                            Dampak
                        </th>
                    </tr>
                    <?php
                    if ($nilai_a > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_a</span></td><td>$dampak_a</td></tr>";
                    } elseif ($nilai_a >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_a</span></td><td>$dampak_a</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_b > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_b</span></td><td>$dampak_b</td></tr>";
                    } elseif ($nilai_b >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_b</span></td><td>$dampak_b</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_c > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_c</span></td><td>$dampak_c</td></tr>";
                    } elseif ($nilai_c >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_c</span></td><td>$dampak_c</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_d > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_d</span></td><td>$dampak_d</td></tr>";
                    } elseif ($nilai_d >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_d</span></td><td>$dampak_d</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_e > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_e</span></td><td>$dampak_e</td></tr>";
                    } elseif ($nilai_e >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_e</span></td><td>$dampak_e</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_f > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_f</span></td><td>$dampak_f</td></tr>";
                    } elseif ($nilai_f >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_f</span></td><td>$dampak_f</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_g > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_g</span></td><td>$dampak_g</td></tr>";
                    } elseif ($nilai_g >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_g</span></td><td>$dampak_g</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_h > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_h</span></td><td>$dampak_h</td></tr>";
                    } elseif ($nilai_h >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_h</span></td><td>$dampak_h</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_i > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_i</span></td><td>$dampak_i</td></tr>";
                    } elseif ($nilai_i >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_i</span></td><td>$dampak_i</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_j > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_j</span></td><td>$dampak_j</td></tr>";
                    } elseif ($nilai_j >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_j</span></td><td>$dampak_j</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_k > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_k</span></td><td>$dampak_k</td></tr>";
                    } elseif ($nilai_k >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_k</span></td><td>$dampak_k</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_l > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_l</span></td><td>$dampak_l</td></tr>";
                    } elseif ($nilai_l >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_l</span></td><td>$dampak_l</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_m > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_m</span></td><td>$dampak_m</td></tr>";
                    } elseif ($nilai_m >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_m</span></td><td>$dampak_m</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_n > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_n</span></td><td>$dampak_n</td></tr>";
                    } elseif ($nilai_n >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_n</span></td><td>$dampak_n</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_o > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_o</span></td><td>$dampak_o</td></tr>";
                    } elseif ($nilai_o >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_o</span></td><td>$dampak_o</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_p > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_p</span></td><td>$dampak_p</td></tr>";
                    } elseif ($nilai_p >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_p</span></td><td>$dampak_p</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_q > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_qrs</span></td><td>$dampak_qrs</td></tr>";
                    } elseif ($nilai_q >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_qrs</span></td><td>$dampak_qrs</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_r > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_qrs</span></td><td>$dampak_qrs</td></tr>";
                    } elseif ($nilai_r >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_qrs</span></td><td>$dampak_qrs</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_s > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_qrs</span></td><td>$dampak_qrs</td></tr>";
                    } elseif ($nilai_s >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_qrs</span></td><td>$dampak_qrs</td></tr>";
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
                    if ($nilai_a > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_a</span></td><td>$dampak_eng_a</td></tr>";
                    } elseif ($nilai_a >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_a</span></td><td>$dampak_eng_a</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_b > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_b</span></td><td>$dampak_eng_b</td></tr>";
                    } elseif ($nilai_b >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_b</span></td><td>$dampak_eng_b</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_c > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_c</span></td><td>$dampak_eng_c</td></tr>";
                    } elseif ($nilai_c >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_c</span></td><td>$dampak_eng_c</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_d > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_d</span></td><td>$dampak_eng_d</td></tr>";
                    } elseif ($nilai_d >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_d</span></td><td>$dampak_eng_d</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_e > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_e</span></td><td>$dampak_eng_e</td></tr>";
                    } elseif ($nilai_e >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_e</span></td><td>$dampak_eng_e</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_f > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_f</span></td><td>$dampak_eng_f</td></tr>";
                    } elseif ($nilai_f >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_f</span></td><td>$dampak_eng_f</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_g > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_g</span></td><td>$dampak_eng_g</td></tr>";
                    } elseif ($nilai_g >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_g</span></td><td>$dampak_eng_g</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_h > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_h</span></td><td>$dampak_eng_h</td></tr>";
                    } elseif ($nilai_h >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_h</span></td><td>$dampak_eng_h</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_i > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_i</span></td><td>$dampak_eng_i</td></tr>";
                    } elseif ($nilai_i >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_i</span></td><td>$dampak_eng_i</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_j > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_j</span></td><td>$dampak_eng_j</td></tr>";
                    } elseif ($nilai_j >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_j</span></td><td>$dampak_eng_j</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_k > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_k</span></td><td>$dampak_eng_k</td></tr>";
                    } elseif ($nilai_k >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_k</span></td><td>$dampak_eng_k</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_l > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_l</span></td><td>$dampak_eng_l</td></tr>";
                    } elseif ($nilai_l >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_l</span></td><td>$dampak_eng_l</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_m > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_m</span></td><td>$dampak_eng_m</td></tr>";
                    } elseif ($nilai_m >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_m</span></td><td>$dampak_eng_m</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_n > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_n</span></td><td>$dampak_eng_n</td></tr>";
                    } elseif ($nilai_n >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_n</span></td><td>$dampak_eng_n</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_o > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_o</span></td><td>$dampak_eng_o</td></tr>";
                    } elseif ($nilai_o >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_o</span></td><td>$dampak_eng_o</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_p > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_p</span></td><td>$dampak_eng_p</td></tr>";
                    } elseif ($nilai_p >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_p</span></td><td>$dampak_eng_p</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_q > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_qrs</span></td><td>$dampak_eng_qrs</td></tr>";
                    } elseif ($nilai_q >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_qrs</span></td><td>$dampak_eng_qrs</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_r > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_qrs</span></td><td>$dampak_eng_qrs</td></tr>";
                    } elseif ($nilai_r >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_qrs</span></td><td>$dampak_eng_qrs</td></tr>";
                    } else {
                        echo "";
                    }
                    if ($nilai_s > 5) {
                        echo "<tr><td><span style='color:red;'>$risiko_eng_qrs</span></td><td>$dampak_eng_qrs</td></tr>";
                    } elseif ($nilai_s >= 5) {
                        echo "<tr><td><span style='color:orange;'>$risiko_eng_qrs</span></td><td>$dampak_eng_qrs</td></tr>";
                    } else {
                        echo "";
                    }
                    ?>
                </table>
            </div>
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