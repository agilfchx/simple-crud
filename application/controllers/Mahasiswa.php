<?php

class Mahasiswa extends CI_Controller
{
  // kalau salah satu selector bakal manggil banyak 
  // database maka dibuat constructor
  // atau jika langsung ke config->autoload->libraries
  public function __construct()
  {
    parent::__construct();
    // $this->load->database();
    // Sama kaya database, kalau dibutuhin di semua method pake construct
    $this->load->model('mahasiswa_model');
    $this->load->library('form_validation');
  }


  public function index()
  {
    // Load dulu baru panggil model (loadnya di construct)
    $data['judul'] = 'Data Mahasiswa';
    $data['mahasiswa'] = $this->mahasiswa_model->getAllMahasiswa();
    if ($this->input->post('keyword')) {
      $data['mahasiswa'] = $this->mahasiswa_model->cariDataMahasiswa();
    }
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/index', $data);
    $this->load->view('templates/footer');
  }

  public function tambah()
  {
    $data['judul'] = 'Form Tambah Data Mahasiswa';
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');
    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/tambah');
      $this->load->view('templates/footer');
    } else {
      $this->mahasiswa_model->tambahDataMahasiswa();
      $this->session->set_flashdata('flash', 'ditambahkan');
      redirect('mahasiswa');
    }
  }

  public function hapus($id)
  {
    $this->mahasiswa_model->hapusDataMahasiswa($id);
    $this->session->set_flashdata('flash', 'dihapus');
    redirect('mahasiswa');
  }

  public function detail($id)
  {
    $data['judul'] = 'Detail Data Mahasiswa';
    $data['mahasiswa'] = $this->mahasiswa_model->getMahasiswaByID($id);
    $this->load->view('templates/header', $data);
    $this->load->view('mahasiswa/detail', $data);
    $this->load->view('templates/footer');
  }

  public function edit($id)
  {
    $data['judul'] = 'Form Edit Data Mahasiswa';
    $data['mahasiswa'] = $this->mahasiswa_model->getMahasiswaByID($id);
    $data['jurusan'] = ['Teknik Pengembala', 'Teknik Listrik', 'Teknik Air', 'Teknik Api', 'Teknik Bumi'];
    $this->form_validation->set_rules('nama', 'Nama', 'required');
    $this->form_validation->set_rules('nim', 'NIM', 'required|numeric');

    if ($this->form_validation->run() == FALSE) {
      $this->load->view('templates/header', $data);
      $this->load->view('mahasiswa/edit', $data);
      $this->load->view('templates/footer');
    } else {
      $this->mahasiswa_model->editDataMahasiswa();
      $this->session->set_flashdata('flash', 'diubah');
      redirect('mahasiswa');
    }
  }
}
