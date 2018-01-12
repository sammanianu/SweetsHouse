<?php


class LoginModel extends CI_Model
{
    function LoginUser(){

        $email = $this->input->post('email');
        $password = sha1($this->input->post('password'));

        $this->db->where('Email',$email);
        $this->db->where('Password',$password);

        $respond = $this->db->get('register');

        if ($respond->num_rows()==1){

            return $respond->row(0);
        }

        else{

            return false;

        }

    }
}