<?php defined('BASEPATH') or exit('No direct script access allowed');

class Product_model extends CI_Model
{
    private $_table = "products";

    public $id;
    public $name;
    public $price;
    public $description;

    public function rules()
    {
        return
            [
                [
                    'field' => 'name',
                    'label' => 'Name',
                    'rules' => 'required'
                ],

                [
                    'field' => 'price',
                    'label' => 'Price',
                    'rules' => 'required'
                ],

                [
                    'field' => 'description',
                    'label' => 'Description',
                    'rules' => 'required'
                ]
            ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id = uniqid();
        $this->name = $post['name'];
        $this->price = $post['price'];
        $this->description = $post['description'];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id  = $post['id'];
        $this->name  = $post['name'];
        $this->price  = $post['price'];
        $this->description  = $post['description'];
        $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array('id' => $id));
    }
}
