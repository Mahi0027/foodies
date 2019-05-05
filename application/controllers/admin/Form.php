<?php

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('admin/form', 'url'));

                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required',
                        array('required' => 'You must provide a %s.')
                );
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');

                $this->load->library('form_validation');

                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('admin/myform');
                }
                else
                {
                        $this->load->view('admin/formsuccess');
                }
        }
}