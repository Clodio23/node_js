<?php

class Ujian extends Controller
{

    public function index()
    {
        $data['ujian'] = $this->model('Model_Ujian')->getAllUjian();
        $data['judul'] = 'Tabel Data Ujian';
        $this->view('template/header', $data);
        $this->view('ujian/index', $data);
        $this->view('template/footer', $data);
    }

    public function upload()
    {
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
                alert ('yang anda upload bukan word atau pdf!');
            </script>
        ";
            return false;
        }
        $namafilebaru = uniqid();
        $namafilebaru .= '.';
        $namafilebaru .= $ekstensifile;
        move_uploaded_file($tmpname, 'upload/' . $namefile);
        return $namefile;
    }

    public function tambahUjian()



    {

        if (isset($_POST['action'])) {
            $data = $this->model('Model_Ujian');
            // $data->admin_id = $_SESSION['id_siswa'];
            $data->nama_ujian = $_POST['nama_ujian'];
            $data->semester = $_POST['semester'];
            $data->tahun_ajaran = $_POST['tahun_ajaran'];
            $data->tanggal_ujian = $_POST['tanggal_ujian'];
            $data->mata_pelajaran = $_POST['mata_pelajaran'];
            $data->kelas = $_POST['kelas'];
            $data->pengampu = $_POST['pengampu'];
            $data->file_ujian = $_FILES['file_ujian']['name'];


            $data->upload();
            if (!$data->file_ujian) {
                return false;
            }


            // $jurnal = $dokumentasi = $this->model('User')->tambahh();
            // if (!$dokumentasi) {
            // 	return false;
            // }
            $data->tambahDataUjian();
            Flashh::setFlash('berhasil ', 'DiTambahakan', 'success');
            header('Location: ' . BASE_URL . '/Ujian');
            exit;
        } else {
            Flashh::setFlash('gagal', 'ditambhakan', 'danger');
            header('Location: ' . BASE_URL . '/Ujian');
            exit;
        }
    }

    public function hapus($id_ujian)

    {
        if ($this->model('Model_Ujian')->hapusDataUjian($id_ujian) > 0) {
            Flashh::setFlash('berhasil', ' dihapus', 'success');
            header('Location: ' . BASE_URL . '/Ujian');
            exit;
        } else {
            Flashh::setFlash('gagal', ' dihapus', 'danger');
            header('Location: ' . BASE_URL . '/Ujian');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Model_Ujian')->getUjianById($_POST['id']));
    }

    public function ubah()
    {

        if ($this->model('Model_Ujian')->ubahDataUjian($_POST) > 0) {
            Flashh::setFlash('berhasil', ' di ubah', 'success');
            header('Location: ' . BASE_URL . '/Ujian');
            exit;
        } else {
            Flashh::setFlash('gagal', ' di ubah', 'danger');
            header('Location: ' . BASE_URL . '/Ujian');
            exit;
        }
    }
}
