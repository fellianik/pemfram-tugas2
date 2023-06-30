<?php

class Products extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_products');
        $this->load->model('M_productlines');
    }

    public function getData()
    {
        $result['title'] = 'Product';
        $result['product'] = $this->M_products->getAllData();
        $this->load->view('v_products', $result);
    }

    public function AddData()
    {
        $result['title'] = 'Product';
        $result['productlines'] = $this->M_productlines->getAllData();
        $this->load->view('v_add_products', $result);
    }

    public function createData()
    {
        if ($this->input->post()) {
            $input = $this->input->post();
            $this->M_products->insertData($input);
            redirect(base_url() . 'index.php/products');
        } else {
            $this->load->view('v_add_products');
        }
    }

    public function edit($productCode = null)
    {
        $data['title'] = 'Product';
        $data['result'] = $this->M_products->get_data($productCode); // mengambil data berdasarkan id
        $this->load->view('v_edit_products', $data); // menampilkan view edit dengan data yang diambil dari model
    }

    public function update($productCode = null)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $productCode = $this->input->post('productCode');

            $this->M_products->update_data($productCode, $data); // update data ke database
            redirect('products'); // kembali ke halaman utama setelah update data
        }
    }

    public function delete($productCode)
    {
        $this->M_products->delete_data($productCode);
        redirect('products');
    }
};
