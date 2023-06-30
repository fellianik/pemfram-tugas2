<?php

class M_orderdetails extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        return $this->db->get("orderdetails")->result();
    }

    public function insertData($data)
    {
        $this->db->insert('orderdetails', $data);
        return $this->db->affected_rows();
    }

    public function get_data($orderNumber, $productCode)
    {
        $this->db->where(array('orderNumber' => $orderNumber, 'productCode' => $productCode));
        $query = $this->db->get('orderdetails');
        return $query->row();
    }

    public function update_data($orderNumber, $productCode, $data)
    {
        $where = array(
            'orderNumber' => $orderNumber,
            'productCode' => $productCode
        );

        $this->db->where($where);
        $this->db->update('orderdetails', $data);
    }

    public function delete_data($orderNumber, $productCode)
    {
        $this->db->where(array('orderNumber' => $orderNumber, 'productCode' => $productCode));
        $this->db->delete('orderdetails');
    }
};
