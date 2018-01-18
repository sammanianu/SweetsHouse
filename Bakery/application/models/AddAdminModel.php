<?php

/**
 * Created by PhpStorm.
 * User: sanu
 * Date: 1/13/2018
 * Time: 12:30 PM
 */
class AddAdminModel extends CI_Model
{
    public function updateAdmin()
    {

        $email = $this->input->post('email');
        $type = $this->input->post('userType');

        $adminData = array(
            'UserType'=>$type
        );

        $this->db->where('Email', $email);
        $r1 = $this->db->update('register',$adminData);

        return $r1;
    }
}