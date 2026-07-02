<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pelanggan extends CI_Model {
    public function get_all()
    {
    return $this->db->get('pelanggan')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('pelanggan', $data);
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('pelanggan',
                ['id_pelanggan' => $id])->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id_pelanggan', $id);
        return $this->db->update('pelanggan', $data);
    }

    public function delete($id)
    {
        $this->db->where('id_pelanggan', $id);
        return $this->db->delete('pelanggan');
    }
}