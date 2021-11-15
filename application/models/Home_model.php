<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{


    public function struktur()
    {
        $query = "SELECT * FROM profil_kantor_desa WHERE jenis = 'struktur organisasi' ORDER BY id_profil_kantor_desa DESC LIMIT 1";
        return $this->db->query($query)->row_array();
    }

    public function kepala_desa()
    {
        $query = "SELECT * FROM profil_kantor_desa WHERE jenis = 'kepala desa' ORDER BY id_profil_kantor_desa DESC LIMIT 1";
        return $this->db->query($query)->row_array();
    }

    public function nama_kepala_desa()
    {
        $query = "SELECT * FROM pengguna WHERE jabatan = 'kepala desa' ORDER BY id_pengguna DESC LIMIT 1";
        return $this->db->query($query)->row_array();
    }

    public function pegawai()
    {
        $query = "SELECT * FROM profil_kantor_desa WHERE jenis = 'pegawai' ORDER BY id_profil_kantor_desa DESC LIMIT 1";
        return $this->db->query($query)->row_array();
    }

    public function warga_desa()
    {
        $query = "SELECT * FROM profil_kantor_desa WHERE jenis = 'warga desa' ORDER BY id_profil_kantor_desa DESC LIMIT 1";
        return $this->db->query($query)->row_array();
    }

    public function kantor()
    {
        $query = "SELECT * FROM profil_kantor_desa WHERE jenis = 'kantor' ORDER BY id_profil_kantor_desa DESC LIMIT 1";
        return $this->db->query($query)->row_array();
    }


    public function data_desa()
    {
        $query = "SELECT * FROM profil_desa ORDER BY id_profil_desa DESC LIMIT 1";
        return $this->db->query($query)->result_array();
    }

   
}
