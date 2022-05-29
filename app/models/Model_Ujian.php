<?php
class Model_Ujian
{

    private $table = 'tb_ujian';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
        // parent::__construct();
    }

    public function getAllUjian()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUjianById($id_ujian)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_ujian=:id_ujian');
        $this->db->bind('id_ujian', $id_ujian);
        return $this->db->single();
    }

    public function tambahDataUjian()
    {
        $query = "INSERT INTO tb_ujian
                    VALUES
                    ('', :nama_ujian, :semester, :tahun_ajaran, :tanggal_ujian, :mata_pelajaran, :kelas, :pengampu, :file_ujian)";

        $this->db->query($query);
        $this->db->bind('nama_ujian', $this->nama_ujian);
        $this->db->bind('semester', $this->semester);
        $this->db->bind('tahun_ajaran', $this->tahun_ajaran);
        $this->db->bind('tanggal_ujian', $this->tanggal_ujian);
        $this->db->bind('mata_pelajaran', $this->mata_pelajaran);
        $this->db->bind('kelas', $this->kelas);
        $this->db->bind('pengampu', $this->pengampu);
        $this->db->bind('file_ujian', $this->file_ujian);

        $this->db->execute([
            'nama_ujian' => $this->nama_ujian,
            'semester' => $this->semester,
            'tahun_ajaran' => $this->tahun_ajaran,
            'tanggal_ujian' => $this->tanggal_ujian,
            'mata_pelajaran' => $this->mata_pelajaran,
            'kelas' => $this->kelas,
            'pengampu' => $this->pengampu,
            'file_ujian' => $this->file_ujian
        ]);

        return $this->db->rowCount();
    }
    public function ubahDataUjian($data)
    {
        $query = "UPDATE tb_ujian
                    SET
                    nama_ujian = :nama_ujian, 
                    semester = :semester, 
                    tahun_ajaran = :tahun_ajaran,
                    tanggal_ujian = :tanggal_ujian,
                    mata_pelajaran = :mata_pelajaran,
                    kelas = :kelas,
                    pengampu = :pengampu,
                    file_ujian = :file_ujian
                    WHERE id_ujian = :id_ujian";

        $this->db->query($query);
        $this->db->bind('nama_ujian', $data['nama_ujian']);
        $this->db->bind('semester', $data['semester']);
        $this->db->bind('tahun_ajaran', $data['tahun_ajaran']);
        $this->db->bind('tanggal_ujian', $data['tanggal_ujian']);
        $this->db->bind('mata_pelajaran',  $data['mata_pelajaran']);
        $this->db->bind('kelas', $data['kelas']);
        $this->db->bind('pengampu', $data['pengampu']);
        $this->db->bind('file_ujian', $data['file_ujian']);
        $this->db->bind('id_ujian', $data['id_ujian']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    function upload()
    {
        // $this->db->query('SELECT * FROM ' . $this->table1 . ' WHERE dokumentasi=:dokumentasi');
        $namefile = $_FILES['file_ujian']['name'];
        $error = $_FILES['file_ujian']['error'];
        $tmpname = $_FILES['file_ujian']['tmp_name'];

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
        move_uploaded_file($tmpname, 'upload/ujian/' . $namefile);
        return $namefile;

        // $this->db->bind('dokumentasi', $this->dokumentasi);
        // $this->db->execute([
        //     'dokumentasi' => $this->dokumentasi

        // ]);
        return $this->db->rowCount();
    }

    public function hapusDataUjian($id_ujian)
    {

        $query = "DELETE FROM tb_ujian WHERE id_ujian = :id_ujian";
        $this->db->query($query);
        $this->db->bind('id_ujian', $id_ujian);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
