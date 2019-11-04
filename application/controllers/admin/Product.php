<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Product_model');
        $this->load->library('form_validation');
    }
    public function index()
    {

        $data["products"] = $this->Product_model->getAll();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/product', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {

        $product = $this->Product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());


        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('admin/new_form');
        $this->load->view('templates/footer');

        
    }

    public function edit($id = null)
    {


        if (!isset($id)) redirect('admin/product');

        $product = $this->Product_model;
        $validation = $this->form_validation;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil diedit');
        }

        $data['product'] = $product->getById($id);
        if (!$data['product']) show_404();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view("admin/edit_form", $data);
        $this->load->view('templates/footer');
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->Product_model->delete($id)) {
            redirect('admin/product');
        }
    }
}
