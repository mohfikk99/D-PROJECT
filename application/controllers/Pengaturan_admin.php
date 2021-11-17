<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan_admin extends CI_Controller
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

        $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

        $this->load->view('pengaturan_admin/akses', $data);
    }


    public function edit_pengguna($id_pengguna)
    {
        $data['title'] = 'Halaman Edit Pengguna';

        $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

        $data['pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' => $id_pengguna])->result();

        $this->load->view('templates/header_admin', $data);
        $this->load->view('pengaturan_admin/edit_pengguna', $data);
        $this->load->view('templates/footer');
    }

    public function update_pengguna()
    {

        $id_pengguna = $this->input->post('id_pengguna');
        $data = [
            'nama' => $this->input->post('nama'),
            'password' => $this->input->post('password'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon'),
            'jabatan' => $this->input->post('jabatan'),
            'level' => $this->input->post('level'),
        ];

        $this->db->set($data);
        $this->db->where('id_pengguna', $id_pengguna);
        $this->db->update('pengguna');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
        berhasil diubah</div>');
        redirect('admin');
    }

    public function hapus_pengguna($id_pengguna)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->hapus_pengguna($id_pengguna);
        $this->session->set_flashdata('massage', '<div class="alert alert-warning" role="alert">
        berhasil dihapus</div>');
        redirect('admin');
    }

    public function hapus_profil_desa($id_pengguna)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->hapus_profil_desa($id_pengguna);
        $this->session->set_flashdata('massage', '<div class="alert alert-warning" role="alert">
        berhasil dihapus</div>');
        redirect('admin/profil');
    }


    public function hapus_profil_kantor_desa($id_pengguna)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->hapus_profil_kantor_desa($id_pengguna);
        $this->session->set_flashdata('massage', '<div class="alert alert-warning" role="alert">
        berhasil dihapus</div>');
        redirect('admin/profil');
    }


    public function edit_absensi($id_absensi)
    {
        $data['title'] = 'Halaman Edit absensi';

        $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

        $data['absensi'] = $this->Admin_model->edit_absensi($id_absensi);

        $this->load->view('templates/header_admin', $data);
        $this->load->view('pengaturan_admin/edit_absensi', $data);
        $this->load->view('templates/footer');
    }

    public function update_absensi()
    {

        $id_absensi = $this->input->post('id_absensi');
        $data = [
            'id_pengguna' => $this->input->post('id_pengguna'),
            'tanggal' => $this->input->post('tanggal'),
            'keterangan' => $this->input->post('keterangan'),
        ];

        $this->db->set($data);
        $this->db->where('id_absensi', $id_absensi);
        $this->db->update('absensi');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
        berhasil diubah</div>');
        redirect('admin/absensi');
    }

    public function hapus_absensi($id_absensi)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->hapus_absensi($id_absensi);
        $this->session->set_flashdata('massage', '<div class="alert alert-warning" role="alert">
        berhasil dihapus</div>');
        redirect('admin/absensi');
    }



    public function edit_aktivitas($id_aktivitas)
    {
        $data['title'] = 'Halaman Edit aktivitas';

        $data['pengguna'] = $this->db->get_where('pengguna', ['nama' => $this->session->userdata('nama')])->row_array();

        $data['aktivitas'] = $this->Admin_model->edit_aktivitas($id_aktivitas);

        $this->load->view('templates/header_admin', $data);
        $this->load->view('pengaturan_admin/edit_aktivitas', $data);
        $this->load->view('templates/footer');
    }

    public function update_aktivitas()
    {

        $id_aktivitas = $this->input->post('id_aktivitas');
        $data = [
            'id_absensi' => $this->input->post('id_absensi'),
            'aktivitas_harian' => $this->input->post('aktivitas_harian'),
        ];
        // gambar
        $upload_gambar = $_FILES['gambar']['name'];
        if ($upload_gambar) {
            $config['allowed_types'] = 'docx|pdf';
            $config['max_size'] = '5048';
            $config['upload_path'] = './assets/file/';
            $this->load->library('upload', $config);

            if ($this->upload->do_upload('gambar')) {
                $new_gambar = $this->upload->data('file_name');
                $this->db->set('gambar', $new_gambar);
            } else {
                echo $this->upload->display_errors();
            }
        }
        // akhir gambar

        $this->db->set($data);
        $this->db->where('id_aktivitas', $id_aktivitas);
        $this->db->update('aktivitas');
        $this->session->set_flashdata('massage', '<div class="alert alert-success" role="alert">
        berhasil diubah</div>');
        redirect('admin/aktivitas');
    }

    public function hapus_aktivitas($id_aktivitas)
    {
        $this->load->model('Admin_model');
        $this->Admin_model->hapus_aktivitas($id_aktivitas);
        $this->session->set_flashdata('massage', '<div class="alert alert-warning" role="alert">
        berhasil dihapus</div>');
        redirect('admin/aktivitas');
    }
}
