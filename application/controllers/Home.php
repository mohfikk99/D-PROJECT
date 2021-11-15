<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Login_model');
    $this->load->model('Home_model');
    $this->load->library('form_validation');
  }


  public function index()
  {

    $data['struktur'] = $this->Home_model->struktur();
    $data['kepala_desa'] = $this->Home_model->kepala_desa();
    $data['nama_kepala_desa'] = $this->Home_model->nama_kepala_desa();
    $data['pegawai'] = $this->Home_model->pegawai();
    $data['warga_desa'] = $this->Home_model->warga_desa();
    $data['kantor'] = $this->Home_model->kantor();
    $data['data_desa'] = $this->Home_model->data_desa();

    $this->load->view('Home/index', $data);
  }

  public function login()
  {

    $this->load->view('Home/login');
  }

  public function proses_login()
  {


    //set form validation
    $this->form_validation->set_rules('nama', 'nama', 'required');
    $this->form_validation->set_rules('password', 'Password', 'required');

    //set message form validation
    $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

    //cek validasi
    if ($this->form_validation->run() == TRUE) {

      //get data dari FORM
      $nama = $this->input->post("nama", TRUE);
      $password = $this->input->post('password');

      //checking data via model
      $checking = $this->Login_model->check_login('pengguna', array('nama' => $nama), array('password' => $password));

      //jika ditemukan, maka create session
      if ($checking != FALSE) {
        foreach ($checking as $apps) {

          $session_data = array(

            'nama' => $apps->nama,
            'user_pass' => $apps->password,
            'level'      => $apps->level
          );
          //set session userdata
          $this->session->set_userdata($session_data);

          //redirect berdasarkan level user
          if ($this->session->userdata("level") == "admin") {
            redirect('admin');
          } else {
            redirect('user');
          }
        }
      } else {

        $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> MAAF</b> username atau password salah!</div></div>';
        $this->load->view('home/login', $data);
      }
    } else {

      $this->load->view('home/login');
    }
  }


  public function logout()
  {

    $this->session->sess_destroy();
    redirect('home');
  }
}
