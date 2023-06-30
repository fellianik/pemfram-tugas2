<?php

class Offices extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_offices');
    }

    public function getData()
    {
        $result['title'] = 'Office';
        $result['office'] = $this->M_offices->getAllData();
        $this->load->view('v_offices', $result);
    }

    public function AddData()
    {
        $result['title'] = 'Office';
        $this->load->view('v_add_offices', $result);
    }

    public function createData()
    {
        if ($this->input->post()) {
            $input = $this->input->post();
            $this->M_offices->insertData($input);
            redirect(base_url() . 'index.php/offices');
        } else {
            $this->load->view('v_add_offices');
        }
    }

    public function edit($officeCode = null)
    {
        $data['title'] = 'Office';
        $data['result'] = $this->M_offices->get_data($officeCode); // mengambil data berdasarkan id
        $this->load->view('v_edit_offices', $data); // menampilkan view edit dengan data yang diambil dari model
    }

    public function update($officeCode = null)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $officeCode = $this->input->post('officeCode');

            $this->M_offices->update_data($officeCode, $data); // update data ke database
            redirect('offices'); // kembali ke halaman utama setelah update data
        }
    }

    public function delete($officeCode)
    {
        $this->M_offices->delete_data($officeCode);
        redirect('offices');
    }
};
