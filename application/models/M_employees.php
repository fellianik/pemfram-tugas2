<?php

class M_employees extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllData()
    {
        return $this->db->get("employees")->result();
    }

    public function insertData($data)
    {
        $this->db->insert('employees', $data);
        return $this->db->affected_rows();
    }

    public function get_data($employeeNumber)
    {
        $query = $this->db->get_where('employees', array('employeeNumber' => $employeeNumber));
        return $query->row();
    }

    public function update_data($employeeNumber, $data)
    {
        $this->db->where('employeeNumber', $employeeNumber);
        $this->db->update('employees', $data);
    }

    public function delete_data($employeeNumber)
    {
        $this->db->where('employeeNumber', $employeeNumber);
        $this->db->delete('employees');
    }
}
