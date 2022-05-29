<?php

class Model_pegawai
{
    private $table = 'tb_pegawai';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        // parent::__construct();
    }

    public function getAlladmin()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPegawaiById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }


    public function getForUser($admin_id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE admin_id=:admin_id');
        $this->db->bind('admin_id', $admin_id);
        $this->db->execute(['admin_id' => $admin_id]);
        return $this->db->fetchAll();
    }

    public function tambahDatapegawai()
    {
        $query = "INSERT INTO tb_pegawai
                    VALUES
                    ('',:admin_id, :nip, :password, :nik, :nama_lengkap, :tgl_lahir, :jenis_kelamin, :agama, :no_hp ,:alamat_email, :alamat, :nuptk, :bidang_studi, :jabatan, :tugas_tambahan, :status_pegawai, :status_keaktifan, :status_nikah, :tmt_pns, :tmt_cpns, :tmt_pangkat, :pangkat_golongan, :sumber_gaji, :npwp, :img, :file , :tgl_inputdata)";

        $this->db->query($query);
        $this->db->bind('admin_id', $this->admin_id);
        $this->db->bind('nip', $this->nip);
        $this->db->bind('password', $this->password);
        $this->db->bind('nik', $this->nik);
        $this->db->bind('nama_lengkap', $this->nama_lengkap);
        $this->db->bind('tgl_lahir', $this->tgl_lahir);
        $this->db->bind('jenis_kelamin', $this->jenis_kelamin);
        $this->db->bind('agama', $this->agama);
        $this->db->bind('no_hp', $this->no_hp);
        $this->db->bind('alamat_email', $this->alamat_email);
        $this->db->bind('alamat', $this->alamat);
        $this->db->bind('nuptk', $this->nuptk);
        $this->db->bind('bidang_studi', $this->bidang_studi);
        $this->db->bind('jabatan', $this->jabatan);
        $this->db->bind('tugas_tambahan', $this->tugas_tambahan);
        $this->db->bind('status_pegawai', $this->status_pegawai);
        $this->db->bind('status_keaktifan', $this->status_keaktifan);
        $this->db->bind('status_nikah', $this->status_nikah);
        $this->db->bind('tmt_pns', $this->tmt_pns);
        $this->db->bind('tmt_cpns', $this->tmt_cpns);
        $this->db->bind('tmt_pangkat', $this->tmt_pangkat);
        $this->db->bind('pangkat_golongan', $this->pangkat_golongan);
        $this->db->bind('sumber_gaji', $this->sumber_gaji);
        $this->db->bind('npwp', $this->npwp);
        $this->db->bind('img', $this->img);
        $this->db->bind('file', $this->file);
        $this->db->bind('tgl_inputdata', $this->tgl_inputdata);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function tambahDatauserpegawai()
    {
        $query = "INSERT INTO tb_pegawai
                    VALUES
                    ('',:admin_id, :nip, :password, :nik, :nama_lengkap, :tgl_lahir, :jenis_kelamin, :agama, :no_hp ,:alamat_email, :alamat, :nuptk, :bidang_studi, :jabatan, :tugas_tambahan, :status_pegawai, :status_keaktifan, :status_nikah, :tmt_pns, :tmt_cpns, :tmt_pangkat, :pangkat_golongan, :sumber_gaji, :npwp, :img, :file , :tgl_inputdata)";

        $this->db->query($query);
        $this->db->bind('admin_id', $this->admin_id);
        $this->db->bind('nip', $this->nip);
        $this->db->bind('password', $this->password);
        $this->db->bind('nik', $this->nik);
        $this->db->bind('nama_lengkap', $this->nama_lengkap);
        $this->db->bind('tgl_lahir', $this->tgl_lahir);
        $this->db->bind('jenis_kelamin', $this->jenis_kelamin);
        $this->db->bind('agama', $this->agama);
        $this->db->bind('no_hp', $this->no_hp);
        $this->db->bind('alamat_email', $this->alamat_email);
        $this->db->bind('alamat', $this->alamat);
        $this->db->bind('nuptk', $this->nuptk);
        $this->db->bind('bidang_studi', $this->bidang_studi);
        $this->db->bind('jabatan', $this->jabatan);
        $this->db->bind('tugas_tambahan', $this->tugas_tambahan);
        $this->db->bind('status_pegawai', $this->status_pegawai);
        $this->db->bind('status_keaktifan', $this->status_keaktifan);
        $this->db->bind('status_nikah', $this->status_nikah);
        $this->db->bind('tmt_pns', $this->tmt_pns);
        $this->db->bind('tmt_cpns', $this->tmt_cpns);
        $this->db->bind('tmt_pangkat', $this->tmt_pangkat);
        $this->db->bind('pangkat_golongan', $this->pangkat_golongan);
        $this->db->bind('sumber_gaji', $this->sumber_gaji);
        $this->db->bind('npwp', $this->npwp);
        $this->db->bind('img', $this->img);
        $this->db->bind('file', $this->file);
        $this->db->bind('tgl_inputdata', $this->tgl_inputdata);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataPegawai($data)
    {
        $query = "UPDATE tb_pegawai
                    SET
                    admin_id = :admin_id,
                    nip = :nip,
                    password = :password,
                    nik = :nik,
                    nama_lengkap = :nama_lengkap,
                    tgl_lahir = :tgl_lahir,
                    jenis_kelamin = :jenis_kelamin,
                    agama = :agama,
                    no_hp = :no_hp,
                    alamat_email = :alamat_email,
                    alamat = :alamat,
                    nuptk = :nuptk,
                    bidang_studi = :bidang_studi,
                    jabatan = :jabatan,
                    tugas_tambahan = :tugas_tambahan,
                    status_pegawai = :status_pegawai,
                    status_keaktifan = :status_keaktifan,
                    status_nikah = :status_nikah,
                    tmt_pns = :tmt_pns,
                    tmt_cpns = :tmt_cpns,
                    tmt_pangkat = :tmt_pangkat,
                    pangkat_golongan = :pangkat_golongan,
                    sumber_gaji = :sumber_gaji,
                    npwp = :npwp,
                    img = :img,
                    file = :file,
                    tgl_inputdata = :tgl_inputdata WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('admin_id', $data['admin_id']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('password',  $data['password']);
        $this->db->bind('nik', $data['nik']);
        $this->db->bind('nama_lengkap',  $data['nama_lengkap']);
        $this->db->bind('tgl_lahir', $data['tgl_lahir']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('alamat_email', $data['alamat_email']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('nuptk', $data['nuptk']);
        $this->db->bind('bidang_studi',  $data['bidang_studi']);
        $this->db->bind('jabatan', $data['jabatan']);
        $this->db->bind('tugas_tambahan', $data['tugas_tambahan']);
        $this->db->bind('status_pegawai', $data['status_pegawai']);
        $this->db->bind('status_keaktifan', $data['status_keaktifan']);
        $this->db->bind('status_nikah', $data['status_nikah']);
        $this->db->bind('tmt_pns', $data['tmt_pns']);
        $this->db->bind('tmt_cpns', $data['tmt_cpns']);
        $this->db->bind('tmt_pangkat', $data['tmt_pangkat']);
        $this->db->bind('pangkat_golongan', $data['pangkat_golongan']);
        $this->db->bind('sumber_gaji', $data['sumber_gaji']);
        $this->db->bind('npwp',  $data['npwp']);
        $this->db->bind('img', $data['img']);
        $this->db->bind('file', $data['file']);
        $this->db->bind('tgl_inputdata', $data['tgl_inputdata']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }



    function upload()
    {
        // $this->db->query('SELECT * FROM ' . $this->table1 . ' WHERE dokumentasi=:dokumentasi');
        $namefile = $_FILES['file']['name'];
        $error = $_FILES['file']['error'];
        $tmpname = $_FILES['file']['tmp_name'];

        if ($error === 4) {
            echo "<script>
            alert ('pilih file terlebih dahulu');    
        
        </script>
        ";
            return false;
        }
        $ekstensifilevalid = ['pdf', 'docx', 'doc'];
        $ekstensifile = explode('.', $namefile);
        $ekstensifile = strtolower(end($ekstensifile));
        if (!in_array($ekstensifile, $ekstensifilevalid)) {
            echo "
            <script>
                alert ('yang anda upload bukan word atau pdf!');
            </script>
        ";
            return false;
        }
        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensifile;
        move_uploaded_file($tmpname, 'upload/pegawai/file/' . $namefile);
        return $namefile;

        // $this->db->bind('dokumentasi', $this->dokumentasi);
        // $this->db->execute([
        //     'dokumentasi' => $this->dokumentasi

        // ]);
        return $this->db->rowCount();
    }

    function upload1()
    {
        // $this->db->query('SELECT * FROM ' . $this->table1 . ' WHERE dokumentasi=:dokumentasi');
        $namefile = $_FILES['img']['name'];
        $error = $_FILES['img']['error'];
        $tmpname = $_FILES['img']['tmp_name'];

        if ($error === 4) {
            echo "<script>
            alert ('pilih file terlebih dahulu');    
        
        </script>
        ";
            return false;
        }
        $ekstensifilevalid = ['jpg', 'png', 'jpeg'];
        $ekstensifile = explode('.', $namefile);
        $ekstensifile = strtolower(end($ekstensifile));
        if (!in_array($ekstensifile, $ekstensifilevalid)) {
            echo "
            <script>
                alert ('yang anda upload bukan gambar dan tidak berextensi gambar!');
            </script>
        ";
            return false;
        }
        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensifile;
        move_uploaded_file($tmpname, 'upload/pegawai/img/' . $namefile);
        return $namefile;

        // $this->db->bind('dokumentasi', $this->dokumentasi);
        // $this->db->execute([
        //     'dokumentasi' => $this->dokumentasi

        // ]);
        return $this->db->rowCount();
    }

    public function hapusDataPegawai($id)
    {
        $query = "DELETE FROM tb_pegawai WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
