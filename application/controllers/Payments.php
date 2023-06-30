<?php

class Payments extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_payments');
        $this->load->model('M_customers');
    }

    public function getData()
    {
        $result['title'] = 'Payment';
        $result['payment'] = $this->M_payments->getAllData();
        $this->load->view('v_payments', $result);
    }

    public function AddData()
    {
        $result['title'] = 'Payment';
        $result['customers'] = $this->M_customers->getAllData();

        $this->load->view('v_add_payments', $result);
    }

    public function createData()
    {
        if ($this->input->post()) {
            $input = $this->input->post();
            $this->M_payments->insertData($input);
            redirect(base_url() . 'index.php/payments');
        } else {
            $this->load->view('v_add_payments');
        }
    }

    public function edit($customerNumber = null, $checkNumber = null)
    {
        $data['title'] = 'Payments';
        $data['result'] = $this->M_payments->get_data($customerNumber, $checkNumber); // mengambil data berdasarkan id
        $this->load->view('v_edit_payments', $data); // menampilkan view edit dengan data yang diambil dari model
    }

    public function update()
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $customerNumber = $this->input->post('customerNumber');
            $checkNumber = $this->input->post('checkNumber');

            $this->M_payments->update_data($customerNumber, $checkNumber, $data); // update data ke database
            redirect('payments'); // kembali ke halaman utama setelah update data
        }
    }

    public function delete($customerNumber, $checkNumber)
    {
        $this->M_payments->delete_data($customerNumber, $checkNumber);
        redirect('payments');
    }
};
