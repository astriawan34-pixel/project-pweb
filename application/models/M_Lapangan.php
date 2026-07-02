<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Lapangan extends CI_Model {

    public function get_all()
    {
        return $this->db->get('lapangan')->result();
    }

	public function insert($data)
	{
    return $this->db->insert('lapangan', $data);
	}

	public function get_by_id($id)
	{
    return $this->db
                ->get_where('lapangan',
                ['id_lapangan' => $id])
                ->row();
	}

	public function update($id, $data)
	{
    $this->db->where('id_lapangan', $id);
    return $this->db->update('lapangan', $data);
	}

	public function delete($id)
	{
    $this->db->where('id_lapangan', $id);
    return $this->db->delete('lapangan');
	}

    public function get_tersedia()
    {
    return $this->db
                ->where('status','Tersedia')
                ->get('lapangan')
                ->result();
    }

}