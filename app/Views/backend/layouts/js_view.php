<!-- SCRIPT AJAX -->
<script>
    $(document).ready(function() {
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
                        if (response.error.kategori) {
                            $('.kategori').addClass('is-invalid');
                            $('.errorKegiatan').html(response.error.kategori);
                        } else {
                            $('.kategori').removeClass('is-invalid');
                            $('.errorKegiatan').html('');
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

<!-- data-table js -->
<script src="libraries_backend\bower_components\datatables.net\js\jquery.dataTables.min.js"></script>
<script src="libraries_backend\bower_components\datatables.net-buttons\js\dataTables.buttons.min.js"></script>
<script src="libraries_backend\assets\pages\data-table\js\jszip.min.js"></script>
<script src="libraries_backend\assets\pages\data-table\js\pdfmake.min.js"></script>
<script src="libraries_backend\assets\pages\data-table\js\vfs_fonts.js"></script>
<script src="libraries_backend\bower_components\datatables.net-buttons\js\buttons.print.min.js"></script>
<script src="libraries_backend\bower_components\datatables.net-buttons\js\buttons.html5.min.js"></script>
<script src="libraries_backend\bower_components\datatables.net-bs4\js\dataTables.bootstrap4.min.js"></script>
<script src="libraries_backend\bower_components\datatables.net-responsive\js\dataTables.responsive.min.js"></script>
<script src="libraries_backend\bower_components\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js"></script>

<!-- Custom js -->
<script src="libraries_backend\assets\pages\data-table\js\data-table-custom.js"></script>