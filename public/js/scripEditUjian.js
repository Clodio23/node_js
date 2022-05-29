$('.tampilEditlUjian').on('click', function () {
    $('#formModalLabel').html('Edit Data Ujian');
    $('.x_content button[type=submit]').html('Ubah Data');
    $('.x_content form').attr('action', 'http://localhost/web_arsip/public/ujian/ubah');
    $('.x_content input[name=file_ujian]').attr('type', 'text');
    
    const id = $(this).data('id');
    
    $.ajax({
        url: 'http://localhost/web_arsip/public/ujian/getubah',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data){

            $('#nama_ujian').val(data.nama_ujian);
            $('#semester').val(data.semester);
            $('#tahun_ajaran').val(data.tahun_ajaran);
            $('#tanggal_ujian').val(data.tanggal_ujian);
            $('#mata_pelajaran').val(data.mata_pelajaran);
            $('#kelas').val(data.kelas);
            $('#pengampu').val(data.pengampu);
            $('#file_ujian').val(data.file_ujian);
            $('#id_ujian').val(data.id_ujian);            
        }
        
    });
    });