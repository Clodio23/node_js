<?php

class Absend extends Controller
{

    public function index()
    {
        $data['nama'] = 'admin';
        $data['judul'] = 'Pnengisian Absend';
        $this->view('template/header', $data);
        $this->view('absend/index', $data);
        $this->view('template/footer', $data);
    }
    public function tb_absen()
    {
        $data['absend'] = $this->model('Admin')->getForAbsend($_SESSION['admin_id']);
        $data['nama'] = 'admin';
        $data['judul'] = 'Pnengisian Absend';
        $this->view('template/header', $data);
        $this->view('absend/tb_absend', $data);
        $this->view('template/footer', $data);
    }

    public function tb_adminAbsen()
    {
        $data['absend'] = $this->model('Model_absend')->getAllAbsen();
        $data['nama'] = 'admin';
        $data['judul'] = 'Tabel Data admin';
        $this->view('template/header', $data);
        $this->view('absend/tb_adminAbsen', $data);
        $this->view('template/footer', $data);
    }

    public function tambahabsend()

    {
        if (isset($_POST['action'])) {
            $data = date_default_timezone_set('Asia/Jayapura');
            $data = $this->model('Model_absend');
            $data->admin_id = $_SESSION['admin_id'];
            $data->nama = $_POST['nama'];
            $data->absen = $_POST['absen'];
            $data->keterangan = $_POST['keterangan'];
            $data->file = $_FILES['file']['name'];
            $data->time = date('Y-m-d H:i:s');

            $data->upload();
            if (!$data->file) {
                return false;
            }


            // $jurnal = $dokumentasi = $this->model('User')->tambahh();
            // if (!$dokumentasi) {
            // 	return false;
            // }
            $data->tambahDataAbsend();
            Flashh::setFlash('berhasil ', 'DiTambahakan', 'success');
            header('Location: ' . BASE_URL . '/Absend/tb_absen');
            exit;
        } else {
            Flashh::setFlash('gagal', 'ditambhakan', 'danger');
            header('Location: ' . BASE_URL . '/Absend/tb_absen');
            exit;
        }
    }


    public function getubah()
    {
        echo json_encode($this->model('Model_absend')->getAbsendById($_POST['id']));
    }

    public function ubah()
    {

        if ($this->model('Model_absend')->ubahDataAbsend($_POST) > 0) {
            Flashh::setFlash('berhasil', 'di ubah', 'success');
            header('Location: ' . BASE_URL . '/absend/tb_adminAbsen');
            exit;
        } else {
            Flashh::setFlash('gagal', 'di ubah', 'danger');
            header('Location: ' . BASE_URL . '/absend/tb_adminAbsen');
            exit;
        }
    }

    public function hapusAbsen($id)

    {

        if ($this->model('Model_absend')->hapusDataAbsen($id) > 0) {
            Flashh::setFlash('berhasil ', 'DiHapus', 'danger');
            header('Location: ' . BASE_URL . '/Absend/tb_adminAbsen');
            exit;
        } else {
            Flashh::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/Absend/tb_adminAbsen');
            exit;
        }
    }
}
