<?php

class Productlines extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_productlines');
    }

    public function getData()
    {
        $result['title'] = 'Product Line';
        $result['productline'] = $this->M_productlines->getAllData();
        $this->load->view('v_productlines', $result);
    }

    public function AddData()
    {
        $result['title'] = 'Productline';
        $this->load->view('v_add_productlines', $result);
    }

    public function createData()
    {
        if ($this->input->post()) {
            $input = $this->input->post();
            $this->M_productlines->insertData($input);
            redirect(base_url() . 'index.php/productlines');
        } else {
            $this->load->view('v_add_productlines');
        }
    }

    public function edit($productLine = null)
    {
        $data['title'] = 'Product line';
        $productLine = str_replace("%20", " ", $productLine);
        $data['result'] = $this->M_productlines->get_data($productLine); // mengambil data berdasarkan id
        $this->load->view('v_edit_productlines', $data); // menampilkan view edit dengan data yang diambil dari model
    }

    public function update($productLine = null)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $productLine = $this->input->post('productLine');

            $this->M_productlines->update_data($productLine, $data); // update data ke database
            redirect('productlines'); // kembali ke halaman utama setelah update data
        }
    }

    public function delete($productLine)
    {
        $productLine = str_replace("%20", " ", $productLine);
        $this->M_productlines->delete_data($productLine);
        redirect('productlines');
    }
};
