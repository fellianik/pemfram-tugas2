<?php

class M_productlines extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        return $this->db->get("productlines")->result();
    }

    public function insertData($data)
    {
        $this->db->insert('productlines', $data);
        return $this->db->affected_rows();
    }

    public function get_data($productLine)
    {
        $query = $this->db->get_where('productlines', array('productLine' => $productLine));
        return $query->row();
    }

    public function update_data($productLine, $data)
    {
        $this->db->where('productLine', $productLine);
        $this->db->update('productlines', $data);
    }

    public function delete_data($productLine)
    {
        $this->db->where('productLine', $productLine);
        $this->db->delete('productlines');
    }
};
