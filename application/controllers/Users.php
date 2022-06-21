<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function authors()
    {
        $access = $this->access('authors');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        if($this->input->get('search'))
        {
            $this->data['rec'] = $this->db->where('level','user')->like('name',$this->input->get('search'))->get('users')->result_array();
        }
        else
        {
            $this->data['level']='user';
            $this->data['rec'] =  $this->__pagination_data('dashboard/authors','users',$this->data, 50,3);

        }

        $this->page('authors',$this->data);
    }

    public function edit_author()
    {
        $access = $this->access('edit_author');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->data['rec'] = $this->db->where('id',$this->uri->segment(3))->get('users')->result_array();
        $this->page('edit_author',$this->data);
    }
    public function users()
    {
        $access = $this->access('users');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->data['rec'] = $this->db->where('level','editor')->get('users')->result_array();
        $this->page('users',$this->data);
    }
}
