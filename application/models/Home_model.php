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
			'content_main' 		=> '',
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

}
