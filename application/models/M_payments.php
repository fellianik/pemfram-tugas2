<?php

class M_payments extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        return $this->db->get("payments")->result();
    }

    public function insertData($data)
    {
        $this->db->insert('payments', $data);
        return $this->db->affected_rows();
    }

    public function get_data($customerNumber, $checkNumber)
    {
        $this->db->where(array('customerNumber' => $customerNumber, 'checkNumber' => $checkNumber));
        $query = $this->db->get('payments');
        return $query->row();
    }

    public function update_data($customerNumber, $checkNumber, $data)
    {
        $where = array(
            'customerNumber' => $customerNumber,
            'checkNumber' => $checkNumber
        );

        $this->db->where($where);
        $this->db->update('payments', $data);
    }

    public function delete_data($customerNumber, $checkNumber)
    {
        $this->db->where(array(
            'customerNumber' => $customerNumber, 'checkNumber' => $checkNumber
        ));
        $this->db->delete('payments');
    }
};
