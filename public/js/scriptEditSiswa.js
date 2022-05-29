    $('.tampilEditSiswa').on('click', function () {
        $('#formModalLabel').html('Ubah Data Siswa');
        $('.x_content button[type=submit]').html('Ubah Data');
        $('.x_content form').attr('action', 'http://localhost/web_arsip/public/siswa/ubah');
        $('.x_content input[name=file]').attr('type', 'text');
        const id = $(this).data('id');
        
        $.ajax({
            url: 'http://localhost/web_arsip/public/siswa/getubah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
    
                // console.log(data);
                $('#kelas').val(data.kelas);
                $('#angkatan').val(data.angkatan);
                $('#wali_kelas').val(data.wali_kelas);
                $('#file').val(data.file);
                $('#id_siswa').val(data.id_siswa);
                
            }
        });
      });