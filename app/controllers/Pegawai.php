<?php
if (!isset($_SESSION["admin_id"])) {
    header("Location: Login");
    exit;
}
class Pegawai extends Controller
{

    public function index()
    {
        if ($_SESSION['level'] == 'admin') {
        $data['admin'] = $this->model('Model_pegawai')->getAlladmin();
        $data['nama'] = 'admin';
        $data['judul'] = 'Tabel Data pegawai';
        $this->view('template/header', $data);
        $this->view('pegawai/tb_pegawai', $data);
        $this->view('template/footer', $data);
        
    }else
    {
        header('Location: ' . BASE_URL . '/pegawai/userPegawai');
            exit;
    }
    }

    public function detail($id)
    {
        $data['nama'] = 'Detail Pegawai';
        $data['judul'] = 'Details Data Pegawai';
        $data['admin'] = $this->model('Model_pegawai')->getPegawaiById($id);
        $this->view('template/header', $data);
        $this->view('pegawai/detile', $data);
        $this->view('template/footer', $data);
    }

    public function userPegawai()
    {
        $data['admin'] = $this->model('Admin')->getForPegawai($_SESSION['admin_id']);
        $data['nama'] = 'admin';
        $data['judul'] = 'Tabel Data admin';
        $this->view('template/header', $data);
        $this->view('pegawai/dataPegawai', $data);
        $this->view('template/footer', $data);
    }
    public function tambahPegawai()

    {
        if (isset($_POST['action'])) {
            $data = $this->model('Model_pegawai');
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
            $data->tgl_inputdata = $_POST['tgl_inputdata'];

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
            $data->tambahDataPegawai();
            Flashh::setFlash('berhasil ', 'DiTambahakan', 'success');
            header('Location: ' . BASE_URL . '/Pegawai');
            exit;
        } else {
            Flashh::setFlash('gagal', 'ditambhakan', 'danger');
            header('Location: ' . BASE_URL . '/Pegawai');
            exit;
        }
    }

    public function tambahUserPegawai()

    {
        if (isset($_POST['action'])) {
            $data = $this->model('Model_pegawai');
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
            $data->tgl_inputdata = $_POST['tgl_inputdata'];

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
            //  return false;
            // }
            $data->tambahDatauserpegawai();
            Flashh::setFlash('berhasil ', 'DiTambahakan', 'success');
            header('Location: ' . BASE_URL . '/Pegawai/dataPegawai');
            exit;
        } else {
            Flashh::setFlash('gagal', 'ditambhakan', 'danger');
            header('Location: ' . BASE_URL . '/Pegawai/dataPegawai');
            exit;
        }
    }


    public function hapusPegawai($id)

    {

        if ($this->model('Model_pegawai')->hapusDataPegawai($id) > 0) {
            Flashh::setFlash('berhasil ', 'DiHapus', 'danger');
            header('Location: ' . BASE_URL . '/Pegawai');
            exit;
        } else {
            Flashh::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/Pegawai');
            exit;
        }
    }

    public function getubah()
    {
        echo json_encode($this->model('Model_pegawai')->getPegawaiById($_POST['id']));
        // echo "oke";
        // echo $_POST['id'];
    }


    public function ubah()
    {

        if ($this->model('Model_pegawai')->ubahDataPegawai($_POST) > 0) {
            Flashh::setFlash('berhasil', 'di ubah', 'success');
            header('Location: ' . BASE_URL . '/Pegawai');
            exit;
        } else {
            Flashh::setFlash('gagal', 'di ubah', 'danger');
            header('Location: ' . BASE_URL . '/Pegawai');
            exit;
        }
    }

    public function ubahData()
    {

        if ($this->model('Model_pegawai')->ubahDataPegawai($_POST) > 0) {
            Flashh::setFlash('berhasil', 'di ubah', 'success');
            header('Location: ' . BASE_URL . '/Pegawai/userPegawai');
            exit;
        } else {
            Flashh::setFlash('gagal', 'di ubah', 'danger');
            header('Location: ' . BASE_URL . '/Pegawai/userPegawai');
            exit;
        }
    }
}
