<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_model extends CI_Model
{

  public function total_pengguna()
  {
    $query = $this->db->get('pengguna');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  public function total_absensi()
  {
    $query = $this->db->get('absensi');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  public function total_aktivitas()
  {
    $query = $this->db->get('aktivitas');
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  public function get_pengguna()
  {
    return $this->db->get_where("pengguna", ['level' => 'user']);
  }

  public function join_absensi()
  {
    $query = "SELECT *
              FROM absensi JOIN pengguna
              ON absensi.id_pengguna = pengguna.id_pengguna
              WHERE pengguna.level = 'user'
              ORDER BY absensi.id_absensi DESC
              ";
    return $this->db->query($query)->result_array();
  }

  public function join_aktivitas()
  {
    $query = "SELECT *
              FROM aktivitas INNER JOIN absensi
              ON aktivitas.id_absensi = absensi.id_absensi
              INNER JOIN Pengguna
              ON absensi.id_pengguna = pengguna.id_pengguna
              ORDER BY aktivitas.id_aktivitas
              ";
    return $this->db->query($query)->result_array();
  }

  public function profil_desa()
  {
    $query = "SELECT *  FROM profil_desa ORDER BY aktivitas.id_aktivitas DESC ";

    return $this->db->query($query)->result_array();
  }



  public function tanggal_sekarang()
  {

    $query = "SELECT *
              FROM absensi JOIN pengguna
              ON absensi.id_pengguna = pengguna.id_pengguna
              WHERE tanggal = DATE(NOW())
              GROUP BY id_absensi
              ";

    return $this->db->query($query)->result_array();
  }



  public function get_profil()
  {
    return $this->db->get_where("profil", array('level ' => 'user'));
  }


  function hapus_pengguna($id_pengguna)
  {
    return $this->db->query("DELETE FROM pengguna WHERE id_pengguna = '$id_pengguna'");
  }


  function hapus_profil_desa($id_profil_desa)
  {
    return $this->db->query("DELETE FROM profil_desa WHERE id_profil_desa = '$id_profil_desa'");
  }

  function hapus_profil_kantor_desa($id_profil_kantor_desa)
  {
    return $this->db->query("DELETE FROM profil_kantor_desa WHERE id_profil_kantor_desa = '$id_profil_kantor_desa'");
  }

  function hapus_absensi($id_absensi)
  {
    return $this->db->query("DELETE FROM absensi WHERE id_absensi = '$id_absensi'");
  }

  function hapus_aktivitas($id_aktivitas)
  {
    return $this->db->query("DELETE FROM aktivitas WHERE id_aktivitas = '$id_aktivitas'");
  }


  public function edit_absensi($id_absensi)
  {
    $query = "SELECT *
              FROM absensi JOIN pengguna
              ON absensi.id_pengguna = pengguna.id_pengguna
              WHERE absensi.id_absensi = '$id_absensi'
              
              ";
    return $this->db->query($query)->result();
  }


  public function edit_aktivitas($id_aktivitas)
  {
    $query = "SELECT *
              FROM aktivitas INNER JOIN absensi
              ON aktivitas.id_absensi = absensi.id_absensi
              INNER JOIN Pengguna
              ON absensi.id_pengguna = pengguna.id_pengguna
              WHERE aktivitas.id_aktivitas = '$id_aktivitas'
              ";
    return $this->db->query($query)->result();
  }














}
