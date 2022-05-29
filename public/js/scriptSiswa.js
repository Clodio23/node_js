$(function () {

    $('.tombolTambahSiswa').on('click', function(){
        $('#formModalLabel').html('Tambah Data Siswa'); 
        $('.x_content button[type=submit]').html('Tambah Data');
        $('.x_content form').attr('action', 'http://localhost/web_arsip/public/siswa/tambahDataSiswa');
        $('.x_content input[name=file]').attr('type', 'file');
          //       $('#nama_ujian').val(data.nama_ujian);
          $('.x_content form')[0].reset();

    })

 
})





