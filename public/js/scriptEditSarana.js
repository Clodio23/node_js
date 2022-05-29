$('.tampilEditSarana').on('click', function () {
    $('#formModalLabel').html('Ubah Data sarana');
    $('.x_content button[type=submit]').html('Ubah Data');
    $('.x_content form').attr('action', 'http://localhost/web_arsip/public/sarana/ubahSarana');

    const id = $(this).data('id');
    
    $.ajax({
        url: 'http://localhost/web_arsip/public/sarana/getubah',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data){
            // console.log(data);
            $('#jenis_sarana').val(data.jenis_sarana);     
            $('#letak').val(data.letak);     
            $('#kepemilikan').val(data.kepemilikan);     
            $('#spesifikasi').val(data.spesifikasi);     
            $('#jumlah').val(data.jumlah);     
            $('#laik').val(data.laik);     
            $('#tidak_laik').val(data.tidak_laik);  
            $('#id_sarana').val(data.sarana);  
        }
        
    });
    });

    