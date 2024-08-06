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
                                                  <table class="table table-responsive" style="font-size: x-small;">
                                                      <tr>
                                                          <td>
                                                              Risiko
                                                          </td>
                                                          <td>
                                                              Dampak
                                                          </td>
                                                          <td>
                                                              Anjuran
                                                          </td>
                                                      </tr>
                                                      <?php
                                                        if ($item['nilai_a'] > 5) {
                                                            echo "<tr><td>$risiko_a</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_a</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_a'] >= 5) {
                                                            echo "<tr><td>$risiko_a</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_a</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_b'] > 5) {
                                                            echo "<tr><td>$risiko_b</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_b</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_b'] >= 5) {
                                                            echo "<tr><td>$risiko_b</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_b</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_c'] > 5) {
                                                            echo "<tr><td>$risiko_c</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_c</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_c'] >= 5) {
                                                            echo "<tr><td>$risiko_c</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_c</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_d'] > 5) {
                                                            echo "<tr><td>$risiko_d</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_d</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_d'] >= 5) {
                                                            echo "<tr><td>$risiko_d</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_d</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_e'] > 5) {
                                                            echo "<tr><td>$risiko_e</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_e</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_e'] >= 5) {
                                                            echo "<tr><td>$risiko_e</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_e</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_f'] > 5) {
                                                            echo "<tr><td>$risiko_f</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_f</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_f'] >= 5) {
                                                            echo "<tr><td>$risiko_f</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_f</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_g'] > 5) {
                                                            echo "<tr><td>$risiko_g</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_g</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_g'] >= 5) {
                                                            echo "<tr><td>$risiko_g</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_g</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_h'] > 5) {
                                                            echo "<tr><td>$risiko_h</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_h</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_h'] >= 5) {
                                                            echo "<tr><td>$risiko_h</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_h</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_i'] > 5) {
                                                            echo "<tr><td>$risiko_i</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_i</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_i'] >= 5) {
                                                            echo "<tr><td>$risiko_i</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_i</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_j'] > 5) {
                                                            echo "<tr><td>$risiko_j</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_j</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_j'] >= 5) {
                                                            echo "<tr><td>$risiko_j</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_j</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_k'] > 5) {
                                                            echo "<tr><td>$risiko_k</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_k</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_k'] >= 5) {
                                                            echo "<tr><td>$risiko_k</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_k</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_l'] > 5) {
                                                            echo "<tr><td>$risiko_l</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_l</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_l'] >= 5) {
                                                            echo "<tr><td>$risiko_l</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_l</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_m'] > 5) {
                                                            echo "<tr><td>$risiko_m</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_m</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_m'] >= 5) {
                                                            echo "<tr><td>$risiko_m</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_m</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_n'] > 5) {
                                                            echo "<tr><td>$risiko_n</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_n</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_n'] >= 5) {
                                                            echo "<tr><td>$risiko_n</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_n</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_o'] > 5) {
                                                            echo "<tr><td>$risiko_o</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_o</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_o'] >= 5) {
                                                            echo "<tr><td>$risiko_o</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_o</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_p'] > 5) {
                                                            echo "<tr><td>$risiko_p</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_p</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_p'] >= 5) {
                                                            echo "<tr><td>$risiko_p</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_p</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_q'] > 5) {
                                                            echo "<tr><td>$risiko_qrs</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_q'] >= 5) {
                                                            echo "<tr><td>$risiko_qrs</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_qrs</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_r'] > 5) {
                                                            echo "<tr><td>$risiko_qrs</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_r'] >= 5) {
                                                            echo "<tr><td>$risiko_qrs</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_qrs</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        if ($item['nilai_s'] > 5) {
                                                            echo "<tr><td>$risiko_qrs</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_qrs</td><td><span style='color:red;'>risiko tinggi</span>, mencegah keparahan & kekambuhan</td></tr>";
                                                        } elseif ($item['nilai_s'] >= 5) {
                                                            echo "<tr><td>$risiko_qrs</td><td style='min-width: 200px;max-width: 400px; white-space: normal;'>$dampak_qrs</td><td><span style='color:orange;'>waspada</span>, mencegah kesakitan (jangan sakit)</td></tr>";
                                                        } else {
                                                            echo "";
                                                        }
                                                        ?>
                                                  </table>
                                                  <br>
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
                          <!-- button hapus modal-->
                          <a href="<?= base_url('klien/hapus/' . $item['id']); ?>" class="hapus">
                              <span class="feather icon-trash-2 text-danger"></span>
                          </a>
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