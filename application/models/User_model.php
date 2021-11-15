<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{

    public function tanggal()
    {

        $query = "SELECT COUNT(*) total,
                  DATE(absensi.tanggal) tanggal,
                  DATE_FORMAT(absensi.tanggal, '%a') hari
                  FROM absensi
                  WHERE YEARWEEK(absensi.tanggal, 1) = YEARWEEK(NOW(), 1)
                  GROUP BY DATE(absensi.tanggal)
                  
                  ";

        return $this->db->query($query)->result_array();
    }


    public function detail_absensi($tanggal)
    {
        $query = "SELECT * 
                  FROM absensi JOIN pengguna
                  ON absensi.id_pengguna = pengguna.id_pengguna
                  WHERE tanggal = '$tanggal' 
                  ORDER BY id_absensi
                  ";
        return $this->db->query($query)->result_array();
    }


    public function detail_aktivitas($tanggal)
    {
        $query = "SELECT *
                  FROM aktivitas INNER JOIN absensi
                  ON aktivitas.id_absensi = absensi.id_absensi
                  INNER JOIN Pengguna
                  ON absensi.id_pengguna = pengguna.id_pengguna
                  WHERE absensi.tanggal = '$tanggal'
                  ORDER BY id_aktivitas
                    ";
        return $this->db->query($query)->result_array();
    }


    public function semua_data()
    {
        $query = "SELECT * 
                  FROM absensi JOIN pengguna
                  ON absensi.id_pengguna = pengguna.id_pengguna
                  ORDER BY id_absensi
                  ";
        return $this->db->query($query)->result_array();
    }




    public function tanggal_bisa()
    {

        $query = "SELECT YEARWEEK(tanggal) AS minggu FROM absensi  GROUP BY YEARWEEK(tanggal)";

        return $this->db->query($query)->row();
    }



    public function get_absensi()
    {
        $query = "SELECT * FROM profil_kantor_desa WHERE jenis = 'struktur organisasi' ORDER BY id_profil_kantor_desa DESC LIMIT 1";
        return $this->db->query($query)->result_array();
    }


    public function struktur()
    {
        $query = "SELECT * FROM profil_kantor_desa WHERE jenis = 'struktur organisasi' ORDER BY id_profil_kantor_desa DESC LIMIT 1";
        return $this->db->query($query)->row_array();
    }
}
