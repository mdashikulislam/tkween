<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Printing extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }

    public function prototype()
    {

        $access = $this->access('prototype');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        if($this->input->get('search'))
        {

            $q = $this->input->get('search');
            $query = "SELECT * FROM submitted_form WHERE  status = 2  and payment_status != 0 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status=2 and final_book_status=2 and  printing_prototype_status !=2 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
            $this->data['rec'] =  $this->db->query($query)->result_array();
        }
        else
        {
            $this->data['status']=2;
            $this->data['payment_status!=']=0;
            $this->data['author_sign']=1;
            $this->data['correction_status']=2;
            $this->data['inner_design_st']=2;
            $this->data['cover_status']=2;
            $this->data['final_book_status']=2;
            $this->data['printing_prototype_status!=']=2;
            $this->data['rec'] =  $this->__pagination_data('dashboard/prototype/','submitted_form',$this->data, 50,3);
        }
        $this->page('prototype',$this->data);
    }
    public function available_books()
    {
        $access = $this->access('available_books');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        if($this->input->get('search'))
        {

            $q = $this->input->get('search');
            $query = "SELECT * FROM submitted_form WHERE  status = 2  and payment_status != 0 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status=2 and final_book_status=2 and printing_prototype_status = 2 and  ministry_status =2  and  final_book_status2 =2  and publish_status =2  and new_book_status =0 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
            $this->data['rec'] =  $this->db->query($query)->result_array();
        }
        else
        {
            $this->data['status']=2;
            $this->data['payment_status!=']=0;
            $this->data['author_sign']=1;
            $this->data['correction_status']=2;
            $this->data['inner_design_st']=2;
            $this->data['cover_status']=2;
            $this->data['final_book_status']=2;
            $this->data['printing_prototype_status']=2;
            $this->data['ministry_status']=2;
            $this->data['final_book_status2']=2;
            $this->data['publish_status']=2;
            $this->data['new_book_status']=0;

            $this->data['rec'] =  $this->__pagination_data('dashboard/available_books/','submitted_form',$this->data, 50,3);
        }
        $this->page('available_books',$this->data);
    }
    public function add_printing_number_data()
    {
        $this->data['book_id']=$this->input->post('book_id');
        $this->data['user_id']=$this->session->userdata('id');
        $this->data['free']=$this->input->post('free');
        $this->data['allow']=$this->input->post('allow');

        $this->db->insert('printing_orders',$this->data);
        redirect(base_url('dashboard/available-books/'));
    }
    public function sales_order_list()
    {
        $access = $this->access('sales_order_list');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
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
            $this->data['rec'] =  $this->__pagination_data('dashboard/sales_order_list/','orders',$this->data, 50,3);
        }


        $this->page('sales_order_list',$this->data);

    }
    public function other_orders_list()
    {
        $access = $this->access('other_orders_list');
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
            $this->data['rec'] =  $this->__pagination_data('dashboard/other_orders_list/','orders',$this->data, 50,3);
        }


        $this->page('other_orders_list',$this->data);

    }
}