<?php

class Employees extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_employees');
        $this->load->model('M_offices');
    }

    public function getData()
    {
        $result['title'] = 'Employee';
        $result['employee'] = $this->M_employees->getAllData();


        $this->load->view('v_employees', $result);
    }

    public function AddData()
    {
        $result['title'] = 'Employee';
        $result['offices'] = $this->M_offices->getAllData();
        $result['employees'] = $this->M_employees->getAllData();

        $this->load->view('v_add_employees', $result);
    }

    public function createData()
    {
        if ($this->input->post()) {
            $input = $this->input->post();
            $this->M_employees->insertData($input);
            redirect(base_url() . 'index.php/employees');
        } else {
            $this->load->view('v_add_employees');
        }
    }

    public function edit($employeeNumber = null)
    {
        $data['title'] = 'Employee';
        $data['offices'] = $this->M_offices->getAllData();
        $data['employees'] = $this->M_employees->getAllData();
        $data['result'] = $this->M_employees->get_data($employeeNumber); // mengambil data berdasarkan id
        $this->load->view('v_edit_employees', $data); // menampilkan view edit dengan data yang diambil dari model
    }

    public function update($employeeNumber = null)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $employeeNumber = $this->input->post('employeeNumber');

            $this->M_employees->update_data($employeeNumber, $data); // update data ke database
            redirect('employees'); // kembali ke halaman utama setelah update data
        }
    }

    public function delete($customerNumber)
    {
        $this->M_employees->delete_data($customerNumber);
        redirect('employees');
    }
};
