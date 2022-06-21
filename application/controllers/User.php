<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id'))
		{
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('level');
			redirect(base_url('login'));
		}
		if($this->session->userdata('level')!='user')
		{
			$this->session->unset_userdata('id');
			$this->session->unset_userdata('level');
			redirect(base_url('login'));
		}
	}

	private function __pagination_data($url,$table_name,$data, $limit,$seg)
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
	
	public $data=array();

	public function logout()
	{
		
		
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('level');
		redirect(base_url().'login');
	}
	private function page($page,$data=false)
	{
		$this->load->view('header');
		$this->load->view('user/header');
		$this->load->view('user/'.$page , $data);
		$this->load->view('user/footer');
		$this->load->view('footer');
	}
	public function index()
	{
		
		$this->data['contract'] =  $this->db->where('author_id',$this->session->userdata('id'))->get('submitted_form')->result_array();
		
		$this->page('home',$this->data);
	}
	public function search()
	{
		$this->data['rec'] = $this->db->where('author_id',$this->session->userdata('id'))->like('cid',trim($this->input->get('q')))->get('submitted_form')->result_array();
		$this->page('search',$this->data);
	}
	/*public function contracts()
	{
		if($this->uri->segment(3)=='new')
		{
			$this->data['status']=0;
			$status = 0;
		}
		if($this->uri->segment(3)=='pending')
		{
			$this->data['status']=1;
			$status = 1;
		}
		if($this->uri->segment(3)=='inprogress')
		{
			$this->data['status']=2;
			$status = 2;
		}
		
		if($this->input->get('search'))
		{
			 $q = $this->input->get('search');
			 $query = "SELECT * FROM submitted_form WHERE author_id = '".$this->session->userdata('id')."' and  status = '".$status."' and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
			 $this->data['rec'] =  $this->db->query($query)->result_array();
		}
		elseif($this->uri->segment(3))
		{
			$this->data['author_id']=$this->session->userdata('id');
			$this->data['rec'] =  $this->__pagination_data('user/contracts/'.$this->uri->segment(3),'submitted_form',$this->data, 50,4);	
		}
		
		
		
		$this->page('contracts',$this->data);
	}*/
	public function contract_detail()
	{
		$this->data['rec'] = $this->db->where(array('id'=>$this->uri->segment(4),'author_id'=>$this->session->userdata('id')))->get('submitted_form')->result_array();
		$this->page('contract_detail',$this->data);
	}
	public function add_contract_data()
	{
		$pdf = $this->db->where('type',$this->input->post('type'))->get('pdf_contract')->result_array();
		$pdf = str_replace('*book_name*',$this->input->post('book_name'),$pdf[0]['contract']);
		$pdf = str_replace('*percentage*',$this->input->post('discount'),$pdf);
		$pdf = str_replace('*price*',$this->input->post('price'),$pdf);
		$pdf = str_replace('*allowed_copies*',$this->input->post('allowed_copies'),$pdf);
		$contract = str_replace('*free_copies*',$this->input->post('free_copies'),$pdf);
		
		
		
		$this->data['name']=$this->input->post('name');
		$this->data['edition']=$this->input->post('edition');
		$this->data['author_id']=$this->session->userdata('id');
		$this->data['email']=$this->input->post('email');
		$this->data['phone']=$this->input->post('phone');
		$this->data['pasport']=$this->input->post('pasport');
		$this->data['title']=$this->input->post('title');
		$this->data['nationality']=$this->input->post('nationality');
		$this->data['city']=$this->input->post('city');
		$this->data['country']=$this->input->post('country');
		$this->data['bank_name']=$this->input->post('bank_name');
		$this->data['bank_account_ipan']=$this->input->post('bank_account_ipan');
		$this->data['branch_id']=$this->input->post('branch_id');
		$this->data['book_name']=$this->input->post('book_name');
		$this->data['package_name']=$this->input->post('package_name');
		$this->data['package_size']=$this->input->post('package_size');
		$this->data['package_color']=$this->input->post('package_color');
		$this->data['package_type']=$this->input->post('package_type');
		$this->data['type']=$this->input->post('type');
		$this->data['price']=$this->input->post('price');
		$this->data['discount']=$this->input->post('discount');
		$this->data['contact_pages']=$this->input->post('contact_pages');
		$this->data['contract']=$contract;
		$this->data['allowed_copies']=1000;
		$this->data['free_copies']=25;
		$this->data['dt']= date('Y-m-d');
		
		
		$this->db->insert('submitted_form',$this->data);
		$id = $this->db->insert_id();
		$this->db->where('id',$id)->update('submitted_form',array('cid'=>date('Y-m-').$id));
		
		$this->session->userdata('success','Contact Submitted Successfully.');
		 redirect(base_url('user'));
	}
	
	
	/*public function payments()
	{
		if($this->uri->segment(3)=='pending')
		{
			$this->data['payment_status']=0;
			$status = 0;
		}
		if($this->uri->segment(3)=='paid')
		{
			$this->data['payment_status']=1;
			$status = 1;
		}
		if($this->uri->segment(3)=='notcompleted')
		{
			$this->data['payment_status']=2;
			$status = 2;
		}
		
		
		if($this->input->get('search'))
		{
			 $q = $this->input->get('search');
			 $query = "SELECT * FROM submitted_form WHERE  author_id = '".$this->session->userdata('id')."' and status = 2 and payment_status = '".$status."' and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
			 $this->data['rec'] =  $this->db->query($query)->result_array();
		}
		elseif($this->uri->segment(3))
		{
			$this->data['status']=2;
			$this->data['author_id']=$this->session->userdata('id');
			$this->data['rec'] =  $this->__pagination_data('user/payments/'.$this->uri->segment(3),'submitted_form',$this->data, 50,4);	
		}
		
		$this->page('payments',$this->data);
	}
	
	public function pending_publishing()
	{
		
		if($this->input->get('search'))
		{
			
			 $q = $this->input->get('search');
			 $query = "SELECT * FROM submitted_form WHERE author_id = '".$this->session->userdata('id')."' and  status = 2  and payment_status = 1 and author_sign = 0 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
			 $this->data['rec'] =  $this->db->query($query)->result_array();
		}
		else
		{
			$this->data['status']=2;
			$this->data['payment_status']=1;
			$this->data['author_sign']=0;
			$this->data['author_id']=$this->session->userdata('id');
			$this->data['rec'] =  $this->__pagination_data('user/pending_publishing/','submitted_form',$this->data, 50,3);	
		}
		
				$this->page('pending_publishing',$this->data);
	}
	
	public function correction()
	{
		
		if($this->input->get('search'))
		{
			
			 $q = $this->input->get('search');
			 $query = "SELECT * FROM submitted_form WHERE author_id = '".$this->session->userdata('id')."' and  status = 2  and payment_status = 1 and author_sign = 1 and  correction_status!=2 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
			 $this->data['rec'] =  $this->db->query($query)->result_array();
		}
		else
		{
			$this->data['status']=2;
			$this->data['payment_status']=1;
			$this->data['author_sign']=1;
			$this->data['correction_status!=']=2;
			$this->data['author_id']=$this->session->userdata('id');
			$this->data['rec'] =  $this->__pagination_data('user/correction/','submitted_form',$this->data, 50,3);	
		}
		
		$this->page('correction',$this->data);
	}
	public function inner_design()
	{
		
		if($this->input->get('search'))
		{
			
			 $q = $this->input->get('search');
			 $query = "SELECT * FROM submitted_form WHERE author_id = '".$this->session->userdata('id')."' and    status = 2  and payment_status = 1 and author_sign = 1 and  correction_status=2 and inner_design_st!=2 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
			 $this->data['rec'] =  $this->db->query($query)->result_array();
		}
		else
		{
			$this->data['status']=2;
			$this->data['payment_status']=1;
			$this->data['author_sign']=1;
			$this->data['correction_status']=2;
			$this->data['inner_design_st!=']=2;
			$this->data['author_id']=$this->session->userdata('id');
			$this->data['rec'] =  $this->__pagination_data('user/inner_design/','submitted_form',$this->data, 50,3);	
		}
		
		
		$this->page('inner_design',$this->data);
	}
	public function bookcover()
	{
		if($this->input->get('search'))
		{
			
			 $q = $this->input->get('search');
			 $query = "SELECT * FROM submitted_form WHERE author_id = '".$this->session->userdata('id')."' and  status = 2  and payment_status = 1 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status!=2  and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
			 $this->data['rec'] =  $this->db->query($query)->result_array();
		}
		else
		{
			$this->data['status']=2;
			$this->data['payment_status']=1;
			$this->data['author_sign']=1;
			$this->data['correction_status']=2;
			$this->data['inner_design_st']=2;
			$this->data['cover_status!=']=2;
			$this->data['author_id']=$this->session->userdata('id');
			$this->data['rec'] =  $this->__pagination_data('user/bookcover/','submitted_form',$this->data, 50,3);	
		}
		
		$this->page('bookcover',$this->data);
	}
	public function prototype1()
	{
		
		if($this->input->get('search'))
		{
			
			 $q = $this->input->get('search');
			 $query = "SELECT * FROM submitted_form WHERE  author_id = '".$this->session->userdata('id')."' and status = 2  and payment_status = 1 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status=2 and prototype_status!=2  and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
			 $this->data['rec'] =  $this->db->query($query)->result_array();
		}
		else
		{
			$this->data['status']=2;
			$this->data['payment_status']=1;
			$this->data['author_sign']=1;
			$this->data['correction_status']=2;
			$this->data['inner_design_st']=2;
			$this->data['cover_status']=2;
			$this->data['prototype_status!=']=2;
			$this->data['author_id']=$this->session->userdata('id');
			$this->data['rec'] =  $this->__pagination_data('user/prototype1/','submitted_form',$this->data, 50,3);	
		}
		
		
		$this->page('prototype1',$this->data);
	}
	
	public function ministry()
	{
		
		if($this->input->get('search'))
		{
			
			 $q = $this->input->get('search');
			 $query = "SELECT * FROM submitted_form WHERE  author_id = '".$this->session->userdata('id')."' and status = 2  and payment_status = 1 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status=2 and prototype_status=2 and ministry_status!=2   and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
			 $this->data['rec'] =  $this->db->query($query)->result_array();
		}
		else
		{
			$this->data['status']=2;
			$this->data['payment_status']=1;
			$this->data['author_sign']=1;
			$this->data['correction_status']=2;
			$this->data['inner_design_st']=2;
			$this->data['cover_status']=2;
			$this->data['prototype_status']=2;
			$this->data['ministry_status!=']=2;
			$this->data['author_id']=$this->session->userdata('id');
			$this->data['rec'] =  $this->__pagination_data('user/ministry/','submitted_form',$this->data, 50,3);	
		}
		
		
		$this->page('ministry',$this->data);
	}
	public function prototype2()
	{
		
		if($this->input->get('search'))
		{
			
			 $q = $this->input->get('search');
			 $query = "SELECT * FROM submitted_form WHERE  author_id = '".$this->session->userdata('id')."' and  status = 2  and payment_status = 1 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status=2 and prototype_status=2 and ministry_status=2 and prototype_status2!=2   and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
			 $this->data['rec'] =  $this->db->query($query)->result_array();
		}
		else
		{
			$this->data['status']=2;
			$this->data['payment_status']=1;
			$this->data['author_sign']=1;
			$this->data['correction_status']=2;
			$this->data['inner_design_st']=2;
			$this->data['cover_status']=2;
			$this->data['prototype_status']=2;
			$this->data['ministry_status']=2;
			$this->data['prototype_status2!=']=2;
			$this->data['author_id']=$this->session->userdata('id');
			$this->data['rec'] =  $this->__pagination_data('user/prototype2/','submitted_form',$this->data, 50,3);	
		}
		$this->page('prototype2',$this->data);
	}
	public function printing()
	{
		
		if($this->input->get('search'))
		{
			
			 $q = $this->input->get('search');
			 $query = "SELECT * FROM submitted_form WHERE  author_id = '".$this->session->userdata('id')."' and status = 2  and payment_status = 1 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status=2 and prototype_status=2 and ministry_status=2 and prototype_status2=2 and printing_status!=2   and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
			 $this->data['rec'] =  $this->db->query($query)->result_array();
		}
		else
		{
			$this->data['status']=2;
			$this->data['payment_status']=1;
			$this->data['author_sign']=1;
			$this->data['correction_status']=2;
			$this->data['inner_design_st']=2;
			$this->data['cover_status']=2;
			$this->data['prototype_status']=2;
			$this->data['ministry_status']=2;
			$this->data['prototype_status2']=2;
			$this->data['printing_status!=']=2;
			$this->data['author_id']=$this->session->userdata('id');
			$this->data['rec'] =  $this->__pagination_data('user/printing/','submitted_form',$this->data, 50,3);	
		}
		
		
		$this->page('printing',$this->data);
	}
	public function available_books()
	{
		if($this->input->get('search'))
		{
			
			 $q = $this->input->get('search');
			 $query = "SELECT * FROM submitted_form WHERE  author_id = '".$this->session->userdata('id')."' and  status = 2  and payment_status = 1 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status=2 and prototype_status=2 and ministry_status=2 and prototype_status2=2 and printing_status=2   and  (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
			 $this->data['rec'] =  $this->db->query($query)->result_array();
		}
		else
		{
			$this->data['status']=2;
			$this->data['payment_status']=1;
			$this->data['author_sign']=1;
			$this->data['correction_status']=2;
			$this->data['inner_design_st']=2;
			$this->data['cover_status']=2;
			$this->data['prototype_status']=2;
			$this->data['ministry_status']=2;
			$this->data['prototype_status2']=2;
			$this->data['printing_status']=2;
			$this->data['author_id']=$this->session->userdata('id');
			$this->data['rec'] =  $this->__pagination_data('user/available_books/','submitted_form',$this->data, 50,3);	
		}
		$this->page('available_books',$this->data);
	}
	public function author()
	{
		$this->data['rec'] = $this->db->where('id',$this->session->userdata('id'))->get('users')->result_array();
		$this->page('author_profile',$this->data);
	}*/
	public function edit_author()
	{
		$this->data['rec'] = $this->db->where('id',$this->session->userdata('id'))->get('users')->result_array();
		$this->page('edit_author',$this->data);
	}
	public function update_author_data()
	{
		$this->data['name'] = $this->input->post('name');
		$this->data['phone'] = $this->input->post('phone');
		$this->data['pass'] = $this->input->post('pass');
		
		if( $_FILES['pic']['name'])
       {
      	
			$folder  = 'upload/';
			$nn = $_FILES['pic']['name'];
			$extension = pathinfo($_FILES["pic"]["name"], PATHINFO_EXTENSION);
			$a = explode($extension,$nn);
			$t1 = str_replace(' ','',$a[0]);
			$t1 = str_replace('.','',$t1);
			$file_name = strtolower($t1.rand(0,1000000).md5($nn).'.'.$extension);
			$this->data['pic'] = $folder.$file_name ;
			$pic = $folder.$file_name ;
			move_uploaded_file($_FILES['pic']['tmp_name'],$folder.$file_name); 
       }
		$this->db->where('id',$this->session->userdata('id'))->update('users',$this->data);
		redirect(base_url('user/edit-author'));
	}

	public function add_contract()
	{
		$this->page('add_contract',$this->data);
	}
	public function packages()
	{
		$this->page('packages',$this->data);
	}
	public function upload_book_data()
	{
		$this->data['book_dt'] = date('Y-m-d');
		$this->data['author_sign'] = $this->input->post('author_sign');
		
		if( $_FILES['book_doc']['name'])
       {
      	
			$folder  = 'upload/';
			$nn = $_FILES['book_doc']['name'];
			$extension = pathinfo($_FILES["book_doc"]["name"], PATHINFO_EXTENSION);
			$a = explode($extension,$nn);
			$t1 = str_replace(' ','',$a[0]);
			$t1 = str_replace('.','',$t1);
			$file_name = strtolower($t1.rand(0,1000000).md5($nn).'.'.$extension);
			$this->data['book_doc'] = $folder.$file_name ;
			$pic = $folder.$file_name ;
			move_uploaded_file($_FILES['pic']['tmp_name'],$folder.$file_name); 
       }
	   
		$this->db->where('id', $this->input->post('id'))->update('submitted_form',$this->data);
		redirect(base_url('user/contract_detail/'.$this->input->post('url').'/'.$this->input->post('id')));
	}
	public function upload_correction_file()
	{
		if( $_FILES['upload_file']['name'])
       {
      	
			$folder  = 'upload/';
			$nn = $_FILES['upload_file']['name'];
			$extension = pathinfo($_FILES["upload_file"]["name"], PATHINFO_EXTENSION);
			$a = explode($extension,$nn);
			$t1 = str_replace(' ','',$a[0]);
			$t1 = str_replace('.','',$t1);
			$file_name = strtolower($t1.rand(0,1000000).md5($nn).'.'.$extension);
			$this->data['correct_file'] = $folder.$file_name ;
			$pic = $folder.$file_name ;
			move_uploaded_file($_FILES['upload_file']['tmp_name'],$folder.$file_name); 
			
						
			
			
		 $this->db->where('id',$this->input->post('rowid'))->update('correction_log',$this->data);	
			
       }
	   
	  
	  
	   
	   if($this->input->post('type')==0)
			{
				
				 $this->db->where('id',$this->input->post('rowid'))->update('correction_log',array('status'=>$this->input->post('correction_status')));
				$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('correction_status'=>$this->input->post('correction_status')));	
			}
			if($this->input->post('type')==1)
			{
				 $this->db->where('id',$this->input->post('rowid'))->update('correction_log',array('status'=>$this->input->post('cover_status')));
				$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('cover_status'=>$this->input->post('cover_status')));	
			}
			if($this->input->post('type')==2)
			{
				 $this->db->where('id',$this->input->post('rowid'))->update('correction_log',array('status'=>$this->input->post('cover_status')));
				$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('inner_design_st'=>$this->input->post('cover_status')));	
			}
			if($this->input->post('type')==3)
			{
				 $this->db->where('id',$this->input->post('rowid'))->update('correction_log',array('status'=>$this->input->post('prototype_status')));
				$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('final_book_status'=>$this->input->post('prototype_status')));	
			}
			if($this->input->post('type')==4)
			{
				
				if($this->input->post('prototype_status')==3)
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('final_book_status'=>4));	
				}
				 $this->db->where('id',$this->input->post('rowid'))->update('correction_log',array('status'=>$this->input->post('prototype_status')));
				$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('printing_prototype_status'=>$this->input->post('prototype_status')));	
			}
			if($this->input->post('type')==5)
			{
				 $this->db->where('id',$this->input->post('rowid'))->update('correction_log',array('status'=>$this->input->post('prototype_status2')));
				$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('prototype_status2'=>$this->input->post('prototype_status2')));	
			}
	   redirect(base_url('user/contract_detail/'.$this->input->post('url').'/'.$this->input->post('id')));
	}
	
	public function contact_messages()
	{
		$this->page('contact_messages',$this->data);
	}
	public function add_contract_msg_data()
	{
		$this->data['sub'] = $this->input->post('sub');
		$this->data['user_id'] = $this->session->userdata('id');
		$this->data['book_name'] = $this->input->post('book_name');
		$this->data['user_msg'] = $this->input->post('user_msg');
		$this->data['dt'] = date('Y-m-d');
		
	    $this->db->insert('contract_messages',$this->data);	
		$this->session->set_flashdata('success','Request Submitted Successfully');
		 redirect(base_url('user/contact-messages/'));
	   
	}
}




















