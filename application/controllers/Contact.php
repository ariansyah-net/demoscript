<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class Contact extends MY_Controller {

   function index(){
      $config_captcha = array(
              'img_path'    => './asset/captcha/',
              'img_url'     => base_url().'asset/captcha/',
              'img_width'   => 150,
              'img_height'  => 50,
              'expiration'  => 2200,
              'pool'        => '0123456789',
              'colors'      => array(
                                    'background' => array(255, 255, 255),
                                    'border' => array(230, 230, 230),
                                    'text' => array(0, 0, 0),
                                    'grid' => array(230, 120, 110))
             );

      $cap = create_captcha($config_captcha);
      $data['img'] = $cap['image'];
      $this->session->set_userdata('keycode', md5($cap['word']));
      $data['title']       = 'Contact Us';
      $data['form_action'] = 'submit';
      $data['main_view']   = 'demo/contact';
      $this->load->view('_template', $data);
     }

     function cek() {
      $datadb = array('inbox_name'    => strip_tags($this->input->post('a')),
                      'inbox_email'   => strip_tags($this->input->post('b')),
                      'inbox_subject' => strip_tags($this->input->post('c')),
                      'inbox_message' => strip_tags($this->input->post('d')),
                      'inbox_date'		=> date('Y-m-d'),
											'inbox_time'		=> date('H:i:s')
                      );
      $captcha  = $this->input->post('captcha');
      if(md5($captcha)==$this->session->userdata('keycode')){
        $this->session->unset_userdata('keycode');
        $this->db->insert('inbox', $datadb);
        $this->session->set_flashdata('info','Thankyou, your message has been sent, we will follow up on this.');
        redirect('contact');
      }else{
        $this->session->set_flashdata('danger','<i class="fas fa-exclamation-circle"></i> Upss.. something is wrong, please check again.');
        redirect('contact');
      }
    }



 }
?>
