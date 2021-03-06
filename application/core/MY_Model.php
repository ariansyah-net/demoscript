<?php
class MY_Model extends CI_Model
{
    protected $table          = '';
    protected $perPage        = 0;

    public function __construct()
    {
        parent::__construct();

        if (!$this->table) {
            $this->table = strtolower(str_replace('_model', '', get_class($this)));
        }
    }

    public function query($sql)
    {
        return $this->db->query($sql);
    }

    public function get()
    {
        return $this->db->get($this->table)->row();
    }

    public function getAll()
    {
        return $this->db->get($this->table)->result();
    }

    public function paginate($page)
    {
        $this->db->limit($this->perPage, $this->calculateRealOffset($page));
        return $this;
    }

    public function calculateRealOffset($page)
    {
        if (is_null($page) || empty($page)) {
            $offset = 0;
        } else {
            $offset = ($page * $this->perPage) - $this->perPage;
        }

        return $offset;
    }

    public function select($columns)
    {
        $this->db->select($columns);
        return $this;
    }

    public function where($column, $condition)
    {
        $this->db->where($column, $condition);
        return $this;
    }

    public function orLike($column, $condition)
    {
        $this->db->or_like($column, $condition);
        return $this;
    }

    public function validate()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<p class="form-error">', '</p>');
        $validationRules = $this->getValidationRules();
        $this->form_validation->set_rules($validationRules);
        return $this->form_validation->run();
    }

    public function insert($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update($data)
    {
        return $this->db->update($this->table, $data);
    }

    public function delete()
    {
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }

    public function join($table, $type = 'INNER')
    {
        $this->db->join($table, "$this->table.id_$table = $table.id_$table", $type);
        return $this;
    }


    public function orderBy($kolom, $order = 'DESC')
    {
        $this->db->order_by($kolom, $order);
        return $this;
    }

    public function orderLimit()
    {
        return $this->db->get($this->table, 3)->result();
    }

    public function makePagination($baseURL, $uriSegment, $totalRows = null)
    {
        $args = func_get_args();

        $this->load->library('pagination');

        $config = [
            'base_url'         => $baseURL,
            'uri_segment'      => $uriSegment,
            'per_page'         => $this->perPage,
            'total_rows'       => $totalRows,
            'use_page_numbers' => true,
            'num_links'        => 2,

            'full_tag_open'     => '<ul class="pagination justify-content-center">',
            'full_tag_close'    => '</ul>',
            'num_tag_open'      => '<li class="page-item">',
            'num_tag_close'     => '</li>',
            'cur_tag_open'      => '<li class="page-item active"><a class="page-link" href="#">',
            'cur_tag_close'     => '</a></li>',
            // 'next_tag_open'     => '<li class="page-item"><a href="#" aria-label="Next">',
            // 'next_tagl_close'   => '</a></li>',
            // 'prev_tag_open'     => '<li class="page-item">',
            // 'prev_tagl_close'   => '</li>',
            // 'first_tag_open'    => '<li class="page-item">',
            // 'first_tagl_close'  => '</li>',
            'last_tag_open'     => '<li class="page-item"><a href="#" aria-label="Next">',
            'last_tagl_close'   => '</a></li>',
            'attributes'        => array('class' => 'page-link')
        ];


        if (count($_GET) > 0) {
            $config['suffix']    = '?' . http_build_query($_GET, '', "&");
            $config['first_url'] = $config['base_url'] . '?' . http_build_query($_GET);
        } else {
            $config['suffix']    = http_build_query($_GET, '', "&");
            $config['first_url'] = $config['base_url'];
        }

        $this->pagination->initialize($config);
        return $this->pagination->create_links();
    }
}
