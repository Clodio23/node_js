$(function () {

    $('.tombolTambahDataSarana').on('click', function(){
        
        $('#formModalLabel').html('Tambah Sarana'); 
        $('.x_content button[type=submit]').html('Tambah Data');
        $('.x_content form').attr('action', 'http://localhost/web_arsip/public/sarana/tambahSarana');
        //       $('#nama_ujian').val(data.nama_ujian);
        $('.x_content form')[0].reset();        
    });
   
});


