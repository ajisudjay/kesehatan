<!-- SCRIPT AJAX -->
<script>
    $(document).ready(function() {
        //  function edit
        $('.edit').submit(function() {
            var id = $('#id').val();
            var isi = $('#isi').val();
            var fd = new FormData();

            fd.append('id', id);
            fd.append('isi', isi);
            $.ajax({
                type: "post",
                data: fd,
                dataType: "json",
                contentType: false,
                processData: false,
                beforeSend: function() {
                    $('.btnEdit').attr('disable', 'disabled');
                    $('.btnEdit').html('<i class="fa fa-spin fa-spinner"></i>');
                },
                complete: function() {
                    $('.btnEdit').removeAttr('disable', 'disabled');
                    $('.btnEdit').html('Edit');
                },
                success: function(response) {
                    if (response.error) {
                        if (response.error.isi) {
                            $('.isi').addClass('is-invalid');
                            $('.errorIsi').html(response.error.isi);
                        } else {
                            $('.isi').removeClass('is-invalid');
                            $('.errorIsi').html('');
                        }
                    } else {

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
        window.setTimeout(function() {
            $(".flashAjax").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 5000);
    });
</script>