<?php

/**
 * Created by PhpStorm.
 * User: sanu
 * Date: 1/12/2018
 * Time: 5:31 PM
 */
class DeliveryModel extends CI_Model
{
    public function insertDeliveryData()
    {
        $userData = array(

            'FirstName'=> $this->input->post('firstName',TRUE),//TRUE validate input field
            'LastName'=> $this->input->post('lastName',TRUE),
            'Email'=> $this->input->post('email',TRUE),
            'Address'=> $this->input->post('address',TRUE),
            'Contact'=> $this->input->post('contactNumber',TRUE),
            'Date'=> $this->input->post('date',TRUE),
            'Comment'=> $this->input->post('comment',TRUE),
            'Type'=> $this->input->post('type',TRUE),
        );

        $r1 = $this->db->insert('delivery',$userData);

        return $r1;

    }
}