<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Book extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function book_list()
    {
        $access = $this->access('book_list');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        if($this->input->get('search'))
        {

            $q = $this->input->get('search');
            $query = "SELECT * FROM submitted_form WHERE  status = 2  and payment_status != 0 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status=2 and final_book_status=2 and printing_prototype_status = 2 and  ministry_status =2  and  final_book_status2 =2  and publish_status =2  and printing_status =2 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
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
            $this->data['printing_status']=2;
            $this->data['rec'] =  $this->__pagination_data('dashboard/book_list/','submitted_form',$this->data, 50,3);
        }
        $this->page('book_list',$this->data);
    }
    public function available_other_books()
    {
        $access = $this->access('available_other_books');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }

        if($this->input->get('search'))

        {

            $q = $this->input->get('search');
            $query = "SELECT * FROM other_books WHERE  `name` LIKE '%".$q."%' ";
            $this->data['rec'] =  $this->db->query($query)->result_array();
        }
        else
        {
            $this->data['rec'] =  $this->__pagination_data('dashboard/available_other_books/','other_books',$this->data, 50,3);
        }


        $this->page('available_other_books',$this->data);

    }
    public function add_other_book_data_data()
    {
        if( $_FILES['pdf']['name'])
        {

            $folder  = 'upload/';
            $nn = $_FILES['pdf']['name'];
            $extension = pathinfo($_FILES["pdf"]["name"], PATHINFO_EXTENSION);
            $a = explode($extension,$nn);
            $t1 = str_replace(' ','',$a[0]);
            $t1 = str_replace('.','',$t1);
            $file_name = strtolower($t1.rand(0,1000000).md5($nn).'.'.$extension);
            $this->data['pdf'] = $folder.$file_name ;
            $pic = $folder.$file_name ;
            move_uploaded_file($_FILES['pdf']['tmp_name'],$folder.$file_name);
        }
        $this->data['name']=$this->input->post('name');
        $this->data['size']=$this->input->post('size');
        $this->data['color']=$this->input->post('color');
        $this->data['paper']=$this->input->post('paper');
        $this->data['allowed_copies']=$this->input->post('allowed_copies');
        $this->data['book_type']=$this->input->post('book_type');

        $this->db->insert('other_books',$this->data);
        redirect(base_url('dashboard/available-other-books/'));
    }
    public function old_books()
    {
        $access = $this->access('old_books');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        if($this->input->get('search'))
        {

            $q = $this->input->get('search');
            $query = "SELECT * FROM submitted_form WHERE  status = 2  and payment_status != 0 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status=2 and final_book_status=2 and printing_prototype_status = 2 and  ministry_status =2  and  final_book_status2 =2  and old_book =2  and publish_status =2  and printing_status =2 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
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
            $this->data['printing_status']=2;
            $this->data['old_book']=1;

            $this->data['rec'] =  $this->__pagination_data('dashboard/old_books/','submitted_form',$this->data, 50,3);
        }
        $this->page('old_books',$this->data);

    }
    public function add_old_book_data_data()
    {

        $this->data['book_name']= $this->input->post('book_name');
        $this->data['package_color']= $this->input->post('package_color');
        $this->data['package_size']= $this->input->post('package_size');
        $this->data['package_type']= $this->input->post('package_type');
        $this->data['type']= $this->input->post('type');
        $this->data['paper_type']= $this->input->post('paper_type');
        $this->data['allowed_copies']= $this->input->post('allowed_copies');
        if( $_FILES['printing_doc']['name'])
        {

            $folder  = 'upload/';
            $nn = $_FILES['printing_doc']['name'];
            $extension = pathinfo($_FILES["printing_doc"]["name"], PATHINFO_EXTENSION);
            $a = explode($extension,$nn);
            $t1 = str_replace(' ','',$a[0]);
            $t1 = str_replace('.','',$t1);
            $file_name = strtolower($t1.rand(0,1000000).md5($nn).'.'.$extension);
            $this->data['printing_doc'] = $folder.$file_name ;
            $pic = $folder.$file_name ;
            move_uploaded_file($_FILES['printing_doc']['tmp_name'],$folder.$file_name);
        }
        $this->data['admin_id']=$this->session->userdata('id');
        $this->data['dt']= date('Y-m-d');
        $this->data['contract_type']=1;
        $this->data['status']=2;
        $this->data['payment_status']=1;
        $this->data['author_sign']=1;
        $this->data['correction_status']=2;
        $this->data['inner_design_st']=2;
        $this->data['cover_status']=2;
        $this->data['final_book_status']=2;
        $this->data['printing_prototype_status']=2;
        $this->data['ministry_status']=2;
        $this->data['final_book_status2']=2;
        $this->data['publish_status']=2;
        $this->data['printing_status']=2;
        $this->data['old_book']=1;
        $this->db->insert('submitted_form',$this->data);
        $id = $this->db->insert_id();
        $this->db->where('id',$id)->update('submitted_form',array('cid'=>date('Y-m-').$id));
        redirect(base_url('dashboard/old-books'));

    }
    public function delete_other_book()
    {
        $this->db->where('id',$this->uri->segment(3))->delete('other_books');
        redirect(base_url('dashboard/available-other-books/'));
    }
    public function delete_old_book()
    {
        $this->db->where('id',$this->uri->segment(3))->delete('submitted_form');
        $this->db->where('book_id',$this->uri->segment(3))->delete('orders');
        redirect(base_url('dashboard/old-books'));
    }
    public function book_shelf()
    {
        $access = $this->access('book_shelf');
        if($access!=1)
        {
            redirect(base_url('dashboard'));
        }
        $this->data['rec'] =  $this->__pagination_data('dashboard/book_shelf/','book_shelf',$this->data, 50,3);
        $this->page('book_shelf',$this->data);
    }
    public function add_shelf_data()
    {
        $this->data['shelf_name']=$this->input->post('shelf_name');
        $this->data['number']=$this->input->post('number');
        $this->db->insert('book_shelf',$this->data);
        redirect(base_url('dashboard/book-shelf/'));
    }
    public function delete_shelf()
    {
        $this->db->where('id',$this->uri->segment(3))->delete('book_shelf');
        $this->db->where('shelf_id',$this->uri->segment(3))->delete('shelfs_data');
        redirect(base_url('dashboard/book-shelf/'));
    }
    public function edit_shelf_data()
    {
        $this->data['shelf_name']=$this->input->post('shelf_name');
        $this->data['number']=$this->input->post('number');
        $this->db->where('id',$this->input->post('id'))->update('book_shelf',$this->data);
        redirect(base_url('dashboard/book-shelf/'));
    }
}