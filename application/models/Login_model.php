<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends MY_Model
{

	public $table = 'auth';

	public function getValidationRules()
	{
		$validationRules = [
			[
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'trim|required'
			],
      	[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'trim|required'
			],
		];

		return $validationRules;
	}

	public function getDefaultValues()
	{
		return [
			'name'				=> '',
			'username'		=> '',
			'password' 		=> '',
			'level' 			=> '',
			'active'			=> ''
		];
	}

	public function login($input)
	    {
	        $input->password = sha1($input->password);

	        $user = $this->db->where('username', $input->username)
	                          ->where('password', $input->password)
	                          ->where('active', 'Y')
	                          ->limit(1)
	                          ->get($this->table)
	                          ->row();
	        if (count($user)) {
	            $data = [
	                'name' 				=> $user->name,
	                'username'    => $user->username,
	                'password' 		=> $user->password,
	                'level' 			=> $user->level,
									'active' 			=> $user->active,
	                'ar_login' 		=> true
	            ];

	            $this->session->set_userdata($data);
	            return true;
	        }
	        return false;
	    }

	public function logout()
	{
			$data = [
					'name' 			=> null,
					'username'  => null,
					'active'		=> null,
					'ar_login' 	=> null
			];
			$this->session->unset_userdata($data);
			$this->session->sess_destroy();
			// $this->session->set_flashdata('info', '<i class="fas fa-exclamation-triangle"></i> Good Bye and se you next time..');
	}


}
