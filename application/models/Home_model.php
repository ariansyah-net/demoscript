<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends MY_Model
{

	protected $perPage = 9;

	public function getValidationRules()
	{
		$validationRules = [
			[
				'field' => 'content_title',
				'label' => 'Title',
				'rules' => 'trim|required'
			],
      	[
				'field' => 'content_slug',
				'label' => 'Slug',
				'rules' => 'trim|required'
			],
		];

		return $validationRules;
	}

	public function getDefaultValues()
	{
		return [
			'content_title'		=> '',
			'content_slug'		=> '',
			'content_desc' 		=> '',
			'content_code' 		=> '',
			'content_link' 		=> '',
			'content_img' 		=> '',
			'content_date' 		=> '',
			'content_hits' 		=> ''
		];
	}

	function category_count($kat){
    return $this->db->query("SELECT * FROM category where id_category='".$this->db->escape_str($kat)."'");
  }
	function detail_category($id, $start,$limit){
      return $this->db->query("SELECT * FROM home a JOIN category b ON a.id_category=b.id_category WHERE b.id_category='".$this->db->escape_str($id)."' ORDER BY id_content DESC LIMIT $start,$limit");
  }
	function get_category($id){
      return $this->db->query("SELECT * FROM category a JOIN home b ON a.id_category=b.id_category WHERE a.id_category='".$this->db->escape_str($id)."' OR a.category_slug='".$this->db->escape_str($id)."'");
  }
	function updateview($id){
      return $this->db->query("UPDATE home SET content_hits=content_hits+1 WHERE content_slug='".$this->db->escape_str($id)."' OR id_content='".$this->db->escape_str($id)."'");
  }


    function send_message(){

			$datadb = array('inbox_name'    => strip_tags($this->input->post('a')),
                      'inbox_email'   => strip_tags($this->input->post('b')),
                      'inbox_subject' => strip_tags($this->input->post('c')),
                      'inbox_message' => strip_tags($this->input->post('d')),
                      'inbox_date'		=> date('Y-m-d'),
											'inbox_time'		=> date('H:i:s')
										);
			// $ar = $this->input->post('secutity_code');
      $this->db->insert('inbox', $datadb);


        // // if ($this->input->post('cek')==''){
				// $secutity_code = $this->input->post('secutity_code');
				// if ($this->input->post() && ($arcaptcha = $mycaptcha)) {
        //     $inbox_name       = strip_tags($this->input->post('a'));
        //     $inbox_email      = strip_tags($this->input->post('b'));
        //     $inbox_subject    = strip_tags($this->input->post('c'));
        //     $inbox_message    = strip_tags($this->input->post('d'));
        //     $arcaptcha        = strip_tags($this->input->post('secutity_code'));
				//
				//
				//
				// 		if ($arcaptcha == $mycaptcha) {
        //       $datadb           = array('inbox_name'=>$inbox_name,
        //                           'inbox_emails'=>$inbox_email,
        //                           'inbox_subject'=>$inbox_subject,
        //                           'inbox_message'=>$inbox_message,
        //                           'inbox_date'=>date('Y-m-d'),
        //                           'inbox_time'=>date('H:i:s'),
        //                           'inbox_read'=>'N');
        //       $this->db->insert('inbox', $datadb);
        //     } else {
        //       $this->session->set_flashdata('danger','<i class="fas fa-exclamation-circle"></i> Uppss.. something wrong, Please correct your data, and make sure your answer is right.');
        //     }
        // }
    }


	function updatehits($file){
        return $this->db->query("UPDATE download set down_hits=down_hits+1 where down_filename='".$this->db->escape_str($file)."'");
    }


}
