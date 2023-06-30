<?php

class M_products extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        return $this->db->get("products")->result();
    }

    public function insertData($data)
    {
        $this->db->insert('products', $data);
        return $this->db->affected_rows();
    }

    public function get_data($productCode)
    {
        $query = $this->db->get_where('products', array('productCode' => $productCode));
        return $query->row();
    }

    public function update_data($productCode, $data)
    {
        $this->db->where('productCode', $productCode);
        $this->db->update('products', $data);
    }

    public function delete_data($productCode)
    {
        $this->db->where('productCode', $productCode);
        $this->db->delete('products');
    }
};
