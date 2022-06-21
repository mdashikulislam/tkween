<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Stage extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function pending_publishing()
    {

        $access = $this->access('pending_publishing');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        if($this->input->get('search'))
        {

            $q = $this->input->get('search');
            $query = "SELECT * FROM submitted_form WHERE  status = 2  and payment_status != 0 and author_sign = 0 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
            $this->data['rec'] =  $this->db->query($query)->result_array();
        }
        else
        {
            $this->data['status']=2;
            $this->data['payment_status!=']=0;
            $this->data['author_sign']=0;
            $this->data['rec'] =  $this->__pagination_data('dashboard/pending_publishing/','submitted_form',$this->data, 50,3);
        }
        $this->page('pending_publishing',$this->data);
    }
    public function correction()
    {
        $access = $this->access('correction');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        if($this->input->get('search'))
        {

            $q = $this->input->get('search');
            $query = "SELECT * FROM submitted_form WHERE  status = 2  and payment_status != 0 and author_sign = 1 and  correction_status!=2 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
            $this->data['rec'] =  $this->db->query($query)->result_array();
        }
        else
        {
            $this->data['status']=2;
            $this->data['payment_status!=']=0;
            $this->data['author_sign']=1;
            $this->data['correction_status!=']=2;
            $this->data['rec'] =  $this->__pagination_data('dashboard/correction/','submitted_form',$this->data, 50,3);
        }
        $this->page('correction',$this->data);
    }
    public function inner_design()
    {
        $access = $this->access('inner_design');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        if($this->input->get('search'))
        {

            $q = $this->input->get('search');
            $query = "SELECT * FROM submitted_form WHERE  status = 2  and payment_status != 0 and author_sign = 1 and  correction_status=2 and inner_design_st!=2 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
            $this->data['rec'] =  $this->db->query($query)->result_array();
        }
        else
        {
            $this->data['status']=2;
            $this->data['payment_status!=']=0;
            $this->data['author_sign']=1;
            $this->data['correction_status']=2;
            $this->data['inner_design_st!=']=2;
            $this->data['rec'] =  $this->__pagination_data('dashboard/inner_design/','submitted_form',$this->data, 50,3);
        }
        $this->page('inner_design',$this->data);
    }
    public function bookcover()
    {
        $access = $this->access('bookcover');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        if($this->input->get('search'))
        {

            $q = $this->input->get('search');
            $query = "SELECT * FROM submitted_form WHERE  status = 2  and payment_status != 0 and author_sign = 1 and  correction_status=2 and inner_design_st=2  and cover_status!=2 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
            $this->data['rec'] =  $this->db->query($query)->result_array();
        }
        else
        {
            $this->data['status']=2;
            $this->data['payment_status!=']=0;
            $this->data['author_sign']=1;
            $this->data['correction_status']=2;
            $this->data['inner_design_st']=2;
            $this->data['cover_status!=']=2;
            $this->data['rec'] =  $this->__pagination_data('dashboard/bookcover/','submitted_form',$this->data, 50,3);
        }
        $this->page('bookcover',$this->data);
    }
    public function final_copies()
    {
        $access = $this->access('final_copies');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        if($this->input->get('search'))
        {

            $q = $this->input->get('search');
            $query = "SELECT * FROM submitted_form WHERE  status = 2  and payment_status != 0 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status=2 and final_book_status!=2  and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
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
            $this->data['final_book_status!=']=2;
            $this->data['rec'] =  $this->__pagination_data('dashboard/final_copies/','submitted_form',$this->data, 50,3);
        }
        $this->page('final_copies',$this->data);
    }
    public function final_copies2()
    {

        $access = $this->access('final_copies2');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        if($this->input->get('search'))
        {

            $q = $this->input->get('search');
            $query = "SELECT * FROM submitted_form WHERE  status = 2  and payment_status != 0 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status=2 and final_book_status=2 and printing_prototype_status = 2 and  ministry_status =2  and  final_book_status2 !=2 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
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
            $this->data['final_book_status2!=']=2;
            $this->data['rec'] =  $this->__pagination_data('dashboard/final_copies2/','submitted_form',$this->data, 50,3);
        }
        $this->page('final_copies2',$this->data);
    }
}