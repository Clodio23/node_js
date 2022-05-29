$(function () {

    $('.tambah').on('click', function(){
        $('#formModalLabel').html('Tambah Data Guru'); 
        $('.x_content button[type=submit]').html('Tambah Data');
        $('.x_content form').attr('action', 'http://localhost/web_arsip/public/Dashboard/tambahadmin');
        $('.x_content input[name=img]').attr('type', 'file');
        $('.x_content input[name=file]').attr('type', 'file');   
        $('.x_content form')[0].reset();     
    });

});


