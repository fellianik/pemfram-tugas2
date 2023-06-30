<?php

class M_orders extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        return $this->db->get("orders")->result();
    }

    public function insertData($data)
    {
        $this->db->insert('orders', $data);
        return $this->db->affected_rows();
    }

    public function get_data($orderNumber)
    {
        $query = $this->db->get_where('orders', array('orderNumber' => $orderNumber));
        return $query->row();
    }

    public function update_data($orderNumber, $data)
    {
        $this->db->where('orderNumber', $orderNumber);
        $this->db->update('orders', $data);
    }

    public function delete_data($orderNumber)
    {
        $this->db->where('orderNumber', $orderNumber);
        $this->db->delete('orders');
    }
};
