$(function () {

  $('.tampilModalAbsend').on('click', function () {
    $('#formModalLabel').html('Ubah Data Absen');
    $('.x_content button[type=submit]').html('Ubah Data');
    $('.x_content form').attr('action', 'http://localhost/web_arsip/public/absend/ubah');
    $('.x_content input[name=file]').attr('type', 'text');
    const id = $(this).data('id');
    
    $.ajax({
        url: 'http://localhost/web_arsip/public/absend/getubah',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data){

            // console.log(data);
            $('#admin_id').val(data.admin_id);
            $('#nama').val(data.nama);
            $('#absen').val(data.absen);
            $('#keterangan').val(data.keterangan);
            $('#file').val(data.file);
            $('#time').val(data.time);
            $('#id').val(data.id);
            
        }
    });
  });
});





