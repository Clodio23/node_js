<?php

class Model_siswa
{

    private $table = 'tb_siswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        // parent::__construct();
    }

    public function getAllsiswa()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getSiswaById($id_siswa)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_siswa=:id_siswa');
        $this->db->bind('id_siswa', $id_siswa);
        return $this->db->single();
    }

    public function tambahDataSiswa()
    {
        $query = "INSERT INTO tb_siswa
                    VALUES
                    ('', :kelas, :angkatan, :wali_kelas, :file)";

        $this->db->query($query);
        $this->db->bind('kelas', $this->kelas);
        $this->db->bind('angkatan', $this->angkatan);
        $this->db->bind('wali_kelas', $this->wali_kelas);
        $this->db->bind('file', $this->file);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSiswa($data)
    {
        $query = "UPDATE tb_siswa SET
                    kelas = :kelas,
                    angkatan = :angkatan,
                    wali_kelas = :wali_kelas,
                    file = :file
                    WHERE id_siswa = :id_siswa";

        $this->db->query($query);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('angkatan', $data['angkatan']);
        $this->db->bind('wali_kelas', $data['wali_kelas']);
        $this->db->bind('file',  $data['file']);
        $this->db->bind('id_siswa', $data['id_siswa']);

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
        $ekstensifilevalid = ['pdf', 'docx', 'doc', 'xlsx'];
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
        move_uploaded_file($tmpname, 'upload/siswa/' . $namefile);
        return $namefile;

        // $this->db->bind('dokumentasi', $this->dokumentasi);
        // $this->db->execute([
        //     'dokumentasi' => $this->dokumentasi

        // ]);
        return $this->db->rowCount();
    }

    public function hapusDataSiswa($id_siswa)
    {

        $query = "DELETE FROM tb_siswa WHERE id_siswa = :id_siswa";
        $this->db->query($query);
        $this->db->bind('id_siswa', $id_siswa);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
