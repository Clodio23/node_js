<?php

class Sarana extends Controller
{

    public function index()
    {
        $data['sarana'] = $this->model('Model_sarana')->getAllsarana();
        $data['judul'] = 'Tabel Data Sarana';
        $this->view('template/header', $data);
        $this->view('sarana/index', $data);
        $this->view('template/footer', $data);
    }
    public function tambahSarana()
    {

        if (isset($_POST['action'])) {
            $data = $this->model('Model_Sarana');
            // $data->admin_id = $_SESSION['id_siswa'];
            $data->jenis_sarana = $_POST['jenis_sarana'];
            $data->letak = $_POST['letak'];
            $data->kepemilikan = $_POST['kepemilikan'];
            $data->spesifikasi = $_POST['spesifikasi'];
            $data->jumlah = $_POST['jumlah'];
            $data->laik = $_POST['laik'];
            $data->tidak_laik = $_POST['tidak_laik'];

            // $jurnal = $dokumentasi = $this->model('User')->tambahh();
            // if (!$dokumentasi) {
            // 	return false;
            // }
            $data->tambahDataSarana();
            Flashh::setFlash('berhasil ', 'DiTambahakan', 'success');
            header('Location: ' . BASE_URL . '/Sarana');
            exit;
        } else {
            Flashh::setFlash('gagal', 'ditambhakan', 'danger');
            header('Location: ' . BASE_URL . '/Sarana');
            exit;
        }
    }

    public function hapus($id_sarana)

    {
        if ($this->model('Model_Sarana')->hapusDataSarana($id_sarana) > 0) {
            Flashh::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/Sarana');
            exit;
        } else {
            Flashh::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/Sarana');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Model_sarana')->getSaranaById($_POST['id']));
        // echo "ok";
        // echo $_POST['id'];
    }

    public function ubahSarana()
    {

        if ($this->model('Model_sarana')->ubahDataSarana($_POST) > 0) {
            Flashh::setFlash('berhasil', ' di ubah', 'success');
            header('Location: ' . BASE_URL . '/Sarana');
            exit;
        } else {
            Flashh::setFlash('gagal', ' di ubah', 'danger');
            header('Location: ' . BASE_URL . '/Sarana');
            exit;
        }
    }
}
