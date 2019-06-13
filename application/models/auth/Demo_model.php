<?php class Demo_model extends MY_model{

    function view_category(){
        return $this->db->query("SELECT * FROM category ORDER BY id_category DESC");
    }
    function view_demoscript(){
        return $this->db->query("SELECT * FROM home a JOIN category b ON a.id_category=b.id_category ORDER BY id_content DESC");
    }
    function delete_demoscript($id){
        return $this->db->query("DELETE FROM home where id_content='$id'");
    }
      function demoscript_add(){
        $config['upload_path'] = 'asset/post/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG|GIF';
        $config['max_size'] = '8000'; // kb
        $this->load->library('upload', $config);
        $this->upload->do_upload('e');
        $hasil=$this->upload->data();
            if ($hasil['file_name']==''){
                    $datadb = array('id_category'     =>$this->db->escape_str($this->input->post('a')),
                                    'content_title'   =>$this->db->escape_str($this->input->post('b')),
                                    'content_slug'    =>slug($this->input->post('b')),
                                    'content_main'    =>$this->db->escape_str($this->input->post('c')),
                                    'content_link'    =>$this->db->escape_str($this->input->post('d')),
                                    'content_date'    =>date('Y-m-d'),
                                    'content_hits'    =>$this->db->escape_str($this->input->post('f'))
                                    );
            }else{
                    $datadb = array('id_category'     =>$this->db->escape_str($this->input->post('a')),
                                    'content_title'   =>$this->db->escape_str($this->input->post('b')),
                                    'content_slug'    =>slug($this->input->post('b')),
                                    'content_main'    =>$this->db->escape_str($this->input->post('c')),
                                    'content_link'    =>$this->db->escape_str($this->input->post('d')),
                                    'content_img'     =>$hasil['file_name'],
                                    'content_date'    =>date('Y-m-d'),
                                    'content_hits'    =>$this->db->escape_str($this->input->post('f')));
            }
        $this->db->insert('home', $datadb);
    }

    function demoscript_edit($id){
        return $this->db->query("SELECT * FROM home where id_content='$id'");
    }

    function demoscript_update(){
      $config['upload_path'] = 'asset/post/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg|GIF|JPG|PNG|JPEG|GIF';
      $config['max_size'] = '8000'; // kb
      $this->load->library('upload', $config);
      $this->upload->do_upload('e');
      $hasil=$this->upload->data();
          if ($hasil['file_name']==''){
                  $datadb = array('id_category'     =>$this->db->escape_str($this->input->post('a')),
                                  'content_title'   =>$this->db->escape_str($this->input->post('b')),
                                  'content_slug'    =>slug($this->input->post('b')),
                                  'content_main'    =>$this->db->escape_str($this->input->post('c')),
                                  'content_link'    =>$this->db->escape_str($this->input->post('d')),
                                  'content_date'    =>date('Y-m-d'),
                                  'content_hits'    =>$this->db->escape_str($this->input->post('f'))
                                  );
          }else{
                  $datadb = array('id_category'     =>$this->db->escape_str($this->input->post('a')),
                                  'content_title'   =>$this->db->escape_str($this->input->post('b')),
                                  'content_slug'    =>slug($this->input->post('b')),
                                  'content_main'    =>$this->db->escape_str($this->input->post('c')),
                                  'content_link'    =>$this->db->escape_str($this->input->post('d')),
                                  'content_img'     =>$hasil['file_name'],
                                  'content_date'    =>date('Y-m-d'),
                                  'content_hits'    =>$this->db->escape_str($this->input->post('f')));
          }
          $this->db->where('id_content',$this->input->post('id'));
          $this->db->update('home',$datadb);
  }




}
