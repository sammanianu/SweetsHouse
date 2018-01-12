<?php


class Login extends CI_Controller
{
    public function LoginUser()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Login');
        } else {

            $this->load->model('LoginModel');
            $result = $this->LoginModel->LoginUser();
        }

        if ($result){

            /*$user_data = array(
                //'user_id'=>$result->userId,
                'fname'=>$this->input->post('fname'),
                'lname'=>$this->input->post('lname'),
                'username'=>$this->input->post('username'),
                'loggedin'=>TRUE
            );
            $this->session->set_userdata($user_data);
            $this->session->set_flashdata('welcome','Welcome Back');
            redirect('User1/index');*/
        }else{
            $this->session->set_flashdata('errmsg','Wrong Email or Password');
            redirect('Welcome/Login');
        }
    }
}