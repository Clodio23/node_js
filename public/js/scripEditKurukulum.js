$('.tampilEditKurukulum').on('click', function () {
    $('#formModalLabel').html('Ubah Data Kurukulum');
    $('.x_content button[type=submit]').html('Ubah Data');
    $('.x_content form').attr('action', 'http://localhost/web_arsip/public/kurikulum/Ubah');
    $('.x_content input[name=file_kurikulum]').attr('type', 'text');
    const id = $(this).data('id');
    
    $.ajax({
        url: 'http://localhost/web_arsip/public/Kurikulum/getubah',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data){

            // console.log(data);
            $('#jenis_kurikulum').val(data.jenis_kurikulum);
            $('#mata_pelajaran').val(data.mata_pelajaran);
            $('#tahun_ajaran').val(data.tahun_ajaran);
            $('#kelas').val(data.kelas);
            $('#pengampu').val(data.pengampu);
            $('#tanggal_terima').val(data.tanggal_terima);
            $('#file_kurikulum').val(data.file_kurikulum);
            $('#id_kurikulum ').val(data.id_kurikulum );
            
        }
    });
  });