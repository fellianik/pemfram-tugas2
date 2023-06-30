<?php

class Customers extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_customers');
        $this->load->model('M_employees');
    }

    public function getData()
    {
        $result['title'] = 'Customer';
        $result['customer'] = $this->M_customers->getAllData();
        $this->load->view('v_customers', $result);
    }

    public function AddData()
    {
        $result['title'] = 'Customer';
        $result['employees'] = $this->M_employees->getAllData();
        $this->load->view('v_add_customers', $result);
    }

    public function createData()
    {
        if ($this->input->post()) {
            $input = $this->input->post();
            $this->M_customers->insertData($input);
            redirect(base_url() . 'index.php/customers');
        } else {
            // $this->load->view('v_add_customers');
            // getData();
            echo "Tidak bisa";
        }
    }

    public function edit($customerNumber = null)
    {
        $data['title'] = 'Customer';
        $data['employees'] = $this->M_employees->getAllData();
        $data['result'] = $this->M_customers->get_data($customerNumber); // mengambil data berdasarkan id
        $this->load->view('v_edit_customers', $data); // menampilkan view edit dengan data yang diambil dari model
    }

    public function update($customerNumber = null)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $customerNumber = $this->input->post('customerNumber');

            $this->M_customers->update_data($customerNumber, $data); // update data ke database
            redirect('customers'); // kembali ke halaman utama setelah update data
        }
    }

    public function delete($customerNumber)
    {
        $this->M_customers->delete_data($customerNumber);
        redirect('customers');
    }
};
