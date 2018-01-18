<?php

/**
 * Created by PhpStorm.
 * User: sanu
 * Date: 1/13/2018
 * Time: 12:27 PM
 */
class AddAdmin extends CI_Controller
{
    public function addNewAdmin()
    {

        //Validations of input fields
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('AddAdmin');
        }
        else
        {
            $this->load->model('AddAdminModel');
            $response = $this->AddAdminModel->updateAdmin();

            if ($response){
                $this->session->set_flashdata('msg','Add Admin Successfully');
                redirect('Welcome/AddAdmin');

            }else{
                $this->session->set_flashdata('msg','Something went wrong...Try Again');
                redirect('Welcome/AddAdmin');

            }

        }

    }
}