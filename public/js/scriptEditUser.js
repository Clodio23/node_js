$(function () {

  $('.tampilEdit').on('click', function () {
    $('#formModalLabel').html('Ubah Data Ujian');
    $('.x_content button[type=submit]').html('Ubah Data');
    $('.x_content form').attr('action', 'http://localhost/web_arsip/public/dashboard/ubahUser');
    $('.x_content input[name=img]').attr('type', 'text');
    $('.x_content input[name=file]').attr('type', 'text');
    const id = $(this).data('id');
    
    $.ajax({
        url: 'http://localhost/web_arsip/public/dashboard/getubah',
        data: {id : id},
        method: 'post',
        dataType: 'json',
        success: function(data){

            $('#admin_id').val(data.admin_id);
            $('#nip').val(data.nip);
            $('#password').val(data.password);
            $('#nik').val(data.nik);
            $('#nama_lengkap').val(data.nama_lengkap);
            $('#tgl_lahir').val(data.tgl_lahir);
            $('#jenis_kelamin').val(data.jenis_kelamin);
            $('#agama').val(data.agama);
            $('#no_hp').val(data.no_hp);
            $('#alamat_email').val(data.alamat_email);
            $('#alamat').val(data.alamat);
            $('#nuptk').val(data.nuptk);
            $('#bidang_studi').val(data.bidang_studi);
            $('#jabatan').val(data.jabatan);
            $('#tugas_tambahan').val(data.tugas_tambahan);
            $('#status_pegawai').val(data.status_pegawai);
            $('#status_keaktifan').val(data.status_keaktifan);
            $('#status_nikah').val(data.status_nikah);
            $('#tmt_pns').val(data.tmt_pns);
            $('#tmt_cpns').val(data.tmt_cpns);
            $('#tmt_pangkat').val(data.tmt_pangkat);
            $('#pangkat_golongan').val(data.pangkat_golongan);
            $('#sumber_gaji').val(data.sumber_gaji);
            $('#npwp').val(data.npwp);
            $('#img').val(data.img);
            $('#file').val(data.file);
            $('#tgl_inputdata').val(data.tgl_inputdata);
            $('#id').val(data.id);
        }
        
    });
    });
});


