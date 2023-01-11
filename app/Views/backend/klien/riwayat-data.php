  <div class="dt-responsive table-responsive">
      <!-- id dibawah bisa diganti => simpletable -->
      <table id="alt-pg-dt" class="table table-striped table-bordered nowrap">
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
                              <span class="feather icon-edit-1 text-primary"></span>
                          </button>
                          <!-- Modal Edit Koresponden-->
                          <div class="modal fade" id="editmodal<?= $id = $item['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-xl" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">Edit Koresponden : <?= $item['nama'] ?></h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </button>
                                      </div>
                                      <form action="<?= base_url('ppcu/edit'); ?>" method="post" class="edit">
                                          <?= csrf_field() ?>
                                          <div class="modal-body">
                                              <input type="text" name="id" class="form-control" value="<?= $item['id'] ?>" hidden>
                                              <table width="100%" style="text-align: left;">
                                                  <tr>
                                                      <td>
                                                          <b>Nama</b>
                                                          <input type="text" name="nama" class="form-control" value="<?= $item['nama'] ?>">
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>
                                                          <b>No. Kontak</b>
                                                          <input type="text" name="telepon" class="form-control" value="<?= $item['telepon'] ?>">
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>
                                                          <b>Jenis Kelamin</b>
                                                          <select class="form-control" name="jk" style="height: 34px;" required>
                                                              <option selected="selected" value="<?= $item['jk'] ?>"><?= $item['jk'] ?></option>
                                                              <option value="Laki-laki">Laki-laki</option>
                                                              <option value="Perempuan">Perempuan</option>
                                                          </select>
                                                      </td>
                                                  </tr>
                                                  <tr>
                                                      <td>
                                                          <b>Umur</b>
                                                          <input type="text" name="umur" class="form-control" value="<?= $item['umur'] ?>">
                                                      </td>
                                                  </tr>
                                              </table>
                                          </div>
                                          <div class="modal-footer">
                                              <button type="button" class="btn btn-danger" data-dismiss="modal">Batalkan</button>
                                              <button type="submit" class="btn btn-primary btnEdit">Simpan</button>
                                          </div>
                                      </form>
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