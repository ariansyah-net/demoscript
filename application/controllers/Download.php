<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends MY_Controller {


  public function index(){
    $data['title']      = 'DemoScript | Downloads';
    $data['main_view']  = 'demo/download';
    $data['ar']         = $this->db->get('download');
    $this->load->view('_template', $data);
  }

  public function files(){
    $name = $this->uri->segment(3);
    $this->home_model->updatehits($name);
    $data = file_get_contents("asset/files/".$name);
    force_download($name, $data);
  }


}
