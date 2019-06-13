<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

      public function index($page = null) {
      	$data['ar']				  = $this->home_model->join('category')
                                               ->orderBy('id_content', 'desc')
                                               ->paginate($page)->getAll();
      	$jml          			= $this->home_model->getAll();
      	$total        			= count($jml);
      	$data['main_view']  = 'demo/index';
      	$data['pagination'] = $this->home_model->makePagination(site_url('home'), 2, $total);
      	$this->load->view('_template', $data);
      }


    public function category(){
    		$ids = $this->uri->segment(3);
    		$dat = $this->db->query("SELECT * FROM home a JOIN category b ON a.id_category=b.id_category WHERE category_slug='".$this->db->escape_str($ids)."'");
        $row = $dat->row();
        $total = $dat->num_rows();
          if ($total == 0){
            $this->session->set_flashdata('warning','<i class="fas fa-exclamation-circle"></i> Maaf, untuk sementara kategori ini belum tersedia.');
          	redirect('home');
          }

    	  $jumlah= $this->home_model->category_count($row->id_category)->num_rows();
    		$config['base_url'] = base_url().'home/category/'.$row->category_slug;
    		$config['total_rows'] = $jumlah;
    		$config['per_page'] = 6;
    			if ($this->uri->segment('4')!=''){
    				$dari = $this->uri->segment('4');
    			}else{
    				$dari = 0;
    			}
    			if (is_numeric($dari)) {
    				$data['category'] = $this->home_model->detail_category($row->id_category, $dari, $config['per_page']);
    			}else{
    				redirect('home');
    			}
    		$this->pagination->initialize($config);
    		$data['title'] = $row->category_name;
        $data['ar'] = $this->home_model->get_category($ids);
        $data['main_view']   = 'demo/category';
        $this->home_model->updateview($ids);
    		$this->load->view('_template', $data);
    	}


      // public function detail() {
      //   $ids = $this->uri->segment(3);
    	// 	$dat = $this->db->query("SELECT * FROM berita where judul_seo='".$this->db->escape_str($ids)."'");
    	//     $row = $dat->row();
    	//     $total = $dat->num_rows();
    	//         if ($total == 0){
    	//         	redirect('main');
    	//         }
    	// 	$this->model_berita->berita_dibaca_update($ids);
    	// 	$this->template->load('phpmu-one/template','phpmu-one/view_berita',$data);
      // }

}
