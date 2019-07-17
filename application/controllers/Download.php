<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends MY_Controller {

  public function __construct()
  	{
  		parent::__construct();
  			$this->load->model('download_model', 'download', true);
  			// $this->isLogin();
  	}

  // public function index(){
  //   $data['title']      = 'DemoScript | Downloads';
  //   $data['main_view']  = 'demo/download';
  //   $data['ar']         = $this->db->get('download');
  //   $this->load->view('_template', $data);
  // }

  public function index($page = null){
    // $data['ar']           = $this->download->paginate($page)->get();
    $data['ar'] 			    = $this->download->orderBy('id_download', 'desc')->paginate($page)->getAll();

    // $data['jml'] 					= $this->download->orderBy('id_download')->getAll();
    $data['jml']        	= $this->download->getAll();

    $data['jumlah'] 			= count($data['jml']);
    $data['pagination'] 	= $this->download->makePagination(site_url('download'), 2, $data['jumlah']);

    $data['title']      = 'DemoScript | Downloads';
    $data['main_view']  = 'demo/download';
    $this->load->view('_template', $data);
  }

  public function files(){
    $name = $this->uri->segment(3);
    $this->download->updatehits($name);
    $data = file_get_contents("asset/files/".$name);
    force_download($name, $data);
  }


}
