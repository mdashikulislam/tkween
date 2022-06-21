<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function add_contract()
    {
        $access = $this->access('add_contract');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->page('add_contract',$this->data);
    }
    public function add_contract_data()
    {
        $pdf = $this->db->where('type',$this->input->post('type'))->get('pdf_contract')->result_array();
        $pdf = str_replace('*book_name*',$this->input->post('book_name'),$pdf[0]['contract']);
        $pdf = str_replace('*percentage*',$this->input->post('discount'),$pdf);
        $pdf = str_replace('*price*',$this->input->post('price'),$pdf);
        $pdf = str_replace('*allowed_copies*',$this->input->post('allowed_copies'),$pdf);
        $contract = str_replace('*free_copies*',$this->input->post('free_copies'),$pdf);



        $this->data['edition']=$this->input->post('edition');
        $this->data['name']=$this->input->post('name');
        $this->data['email']=$this->input->post('email');
        $this->data['phone']=$this->input->post('phone');
        $this->data['pasport']=$this->input->post('pasport');
        $this->data['title']=$this->input->post('title');
        $this->data['nationality']=$this->input->post('nationality');
        $this->data['city']=$this->input->post('city');
        $this->data['country']=$this->input->post('country');
        $this->data['admin_id']=$this->session->userdata('id');
        $this->data['bank_name']=$this->input->post('bank_name');
        $this->data['bank_account_ipan']=$this->input->post('bank_account_ipan');
        $this->data['branch_id']=$this->input->post('branch_id');
        $this->data['book_name']=$this->input->post('book_name');
        $this->data['package_name']=$this->input->post('package_name');
        $this->data['package_size']=$this->input->post('package_size');
        $this->data['package_color']=$this->input->post('package_color');
        $this->data['package_type']=$this->input->post('package_type');
        $this->data['contact_pages']=$this->input->post('contact_pages');
        $this->data['type']=$this->input->post('type');
        $this->data['price']=$this->input->post('price');
        $this->data['discount']=$this->input->post('discount');
        $this->data['contract']=$contract;
        $this->data['allowed_copies']=$this->input->post('allowed_copies');
        $this->data['free_copies']=$this->input->post('free_copies');
        $this->data['dt']= date('Y-m-d');
        $this->data['contract_type']=1;
        $this->db->insert('submitted_form',$this->data);
        $id = $this->db->insert_id();
        $this->db->where('id',$id)->update('submitted_form',array('cid'=>date('Y-m-').$id));

        redirect(base_url('dashboard/add-contract/'));
    }
    public function contracts()
    {
        $this->data['old_book']=0;
        if($this->uri->segment(3)=='new')
        {
            $this->data['status']=0;
            $status = 0;
            $this->data['old']=0;
            $access = $this->access('contracts/new');
            if($access!=1)
            {
                redirect(base_url('dashboard'));
            }
        }
        if($this->uri->segment(3)=='pending')
        {
            $this->data['status']=1;
            $status = 1;
            $access = $this->access('contracts/pending');
            if($access!=1)
            {
                redirect(base_url('dashboard'));
            }
        }
        if($this->uri->segment(3)=='inprogress')
        {
            $this->data['status']=2;
            $status = 2;
            $access = $this->access('contracts/inprogress');
            if($access!=1)
            {
                redirect(base_url('dashboard'));
            }
        }
        if($this->uri->segment(3)=='old_new')
        {
            $this->data['status']=0;
            $this->data['old'] =1;
            $status = 0;
            $access = $this->access('contracts/old_new');
            if($access!=1)
            {
                redirect(base_url('dashboard'));
            }
        }
        if($this->uri->segment(3)=='old_processed')
        {
            $this->data['status']=3;
            $this->data['old']=1;
            $status = 3;
            $access = $this->access('contracts/old_processed');
            if($access!=1)
            {
                redirect(base_url('dashboard'));
            }
        }
        $showDate = '2022-01-01';
        if(!empty($this->input->get('search')) || !empty($this->input->get('year')) || !empty($this->input->get('month')))
        {
            $data = $this->data;
            $q = $this->input->get('search');
            $year = $this->input->get('year');
            $month = $this->input->get('month');
            $this->db->from('submitted_form')->where($this->data);
            if ($this->uri->segment(3) == 'old_new'){
                $this->db->where('dt < ',$showDate);
            }else if($this->uri->segment(3) == 'new'){
                $this->db->where('dt >= ',$showDate);
            }
            if (!empty($year)){
                $this->db->where("YEAR(dt)",$year);
            }
            if (!empty($month)){
                $this->db->where("MONTH(dt)",$month);
            }
            if (!empty($q)){
                $this->db->group_start();
                $this->db->like('cid',$q);
                $this->db->or_like('book_name',$q);
                $this->db->or_like('name',$q);
                $this->db->group_end();
            }
            $this->data['rec'] = $this->db->get()->result_array();
            $this->db->select('YEAR(dt) as year')->from('submitted_form')->where($data);
            if ($this->uri->segment(3) == 'old_new'){
                $this->db->where('dt < ',$showDate);
            }else if($this->uri->segment(3) == 'new'){
                $this->db->where('dt >= ',$showDate);
            }
            $this->data['years'] = $this->db->group_by('YEAR(dt)')->order_by('YEAR(dt)','desc')->get()->result_array();
        } elseif($this->uri->segment(3))
        {
            $allData = $this->db->select('dt,id')->from('submitted_form')->get()->result();
            foreach ($allData as $ds){
                if (!empty($ds->dt)){
                    $nw = date('Y-m-d',strtotime($ds->dt));
                    $this->db->where('id',$ds->id)->update('submitted_form',['dt'=>$nw]);
                }
            }


            $data = $this->data;
            $config=array(
                'per_page' 			=> 50,
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
            $offset = @$this->uri->segment(4) ? :0;
            if ($this->uri->segment(3) == 'old_new'){
                $config['base_url'] = base_url('dashboard/contracts/old_new');
                $config['total_rows'] = $this->db->where($this->data)->where('dt < ',$showDate)->get('submitted_form')->num_rows();
                $this->pagination->initialize($config);
                $this->data['rec'] =  $this->db->from('submitted_form')->where($this->data)->where('dt < ',$showDate)->limit($config['per_page'], $offset)->order_by('id','desc')->get()->result_array();
                $this->data['years'] = $this->db->select('YEAR(dt) as year')->from('submitted_form')->where($data)->where('dt < ',$showDate)->group_by('YEAR(dt)')->order_by('YEAR(dt)','desc')->get()->result_array();
            }else if ($this->uri->segment(3) == 'new'){
                $config['base_url'] = base_url('dashboard/contracts/new/');
                $config['total_rows'] = $this->db->where($this->data)->where('dt >= ',$showDate)->get('submitted_form')->num_rows();
                $this->pagination->initialize($config);
                $this->data['rec'] =  $this->db->where($this->data)->where('dt >= ',$showDate)->limit($config['per_page'], $offset)->order_by('id','desc')->get('submitted_form')->result_array();
                $this->data['years'] = $this->db->select('YEAR(dt) as year')->from('submitted_form')->where($data)->where('dt >= ',$showDate)->group_by('YEAR(dt)')->order_by('YEAR(dt)','desc')->get()->result_array();

            }else if($this->uri->segment(3) == 'inprogress'){
                $config['base_url'] = base_url('dashboard/contracts/inprogress/');
                $config['total_rows'] = $this->db->where($this->data)->get('submitted_form')->num_rows();
                $this->pagination->initialize($config);
                $this->data['rec'] =  $this->db->where($this->data)->limit($config['per_page'], $offset)->order_by('id','desc')->get('submitted_form')->result_array();
                $this->data['years'] = $this->db->select('YEAR(dt) as year')->from('submitted_form')->where($data)->group_by('YEAR(dt)')->order_by('YEAR(dt)','desc')->get()->result_array();
            }else if($this->uri->segment(3) == 'old_processed'){
                $config['base_url'] = base_url('dashboard/contracts/old_processed/');
                $config['total_rows'] = $this->db->where($this->data)->get('submitted_form')->num_rows();
                $this->pagination->initialize($config);
                $this->data['rec'] =  $this->db->where($this->data)->limit($config['per_page'], $offset)->order_by('id','desc')->get('submitted_form')->result_array();
                $this->data['years'] = $this->db->select('YEAR(dt) as year')->from('submitted_form')->where($data)->group_by('YEAR(dt)')->order_by('YEAR(dt)','desc')->get()->result_array();
            }else{
                $config['base_url'] = base_url('dashboard/contracts/inprogress/');
                $config['total_rows'] = $this->db->where($this->data)->get('submitted_form')->num_rows();
                $this->pagination->initialize($config);
                $this->data['rec'] =  $this->db->where($this->data)->limit($config['per_page'], $offset)->order_by('id','desc')->get('submitted_form')->result_array();
                $this->data['years'] = $this->db->select('YEAR(dt) as year')->from('submitted_form')->where($data)->group_by('YEAR(dt)')->order_by('YEAR(dt)','desc')->get()->result_array();
            }
        }
        if($this->uri->segment(3)=='inprogress')
        {
            $this->page('inprogress_contracts',$this->data);
        }
        else
        {
            $this->page('contracts',$this->data);
        }
    }
    public function pcontract()
    {
        $access = $this->access('pcontract');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->load->view('pcontract',$this->data);
    }
}