<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{

  public function __construct()
   {
       parent::__construct();
       $this->load->model('Login_model');
       //cek session dan level user
       if($this->Login_model->is_level() != "user"){
           redirect("home/proses_login");
       }
       $this->load->model('User_model');
   }

  public function index()
  {
    $data['title'] = 'Halaman absensi';

    $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

    $data['absensi'] = $this->User_model->tanggal();

    $this->load->view('templates/header_user', $data);
    $this->load->view('user/index', $data);
    $this->load->view('templates/footer');

  }


  public function detail_absensi($tanggal)
  {
    $data['title'] = 'Halaman Detail Absensi';

    $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

    $data['detail_absensi'] = $this->User_model->detail_absensi($tanggal);

    $this->load->view('templates/header_user', $data);
    $this->load->view('user/detail_absensi', $data);
    $this->load->view('templates/footer');

  }


  public function aktivitas()
  {
    $data['title'] = 'Halaman Aktivitas Mingguan';

    $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

    $data['absensi'] = $this->User_model->tanggal();

    $this->load->view('templates/header_user', $data);
    $this->load->view('user/aktivitas', $data);
    $this->load->view('templates/footer');

  }

  public function detail_aktivitas($tanggal)
  {
    $data['title'] = 'Halaman Detail Aktivitas Harian';

    $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

    $data['detail_absensi'] = $this->User_model->detail_aktivitas($tanggal);

    $this->load->view('templates/header_user', $data);
    $this->load->view('user/detail_aktivitas', $data);
    $this->load->view('templates/footer');

  }


  public function semua_data()
  {
    $data['title'] = 'Halaman Semua Data';

    $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

    $data['semua_data'] = $this->User_model->semua_data();

    $this->load->view('templates/header_user', $data);
    $this->load->view('user/semua_data', $data);
    $this->load->view('templates/footer');

  }



//   public function produk()
//   {
//     $data['title'] = 'Produk';

//     $data['login'] = $this->db->get_where('login', ['name' => $this->session->userdata('name')])->row_array();

//     $data['produk'] = $this->db->get('produk')->result_array();

//     $this->load->view('templates/header', $data);
//     $this->load->view('templates/sidebar_user', $data);
//     $this->load->view('templates/topbar_user', $data);
//     $this->load->view('user/produk', $data);
//     $this->load->view('templates/footer');
//   }


//   public function pesan()
//   {
//     $data['title'] = 'Pesanan Anda';

//     $data['login'] = $this->db->get_where('login', ['name' => $this->session->userdata('name')])->row_array();

//     $this->form_validation->set_rules('nama', 'nama', 'required|trim');
//     $this->form_validation->set_rules('produk', 'produk', 'required|trim');
//     $this->form_validation->set_rules('alamat', 'alamat', 'required|trim');

//     if ($this->form_validation->run() == false) {
//       $this->load->view('templates/header', $data);
//       $this->load->view('templates/sidebar_user', $data);
//       $this->load->view('templates/topbar_user', $data);
//       $this->load->view('user/pesan', $data);
//       $this->load->view('templates/footer');
//   }else {
//     $data =[
//       'nama' => $this->input->post('nama'),
//       'produk' => $this->input->post('produk'),
//       'sewa' => $this->input->post('sewa'),
//       'alamat' => $this->input->post('alamat'),
//       'jaminan' => $this->input->post("jaminan")
//     ];

//       $this->db->insert('pesan', $data);
//       redirect('user/selesai');
//   }
// }


// public function selesai()
// {
//   $data['title'] = 'selamat';

//   $data['login'] = $this->db->get_where('login', ['name' => $this->session->userdata('name')])->row_array();

//   $this->load->view('templates/header', $data);
//   $this->load->view('templates/sidebar_user', $data);
//   $this->load->view('templates/topbar_user', $data);
//   $this->load->view('user/selesai', $data);
//   $this->load->view('templates/footer');
// }


}

  /* End of file User.php */
