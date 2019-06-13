<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {

  public function index() {
    $data['main_view']  = '404';
    $this->load->view('_template', $data);
  }

}
