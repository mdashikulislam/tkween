<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Package extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function add_plan_type()
    {
        $access = $this->access('add_plan_type');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->page('add_plan_type',$this->data);
    }

    public function add_plan_type_data()
    {
        $this->data['name'] = $this->input->post('name');
        $this->data['des'] = $this->input->post('des');
        $this->data['type'] = $this->input->post('type');
        $this->data['status'] = $this->input->post('status');
        $this->db->insert('books_type',$this->data);
        redirect(base_url('dashboard/add-plan-type/'));
    }

    public function plan_types()
    {
        $access = $this->access('plan_types');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->data['rec'] = $this->db->get('books_type')->result_array();
        $this->page('plan_types',$this->data);
    }

    public function edit_plan_type()
    {

        $access = $this->access('edit_plan_type');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->data['rec'] = $this->db->where('id',$this->uri->segment(3))->get('books_type')->result_array();
        $this->page('edit_plan_type',$this->data);
    }

    public function delete_plan_type()
    {
        $this->db->where('id',$this->uri->segment(3))->delete('books_type');
        $this->db->where('pid',$this->uri->segment(3))->delete('books_package');
        redirect(base_url('dashboard/plan-types/'));
    }

    public function add_packages()
    {
        $access = $this->access('add_packages');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->page('add_packages',$this->data);
    }

    public function add_plan_package_data()
    {
        $this->data['pid'] = $this->input->post('pid');
        $this->data['title'] = $this->input->post('title');
        $this->data['price'] = $this->input->post('price');
        $this->data['color'] = $this->input->post('color');
        $this->data['type'] = $this->input->post('type');
        $this->data['status'] = $this->input->post('status');
        $this->db->insert('books_package',$this->data);
        redirect(base_url('dashboard/add-packages/'));
    }

    public function all_packages()
    {
        $access = $this->access('all_packages');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->data['rec'] = $this->db->get('books_package')->result_array();
        $this->page('all_packages',$this->data);
    }

    public function edit_package_plan()
    {
        $access = $this->access('edit_package_plan');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->data['rec'] = $this->db->where('id',$this->uri->segment(3))->get('books_package')->result_array();
        $this->page('edit_package_plan',$this->data);
    }

    public function delete_package()
    {

        $this->db->where('id',$this->uri->segment(3))->delete('books_package');
        redirect(base_url('dashboard/all-packages/'));
    }


}