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
        redirect(base_url());
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
    $data['title']    	= 'Admin | DemoScript';
    $data['main_view']  = 'admin/demoscript/index';
    $data['ar']    			= $this->demo_model->view_demoscript();
    $this->load->view('admin/templates/index', $data);
  }


  public function add_demoscript() {

		if (isset($_POST['submit'])){
			$this->demo_model->demoscript_add();
			$this->session->set_flashdata('success','<i class="fas fa-exclamation-circle"></i> Okey data added successfully..');
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
			$this->session->set_flashdata('info','<i class="fas fa-exclamation-circle"></i> Okey data has been changed..');
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
		$this->session->set_flashdata('danger','<i class="fas fa-exclamation-circle"></i> Okey data removed..');
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
			$this->session->set_flashdata('success','<i class="fas fa-exclamation-circle"></i> Okey data added successfully..');
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
			$this->session->set_flashdata('info','<i class="fas fa-exclamation-circle"></i> Okey data has been changed..');
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
		$this->session->set_flashdata('danger','<i class="fas fa-exclamation-circle"></i> Okey data removed..');
		redirect('dashboard/category');
	}

// ========================== INBOX MESSAGE ================================

	function inbox() {
		$data['title']    	= 'Admin | Inbox';
    $data['main_view']  = 'admin/inbox/index';
    $data['ar']    			= $this->demo_model->load_inbox();
    $this->load->view('admin/templates/index', $data);
	}

	function detail_message(){
		$id = $this->uri->segment(3);
		$this->db->query("UPDATE inbox SET inbox_read='Y' where id_inbox='$id'");
		if (isset($_POST['submit'])){
			$this->demo_model->reply_message();
			$data['rows'] = $this->demo_model->view_inbox($id)->row_array();
			$data['title']			= 'Reply Message';
			$data['main_view']  = 'admin/inbox/detail';
			$this->load->view('admin/templates/index', $data);
		}else{
			$data['rows'] = $this->demo_model->view_inbox($id)->row_array();
			$data['title']			= 'Reply Message';
			$data['main_view']  = 'admin/inbox/detail';
			$this->load->view('admin/templates/index', $data);
		}
	}

// ============================= SETTINGS ================================

	function settings() {
		if (isset($_POST['submit'])){
				$this->demo_model->settings_update();
				redirect('dashboard/settings');
			}else{
				$data['title']			= 'Site Settings';
				$data['main_view']  = 'admin/settings/index';
				$data['ar'] 				= $this->demo_model->settings()->row_array();
				$this->load->view('admin/templates/index', $data);
			}
	}

// ============================ ADMINISTRATOR ================================

	function author() {
		$data['title']    	= 'Admin | Author';
    $data['main_view']  = 'admin/author/index';
    $data['ar']    			= $this->demo_model->loadAuthor();
    $this->load->view('admin/templates/index', $data);
	}
	function add_author() {
		if (isset($_POST['submit'])){
			$this->demo_model->author_add();
			$this->session->set_flashdata('success','<i class="fas fa-exclamation-circle"></i> Okey Author added successfully..');
			redirect('dashboard/author');
		}else{
			$data['title']      = 'Admin | Add Author';
			$data['main_view']  = 'admin/author/add';
			$this->load->view('admin/templates/index', $data);
		}
	}
	function change_author() {
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->demo_model->author_update();
			$this->session->set_flashdata('info','<i class="fas fa-exclamation-circle"></i> Okey Author has been changed..');
			redirect('dashboard/author');
		}else{
			$data['title']      = 'Admin | Cange Author';
			$data['main_view']  = 'admin/author/change';
			$data['ar'] 				= $this->demo_model->author_edit($id)->row_array();
			$this->load->view('admin/templates/index', $data);
		}
	}
	function remove_author(){
		$id = $this->uri->segment(3);
		$this->demo_model->delete_author($id);
		$this->session->set_flashdata('danger','<i class="fas fa-exclamation-circle"></i> Okey author removed..');
		redirect('dashboard/author');
	}


// ======================== FILE MANAGER ================================
	function filemanager() {
		$data['title'] 			= 'Admin | File Manager';
		$data['main_view'] = 'admin/filemanager/index';
		$this->load->view('admin/templates/index', $data);
	}


	// ======================== DOWNLOAD ================================
	function download() {
		$data['title'] 			= 'Admin | Download';
		$data['main_view'] 	= 'admin/download/index';
		$data['ar']    			= $this->db->get('download');
		$this->load->view('admin/templates/index', $data);
	}
	function add_download() {
		if (isset($_POST['submit'])){
			$this->demo_model->download_add();
			$this->session->set_flashdata('success','<i class="fas fa-exclamation-circle"></i> Okey download list added successfully..');
			redirect('dashboard/download');
		}else{
			$data['title']      = 'Admin | Add Download';
			$data['main_view']  = 'admin/download/add';
			$this->load->view('admin/templates/index', $data);
		}
	}
	function change_download() {
		$id = $this->uri->segment(3);
		if (isset($_POST['submit'])){
			$this->demo_model->download_update();
			$this->session->set_flashdata('info','<i class="fas fa-exclamation-circle"></i> Okey download list has been changed..');
			redirect('dashboard/download');
		}else{
			$data['title']      = 'Admin | Cange Download';
			$data['main_view']  = 'admin/download/change';
			$data['ar'] 				= $this->demo_model->download_edit($id)->row_array();
			$this->load->view('admin/templates/index', $data);
		}
	}
	function remove_download(){
		$id = $this->uri->segment(3);
		$this->demo_model->delete_download($id);
		$this->session->set_flashdata('danger','<i class="fas fa-exclamation-circle"></i> Okey file removed..');
		redirect('dashboard/download');
	}

}
