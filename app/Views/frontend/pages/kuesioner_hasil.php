<br>

<?php foreach ($koresponden as $item) : ?>
    <div style="background-color: cyan;">
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">PERTANYAAN</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    JAWABAN
                </label>
            </div>

        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">1. Merasa mudah menderita Flu (Pilek, Batuk) / gangguan pernafasan lainnya ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p1'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">2. Merasa mudah lelah / kecapekan ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p2'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">3. Merasakan kram-kram di tangan / di kaki dan di belakang leher ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p3'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">4. Merasakan nyeri di salah satu / lebih bagian tubuh anda (bagian dada,perut,persendian) ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p4'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">5. Merasakan ada benjolan (abnormal) di bagian tubuh anda ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p5'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">6. Pernah terjatuh / terkilir / keseleo ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p6'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">7. Makan (Breakfast, Lunch, Dinner) kurang dari 3 kali sehari atau sedang melakukan diet ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p7'] ?>
                </label>
            </div>
        </div>
    </div>
    <div style="background-color:greenyellow;">
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">10. Mengkonsumsi buah dan sayur organik kurang dari 9 porsi setiap hari ? (standar WHO)</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p10'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">9. Mengkonsumsi ikan laut (Salmon/Tuna/Tongkol/Layang) kurang dari 3 kali setiap minggu ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p9'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">10. Mengkonsumsi Daging/Telur/Ayam/Tahu/Tempe kurang dari 3 kali setiap minggu ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p10'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">11. Makan di restoran/warung makan/makanan instan diawetkan 3 kali/lebih setiap minggu ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p11'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">12. Minum air kurang dari 2 liter (10 gelas) per hari?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p12'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">13. Minum teh / kopi lebih dari 2 cangkir (200 ml) setiap hari ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p13'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">14. Mengkonsumsi minuman berperisa (perasa berbahan kimia) 3 kali atau lebih setiap minggu ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p14'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">15. Sering mengkonsumsi makanan / cemilan gorengan ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p15'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">16. Vegetarian (tidak makan daging) ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p16'] ?>
                </label>
            </div>
        </div>
    </div>
    <div style="background-color: pink;">
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">17. Memiliki jadwal aktifitas yang pada dan tinggi untuk bekerja / lainnya ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p17'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">18. Rutin diluar rumah lebih dari 10 jam untuk bekerja / aktifitas lainnya?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p18'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">19. Merokok / serumah / sekantor dengan perokok atau tinggal di kota terpolusi ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p19'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">20. Berolahraga minimal 30 menit /hari atau 5 kali setiap minggu selama 45 menit ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p20'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">21. Tidur nyenyak setiap hari rata-rata kurang dari 6 jam ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p21'] ?>
                </label>
            </div>
        </div>
    </div>
    <div style="background-color: floralwhite;">
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">22.Merasa kurang percaya diri / rendah diri / takut berbicara di depan orang banyak ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p22'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">23. Merasa mudah stress, lupa, cemas / khawatir / sulit untuk mengatur waktu ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p23'] ?>
                </label>
            </div>
        </div>
    </div>
    <div style="background-color:lightgreen;">
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">24. Sedang hamil atau menyusui ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p24'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">25. Remaja kurang dari 110 tahun ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p25'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">26. Berusia 55 tahun atau lebih ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p26'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">27. Mengenakan ukuran celana : wanita lebih dari 32 (100 cm), pria lebih dari 36 (90 cm) ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p27'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">28. Mengkonsumsi obat 3 kali atau lebih setiap minggu (obat bebas atau resep dokter) ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p28'] ?>
                </label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <label class="visually" for="inputName">29. Memiliki keluarga yang sakit Hipertensi/Asma/Diabetes/Stroke/Jantung/Kanker ?</label>
            </div>
            <div class="col-md-4">
                <label class="form-check-label">
                    <?= $item['p29'] ?>
                </label>
            </div>
        </div>
    </div>
    <br>
    <table id="scr-vtr-dynamic" class="table table-striped table-hover">
        <tr>
            <td width="40px">
                A
            </td>
            <td width="40px">
                B
            </td>
            <td width="40px">
                C
            </td>
            <td width="40px">
                D
            </td>
            <td width="40px">
                E
            </td>
            <td width="40px">
                F
            </td>
            <td width="40px">
                G
            </td>
            <td width="40px">
                H
            </td>
            <td width="40px">
                I
            </td>
            <td width="40px">
                J
            </td>
            <td width="40px">
                K
            </td>
            <td width="40px">
                L
            </td>
            <td width="40px">
                M
            </td>
            <td width="40px">
                N
            </td>
            <td width="40px">
                O
            </td>
            <td width="40px">
                P
            </td>
            <td width="40px">
                Q
            </td>
            <td width="40px">
                R
            </td>
            <td width="40px">
                S
            </td>
        </tr>
        <tr>
            <td width="40px">
                <?= $nilai_a ?>
            </td>
            <td width="40px">
                <?= $nilai_b ?>
            </td>
            <td width="40px">
                <?= $nilai_c ?>
            </td>
            <td width="40px">
                <?= $nilai_d ?>
            </td>
            <td width="40px">
                <?= $nilai_e ?>
            </td>
            <td width="40px">
                <?= $nilai_f ?>
            </td>
            <td width="40px">
                <?= $nilai_g ?>
            </td>
            <td width="40px">
                <?= $nilai_h ?>
            </td>
            <td width="40px">
                <?= $nilai_i ?>
            </td>
            <td width="40px">
                <?= $nilai_j ?>
            </td>
            <td width="40px">
                <?= $nilai_k ?>
            </td>
            <td width="40px">
                <?= $nilai_l ?>
            </td>
            <td width="40px">
                <?= $nilai_m ?>
            </td>
            <td width="40px">
                <?= $nilai_n ?>
            </td>
            <td width="40px">
                <?= $nilai_o ?>
            </td>
            <td width="40px">
                <?= $nilai_p ?>
            </td>
            <td width="40px">
                <?= $nilai_q ?>
            </td>
            <td width="40px">
                <?= $nilai_r ?>
            </td>
            <td width="40px">
                <?= $nilai_s ?>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <label>Tingkat 1 : Sangat baik, AKG standar, kebutuhan tubuh terpenuhi </label>
            </td>
            <td colspan="6">
                <label>Tingkat 2 : Waspada, memerlukan nutrisi dalam jumlah rendah sesuai kebutuhan tubuh </label>
            </td>
            <td colspan="7">
                <label>Tingkat 3 : Risiko tinggi, sangat memerlukan nutrisi sesuai AKG kebutuhan tubuh </label>
            </td>
        </tr>
    </table>
<?php endforeach ?>
<br>