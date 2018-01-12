<?php


class AddProduct extends CI_Controller
{
    public function addProducts()
    {

        //Validations of input fields
        $this->form_validation->set_rules('productName', 'Product Name', 'required');
        $this->form_validation->set_rules('categoryID', 'Category ID', 'required');
        $this->form_validation->set_rules('productPrice', 'Product Price', 'required');
        $this->form_validation->set_rules('productImage', 'Product Image', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('AddProduct');
        }
        else
        {
            $this->load->model('AddProductModel');
            $response = $this->AddProductModel->insertProductdata();

            if ($response){
                $this->session->set_flashdata('msg','Add product successfully');
                redirect('Welcome/AddProduct');

            }else{
                $this->session->set_flashdata('msg','Something went wrong');
                redirect('Welcome/AddProduct');

            }

        }

    }

}