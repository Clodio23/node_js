<?php
if (!isset($_SESSION["admin_id"])) {
    header("Location: Login");
    exit;
}
class Kurikulum extends Controller
{
    public function index()
    {
        $data['admin'] = $this->model('Model_kurikulum')->getAlladmin();
        $data['nama'] = 'admin';
        $data['judul'] = 'Tabel Data Kurikulum';
        $this->view('template/header', $data);
        $this->view('kurikulum/tb_kurikulum', $data);
        $this->view('template/footer', $data);
    }
    public function tambahKurikulum()

    {
        if (isset($_POST['action'])) {
            $data = $this->model('Model_kurikulum');
            // $data->admin_id = $_SESSION['admin_id'];
            // $data->id_kurikulum = $_POST['id_kurikulum'];
            $data->jenis_kurikulum = $_POST['jenis_kurikulum'];
            $data->mata_pelajaran = $_POST['mata_pelajaran'];
            $data->tahun_ajaran = $_POST['tahun_ajaran'];
            $data->kelas = $_POST['kelas'];
            $data->pengampu = $_POST['pengampu'];
            $data->tanggal_terima = $_POST['tanggal_terima'];
            $data->file_kurikulum = $_FILES['file_kurikulum']['name'];

            $data->uploadKurikulum();
            if (!$data->file_kurikulum) {
                return false;
            }

            $data->tambahDataKurikulum();
            Flashh::setFlash('berhasil ', 'DiTambahakan', 'success');
            header('Location: ' . BASE_URL . '/kurikulum');
            exit;
        } else {
            Flashh::setFlash('gagal', 'ditambhakan', 'danger');
            header('Location: ' . BASE_URL . '/kurikulum');
            exit;
        }
    }

    public function hapusKurikulum($id)

    {

        if ($this->model('Model_kurikulum')->hapusDatakurikulum($id) > 0) {
            Flashh::setFlash('berhasil ', 'DiHapus', 'success');
            header('Location: ' . BASE_URL . '/kurikulum');
            exit;
        } else {
            Flashh::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/kurikulum');
            exit;
        }
    }
    public function getUbah()
    {
        echo json_encode($this->model('Model_kurikulum')->getKurikulumById($_POST['id']));
    }

    public function Ubah()
    {
        if ($this->model('Model_kurikulum')->ubahDataKurikulum($_POST) > 0) {
            Flashh::setFlash('berhasil ', 'DiUbah', 'success');
            header('Location: ' . BASE_URL . '/kurikulum');
            exit;
        } else {
            Flashh::setFlash('gagal', 'diUbah', 'danger');
            header('Location: ' . BASE_URL . '/kurikulum');
            exit;
        }
    }
}
