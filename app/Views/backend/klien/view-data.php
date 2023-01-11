  <div class="dt-responsive table-responsive">
      <!-- id dibawah bisa diganti => simpletable -->
      <table id="alt-pg-dt" class="table table-striped table-bordered nowrap">
          <thead>
              <tr>
                  <th style="max-width:5%; text-align: center;">No.</th>
                  <th style="max-width:5%; text-align: center;">Aksi</th>
                  <th style="max-width:45%; text-align: center;">Nama</th>
                  <th style="max-width:25%; text-align: center;">Kontak</th>
                  <th style="max-width:20%; text-align: center;">Jenis Kelamin</th>
              </tr>
          </thead>
          <tbody>
              <?php $no = 1 ?>

              <?php foreach ($klien as $item) : ?>
                  <?php
                    $nama = $item['nama'];
                    $telepon = $item['telepon'];
                    ?>
                  <tr style="text-align: center;">
                      <td><?= $no++ ?></td>
                      <td>
                          <form action="<?= base_url('klien/RiwayatViewData'); ?>" method="post" class="formklien">
                              <input type="text" name="namax" value="<?= $nama ?>" hidden>
                              <input type="text" name="teleponx" value="<?= $telepon ?>" hidden>
                              <button class="btn btn-primary btnTampilkan" type="submit"><span class="fa fa-history"></span></button>
                          </form>
                          <!-- button riwayat modal-->
                      </td>

                      <!-- ISI VIEW -->
                      <td><?= $item['nama'] ?></td>
                      <td><?= $item['telepon'] ?></td>
                      <td><?= $item['jk'] ?></td>
                  </tr>
              <?php endforeach ?>
          </tbody>
      </table>
  </div>
  <!-- SCRIPT AJAX -->
  <script>
      $(document).ready(function() {
          function dataKlien() {
              $(".formklien").submit(function(e) {
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
          //  function tambah
          $('.tambah').submit(function(e) {
              e.preventDefault();
              $.ajax({
                  type: "post",
                  url: $(this).attr('action'),
                  data: $(this).serialize(),
                  dataType: "json",
                  beforeSend: function() {
                      $('.btnSimpan').attr('disable', 'disabled');
                      $('.btnSimpan').html('<i class="fa fa-spin fa-spinner"></i>');
                  },
                  complete: function() {
                      $('.btnSimpan').removeAttr('disable', 'disabled');
                      $('.btnSimpan').html('Simpan');
                  },
                  success: function(response) {
                      if (response.error) {
                          if (response.error.nama) {
                              $('.nama').addClass('is-invalid');
                              $('.errornama').html(response.error.nama);
                          } else {
                              $('.nama').removeClass('is-invalid');
                              $('.errornama').html('');
                          }
                      } else {
                          if (response.status == 'gagal') {
                              Swal.fire({
                                  icon: 'error',
                                  title: 'GAGAL',
                                  text: response.sukses,
                              })
                          } else if (response.status == 'berhasil') {
                              Swal.fire({
                                  icon: 'success',
                                  title: 'Berhasil',
                                  text: response.sukses,
                              });
                          }
                          $('body').removeClass('modal-open');
                          $('.modal-backdrop').remove();
                          $('#result').html(response.data);
                      }
                  },
                  error: function(xhr, ajaxOptions, thrownError) {
                      alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                  }
              })
          });

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