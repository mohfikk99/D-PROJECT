<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Login_model');


    if ($this->Login_model->is_level() != "admin") {
      redirect("home/proses_login");
    }

    $this->load->model('Admin_model');
  }

  public function index()
  {
    $data['title'] = 'Halaman data Pengguna';

    $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

    $data['pengguna'] = $this->db->get('pengguna')->result_array();
    $data['total'] = $this->Admin_model->total_pengguna();

    $this->form_validation->set_rules('id_pengguna', 'id_pegawai', 'required|trim|is_unique[pengguna.id_pengguna]', ['is_unique' => 'Id ini sudah terdaftar!']);
    $this->form_validation->set_rules('nama', 'nama', 'required|trim|is_unique[pengguna.nama]', ['is_unique' => 'Nama ini sudah terdaftar!']);
    $this->form_validation->set_rules('password', 'password', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header_admin', $data);
      $this->load->view('admin/index', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'id_pengguna' => $this->input->post('id_pengguna'),
        'nama' => $this->input->post('nama'),
        'password' => $this->input->post('password'),
        'alamat' => $this->input->post('alamat'),
        'telepon' => $this->input->post('telepon'),
        'jabatan' => $this->input->post('jabatan'),
        'level' => $this->input->post('level'),
      ];
      $this->db->insert('pengguna', $data);
      $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
      berhasil ditambahkan</div>');
      redirect('admin');
    }
  }



  public function absensi()
  {
    $data['title'] = 'Halaman data Absensi';

    $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

    $data['absensi'] = $this->Admin_model->join_absensi();
    $data['total'] = $this->Admin_model->total_absensi();
    $data['pengguna'] = $this->Admin_model->get_pengguna()->result_array();

    $this->form_validation->set_rules('tanggal', 'tanggal', 'required|trim');
    $this->form_validation->set_rules('keterangan', 'keterangan', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header_admin', $data);
      $this->load->view('admin/absensi', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'id_pengguna' => $this->input->post('id_pengguna'),
        'tanggal' => $this->input->post('tanggal'),
        'keterangan' => $this->input->post('keterangan'),
      ];
      $this->db->insert('absensi', $data);
      $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
      berhasil ditambahkan</div>');
      redirect('admin/absensi');
    }
  }


  public function aktivitas()
  {
    $data['title'] = 'Halaman data aktivitas';

    $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

    $data['aktivitas'] = $this->Admin_model->join_aktivitas();
    $data['total'] = $this->Admin_model->total_aktivitas();
    $data['tanggal_absensi'] = $this->Admin_model->tanggal_sekarang();

    $this->form_validation->set_rules('aktivitas_harian', 'aktivitas_harian', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header_admin', $data);
      $this->load->view('admin/aktivitas', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'id_absensi' => $this->input->post('id_absensi'),
        'aktivitas_harian' => $this->input->post('aktivitas_harian'),
      ];
      // gambar
      $upload_gambar = $_FILES['gambar']['name'];
      if ($upload_gambar) {
        $config['allowed_types'] = 'doc|pdf';
        $config['max_size'] = '5048';
        $config['upload_path'] = './assets/file/';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
          $new_gambar = $this->upload->data('file_name');
          $this->db->set('gambar', $new_gambar);
        }else {
          echo $this->upload->display_errors();
        }
      }
      // akhir gambar
      $this->db->insert('aktivitas', $data);
      $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
      berhasil ditambahkan</div>');
      redirect('admin/aktivitas');
    }
  }


  public function profil()
  {
    $data['title'] = 'Halaman data profil';

    $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

    $data['profil_desa'] = $this->db->get('profil_desa')->result_array();
    $data['profil_kantor_desa'] = $this->db->get('profil_kantor_desa')->result_array();

    $this->form_validation->set_rules('total_dusun', 'total_dusun', 'required|trim');
    $this->form_validation->set_rules('jumlah_penduduk', 'jumlah_penduduk', 'required|trim');


    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header_admin', $data);
      $this->load->view('admin/profil', $data);
      $this->load->view('templates/footer');
    } else {
      $data = [
        'total_dusun' => $this->input->post('total_dusun'),
        'jumlah_penduduk' => $this->input->post('jumlah_penduduk'),
        'luas_area' => $this->input->post('luas_area'),
        'letak_geografis' => $this->input->post('letak_geografis'),
      ];
      $this->db->insert('profil_desa', $data);
      $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
      berhasil ditambahkan</div>');
      redirect('admin/profil');
    }
  }

  public function profil_kantor()
  {
   
      $data = [
        'jenis' => $this->input->post('jenis'),
      ];

      // gambar
      $upload_gambar = $_FILES['gambar']['name'];
      if ($upload_gambar) {
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '5048';
        $config['upload_path'] = './assets/images/desa/';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('gambar')) {
          $new_gambar = $this->upload->data('file_name');
          $this->db->set('gambar', $new_gambar);
        }else {
          echo $this->upload->display_errors();
        }
      }
      // akhir gambar
      $this->db->insert('profil_kantor_desa', $data);
      $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
      berhasil ditambahkan</div>');
      redirect('admin/profil');
  
  }

  public function petunjuk()
  {
    $data['title'] = 'Halaman Petunjuk Website';

    $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

    $this->load->view('templates/header_admin', $data);
    $this->load->view('admin/petunjuk', $data);
    $this->load->view('templates/footer');
   
  }



















}

  /* End of file Admin.php */
