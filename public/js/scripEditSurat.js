$('.tampilModalEditSurat').on('click', function () {
    $('#formModalLabel').html('Edit Data Surat');
    $('.x_content button[type=submit]').html('Ubah Data');
    $('.x_content form').attr('action', 'http://localhost/web_arsip/public/Surat/ubah');
    $('.x_content input[name=file_surat]').attr('type', 'text');
    const id = $(this).data('id');
    
    $.ajax({
        url: 'http://localhost/web_arsip/public/surat/getubah',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data){

            // console.log(data);
            $('#no_surat').val(data.no_surat);
            $('#perihal_surat').val(data.perihal_surat);
            $('#instansi').val(data.instansi);
            $('#tanggal_surat').val(data.tanggal_surat);
            $('#tanggal_terima').val(data.tanggal_terima);
            $('#file_surat').val(data.file_surat);
            $('#id_surat ').val(data.id_surat );
            
        }
    });
  });