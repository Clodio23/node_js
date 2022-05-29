<?php

class Management extends Controller
{
    public function index()
    {
        $data['login'] = $this->model('Model_management')->getAllManagement();
        $data['judul'] = 'Management User';
        $this->view('template/header', $data);
        $this->view('management/index', $data);
        $this->view('template/footer');
    }

    public function hapusManagement($id)

    {

        if ($this->model('Model_management')->hapusDataManagement($id) > 0) {
            Flashh::setFlash('berhasil ', 'DiHapus', 'success');
            header('Location: ' . BASE_URL . '/management');
            exit;
        } else {
            Flashh::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/management');
            exit;
        }
    }
}
