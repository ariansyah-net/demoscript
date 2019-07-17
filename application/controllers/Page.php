<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends MY_Controller {

      public function index() {
        $ids = $this->uri->segment(2);
        $dat = $this->db->query("SELECT * FROM page where page_slug='".$this->db->escape_str($ids)."'");
        $row = $dat->row();
        $total = $dat->num_rows();
          if ($total == 0){
            redirect(base_url());
          }
        $this->home_model->updatepagehits($ids);
        $data['ar']         = $this->db->query("SELECT * FROM page WHERE page_slug='".$this->db->escape_str($ids)."'");
        $data['title']      = $row->page_title;
        $data['main_view']  = 'demo/page';
        $this->load->view('_templatepage', $data);
      }

}
