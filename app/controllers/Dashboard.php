<?php
if (!isset($_SESSION["admin_id"])) {
    header("Location: Login");
    exit;
}
class Dashboard extends Controller
{

    public function index()
    {
        $data['admin'] = $this->model('Admin')->getForAdmin($_SESSION['admin_id']);
        $data['judul'] = 'ARISPAN SMP NEGERI 7 AMBON';
        $this->view('template/header', $data);
        $this->view('home/index', $data);
        $this->view('template/footer', $data);
    }
    // public function login()
    // {
    //     $data['judul'] = 'Login';
    //     $this->view('template/lgheader', $data);
    //     $this->view('login/login', $data);
    // }

    public function tb_dataadmin()
    {
        if ($_SESSION['level'] == 'admin') {
            $data['admin'] = $this->model('Model_admin')->getAlladmin();
            $data['nama'] = 'admin';
            $data['judul'] = 'Tabel Data admin';
            $this->view('template/header', $data);
            $this->view('home/tb_dataadmin', $data);
            $this->view('template/footer', $data);
        } else {
            header('Location: ' . BASE_URL . '/Dashboard/user');
            exit;
        }
    }

    public function user()
    {
        $data['admin'] = $this->model('Admin')->getForAdmin($_SESSION['admin_id']);
        $data['nama'] = 'admin';
        $data['judul'] = 'Tabel Data admin';
        $this->view('template/header', $data);
        $this->view('home/user', $data);
        $this->view('template/footer', $data);
    }

    public function getubah()
    {
        echo json_encode($this->model('Model_admin')->getShopById($_POST['id']));
        // echo $_POST['id'];
    }

    public function ubahUser()
    {

        if ($this->model('Model_admin')->ubahDataUser($_POST) > 0) {
            Flashh::setFlash('berhasil', 'di Profil ubah', 'success');
            header('Location: ' . BASE_URL . '/Dashboard/user');
            exit;
        } else {
            Flashh::setFlash('gagal', 'di Profil ubah', 'danger');
            header('Location: ' . BASE_URL . '/Dashboard/user');
            exit;
        }
    }

    public function detail($id)
    {
        $data['nama'] = 'Detail Admin';
        $data['judul'] = 'Details Data Admin';
        $data['admin'] = $this->model('Model_admin')->getShopById($id);
        $this->view('template/header', $data);
        $this->view('home/detailadmin', $data);
        $this->view('template/footer', $data);
    }

    public function tambahadmin()

    {
        if (isset($_POST['action'])) {
            $data = $this->model('Model_admin');
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
            $data->tambahDataAdmin();
            Flashh::setFlash('berhasil ', 'DiTambahakan', 'success');
            header('Location: ' . BASE_URL . '/Dashboard/tb_dataadmin');
            exit;
        } else {
            Flashh::setFlash('gagal', 'ditambhakan', 'danger');
            header('Location: ' . BASE_URL . '/Dashboard/tb_dataadmin');
            exit;
        }
    }

    public function hapusadmin($id)

    {

        if ($this->model('Model_admin')->hapusDataAdmin($id) > 0) {
            Flashh::setFlash('berhasil ', 'DiHapus', 'danger');
            header('Location: ' . BASE_URL . '/Dashboard/tb_dataadmin');
            exit;
        } else {
            Flashh::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/Dashboard/tb_dataadmin');
            exit;
        }
    }

    public function getubahguru()
    {
        echo json_encode($this->model('Model_admin')->getShopById($_POST['id']));
        // echo "oke";
        // echo $_POST['id'];
    }

    public function ubah()
    {

        if ($this->model('Model_admin')->ubahDataguru($_POST) > 0) {
            Flashh::setFlash('berhasil', 'di ubah', 'success');
            header('Location: ' . BASE_URL . '/Dashboard/tb_dataadmin');
            exit;
        } else {
            Flashh::setFlash('gagal', 'di ubah', 'danger');
            header('Location: ' . BASE_URL . '/Dashboard/tb_dataadmin');
            exit;
        }
    }
}
