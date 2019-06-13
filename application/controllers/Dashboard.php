<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
    $this->arLogin();
    $this->load->library('user_agent', 'url');
	}

  protected function arLogin(){
      $arLogin = $this->session->userdata('ar_login');
      if(!$arLogin){
        show_404();
      }
  }

  public function index() {
    if ($this->agent->is_browser()) {
      $agent = $this->agent->browser().'version'.$this->agent->version();
    }elseif ($this->agent->is_robot()){
      $agent = $this->agent->robot();
    }elseif ($this->agent->is_mobile()){
      $agent = $this->agent->mobile();
    }else{
      $agent = 'Unidentified User Agent';
    }
    $data['title']    = 'Admin | Dashboard';
    $data['main_view']  = 'admin/templates/main';
    $data['browser']  = '$agent';
    $data['os']       = $this->agent->platform();
    $data['ip']       = $this->input->ip_address();
    $this->load->view('admin/templates/index', $data);

  }
	//==================== DEMOSCRIPT CRUD FUNCTION ==============================

  public function demoscript(){
    $data['title']    = 'Admin | DemoScript';
    $data['main_view']  = 'admin/demoscript/index';
    $data['ar']    = $this->demo_model->view_demoscript();
    $this->load->view('admin/templates/index', $data);
  }


  public function add_demoscript() {

		if (isset($_POST['submit'])){
			$this->demo_model->demoscript_add();
			redirect('dashboard/demoscript');
		}else{
      $data['title']      = 'Admin | Add DemoScript';
      $data['main_view']  = 'admin/demoscript/add';
			$data['record']     = $this->demo_model->view_category();
			$this->load->view('admin/templates/index', $data);
		}
  }

	public function edit_demoscript() {

		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->demo_model->demoscript_update();
			redirect('dashboard/demoscript');
		}else{
			$data['title']      = 'Admin | Cange DemoScript';
			$data['main_view']  = 'admin/demoscript/change';
			$data['record']     = $this->demo_model->view_category();
			$data['rows'] 			= $this->demo_model->demoscript_edit($id)->row_array();
			$this->load->view('admin/templates/index', $data);
		}
  }

	public function remove_demoscript(){
		$id = $this->uri->segment(3);
		$this->demo_model->delete_demoscript($id);
		$this->session->set_flashdata('info','<i class="fas fa-exclamation-circle"></i> Okey data removed..');
		redirect('dashboard/demoscript');

	}


//========================= CATEGORY CRUD FUNCTION =============================

	public function category() {
		$data['title']    	= 'Admin | Category Demo';
    $data['main_view']  = 'admin/category/index';
    $data['ar']    			= $this->demo_model->load_category();
    $this->load->view('admin/templates/index', $data);
	}

	public function add_category() {
		if (isset($_POST['submit'])){
			$this->demo_model->category_add();
			redirect('dashboard/category');
		}else{
      $data['title']      = 'Admin | Add DemoScript';
      $data['main_view']  = 'admin/category/add';
			$this->load->view('admin/templates/index', $data);
		}
  }

	public function edit_category() {

		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->demo_model->category_update();
			redirect('dashboard/category');
		}else{
			$data['title']      = 'Admin | Cange Category';
			$data['main_view']  = 'admin/category/change';
			$data['rows'] 			= $this->demo_model->category_edit($id)->row_array();
			$this->load->view('admin/templates/index', $data);
		}
  }

	public function remove_category(){
		$id = $this->uri->segment(3);
		$this->demo_model->delete_category($id);
		$this->session->set_flashdata('info','<i class="fas fa-exclamation-circle"></i> Okey data removed..');
		redirect('dashboard/category');

	}

}
