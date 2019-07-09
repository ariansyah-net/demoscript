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
      $this->session->set_userdata('mycaptcha', $cap['word']);
      $data['title']       = 'Contact Us';
      $data['form_action'] = 'submit';
      $data['main_view']   = 'demo/contact';
      $this->load->view('_template', $data);
     }


     function cek() {
      // $this->session->set_userdata('mycaptcha', $cap['word']);
      // $mycaptcha = $this->session->userdata('mycaptcha');
      // $this->home_model->send_message();
			// $this->session->set_flashdata('info','<i class="fas fa-check"></i> Thankyou, your message has been sent, we will follow up on this.');
			// redirect('contact');

      $ar = $this->input->post('secutity_code');
      $this->session->set_userdata('mycaptcha', $cap['word']);
      $mycaptcha = $this->session->userdata('mycaptcha');

      if ($this->input->post() && ($ar == $mycaptcha)) {
        $this->home_model->send_message();
        $this->session->set_flashdata('info','Thankyou, your message has been sent, we will follow up on this.');
       redirect('contact');
      } else {
 			 $this->session->set_flashdata('danger','<i class="fas fa-exclamation-circle"></i> Upss.. something is wrong, please check again.');
       redirect('contact');
      }

     }











  // function index(){
  //
  //     $this->form_validation->set_rules('arcaptcha', 'arcaptcha', 'trim|required');
  // 	  if ($this->form_validation->run() == false) {
  //
  //        $config_captcha = array(
  //         'img_path'    => './asset/captcha/',
  //         'img_url'     => base_url().'asset/captcha/',
  //         'img_width'   => 150,
  //         'img_height'  => 50,
  //         'expiration'  => 2200,
  //         'pool'        => '0123456789',
  //         'colors'      => array(
  //                               'background' => array(255, 255, 255),
  //                               'border' => array(230, 230, 230),
  //                               'text' => array(0, 0, 0),
  //                               'grid' => array(230, 120, 110))
  //        );
  //        $cap                 = create_captcha($config_captcha);
  //        $data['img']         = $cap['image'];
  //        $this->session->set_userdata('mycaptcha', $cap['word']);
  //        $data['title']       = 'Contact Us';
  //        $data['form_action'] = 'submit';
  //        $data['main_view']   = 'demo/contact';
  //        $this->load->view('_template', $data);
  //      }else{
  //       $this->home_model->send_message();
  // 			$this->session->set_flashdata('info','Thankyou, your message has been sent, we will follow up on this.');
  // 			redirect('contact');
  //      }
  // }

  //
  //
  // function cek() {
  //  $captcha = $this->input->post('captcha');
  //  $mycaptcha = $this->session->userdata('mycaptcha');
  //
  //  if ($this->input->post() && ($captcha == $mycaptcha)) {
  //   $this->session->set_flashdata('info','Captcha benar :) ');
  //   redirect('contact');
  //  } else {
  //   $this->session->set_flashdata('danger','Captcha salah :( ');
  //   redirect('contact');
  //  }
  // }

 }
?>
