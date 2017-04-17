<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Modelmhs extends CI_Model
{
  public function getMahasiswa($where='')
  {
    $data= $this->db->query("select * from mahasiswa ".$where);
    return $data;
  }
  public function insertData($table, $data)
  {
    $input = $this->db->insert($table, $data);
    return $input;
  }
  public function updateData($table, $data, $where)
  {
    $update = $this->db->update($table, $data, $where);
    return $update;
  }
  public function deleteData($table, $where)
  {
    $delete= $this->db->delete($table, $where);
    return $delete;
  }
}
