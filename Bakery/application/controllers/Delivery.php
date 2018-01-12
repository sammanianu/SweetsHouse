<?php

/**
 * Created by PhpStorm.
 * User: sanu
 * Date: 1/12/2018
 * Time: 5:25 PM
 */
class Delivery extends CI_Controller
{
    public function DeliveryUser()
    {

        //Validations of input fields
        $this->form_validation->set_rules('firstName', 'First Name', 'required');
        $this->form_validation->set_rules('lastName', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('contactNumber', 'Contact Number', 'trim|required|min_length[10]|max_length[10]');
        $this->form_validation->set_rules('date', 'Delivery Date', 'required');
        $this->form_validation->set_rules('comment', 'Comment');
        $this->form_validation->set_rules('type', 'Type', 'required');


        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('Register');
        }
        else
        {
            $this->load->model('DeliveryModel');
            $response = $this->DeliveryModel->insertDeliverydata();

            if ($response){
/*                $this->session->set_flashdata('msg','Successfully');*/
                redirect('Welcome/Delivery');
                //redirect('User1');
            }else{
                $this->session->set_flashdata('msg','Something went wrong...Try again ');
                redirect('Welcome/Delivery');
            }

        }

    }



}