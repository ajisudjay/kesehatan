  <div class="dt-responsive table-responsive">
      <!-- id dibawah bisa diganti => simpletable -->
      <table id="alt-pg-dt" class="table table-striped table-bordered table-hover nowrap">
          <thead>
              <tr>
                  <th style="max-width:5%; text-align: center;">No.</th>
                  <th style="max-width:10%; text-align: center;">Aksi</th>
                  <th style="max-width:25%; text-align: center;">Nama</th>
                  <th style="max-width:20%; text-align: center;">Kontak</th>
                  <th style="max-width:20%; text-align: center;">Jenis Kelamin</th>
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
                      <td>
                          <!-- button edit modal -->
                          <button type="button" class="bg-transparent border-0" data-toggle="modal" data-target="#editmodal<?= $id = $item['id'] ?>">
                              <span class="feather icon-eye text-primary"></span>
                          </button>
                          <!-- edit modal-->
                          <div class="modal fade" id="editmodal<?= $id = $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">Detail Klien : <?= $item['nama'] ?></h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <div class="modal-body">
                                          <form action="<?= base_url('ppcu/edit'); ?>" method="post" class="edit">
                                              <?= csrf_field() ?>
                                              <div class="modal-body" style="text-align:left ;">
                                                  <div class="row">
                                                      <div class="col-md-3">
                                                          <b>Nama : </b>
                                                          <?= $item['nama'] ?>
                                                      </div>
                                                      <div class="col-md-2">
                                                          <b>Telepon : </b>
                                                          <?= $item['telepon'] ?>
                                                      </div>
                                                      <div class="col-md-3">
                                                          <b>Jenis Kelamin : </b>
                                                          <?= $item['jk'] ?>
                                                      </div>
                                                      <div class="col-md-2">
                                                          <b>Umur : </b>
                                                          <?= $item['umur'] ?> Tahun
                                                      </div>
                                                  </div>
                                                  <br>
                                                  <div class="row">
                                                      <div class="col-md-11">
                                                          <table class="table table-striped" style="font-size: x-small;">
                                                              <tr>
                                                                  <td>
                                                                      No
                                                                  </td>
                                                                  <td>
                                                                      Dampak
                                                                  </td>
                                                                  <td>
                                                                      Risiko
                                                                  </td>
                                                                  <td>
                                                                      Anjuran
                                                                  </td>
                                                              </tr>
                                                              <?php
                                                                if ($item['nilai_a'] > 5) {
                                                                    echo "<tr><td>1</td><td>Gangguan fungsi penglihatan, otot, tulang dan kesehatan kulit, risiko Kanker dan Anemia <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Mata Minus / Plus</td><td>SEHAT mencegah PENYAKIT</td></tr>";
                                                                } elseif ($item['nilai_a'] >= 5) {
                                                                    echo "<tr><td>1</td><td>Gangguan fungsi penglihatan, otot, tulang dan kesehatan kulit, risiko Kanker dan Anemia <span style='color:orange;'>(Waspada)</span></td><td>Masalah Mata Minus / Plus</td><td>SEHAT mencegah PENYAKIT</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_b'] > 5) {
                                                                    echo "<tr><td>2</td><td>Gangguan fungsi persyarafan, pencernaan, kulit, daya konsentrasi dan metabolisme tubuh <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Vertigo, Migrain</td><td>SEHAT mencegah PENYAKIT</td></tr>";
                                                                } elseif ($item['nilai_b'] >= 5) {
                                                                    echo "<tr><td>2</td><td>Gangguan fungsi persyarafan, pencernaan, kulit, daya konsentrasi dan metabolisme tubuh <span style='color:orange;'>(Waspada)</span></td><td>Masalah Vertigo, Migrain</td><td>SEHAT mencegah PENYAKIT</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_c'] > 5) {
                                                                    echo "<tr><td>3</td><td>Gangguan fungsi daya tahan tubuh, tulang, pembuluh darah, risiko Kanker dan Anemia <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Flu, Pilek</td><td>SEHAT mencegah PENYAKIT</td></tr>";
                                                                } elseif ($item['nilai_c'] >= 5) {
                                                                    echo "<tr><td>3</td><td>Gangguan fungsi daya tahan tubuh, tulang, pembuluh darah, risiko Kanker dan Anemia <span style='color:orange;'>(Waspada)</span></td><td>Masalah Flu, Pilek</td><td>SEHAT mencegah PENYAKIT</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_d'] > 5) {
                                                                    echo "<tr><td>4</td><td>Gangguan fungsi tulang, otot, lambung, pembuluh darah, persyarafan dan kesehatan jantung <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Rematik, Tulang</td><td>SEHAT mencegah PENYAKIT</td></tr>";
                                                                } elseif ($item['nilai_d'] >= 5) {
                                                                    echo "<tr><td>4</td><td>Gangguan fungsi tulang, otot, lambung, pembuluh darah, persyarafan dan kesehatan jantung <span style='color:orange;'>(Waspada)</span></td><td>Masalah Rematik, Tulang</td><td>SEHAT mencegah PENYAKIT</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_e'] > 5) {
                                                                    echo "<tr><td>5</td><td>Gangguan fungsi persyarafan, otot, tumbuh kembang, kulit, kesuburan dan risiko Kanker <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Infertil, Kulit Kusam</td><td>SEHAT mencegah PENYAKIT</td></tr>";
                                                                } elseif ($item['nilai_e'] >= 5) {
                                                                    echo "<tr><td>5</td><td>Gangguan fungsi persyarafan, otot, tumbuh kembang, kulit, kesuburan dan risiko Kanker <span style='color:orange;'>(Waspada)</span></td><td>Masalah Infertil, Kulit Kusam</td><td>SEHAT mencegah PENYAKIT</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_f'] > 5) {
                                                                    echo "<tr><td>6</td><td>Gangguan fungsi pencernaan, kurang darah (anemia), daya konsentrasi, perkembangan janin <span style='color:red;'>(Risiko Tinggi)</span></td><td>Anemia, Sembelit</td><td>SEHAT mencegah PENYAKIT</td></tr>";
                                                                } elseif ($item['nilai_f'] >= 5) {
                                                                    echo "<tr><td>6</td><td>Gangguan fungsi pencernaan, kurang darah (anemia), daya konsentrasi, perkembangan janin <span style='color:orange;'>(Waspada)</span></td><td>Anemia, Sembelit</td><td>SEHAT mencegah PENYAKIT</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_g'] > 5) {
                                                                    echo "<tr><td>7</td><td>Gangguan fungsi pencernaan, stamina, kesuburan <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Stamina, Sembelit</td><td>SAKIT mencegah KEPARAHAN</td></tr>";
                                                                } elseif ($item['nilai_g'] >= 5) {
                                                                    echo "<tr><td>7</td><td>Gangguan fungsi pencernaan, stamina, kesuburan <span style='color:orange;'>(Waspada)</span></td><td>Masalah Stamina, Sembelit</td><td>SAKIT mencegah KEPARAHAN</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_h'] > 5) {
                                                                    echo "<tr><td>8</td><td>Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Degeneratif</td><td>SAKIT mencegah KEPARAHAN</td></tr>";
                                                                } elseif ($item['nilai_h'] >= 5) {
                                                                    echo "<tr><td>8</td><td>Gangguan fungsi pencernaan, stamina dengan aktivitas tinggi dan risiko Kanker <span style='color:orange;'>(Waspada)</span></td><td>Masalah Degeneratif</td><td>SAKIT mencegah KEPARAHAN</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_i'] > 5) {
                                                                    echo "<tr><td>9</td><td>Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Jantung, Stroke</td><td>SAKIT mencegah KEPARAHAN</td></tr>";
                                                                } elseif ($item['nilai_i'] >= 5) {
                                                                    echo "<tr><td>9</td><td>Gangguan fungsi peredaran darah, persyarafan, metabolisme tubuh dan risiko tinggi kholesterol <span style='color:orange;'>(Waspada)</span></td><td>Masalah Jantung, Stroke</td><td>SAKIT mencegah KEPARAHAN</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_j'] > 5) {
                                                                    echo "<tr><td>10</td><td>Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Liver, Obesitas</td><td>SAKIT mencegah KEPARAHAN</td></tr>";
                                                                } elseif ($item['nilai_j'] >= 5) {
                                                                    echo "<tr><td>10</td><td>Gangguan fungsi hati, kholesterol, metabolisme dan lemak tubuh <span style='color:orange;'>(Waspada)</span></td><td>Masalah Liver, Obesitas</td><td>SAKIT mencegah KEPARAHAN</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_k'] > 5) {
                                                                    echo "<tr><td>11</td><td>Gangguan fungsi perdaran darah, hipertensi dan kholesterol <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Hipertensi, Kholesterol</td><td>SAKIT mencegah KEPARAHAN</td></tr>";
                                                                } elseif ($item['nilai_k'] >= 5) {
                                                                    echo "<tr><td>11</td><td>Gangguan fungsi perdaran darah, hipertensi dan kholesterol <span style='color:orange;'>(Waspada)</span></td><td>Masalah Hipertensi, Kholesterol</td><td>SAKIT mencegah KEPARAHAN</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_l'] > 5) {
                                                                    echo "<tr><td>12</td><td>Gangguan fungsi pencernaan, berat badan <span style='color:red;'>(Risiko Tinggi)</span></td><td>Konstipasi</td><td>SAKIT mencegah KEPARAHAN</td></tr>";
                                                                } elseif ($item['nilai_l'] >= 5) {
                                                                    echo "<tr><td>12</td><td>Gangguan fungsi pencernaan, berat badan <span style='color:orange;'>(Waspada)</span></td><td>Konstipasi</td><td>SAKIT mencegah KEPARAHAN</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_m'] > 5) {
                                                                    echo "<tr><td>13</td><td>Gangguan fungsi hormon, kholesterol <span style='color:red;'>(Risiko Tinggi)</span></td><td>Kholesterol</td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } elseif ($item['nilai_m'] >= 5) {
                                                                    echo "<tr><td>13</td><td>Gangguan fungsi hormon, kholesterol <span style='color:orange;'>(Waspada)</span></td><td>Kholesterol</td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_n'] > 5) {
                                                                    echo "<tr><td>14</td><td>Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah regenerasi sel</td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } elseif ($item['nilai_n'] >= 5) {
                                                                    echo "<tr><td>14</td><td>Gangguan fungsi otak, kesehatan mental, tumbuh kembang, imunitas <span style='color:orange;'>(Waspada)</span></td><td>Masalah regenerasi sel</td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_o'] > 5) {
                                                                    echo "<tr><td>15</td><td>Gangguan fungsi hormon, kholesterol <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Liver</td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } elseif ($item['nilai_o'] >= 5) {
                                                                    echo "<tr><td>15</td><td>Gangguan fungsi hormon, kholesterol <span style='color:orange;'>(Waspada)</span></td><td>Masalah Liver</td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_p'] > 5) {
                                                                    echo "<tr><td>16</td><td>Gangguan fungsi memori (daya ingat) <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Daya Ingat</td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } elseif ($item['nilai_p'] >= 5) {
                                                                    echo "<tr><td>16</td><td>Gangguan fungsi memori (daya ingat) <span style='color:orange;'>(Waspada)</span></td><td>Masalah Daya Ingat</td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_q'] > 5) {
                                                                    echo "<tr><td>17</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tujuan Hidup,<br> Kecemasan, Stress dan Manajemen Waktu<br></td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } elseif ($item['nilai_q'] >= 5) {
                                                                    echo "<tr><td>17</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:orange;'>(Waspada)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tujuan Hidup,<br> Kecemasan, Stress dan Manajemen Waktu<br></td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_r'] > 5) {
                                                                    echo "<tr><td>18</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:red;'>(18isiko Tinggi)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tujuan Hidup,<br> Kecemasan, Stress dan Manajemen Waktu<br></td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } elseif ($item['nilai_r'] >= 5) {
                                                                    echo "<tr><td>18</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:orange;'>(Waspada)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tujuan Hidup,<br> Kecemasan, Stress dan Manajemen Waktu<br></td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                if ($item['nilai_s'] > 5) {
                                                                    echo "<tr><td>19</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:red;'>(Risiko Tinggi)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tujuan Hidup,<br> Kecemasan, Stress dan Manajemen Waktu<br></td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } elseif ($item['nilai_s'] >= 5) {
                                                                    echo "<tr><td>20</td><td>Gangguan psikologis, mental, sosial dan spiritual (stress, cemas, lupa, minim manajemen waktu) <span style='color:orange;'>(Waspada)</span></td><td>Masalah Pengembangan Diri, Leadership Skill, Tujuan Hidup,<br> Kecemasan, Stress dan Manajemen Waktu<br></td><td>SAKIT mencegah KEKAMBUHAN</td></tr>";
                                                                } else {
                                                                    echo "";
                                                                }
                                                                ?>
                                                          </table>
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
                          </div>
                      </td>

                      <!-- ISI VIEW -->
                      <td><?= $item['nama'] ?></td>
                      <td><?= $item['telepon'] ?></td>
                      <td><?= $item['jk'] ?></td>
                      <td><?= $item['umur'] ?></td>
                      <td><?= $item['datetime'] ?></td>
                  </tr>
              <?php endforeach ?>
          </tbody>
      </table>
      <p style="text-align: center;">
          <a href="klien"><button type="button" class="btn btn-danger">Kembali</button></a>
      </p>
  </div>
  <!-- SCRIPT AJAX -->
  <script>
      $(document).ready(function() {
          $('.edit').submit(function(e) {
              e.preventDefault();
              $.ajax({
                  type: "post",
                  url: $(this).attr('action'),
                  data: $(this).serialize(),
                  dataType: "json",
                  beforeSend: function() {
                      $('.btnEdit').attr('disable', 'disabled');
                      $('.btnEdit').html('<i class="fa fa-spin fa-spinner"></i>');
                  },
                  complete: function() {
                      $('.btnEdit').removeAttr('disable', 'disabled');
                      $('.btnEdit').html('Simpan');
                  },
                  success: function(response) {
                      if (response.error) {
                          if (response.error.nama) {
                              $('.nama').addClass('is-invalid');
                              $('.errornamaEdit').html(response.error.nama);
                          }
                      } else {
                          Swal.fire({
                              icon: 'success',
                              title: 'berhasil',
                              text: response.sukses,
                          });
                          $('body').removeClass('modal-open');
                          //modal-open class is added on body so it has to be removed
                          $('.modal-backdrop').remove();
                          //need to remove div with modal-backdrop class
                          $("#result").html(response.data);
                      }
                  },
                  error: function(xhr, ajaxOptions, thrownError) {
                      alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                  }
              })
          });

          //  function hapus
          $('.hapus').on('click', function(e) {
              e.preventDefault();
              const href = $(this).attr('href')
              Swal.fire({
                  title: 'Anda Yakin?',
                  text: "Data Akan Dihapus!",
                  icon: 'warning',
                  showCancelButton: true,
                  confirmButtonColor: '#3085d6',
                  cancelButtonColor: '#d33',
                  confirmButtonText: 'Hapus!'
              }).then((result) => {
                  if (result.value) {
                      document.location.href = href;
                  }
              });
          });
          window.setTimeout(function() {
              $(".flashAjax").fadeTo(500, 0).slideUp(500, function() {
                  $(this).remove();
              });
          }, 5000);
      });
  </script>
  <?= $this->include('backend/layouts/js_viewData') ?>