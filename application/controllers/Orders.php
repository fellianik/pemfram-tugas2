<?php

class Orders extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_orders');
        $this->load->model('M_customers');
    }

    public function getData()
    {
        $result['title'] = 'Order';
        $result['order'] = $this->M_orders->getAllData();
        $this->load->view('v_orders', $result);
    }

    public function AddData()
    {
        $result['title'] = 'Order';
        $result['customers'] = $this->M_customers->getAllData();
        $this->load->view('v_add_orders', $result);
    }

    public function createData()
    {
        if ($this->input->post()) {
            $input = $this->input->post();
            $this->M_orders->insertData($input);
            redirect(base_url() . 'index.php/orders');
        } else {
            $this->load->view('v_add_orders');
        }
    }

    public function edit($orderNumber = null)
    {
        $data['title'] = 'Order';
        $data['customers'] = $this->M_customers->getAllData();
        $data['result'] = $this->M_orders->get_data($orderNumber); // mengambil data berdasarkan id
        $this->load->view('v_edit_orders', $data); // menampilkan view edit dengan data yang diambil dari model
    }

    public function update($orderNumber = null)
    {
        if ($this->input->post()) {
            $data = $this->input->post();
            $orderNumber = $this->input->post('orderNumber');

            $this->M_orders->update_data($orderNumber, $data); // update data ke database
            redirect('orders'); // kembali ke halaman utama setelah update data
        }
    }

    public function delete($orderNumber)
    {
        $this->M_orders->delete_data($orderNumber);
        redirect('orders');
    }
};
