<?php

class Model_surat
{
    private $table = 'tb_surat';
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
    public function getSuratById($id_surat)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_surat=:id_surat');
        $this->db->bind('id_surat', $id_surat);
        return $this->db->single();
    }

    public function getForUser($admin_id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE admin_id=:admin_id');
        $this->db->bind('admin_id', $admin_id);
        $this->db->execute(['admin_id' => $admin_id]);
        return $this->db->fetchAll();
    }

    public function tambahDataSurat()
    {
        $query = "INSERT INTO tb_surat
                    VALUES
                    ('', :no_surat, :perihal_surat, :instansi, :tanggal_surat, :tanggal_terima, :file_surat)";

        $this->db->query($query);
        $this->db->bind('no_surat', $this->no_surat);
        $this->db->bind('perihal_surat', $this->perihal_surat);
        $this->db->bind('instansi', $this->instansi);
        $this->db->bind('tanggal_surat', $this->tanggal_surat);
        $this->db->bind('tanggal_terima', $this->tanggal_terima);
        $this->db->bind('file_surat', $this->file_surat);

        $this->db->execute([
            'no_surat' => $this->no_surat,
            'perihal_surat' => $this->perihal_surat,
            'instansi' => $this->instansi,
            'tanggal_surat' => $this->tanggal_surat,
            'tanggal_terima' => $this->tanggal_terima,
            'file_surat' => $this->file_surat
        ]);

        return $this->db->rowCount();
    }

    function uploadSurat()
    {
        // $this->db->query('SELECT * FROM ' . $this->table1 . ' WHERE dokumentasi=:dokumentasi');
        $namefile = $_FILES['file_surat']['name'];
        $error = $_FILES['file_surat']['error'];
        $tmpname = $_FILES['file_surat']['tmp_name'];

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
        move_uploaded_file($tmpname, 'upload/surat/' . $namefile);
        return $namefile;

        return $this->db->rowCount();
    }


    public function hapusDataSurat($id)
    {
        $query = "DELETE FROM tb_surat WHERE id_surat = :id_surat";
        $this->db->query($query);
        $this->db->bind('id_surat', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataSurat($data)
    {
        $query = "UPDATE tb_surat
                    SET
                    no_surat = :no_surat, 
                    perihal_surat = :perihal_surat, 
                    instansi = :instansi,
                    tanggal_surat = :tanggal_surat,
                    tanggal_terima = :tanggal_terima,
                    file_surat = :file_surat
                    WHERE id_surat  = :id_surat";

        $this->db->query($query);
        $this->db->bind('no_surat', $data['no_surat']);
        $this->db->bind('perihal_surat', $data['perihal_surat']);
        $this->db->bind('instansi', $data['instansi']);
        $this->db->bind('tanggal_surat', $data['tanggal_surat']);
        $this->db->bind('tanggal_terima',  $data['tanggal_terima']);
        $this->db->bind('file_surat', $data['file_surat']);
        $this->db->bind('id_surat', $data['id_surat']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    function upload()
    {
        // $this->db->query('SELECT * FROM ' . $this->table1 . ' WHERE dokumentasi=:dokumentasi');
        $namefile = $_FILES['file_surat']['name'];
        $error = $_FILES['file_surat']['error'];
        $tmpname = $_FILES['file_surat']['tmp_name'];

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
                alert ('yang anda upload bukan doc, pdf atau docx!');
            </script>
        ";
            return false;
        }
        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensifile;
        move_uploaded_file($tmpname, 'upload/surat' . $namefile);
        return $namefile;

        // $this->db->bind('dokumentasi', $this->dokumentasi);
        // $this->db->execute([
        //     'dokumentasi' => $this->dokumentasi

        // ]);
        return $this->db->rowCount();
    }

    public function hapusDataUjian($id_surat)
    {

        $query = "DELETE FROM tb_surat WHERE id_surat = :id_surat";
        $this->db->query($query);
        $this->db->bind('id_surat', $id_surat);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
