<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Finance extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function payments()
    {
        $this->data['old_book']=0;
        if($this->uri->segment(3)=='pending')
        {
            $this->data['payment_status']=0;
            $status = 0;
            $access = $this->access('payments/pending');
            if($access!=1)
            {
                redirect(base_url('dashboard'));
            }
        }
        if($this->uri->segment(3)=='paid')
        {
            $this->data['payment_status']=1;
            $status = 1;
            $access = $this->access('payments/paid');
            if($access!=1)
            {
                redirect(base_url('dashboard'));
            }
        }
        if($this->uri->segment(3)=='notcompleted')
        {
            $this->data['payment_status']=2;
            $status = 2;
            $access = $this->access('payments/notcompleted');
            if($access!=1)
            {
                redirect(base_url('dashboard'));
            }
        }


        if($this->input->get('search'))
        {
            $q = $this->input->get('search');
            $query = "SELECT * FROM submitted_form WHERE old_book =0 and  status = 2 and payment_status = '".$status."' and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
            $this->data['rec'] =  $this->db->query($query)->result_array();
        }
        elseif($this->uri->segment(3))
        {
            $this->data['status']=2;
            $this->data['rec'] =  $this->__pagination_data('dashboard/payments/'.$this->uri->segment(3),'submitted_form',$this->data, 50,4);
        }



        $this->page('payments',$this->data);
    }

}