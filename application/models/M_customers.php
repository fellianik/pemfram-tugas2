<?php

class M_customers extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        return $this->db->get("customers")->result();
    }

    public function insertData($data)
    {
        $this->db->insert('customers', $data);
        return $this->db->affected_rows();
    }

    public function get_data($customerNumber)
    {
        $query = $this->db->get_where('customers', array('customerNumber' => $customerNumber));
        return $query->row();
    }

    public function update_data($customerNumber, $data)
    {
        $this->db->where('customerNumber', $customerNumber);
        $this->db->update('customers', $data);
    }

    public function delete_data($customerNumber)
    {
        $this->db->where('customerNumber', $customerNumber);
        $this->db->delete('customers');
    }
};
