<?php

class mahasiswa_model extends CI_Model
{
  public function getAllMahasiswa()
  {
    return $query = $this->db->get('mahasiswa')->result_array();
  }

  public function tambahDataMahasiswa()
  {
    // pakai params true biar menghindar dari XSS / SQLi
    $data = [
      'nama' => $this->input->post('nama', true),
      'nim' => $this->input->post('nim', true),
      'jurusan' => $this->input->post('jurusan', true)
    ];
    $this->db->insert('mahasiswa', $data);
  }

  public function hapusDataMahasiswa($id)
  {
    // opt 1
    // $this->db->where('id', $id);
    // opt2
    $this->db->delete('mahasiswa', ['id' => $id]);
  }

  public function getMahasiswaByID($id)
  {
    // result_array() hasilnya array (semuanya)
    return $this->db->get_where('mahasiswa', ['id' => $id])->row_array();
  }

  public function editDataMahasiswa()
  {
    $data = [
      'nama' => $this->input->post('nama', true),
      'nim' => $this->input->post('nim', true),
      'jurusan' => $this->input->post('jurusan', true)
    ];
    // ngambil hidden value
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('mahasiswa', $data);
  }

  public function cariDataMahasiswa()
  {
    $keyword = $this->input->post('keyword', true);
    $this->db->like('nama', $keyword);
    // search 2+ keyword (nama dan jurusan)
    $this->db->or_like('jurusan', $keyword);
    return $this->db->get('mahasiswa')->result_array();
  }
}
