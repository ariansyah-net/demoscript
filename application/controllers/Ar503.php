<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ar503 extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Login_model', 'login', true);
	}


	public function index()
	{
		if (!$_POST) {
            $input = (object) $this->login->getDefaultValues();
        } else {
            $input = (object) $this->input->post(null, true);
        }

        if (!$this->login->validate()) {
            $form_action    = 'login';
            $this->load->view('admin/login', compact('form_action', 'input'));
            return;
        }

        if ($this->login->login($input)) {
            $this->session->set_flashdata('info', '<i class="fas fa-thumbs-up"></i> Yeah.. welcome Administrator happy working..');
            redirect(base_url('dashboard'));
        } else {
            $this->session->set_flashdata('danger', '<i class="fas fa-exclamation-triangle"></i> Upss.. username or password incorrect. !');
        }
        redirect('ar503');
	}

	public function logout()
	{
			$this->login->logout();
			redirect(base_url());
	}



}
