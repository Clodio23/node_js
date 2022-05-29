<?php

class Login extends Controller
{
    public function index()
    {
        $data1 = 'Kata Sandi Atau Password Anda Masukan Salah!';
        $data['judul'] = 'Login Smp Negeri 7 Ambon';
        //display login proses 
        if (isset($_POST['action'])) {

            $theUser = $this->model('Admin')->findUser($_POST['username']);
            if ($theUser != null && password_verify($_POST['password'], $theUser->password_hash)) {
                $_SESSION['admin_id'] = $theUser->admin_id;
                $_SESSION['nip'] = $theUser->nip;
                $_SESSION['level'] = $theUser->level;

                //uji level
                if ($theUser->level == "admin") {
                    header('location: ' . BASE_URL . '/Dashboard/index');
                } else {
                    $this->view('login/index', $data1);
                }
            } else {
                $this->view('login/index', $data1);
            }
        } else
            $this->view('login/index', $data);
    }
    public function guru()
    {
        $data1 = 'Kata Sandi Atau Password Anda Masukan Salah!';
        $data['judul'] = 'Login Smp Negeri 7 Ambon';
        //display login proses 
        if (isset($_POST['action'])) {

            $theUser = $this->model('Admin')->findUser($_POST['username']);
            if ($theUser != null && password_verify($_POST['password'], $theUser->password_hash)) {
                $_SESSION['admin_id'] = $theUser->admin_id;
                $_SESSION['nip'] = $theUser->nip;
                $_SESSION['level'] = $theUser->level;

                //uji level
                if ($theUser->level == "guru") {
                    header('location: ' . BASE_URL . '/Dashboard/index');
                } else {
                    $this->view('login/login_guru', $data1);
                }
            } else {
                $this->view('login/login_guru', $data1);
            }
        } else
            $this->view('login/login_guru', $data);
    }
    public function pegawai()
    {
        $data1 = 'Kata Sandi Atau Password Anda Masukan Salah!';
        $data['judul'] = 'Login Smp Negeri 7 Ambon';
        //display login proses 
        if (isset($_POST['action'])) {

            $theUser = $this->model('Admin')->findUser($_POST['username']);
            if ($theUser != null && password_verify($_POST['password'], $theUser->password_hash)) {
                $_SESSION['admin_id'] = $theUser->admin_id;
                $_SESSION['nip'] = $theUser->nip;
                $_SESSION['level'] = $theUser->level;

                //uji level
                if ($theUser->level == "pegawai") {
                    header('location: ' . BASE_URL . '/Dashboard/index');
                } else {
                    $this->view('login/login_pegawai', $data1);
                }
            } else {
                $this->view('login/login_pegawai', $data1);
            }
        } else
            $this->view('login/login_pegawai', $data);
    }
}
