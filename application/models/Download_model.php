<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
*
*/
class Download_model extends MY_Model
{
	protected $perPage = 10;

	public function getValidationRules()
	{
			$validationRules = [

			// [
			// 	'field' => 'down_title',
			// 	'label' => 'Title',
			// 	'rules' => 'max_length[100]'
			// ],
      // [
			// 	'field' => 'down_filename',
			// 	'label' => 'File Name',
			// 	'rules' => 'max_length[100]'
			// ],
      // [
			// 	'field' => 'down_typefile',
			// 	'label' => 'File Name',
			// 	'rules' => 'max_length[100]'
			// ],

		];

		return $validationRules;
	}


	public function getDefaultValues()
	{
		return [
			'down_title'				=> '',
			'time_update'				=> date('Y-m-d H:i:s')

		];
	}

	function updatehits($file){
      return $this->db->query("UPDATE download set down_hits=down_hits+1 where down_filename='".$this->db->escape_str($file)."'");
  }

}
