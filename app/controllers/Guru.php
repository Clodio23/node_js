<?php

class Guru extends Controller
{
    public function index()
    {
        $data['admin'] = $this->model('Model_guru')->getAlladmin();
        $data['nama'] = 'admin';
        $data['judul'] = 'Tabel Data Guru';
        $this->view('template/header', $data);
        $this->view('guru/index', $data);
        $this->view('template/footer', $data);
    }

    public function detail($id)
    {
        $data['nama'] = 'Detail Admin';
        $data['judul'] = 'Details Data Admin';
        $data['admin'] = $this->model('Model_guru')->getGuruById($id);
        $this->view('template/header', $data);
        $this->view('guru/detailguru', $data);
        $this->view('template/footer', $data);
    }

    public function tambahGuru()

    {
        if (isset($_POST['action'])) {
            $data = $this->model('Model_guru');
            $data->admin_id = $_SESSION['admin_id'];
            $data->nip = $_POST['nip'];
            $data->password = $_POST['password'];
            $data->nik = $_POST['nik'];
            $data->nama_lengkap = $_POST['nama_lengkap'];
            $data->tgl_lahir = $_POST['tgl_lahir'];
            $data->jenis_kelamin = $_POST['jenis_kelamin'];
            $data->agama = $_POST['agama'];
            $data->no_hp = $_POST['no_hp'];
            $data->alamat_email = $_POST['alamat_email'];
            $data->alamat = $_POST['alamat'];
            $data->nuptk = $_POST['nuptk'];
            $data->bidang_studi = $_POST['bidang_studi'];
            $data->jabatan = $_POST['jabatan'];
            $data->tugas_tambahan = $_POST['tugas_tambahan'];
            $data->status_pegawai = $_POST['status_pegawai'];
            $data->status_keaktifan = $_POST['status_keaktifan'];
            $data->status_nikah = $_POST['status_nikah'];
            $data->tmt_pns = $_POST['tmt_pns'];
            $data->tmt_cpns = $_POST['tmt_cpns'];
            $data->tmt_pangkat = $_POST['tmt_pangkat'];
            $data->pangkat_golongan = $_POST['pangkat_golongan'];
            $data->sumber_gaji = $_POST['sumber_gaji'];
            $data->npwp = $_POST['npwp'];
            $data->img = $_FILES['img']['name'];
            $data->file = $_FILES['file']['name'];

            $data->upload1();
            if (!$data->img) {
                return false;
            }

            $data->upload();
            if (!$data->file) {
                return false;
            }


            // $jurnal = $dokumentasi = $this->model('User')->tambahh();
            // if (!$dokumentasi) {
            // 	return false;
            // }
            $data->tambahDataGuru();
            Flashh::setFlash('berhasil ', 'DiTambahakan', 'success');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            Flashh::setFlash('gagal', 'ditambhakan', 'danger');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Model_guru')->getGururById($_POST['id']));
        // echo "oke";
        // echo $_POST['id'];
    }

    public function ubah()
    {

        if ($this->model('Model_guru')->ubahDataGuru($_POST) > 0) {
            Flashh::setFlash('berhasil', 'di ubah', 'success');
            header('Location: ' . BASE_URL . '/Guru');
            exit;
        } else {
            Flashh::setFlash('gagal', 'di ubah', 'danger');
            header('Location: ' . BASE_URL . '/Guru');
            exit;
        }
    }

    public function hapusGuru($id)

    {

        if ($this->model('Model_guru')->hapusDataGuru($id) > 0) {
            Flashh::setFlash('berhasil ', 'DiHapus', 'danger');
            header('Location: ' . BASE_URL . '/Guru');
            exit;
        } else {
            Flashh::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/Guru');
            exit;
        }
    }
}
