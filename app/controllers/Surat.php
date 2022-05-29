<?php
if (!isset($_SESSION["admin_id"])) {
    header("Location: Login");
    exit;
}
class Surat extends Controller
{
    public function index()
    {
        $data['admin'] = $this->model('Model_surat')->getAlladmin();
        $data['nama'] = 'admin';
        $data['judul'] = 'Tabel Data pegawai';
        $this->view('template/header', $data);
        $this->view('surat/tb_surat', $data);
        $this->view('template/footer', $data);
    }
    public function tambahSurat()

    {
        if (isset($_POST['action'])) {
            $data = $this->model('Model_surat');
            // $data->admin_id = $_SESSION['admin_id'];
            $data->no_surat = $_POST['no_surat'];
            $data->perihal_surat = $_POST['perihal_surat'];
            $data->instansi = $_POST['instansi'];
            $data->tanggal_surat = $_POST['tanggal_surat'];
            $data->tanggal_terima = $_POST['tanggal_terima'];
            $data->file_surat = $_FILES['file_surat']['name'];

            $data->uploadSurat();
            if (!$data->file_surat) {
                return false;
            }

            $data->tambahDataSurat();
            Flashh::setFlash('berhasil ', 'DiTambahakan', 'success');
            header('Location: ' . BASE_URL . '/Surat');
            exit;
        } else {
            Flashh::setFlash('gagal', 'ditambhakan', 'danger');
            header('Location: ' . BASE_URL . '/Surat');
            exit;
        }
    }
    public function hapusSurat($id)

    {

        if ($this->model('Model_surat')->hapusDataSurat($id) > 0) {
            Flashh::setFlash('berhasil ', 'DiHapus', 'success');
            header('Location: ' . BASE_URL . '/surat');
            exit;
        } else {
            Flashh::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/surat');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Model_surat')->getSuratById($_POST['id']));
    }

    public function ubah()
    {

        if ($this->model('Model_surat')->ubahDataSurat($_POST) > 0) {
            Flashh::setFlash('berhasil', 'di ubah', 'success');
            header('Location: ' . BASE_URL . '/surat');
            exit;
        } else {
            Flashh::setFlash('gagal', 'di ubah', 'danger');
            header('Location: ' . BASE_URL . '/surat');
            exit;
        }
    }
}
