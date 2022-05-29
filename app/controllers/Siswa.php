<?php

class Siswa extends Controller
{
    public function index()
    {
        $data['siswa'] = $this->model('Model_siswa')->getAllsiswa();
        $data['judul'] = 'Tabel Data Siswa';
        $this->view('template/header', $data);
        $this->view('siswa/index', $data);
        $this->view('template/footer', $data);
    }

    // public function tambah()

    // {
    //     if ($this->model('Shop_model')->tambahDataSiswa($_POST) > 0) {
    //         Flashh::setFlash('berhasil', 'ditambhakan', 'success');
    //         header('Location: ' . BASE_URL . '/Shop');
    //         exit;
    //     } else {
    //         Flashh::setFlash('gagal', 'ditambhakan', 'danger');
    //         header('Location: ' . BASE_URL . '/Shop');
    //         exit;
    //     }
    // }

    public function tambahDataSiswa()

    {
        if (isset($_POST['action'])) {
            $data = $this->model('Model_siswa');
            // $data->admin_id = $_SESSION['id_siswa'];
            $data->kelas = $_POST['kelas'];
            $data->angkatan = $_POST['angkatan'];
            $data->wali_kelas = $_POST['wali_kelas'];
            $data->file = $_FILES['file']['name'];

            $data->upload();
            if (!$data->file) {
                return false;
            }


            // $jurnal = $dokumentasi = $this->model('User')->tambahh();
            // if (!$dokumentasi) {
            // 	return false;
            // }
            $data->tambahDataSiswa();
            Flashh::setFlash('berhasil ', 'DiTambahakan', 'success');
            header('Location: ' . BASE_URL . '/Siswa');
            exit;
        } else {
            Flashh::setFlash('gagal', 'ditambhakan', 'danger');
            header('Location: ' . BASE_URL . '/Siswa');
            exit;
        }
    }

    public function hapus($id_siswa)

    {
        if ($this->model('Model_siswa')->hapusDataSiswa($id_siswa) > 0) {
            Flashh::setFlash('berhasil', 'dihapus', 'success');
            header('Location: ' . BASE_URL . '/Siswa');
            exit;
        } else {
            Flashh::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/Siswa');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Model_siswa')->getSiswaById($_POST['id']));
    }

    public function ubah()
    {

        if ($this->model('Model_siswa')->ubahDataSiswa($_POST) > 0) {
            Flashh::setFlash('berhasil', 'di ubah', 'success');
            header('Location: ' . BASE_URL . '/Siswa');
            exit;
        } else {
            Flashh::setFlash('gagal', 'di ubah', 'danger');
            header('Location: ' . BASE_URL . '/Siswa');
            exit;
        }
    }
}
