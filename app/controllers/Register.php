<?php

class Register extends Controller
{

    public function index()
    {

        // $data1 = 'Kata Sandi Ada yang salah';
        $data['judul'] = 'Register';
        // $this->view('login/register', $data);
        // display the register process new reggister
        if (isset($_POST['action'])) {
            $newUser = $this->model('Admin');
            $theUser = $newUser->findUser($_POST['username']);
            if ($theUser == null && $_POST['password'] == $_POST['password_confirm']) {
                $newUser->username = $_POST['username'];
                $newUser->nip = $_POST['nip'];
                $newUser->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $newUser->level = $_POST['level'];
                $newUser->create();
                header('location:' . BASE_URL . '/login', 'Data Pengguna berhsil di tambahkan');
            }
            $this->view('login/register', $data);
        } else
            $this->view('login/register', $data);
    }
    public function pegawai()
    {

        // $data1 = 'Kata Sandi Ada yang salah';
        $data['judul'] = 'Register';
        // $this->view('login/register', $data);
        // display the register process new reggister
        if (isset($_POST['action'])) {
            $newUser = $this->model('Admin');
            $theUser = $newUser->findUser($_POST['username']);
            if ($theUser == null && $_POST['password'] == $_POST['password_confirm']) {
                $newUser->username = $_POST['username'];
                $newUser->nip = $_POST['nip'];
                $newUser->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $newUser->level = $_POST['level'];
                $newUser->create();
                header('location:' . BASE_URL . '/login/pegawai', 'Data Pengguna berhsil di tambahkan');
            }
            $this->view('login/register_pegawai', $data);
        } else
            $this->view('login/register_pegawai', $data);
    }
    public function guru()
    {

        // $data1 = 'Kata Sandi Ada yang salah';
        $data['judul'] = 'Register';
        // $this->view('login/register', $data);
        // display the register process new reggister
        if (isset($_POST['action'])) {
            $newUser = $this->model('Admin');
            $theUser = $newUser->findUser($_POST['username']);
            if ($theUser == null && $_POST['password'] == $_POST['password_confirm']) {
                $newUser->username = $_POST['username'];
                $newUser->nip = $_POST['nip'];
                $newUser->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
                $newUser->level = $_POST['level'];
                $newUser->create();
                header('location:' . BASE_URL . '/login/guru', 'Data Pengguna berhsil di tambahkan');
            }
            $this->view('login/register_guru', $data);
        } else
            $this->view('login/register_guru', $data);
    }
}
