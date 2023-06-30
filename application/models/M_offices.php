<?php

class M_offices extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        return $this->db->get("offices")->result();
    }

    public function insertData($data)
    {
        $this->db->insert('offices', $data);
        return $this->db->affected_rows();
    }

    public function get_data($officeCode)
    {
        $query = $this->db->get_where('offices', array('officeCode' => $officeCode));
        return $query->row();
    }

    public function update_data($officeCode, $data)
    {
        $this->db->where('officeCode', $officeCode);
        $this->db->update('offices', $data);
    }

    public function delete_data($officeCode)
    {
        $this->db->where('officeCode', $officeCode);
        $this->db->delete('offices');
    }
};
