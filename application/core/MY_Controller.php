<?php
class MY_Controller extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('id'))
        {
            $this->session->unset_userdata('id');
            $this->session->unset_userdata('level');
            redirect(base_url('login'));
        }
        if($this->session->userdata('level')!='admin' && $this->session->userdata('level')!='editor')
        {
            $this->session->unset_userdata('id');
            $this->session->unset_userdata('level');
            redirect(base_url('login'));
        }
    }
    public $data=array();
    public function access($url)
    {
        $u = base_url().'dashboard/'.$url;
        if($this->session->userdata('level')=='editor')
        {
            $page = $this->db->where('url',$u )->get('limitations')->result_array();

            if(count($page))
            {
                $rec = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>$page[0]['id']))->get('user_roles')->result_array();
                if(count($rec))
                {
                    return  1;
                }
                else
                {
                    return  0;
                }
            }
            else
            {
                return  0;
            }
        }
        else
        {
            return 1;
        }
    }
    public function __pagination_data($url,$table_name,$data, $limit,$seg)
    {
        $config=array(
            'base_url'			=> base_url($url),
            'per_page' 			=> $limit,
            'total_rows'		=> $this->db->where($data)->get($table_name)->num_rows(),
            'full_tag_open' 	=> "<ul class='pagination'>",
            'full_tag_close'	=> "</ul>",
            'first_tag_open'	=> "<li>",
            'first_tag_close'   => "</li>",
            'last_tag_open'		=> "<li>",
            'last_tag_close'    => "</li>",
            'next_tag_open'		=> "<li>",
            'next_tag_close'    => "</li>",
            'prev_tag_open'		=> "<li>",
            'prev_tag_close'    => "</li>",
            'num_tag_open'		=> "<li>",
            'num_tag_close'     => "</li>",
            'cur_tag_open'      => "<li ><a class='active'>",
            'cur_tag_close'		=> "</a></li>"
        );
        $this->pagination->initialize($config);
        return $this->admin_work->peg($table_name,$data,$config['per_page'] , $this->uri->segment($seg));
    }
    public function page($page,$data=false)
    {
        $this->load->view('header');
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/'.$page , $data);
        $this->load->view('dashboard/footer');
        $this->load->view('footer');
    }
}