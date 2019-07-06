<?php class Demo_model extends MY_model{

    function view_category(){
        return $this->db->query("SELECT * FROM category ORDER BY id_category DESC");
    }
    function view_demoscript(){
        return $this->db->query("SELECT * FROM home a JOIN category b ON a.id_category=b.id_category ORDER BY id_content DESC");
    }
    function delete_demoscript($id){
        // return $this->db->query("DELETE FROM home where id_content='$id'");
        $this->db->where('id_content',$id);
        $query = $this->db->get('home');
        $ar = $query->row();
        $this->db->delete('home', array('id_content' => $id));
        unlink("./asset/post/$ar->content_img");
    }
      function demoscript_add(){
        $config['upload_path'] = 'asset/post/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
        $config['max_size'] = '8000'; // kb
        $config['encrypt_name'] = true;
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        // if (! $this->upload->do_upload('e')) {
        //   $this->session->set_flashdata('danger','<i class="fas fa-exclamation-circle"></i> Uppss.. sorry, your file do not allowed.');
        //   redirect('dashboard/demoscript');
        // } else {

        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                    $datadb = array('id_category'     =>$this->db->escape_str($this->input->post('a')),
                                    'content_title'   =>$this->db->escape_str($this->input->post('b')),
                                    'content_slug'    =>slug($this->input->post('b')),
                                    'content_desc'    =>$this->db->escape_str($this->input->post('c')),
                                    'content_code'    =>$this->input->post('code'),
                                    'content_link'    =>$this->db->escape_str($this->input->post('d')),
                                    'content_date'    =>date('Y-m-d'),
                                    'content_hits'    =>$this->db->escape_str($this->input->post('f'))
                                    );
            }else{
                    $datadb = array('id_category'     =>$this->db->escape_str($this->input->post('a')),
                                    'content_title'   =>$this->db->escape_str($this->input->post('b')),
                                    'content_slug'    =>slug($this->input->post('b')),
                                    'content_desc'    =>$this->db->escape_str($this->input->post('c')),
                                    'content_code'    =>$this->input->post('code'),
                                    'content_link'    =>$this->db->escape_str($this->input->post('d')),
                                    'content_img'     =>$hasil['file_name'],
                                    'content_date'    =>date('Y-m-d'),
                                    'content_hits'    =>$this->db->escape_str($this->input->post('f')));
            }
        $this->db->insert('home', $datadb);
    }
  // }

    function demoscript_edit($id){
        return $this->db->query("SELECT * FROM home where id_content='$id'");
    }

    function demoscript_update(){
      $config['upload_path'] = 'asset/post/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
      $config['max_size'] = '8000'; // kb
      $config['encrypt_name'] = true;
      $this->load->library('upload', $config);
      $this->upload->do_upload('e');
      // if (! $this->upload->do_upload('e')) {
      //   $this->session->set_flashdata('danger','<i class="fas fa-exclamation-circle"></i> Uppss.. sorry, your file do not allowed.');
      //   redirect('dashboard/demoscript');
      // } else {

      $hasil=$this->upload->data();
          if ($hasil['file_name']==''){
                  $datadb = array('id_category'     =>$this->db->escape_str($this->input->post('a')),
                                  'content_title'   =>$this->db->escape_str($this->input->post('b')),
                                  'content_slug'    =>slug($this->input->post('b')),
                                  'content_desc'    =>$this->db->escape_str($this->input->post('c')),
                                  'content_code'    =>$this->input->post('code'),
                                  'content_link'    =>$this->db->escape_str($this->input->post('d')),
                                  'content_date'    =>date('Y-m-d'),
                                  'content_hits'    =>$this->db->escape_str($this->input->post('f'))
                                  );
          }else{
                  $datadb = array('id_category'     =>$this->db->escape_str($this->input->post('a')),
                                  'content_title'   =>$this->db->escape_str($this->input->post('b')),
                                  'content_slug'    =>slug($this->input->post('b')),
                                  'content_desc'    =>$this->db->escape_str($this->input->post('c')),
                                  'content_code'    =>$this->input->post('code'),
                                  'content_link'    =>$this->db->escape_str($this->input->post('d')),
                                  'content_img'     =>$hasil['file_name'],
                                  'content_date'    =>date('Y-m-d'),
                                  'content_hits'    =>$this->db->escape_str($this->input->post('f')));
          }
          $this->db->where('id_content',$this->input->post('id'));
          $this->db->update('home',$datadb);
    }
  // }

//=========================== Category Function ========================

  function load_category(){
      return $this->db->query("SELECT * FROM category ORDER BY id_category DESC");
  }

  function category_add() {
      $datadb = array('category_name'       => ($this->input->post('a')),
                      'category_slug'       => slug($this->input->post('a')),
                      'button'              => ($this->input->post('b')),
                      'icon'                => ($this->input->post('c')));
      $this->db->insert('category',$datadb);
  }

  function category_update() {
      $datadb = array('category_name'       => ($this->input->post('a')),
                      'category_slug'       => slug($this->input->post('a')),
                      'button'              => ($this->input->post('b')),
                      'icon'                => ($this->input->post('c')));
      $this->db->where('id_category',$this->input->post('id'));
      $this->db->update('category',$datadb);
  }

  function category_edit($id){
      return $this->db->query("SELECT * FROM category where id_category='$id'");
  }
  function delete_category($id){
      return $this->db->query("DELETE FROM category where id_category='$id'");
  }

//==================== Message Function =========================
  function load_inbox(){
      return $this->db->query("SELECT * FROM inbox ORDER BY id_inbox DESC");
  }

  function new_message($limit){
      return $this->db->query("SELECT * FROM inbox ORDER BY id_inbox DESC LIMIT $limit");
  }
  function view_inbox($id){
        return $this->db->query("SELECT * FROM inbox where id_inbox='$id'");
  }
  function reply_message(){
        $inbox_name            = $this->input->post('a');
        $inbox_email           = $this->input->post('b');
        $inbox_subject         = $this->input->post('c');
        $inbox_message         = $this->input->post('d')." <br><hr><br> ".$this->input->post('e');
        $config = [
                   'mailtype'  => 'html',
                   'smtp_pass' => 'mastercamp1212',
                   'charset'   => 'utf-8',
                   'protocol'  => 'smtp',
                   'smtp_host' => 'ssl://smtp.googlemail.com',
                   'smtp_user' => 'mastercamp35@gmail.com',
                   'smtp_port' => 465
                 ];
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->initialize($config);

        $this->email->from('mastercamp35@gmail.com', 'DemoScript');
        $this->email->to($inbox_email);
        $this->email->subject($inbox_subject);
        $this->email->message($inbox_message);
        if($this->email->send()){
           $this->session->set_flashdata("info","<strong>Okey.. </strong> Your Reply has been sent successfully to <strong>$_POST[b]</strong>");
         }else {
           $this->session->set_flashdata("danger","<strong>Uppss.. </strong> Your Reply is'nt sent to <strong>$_POST[b]</strong>");
         }
    }


// =========================== SETTINGS =====================================

  function settings(){
      return $this->db->query("SELECT * FROM settings ORDER BY id_settings DESC LIMIT 1");
  }
  function settings_update() {
    $config['upload_path'] = 'asset/img/';
            $config['allowed_types'] = 'gif|jpg|png|ico|jpeg|GIF|JPG|PNG|ICO|JPEG';
            $config['max_size'] = '500'; // kb
            $this->load->library('upload', $config);
            $this->upload->do_upload('f');
            $hasil=$this->upload->data();

            if ($hasil['file_name']==''){
                    $datadb = array('site_icon'=>$this->input->post('icon'),
                                    'site_name'=>$this->db->escape_str($this->input->post('a')),
                                    'site_url'=>$this->input->post('b'),
                                    'site_description'=>$this->db->escape_str($this->input->post('c')),
                                    'site_maps'=>$this->input->post('d'),
                                    'site_footer'=>$this->input->post('e'),
                                    'site_left_menu'=>$this->input->post('g'),
                                    'site_right_menu'=>$this->input->post('h')
                                  );
            }else{
                    $datadb = array('site_icon'=>$this->input->post('icon'),
                                    'site_name'=>$this->db->escape_str($this->input->post('a')),
                                    'site_url'=>$this->input->post('b'),
                                    'site_description'=>$this->db->escape_str($this->input->post('c')),
                                    'site_maps'=>$this->input->post('d'),
                                    'site_favicon'=>$hasil['file_name'],
                                    'site_footer'=>$this->input->post('e'),
                                    'site_left_menu'=>$this->input->post('g'),
                                    'site_right_menu'=>$this->input->post('h')
                                  );
            }
            $this->db->where('id_settings', 1);
            $query = $this->db->get('settings');
            $part = $query->row();
            unlink("./asset/img/$part->site_favicon");
            $this->db->update('settings',$datadb);
  }

// ======================== AUTHOR ADMIN MANAGE =========================

    function loadAuthor() {
      return $this->db->query("SELECT * FROM auth ORDER BY id_auth DESC");

    }
    function author_add(){
      $config['upload_path'] = 'asset/img/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
      $config['max_size'] = '1000'; // kb
      $config['encrypt_name'] = true;
      $this->load->library('upload', $config);
      $this->upload->do_upload('f');
      // if (! $this->upload->do_upload('e')) {
      //   $this->session->set_flashdata('danger','<i class="fas fa-exclamation-circle"></i> Uppss.. sorry, your file do not allowed.');
      //   redirect('dashboard/demoscript');
      // } else {
      $hasil=$this->upload->data();
          if ($hasil['file_name']==''){
                  $datadb = array('name'       => $this->db->escape_str($this->input->post('a')),
                                  'username'   => $this->db->escape_str($this->input->post('b')),
                                  'password'   => hash("sha512", sha1($this->input->post('c'))),
                                  'level'      => $this->db->escape_str($this->input->post('d')),
                                  'active'     => $this->db->escape_str($this->input->post('e'))
                                  );
          }else{
                  $datadb = array('name'       => $this->db->escape_str($this->input->post('a')),
                                  'username'   => $this->db->escape_str($this->input->post('b')),
                                  'password'   => hash("sha512", sha1($this->input->post('c'))),
                                  'level'      => $this->db->escape_str($this->input->post('d')),
                                  'active'     => $this->db->escape_str($this->input->post('e')),
                                  'avatar'     => $hasil['file_name']
                                  );
          }
      $this->db->insert('auth', $datadb);
  }

  function author_edit($id){
      return $this->db->query("SELECT * FROM auth where id_auth='$id'");
  }

  function author_update(){
    $config['upload_path'] = 'asset/img/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG';
    $config['max_size'] = '1000'; // kb
    $config['encrypt_name'] = true;
    $this->load->library('upload', $config);
    $this->upload->do_upload('f');
    $hasil=$this->upload->data();
        if ($hasil['file_name']=='' AND $this->input->post('c') ==''){
                $datadb = array('name'       => $this->db->escape_str($this->input->post('a')),
                                'username'   => $this->db->escape_str($this->input->post('b')),
                                'level'      => $this->db->escape_str($this->input->post('d')),
                                'active'     => $this->db->escape_str($this->input->post('e'))
                                );
        }elseif ($hasil['file_name']!='' AND $this->input->post('c') ==''){
                $datadb = array('name'       => $this->db->escape_str($this->input->post('a')),
                                'username'   => $this->db->escape_str($this->input->post('b')),
                                'level'      => $this->db->escape_str($this->input->post('d')),
                                'active'     => $this->db->escape_str($this->input->post('e')),
                                'avatar'     => $hasil['file_name']
                                );
        }elseif ($hasil['file_name']=='' AND $this->input->post('c') !=''){
                $datadb = array('name'       => $this->db->escape_str($this->input->post('a')),
                                'username'   => $this->db->escape_str($this->input->post('b')),
                                'password'   => hash('sha512', sha1($this->input->post('c'))),
                                'level'      => $this->db->escape_str($this->input->post('d')),
                                'active'     => $this->db->escape_str($this->input->post('e'))
                                );
        }elseif ($hasil['file_name']!='' AND $this->input->post('c') !=''){
                $datadb = array('name'       => $this->db->escape_str($this->input->post('a')),
                                'username'   => $this->db->escape_str($this->input->post('b')),
                                'password'   => hash('sha512', sha1($this->input->post('c'))),
                                'level'      => $this->db->escape_str($this->input->post('d')),
                                'active'     => $this->db->escape_str($this->input->post('e')),
                                'avatar'     => $hasil['file_name']
                                );
        }
        $this->db->where('id_auth',$this->input->post('id_auth'));
        $this->db->update('auth',$datadb);
    }

    function delete_author($id){
        $this->db->where('id_auth',$id);
        $query = $this->db->get('auth');
        $ar = $query->row();
        $this->db->delete('auth', array('id_auth' => $id));
        unlink("./asset/img/$ar->avatar");
    }


    // Download

    function download_add(){
      $config['upload_path'] = 'asset/files/';
      $config['allowed_types'] = 'gif|jpg|jpeg|png|raw|bmp|GIF|JPG|JPEG|PNG|zip|rar|csv|cdr|mp3|mp4|mkv|mpeg|pdf|doc|docx|ppt|pptx|xls|xlsx|txt|psd|cdr|ai|svg|eps';
      $config['max_size'] = '10000'; // kb
      $config['encrypt_name'] = true;
      $this->load->library('upload', $config);
      $this->upload->do_upload('ar');
      $hasil=$this->upload->data();
          if ($hasil['file_name']==''){
                  $datadb = array('down_title'        => $this->db->escape_str($this->input->post('a')),
                                  'down_typefile'     => $this->db->escape_str($this->input->post('b')),
                                  'down_hits'         => $this->db->escape_str($this->input->post('c')),
                                  'down_active'       => $this->db->escape_str($this->input->post('d')),
                                  'down_date'         => date('Y-m-d')
                                  );
          }else{
                  $datadb = array('down_title'        => $this->db->escape_str($this->input->post('a')),
                                  'down_typefile'     => $this->db->escape_str($this->input->post('b')),
                                  'down_hits'         => $this->db->escape_str($this->input->post('c')),
                                  'down_active'       => $this->db->escape_str($this->input->post('d')),
                                  'down_date'         => date('Y-m-d'),
                                  'down_filename'     => $hasil['file_name']
                                  );
          }
      $this->db->insert('download', $datadb);
  }

  function download_edit($id){
      return $this->db->query("SELECT * FROM download where id_download='$id'");
  }


}
