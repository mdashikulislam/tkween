<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sale extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function sales_order()
    {
        $access = $this->access('sales_order');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        if($this->session->userdata('level')=='editor')
        {
            $this->data['user_id'] =$this->session->userdata('id');
        }
        if($this->input->get('book_id'))
        {
            $this->data['book_id']=$this->input->get('book_id');
            $this->data['type']=0;
            $this->data['rec'] = $this->db->where($this->data)->get('orders')->result_array();
        }
        else
        {
            $this->data['type']=0;
            $this->data['rec'] =  $this->__pagination_data('dashboard/sales_order/','orders',$this->data, 50,3);
        }


        $this->page('sales_order',$this->data);

    }

    public function add_order_data()
    {
        $this->data['book_id']=$this->input->post('book_id');
        $this->data['type']=$this->input->post('type');
        $this->data['copies']=$this->input->post('copies');
        $this->data['client']=$this->input->post('client');
        $this->data['user_id']= $this->session->userdata('id');
        $this->data['dt']=date('Y-m-d');

        $this->db->insert('orders',$this->data);
        redirect(base_url('dashboard/'.$this->input->post('url')));

    }
    public function delete_sale_order()
    {
        $this->db->where('id',$this->uri->segment(3))->delete('orders');
        redirect(base_url('dashboard/'.$this->input->get('url')));
    }
    public function other_orders()
    {
        $access = $this->access('other_orders');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }

        if($this->input->get('book_id'))
        {
            $this->data['book_id']=$this->input->get('book_id');
            $this->data['type']=1;
            $this->data['rec'] = $this->db->where($this->data)->get('orders')->result_array();
        }
        else
        {
            $this->data['type']=1;
            $this->data['rec'] =  $this->__pagination_data('dashboard/other_orders/','orders',$this->data, 50,3);
        }


        $this->page('other_orders',$this->data);

    }
}