<?php

class Mahasiswa extends Controller
{

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getAllMahasiswa();
        $this->view('template/header', $data);
        $this->view('mahasiswa/index', $data);
        $this->view('template/footer');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Mahasiswa';
        $data['mhs'] = $this->model('Mahasiswa_model')->getmahasiswabyid($id);
        $this->view('template/header', $data);
        $this->view('mahasiswa/detail', $data);
        $this->view('template/footer');
    }
    public function tambah()
    {
        if ($this->model('mahasiswa_model')->tambahmahasiswa($_POST) > 0) {
            header('Location: ' . BASEURL .'/mahasiswa');
            exit;
        }
    }
}
