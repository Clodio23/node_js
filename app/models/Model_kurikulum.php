<?php

class Model_kurikulum
{
    private $table = 'tb_kurikulum';
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

    public function getKurikulumById($id_kurikulum)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_kurikulum=:id_kurikulum');
        $this->db->bind('id_kurikulum', $id_kurikulum);
        return $this->db->single();
    }

    public function getForUser($admin_id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE admin_id=:admin_id');
        $this->db->bind('admin_id', $admin_id);
        $this->db->execute(['admin_id' => $admin_id]);
        return $this->db->fetchAll();
    }

    public function tambahDataKurikulum()
    {
        $query = "INSERT INTO tb_kurikulum
                    VALUES
                    ('', :jenis_kurikulum, :mata_pelajaran, :tahun_ajaran, :kelas, :pengampu, :tanggal_terima, :file_kurikulum)";

        $this->db->query($query);
        $this->db->bind('jenis_kurikulum', $this->jenis_kurikulum);
        $this->db->bind('mata_pelajaran', $this->mata_pelajaran);
        $this->db->bind('tahun_ajaran', $this->tahun_ajaran);
        $this->db->bind('kelas', $this->kelas);
        $this->db->bind('pengampu', $this->pengampu);
        $this->db->bind('tanggal_terima', $this->tanggal_terima);
        $this->db->bind('file_kurikulum', $this->file_kurikulum);

        $this->db->execute([
            'jenis_kurikulum' => $this->jenis_kurikulum,
            'mata_pelajaran' => $this->mata_pelajaran,
            'tahun_ajaran' => $this->tahun_ajaran,
            'kelas' => $this->kelas,
            'pengampu' => $this->pengampu,
            'tanggal_terima' => $this->tanggal_terima,
            'file_kurikulum' => $this->file_kurikulum
        ]);

        return $this->db->rowCount();
    }

    function uploadKurikulum()
    {
        // $this->db->query('SELECT * FROM ' . $this->table1 . ' WHERE dokumentasi=:dokumentasi');
        $namefile = $_FILES['file_kurikulum']['name'];
        $error = $_FILES['file_kurikulum']['error'];
        $tmpname1 = $_FILES['file_kurikulum']['tmp_name'];

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
        move_uploaded_file($tmpname1, 'upload/kurikulum/' . $namefile);
        return $namefile;

        return $this->db->rowCount();
    }


    public function hapusDataKurikulum($id)
    {
        $query = "DELETE FROM tb_kurikulum WHERE id_kurikulum = :id_kurikulum";
        $this->db->query($query);
        $this->db->bind('id_kurikulum', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ubahDataKurikulum($data)
    {
        $query = "UPDATE tb_kurikulum
                    SET
                    jenis_kurikulum =  :jenis_kurikulum,
                    mata_pelajaran = :mata_pelajaran,
                    tahun_ajaran = :tahun_ajaran,
                    kelas = :kelas,
                    pengampu = :pengampu,
                    tanggal_terima = :tanggal_terima,
                    file_kurikulum = :file_kurikulum
                    WHERE id_kurikulum = :id_kurikulum";

        $this->db->query($query);
        $this->db->bind('jenis_kurikulum', $data['jenis_kurikulum']);
        $this->db->bind('mata_pelajaran', $data['mata_pelajaran']);
        $this->db->bind('tahun_ajaran', $data['tahun_ajaran']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('pengampu', $data['pengampu']);
        $this->db->bind('tanggal_terima', $data['tanggal_terima']);
        $this->db->bind('file_kurikulum', $data['file_kurikulum']);
        $this->db->bind('id_kurikulum', $data['id_kurikulum']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
