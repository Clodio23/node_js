<?php

class Model_absend
{
    private $table = 'tb_absen';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        // parent::__construct();
    }

    public function getAllAbsen()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getAbsendById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }


    public function getShopById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataAbsend()
    {
        $query = "INSERT INTO tb_absen
                    VALUES
                    ('',:admin_id, :nama, :absen, :keterangan, :file, :time)";

        $this->db->query($query);
        $this->db->bind('admin_id', $this->admin_id);
        $this->db->bind('nama', $this->nama);
        $this->db->bind('absen', $this->absen);
        $this->db->bind('keterangan', $this->keterangan);
        $this->db->bind('file', $this->file);
        $this->db->bind('time', $this->time);
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
        $ekstensifilevalid = ['pdf', 'docx', 'doc', 'jpg', 'png'];
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
        move_uploaded_file($tmpname, 'upload/absensi/' . $namefile);
        return $namefile;

        // $this->db->bind('dokumentasi', $this->dokumentasi);
        // $this->db->execute([
        //     'dokumentasi' => $this->dokumentasi

        // ]);
        return $this->db->rowCount();
    }

    public function ubahDataAbsend($data)
    {
        $query = "UPDATE tb_absen
                    SET
                    admin_id = :admin_id,
                    nama = :nama,
                    absen = :absen,
                    keterangan = :keterangan,
                    file = :file,
                    time = :time WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('admin_id', $data['admin_id']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('absen',  $data['absen']);
        $this->db->bind('keterangan', $data['keterangan']);
        $this->db->bind('file', $data['file']);
        $this->db->bind('time', $data['time']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }



    public function hapusDataAbsen($id)
    {
        $query = "DELETE FROM tb_absen WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
