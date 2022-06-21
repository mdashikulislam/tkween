<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ministry extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function ministry()
    {

        $access = $this->access('ministry');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        if($this->input->get('search'))
        {

            $q = $this->input->get('search');
            $query = "SELECT * FROM submitted_form WHERE  old_book =0 and status = 2  and payment_status != 0 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status=2 and final_book_status=2 and printing_prototype_status = 2 and  ministry_status !=2 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
            $this->data['rec'] =  $this->db->query($query)->result_array();
        }
        else
        {
            if($this->uri->segment(3)=='pending')
            {
                $this->data['ministry_step_status']=0;
            }
            if($this->uri->segment(3)=='completed')
            {
                $this->data['ministry_step_status']=1;
            }
            if($this->uri->segment(3)=='rejected')
            {
                $this->data['ministry_step_status']=2;
            }
            $this->data['status']=2;
            $this->data['payment_status!=']=0;
            $this->data['author_sign']=1;
            $this->data['correction_status']=2;
            $this->data['inner_design_st']=2;
            $this->data['cover_status']=2;
            $this->data['final_book_status']=2;
            $this->data['printing_prototype_status']=2;
            $this->data['old_book']=0;
            $this->data['rec'] =  $this->__pagination_data('dashboard/ministry/','submitted_form',$this->data, 50,3);
        }
        $this->page('ministry',$this->data);
    }
}