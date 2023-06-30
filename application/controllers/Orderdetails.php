<?php

class Orderdetails extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_orderdetails');
        $this->load->model('M_products');
        $this->load->model('M_orders');
    }

    public function getData()
    {
        $result['title'] = 'Order Detail';
        $result['orderdetail'] = $this->M_orderdetails->getAllData();
        $this->load->view('v_orderdetails', $result);
    }

    public function AddData()
    {
        $result['title'] = 'Order Detail';
        $result['products'] = $this->M_products->getAllData();
        $result['orders'] = $this->M_orders->getAllData();
        $this->load->view('v_add_orderdetails', $result);
    }

    public function createData()
    {
        if ($this->input->post()) {
            $input = $this->input->post();
            $this->M_orderdetails->insertData($input);
            redirect(base_url() . 'index.php/orderdetails');
        } else {
            $this->load->view('v_add_orderdetails');
        }
    }

    public function edit($orderNumber = null, $productCode = null)
    {
        $data['title'] = 'Order Detail';
        $data['result'] = $this->M_orderdetails->get_data($orderNumber, $productCode); // mengambil data berdasarkan id
        $this->load->view('v_edit_orderdetails', $data); // menampilkan view edit dengan data yang diambil dari model
    }

    public function update()
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $orderNumber = $this->input->post('orderNumber');
            $productCode = $this->input->post('productCode');

            $this->M_orderdetails->update_data($orderNumber, $productCode, $data); // update data ke database
            redirect('orderdetails'); // kembali ke halaman utama setelah update data
        }
    }

    public function delete($orderNumber, $productCode)
    {
        $this->M_orderdetails->delete_data($orderNumber, $productCode);
        redirect('orderdetails');
    }
};
