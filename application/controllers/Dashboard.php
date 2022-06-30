<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();

	}

	public function email($to,$sub,$msg,$file)
	{
		$config['protocol'] = config_item('protocol');
		$config['smtp_host'] = config_item('smtp_host');
		$config['smtp_port'] = config_item('smtp_port');
		$config['smtp_user'] = config_item('smtp_user');
		$config['smtp_pass'] = config_item('smtp_pass');
        $config['smtp_timeout']=30;
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->to($to);
		$this->email->from(config_item('smtp_user'),config_item('name'));
		$this->email->subject($sub);
        $data['msg'] = $msg;
        $view =  $this->load->view('mails/reply',$data,true);
        $this->email->message($view);
		//$this->email->message($msg);
		$this->email->attach($file);
		$this->email->send();
	}

	public $data=array();

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('level');
		redirect(base_url().'login');
	}

	public function add_log($act,$pid)
	{
		$user = $this->db->where('id',$this->session->userdata('id'))->get('users')->result_array();
		$this->data['user_id']= $this->session->userdata('id');
		$this->data['user']= $user[0]['name'];
		$this->data['activity']= $act;
		$this->data['dt']= date('Y-m-d');
		$this->data['tm']= date('H:i a');
		$this->data['pid']= $pid;
		$this->db->insert('contract_log',$this->data);
	}
	public function index()
	{
		$this->page('home',$this->data);
	}

	public function search()
	{
		$access = $this->access('search');
		if($access!=1)
		{
			redirect(base_url('dashboard'));
		}
		
				$q = trim($this->input->get('q'));
			 $query = "SELECT * FROM submitted_form WHERE (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
			
			 $this->data['rec'] =  $this->db->query($query)->result_array();
			 
		
		//$this->data['rec'] = $this->db->like('cid',$this->input->get('q'))->get('submitted_form')->result_array();
		$this->page('search',$this->data);
		
	}

	public function contract_detail()
	{
		$access = $this->access('contract_detail');
		if($access!=1)
		{
		    redirect(base_url('dashboard'));
		}
		
		$rec = $this->db->where(array('id'=>$this->uri->segment(4),'old_book'=>0))->get('submitted_form')->result_array();
		if(count($rec)==0)
		{
			   redirect(base_url('dashboard'));
		}
		$this->data['rec'] = $rec ;
		$this->page('contract_detail',$this->data);
	}
	public function change_contract_status_processing()
	{
		
		
		$this->db->where(array('id'=>$this->input->post('id')))->update('submitted_form',array('status'=>$this->input->post('status'),'processing_dt'=>$this->input->post('dt'),'process_user'=>$this->input->post('process_user'),'pending_note'=>$this->input->post('pending_note'),'pending_dt'=>date('Y-m-d')));
		redirect(base_url('dashboard/contract_detail/'.$this->input->post('url').'/'.$this->input->post('id')));
	}
    public function add_tag_data()
	{
		$this->db->where(array('id'=>$this->input->post('id')))->
		update('submitted_form',array('tags'=>$this->input->post('tags')));
		redirect(base_url('dashboard/contract_detail/'.$this->input->post('url').'/'.$this->input->post('id')));
	}
	public function upload_book_direct()
	{
		$this->data['book_dt'] = date('Y-m-d');
		$this->data['author_sign'] = 1;
		
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
			move_uploaded_file($_FILES['book_doc']['tmp_name'],$folder.$file_name); 
       }
		$this->db->where('id', $this->input->post('id'))->update('submitted_form',$this->data);
		redirect(base_url('dashboard/contract_detail/'.$this->input->post('url').'/'.$this->input->post('id')));
		
	}
	
	public function upload_correction_file()
	{
		if($_FILES['upload_file']['name'])
			{
				$folder  = 'upload/';
				$nn = $_FILES['upload_file']['name'];
				$extension = pathinfo($_FILES["upload_file"]["name"], PATHINFO_EXTENSION);
				$a = explode($extension,$nn);
				$t1 = str_replace(' ','',$a[0]);
				$t1 = str_replace('.','',$t1);
				$file_name = strtolower($t1.rand(0,1000000).md5($nn).'.'.$extension);
				$this->data['upload_file'] = $folder.$file_name ;
				$final = $folder.$file_name ;
				move_uploaded_file($_FILES['upload_file']['tmp_name'],$folder.$file_name); 
			}
			elseif($this->input->post('physical_book'))
			{
				$this->data['upload_file'] = $this->input->post('physical_book');
				$final = '';
			}
			else
			{
				$final = '';	
			}

			
			$this->data['dt']=date('Y-m-d');
			
			$this->data['pid']=$this->input->post('id');
			$this->data['type']=$this->input->post('type');
			
			if($this->input->post('type')==0)
			{
				if($this->input->post('author_sign')==1)
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('correction_status'=>2,'correction_dt'=>date('Y-m-d')));
				}
				elseif($this->input->post('author_sign')==2)
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('correction_status'=>3,'correction_task'=>1,'correction_dt'=>date('Y-m-d')));
				}
				else
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('correction_status'=>1,'correction_dt'=>date('Y-m-d')));	
				}
				
			}
			if($this->input->post('type')==1)
			{
				
				if($this->input->post('author_sign')==1)
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('cover_status'=>2,'cover_dt'=>date('Y-m-d')));
				}
				elseif($this->input->post('author_sign')==2)
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('cover_status'=>3,'cover_task'=>1,'cover_dt'=>date('Y-m-d')));
				}
				else
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('cover_status'=>1,'cover_dt'=>date('Y-m-d')));	
				}
				
			}
			if($this->input->post('type')==2)
			{
				
				if($this->input->post('author_sign')==1)
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('inner_design_st'=>2,'inner_design_dt'=>date('Y-m-d')));
				}
				elseif($this->input->post('author_sign')==2)
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('inner_design_st'=>3,'inner_design_task'=>1,'inner_design_dt'=>date('Y-m-d')));
				}
				else
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('inner_design_st'=>1,'inner_design_dt'=>date('Y-m-d')));	
				}
					
			}
			if($this->input->post('type')==3)
			{
				$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('final_book_doc'=>$final));
				
				if($this->input->post('author_sign')==1)
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('final_book_status'=>2,'final_book_dt'=>date('Y-m-d')));
				}
				elseif($this->input->post('author_sign')==2)
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('final_book_status'=>3,'final_book_dt'=>date('Y-m-d')));
				}
				else
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('final_book_status'=>1,'final_book_dt'=>date('Y-m-d')));	
				}
				
					
			}
			if($this->input->post('type')==4)
			{
				
				if($this->input->post('author_sign')==1)
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('printing_prototype_status'=>2,'printing_prototype_dt'=>date('Y-m-d')));
				}
				elseif($this->input->post('author_sign')==2)
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('final_book_status'=>3));
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('printing_prototype_status'=>0,'printing_prototype_dt'=>date('Y-m-d')));
				}
				else
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('printing_prototype_status'=>1,'printing_prototype_dt'=>date('Y-m-d')));	
				}
				
			}
			if($this->input->post('type')==5)
			{
				$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('prototype_status2'=>1,'prototype_dt2'=>date('Y-m-d')));
				if($this->input->post('author_sign')==1)
				{
					$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('prototype_status2'=>2));
				}	
			}
			if($this->input->post('type')==6)
			{
				$this->db->where('id',$this->input->post('id'))->update('submitted_form',array('final_book_status2'=>2,'final_book_dt2'=>date('Y-m-d'),'final_book_doc2'=>$final,'publish_status'=>2,'publish_dt'=>date('Y-m-d')));
				
			}
			
			
			$this->db->insert('correction_log',$this->data);
			$id = $this->db->insert_id();
			
			

	   redirect(base_url('dashboard/contract_detail/'.$this->input->post('url').'/'.$this->input->post('id')));
	}
	public function add_inner_prcessing_log()
	{
		if($this->input->post('type')!=5)
		{
			$this->data['name'] = $this->input->post('name');
		}
		$this->data['note'] = $this->input->post('note');
		$this->data['dt'] = $this->input->post('dt');
		$this->data['pid'] = $this->input->post('pid');
		$this->data['type'] = $this->input->post('type');
		if($this->input->post('type')==5)
		{
			$this->data['status'] = $this->input->post('status');
			
			if( $_FILES['upload_file']['name'])
			{
			
				$folder  = 'upload/';
				$nn = $_FILES['upload_file']['name'];
				$extension = pathinfo($_FILES["upload_file"]["name"], PATHINFO_EXTENSION);
				$a = explode($extension,$nn);
				$t1 = str_replace(' ','',$a[0]);
				$t1 = str_replace('.','',$t1);
				$file_name = strtolower($t1.rand(0,1000000).md5($nn).'.'.$extension);
				$this->data['doc'] = $folder.$file_name ;
				$final = $folder.$file_name ;
				move_uploaded_file($_FILES['upload_file']['tmp_name'],$folder.$file_name);
			}
			   
			   if($this->input->post('status')==0)
				{
					$this->db->where('id',$this->input->post('pid'))->update('submitted_form',array('ministry_step_status'=>1,'ministry_dt'=>date('Y-m-d')));
				}
				 elseif($this->input->post('status')==1)
				{
			$this->db->where('id',$this->input->post('pid'))->update('submitted_form',array('ministry_step_status'=>2,'ministry_status'=>2,'ministry_dt'=>date('Y-m-d')));
				}
				 elseif($this->input->post('status')==2)
				{
			$this->db->where('id',$this->input->post('pid'))->update('submitted_form',array('ministry_step_status'=>3,'ministry_dt'=>date('Y-m-d')));
				}
				

		}
		$this->db->insert('contract_processing',$this->data);
		redirect(base_url('dashboard/contract_detail/'.$this->input->post('url').'/'.$this->input->post('pid')));	
		
	}

	public function edit_contract()
	{
		$access = $this->access('edit_contract');
		if($access!=1)
		{
			redirect(base_url('dashboard'));
		}
		$this->data['id']=$this->uri->segment(3);
		$this->data['status']=0;
		$this->data['rec'] = $this->db->where($this->data)->get('submitted_form')->result_array();
		$this->page('edit_contract',$this->data);
	}
	public function edit_pdf()
	{
		$access = $this->access('edit_pdf');
		if($access!=1)
		{
			redirect(base_url('dashboard'));
		}
		$this->data['id']=$this->uri->segment(3);
		$this->data['status']=0;
		$this->data['rec'] = $this->db->where($this->data)->get('submitted_form')->result_array();
		$this->page('edit_pdf',$this->data);
	}
	public function update_contract_data()
	{
	    
	   
		$this->data['name']=$this->input->post('name');
		$this->data['contact_pages']=$this->input->post('contact_pages');
        $this->data['edition']=$this->input->post('edition');
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
		$this->data['allowed_copies']=$this->input->post('allowed_copies');
		$this->data['free_copies']=$this->input->post('free_copies');
		$this->data['type']=$this->input->post('type');
		$this->data['price']=$this->input->post('price');
		$this->data['discount']=$this->input->post('discount');

		$this->db->where('id',$this->input->post('id'))->update('submitted_form',$this->data);
		 redirect(base_url('dashboard/edit_contract/'.$this->input->post('id').'/'.$this->input->post('url')));

	}
	public function update_contractpdf_data()
	{
	    
	   
		$this->data['contract']=$this->input->post('contract');
		
		$this->db->where('id',$this->input->post('id'))->update('submitted_form',$this->data);
		 redirect(base_url('dashboard/edit_pdf/'.$this->input->post('id').'/'.$this->input->post('url')));

	}

	public function author()
	{
		$access = $this->access('author');
		if($access!=1)
		{
			redirect(base_url('dashboard'));
		}
		$this->data['rec'] = $this->db->where('id',$this->uri->segment(3))->get('users')->result_array();
		$this->page('author_profile',$this->data);
	}

	public function update_author_data()
	{
		$this->data['name'] = $this->input->post('name');
		$this->data['email'] = $this->input->post('email');
		$this->data['phone'] = $this->input->post('phone');
		$this->data['pass'] = $this->input->post('pass');
		$this->data['status'] = $this->input->post('status');
		
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
		$this->db->where('id',$this->input->post('id'))->update('users',$this->data);
		redirect(base_url('dashboard/author/'.$this->input->post('id')));
	}

	public function update_plan_type_data()
	{
		$this->data['name'] = $this->input->post('name');
		$this->data['des'] = $this->input->post('des');
		$this->data['type'] = $this->input->post('type');
		$this->data['status'] = $this->input->post('status');
		$this->db->where('id',$this->input->post('id'))->update('books_type',$this->data);
		redirect(base_url('dashboard/edit_plan_type/'.$this->input->post('id')));
	}

	public function update_plan_package_data()
	{
		$this->data['pid'] = $this->input->post('pid');
		$this->data['title'] = $this->input->post('title');
		$this->data['price'] = $this->input->post('price');
		$this->data['color'] = $this->input->post('color');
		$this->data['type'] = $this->input->post('type');
		$this->data['status'] = $this->input->post('status');
		$this->db->where('id',$this->input->post('id'))->update('books_package',$this->data);
		redirect(base_url('dashboard/edit_package_plan/'.$this->input->post('id')));
	}

	public function settings()
	{
		$access = $this->access('settings');
		if($access!=1)
		{
			redirect(base_url('dashboard'));
		}
		$this->data['rec'] = $this->db->get('config')->result_array();
		$this->page('settings',$this->data);
	}

	public function update_config_data()
	{
		$this->data['name'] = $this->input->post('name');
		if( $_FILES['logo']['name'])
       {
      	
			$folder  = 'upload/';
			$nn = $_FILES['logo']['name'];
			$extension = pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);
			$a = explode($extension,$nn);
			$t1 = str_replace(' ','',$a[0]);
			$t1 = str_replace('.','',$t1);
			$file_name = strtolower($t1.rand(0,1000000).md5($nn).'.'.$extension);
			$this->data['logo'] = $folder.$file_name ;
			$pic = $folder.$file_name ;
			move_uploaded_file($_FILES['logo']['tmp_name'],$folder.$file_name); 
       }
	   if( $_FILES['fev']['name'])
       {
      	
			$folder  = 'upload/';
			$nn = $_FILES['fev']['name'];
			$extension = pathinfo($_FILES["fev"]["name"], PATHINFO_EXTENSION);
			$a = explode($extension,$nn);
			$t1 = str_replace(' ','',$a[0]);
			$t1 = str_replace('.','',$t1);

			$file_name = strtolower($t1.rand(0,1000000).md5($nn).'.'.$extension);
			$this->data['fev'] = $folder.$file_name ;
			$pic = $folder.$file_name ;
			move_uploaded_file($_FILES['fev']['tmp_name'],$folder.$file_name); 
       }
		$this->db->update('config',$this->data);
		redirect(base_url('dashboard/settings/'));
	}

	public function profile()
	{
		$access = $this->access('profile');
		if($access!=1)
		{
			redirect(base_url('dashboard'));
		}
		$this->data['rec'] = $this->db->where('id',$this->session->userdata('id'))->get('users')->result_array();
		$this->page('profile',$this->data);
	}

	public function update_profile_data()
	{
		$this->data['name'] = $this->input->post('name');
		$this->data['email'] = $this->input->post('email');
		$this->data['phone'] = $this->input->post('phone');
		$this->data['pass'] = $this->input->post('pass');
		$this->data['status'] = $this->input->post('status');
		
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
		redirect(base_url('dashboard/profile/'));
	}

	public function branches()
	{
		$access = $this->access('branches');
		if($access!=1)
		{
			redirect(base_url('dashboard'));
		}
		$this->data['rec'] = $this->db->get('branches')->result_array();
		$this->page('branches',$this->data);
	}

	public function update_branch_data()
	{
		$this->data['name']=$this->input->post('name');
		$this->db->where('id',$this->input->post('id'))->update('branches',$this->data);
		 redirect(base_url('dashboard/branches/'));
	}

	public function add_branch_data()
	{
		$this->data['name']=$this->input->post('name');
		$this->db->insert('branches',$this->data);
		 redirect(base_url('dashboard/branches/'));
	}

	public function update_users_data()
	{
		$this->data['name']=$this->input->post('name');
		$this->data['email']=$this->input->post('email');
        if($this->input->post('tag')==1)
		{
			 $this->data['tag']=1;	
		}
		else
		{
			 $this->data['tag']=0;
		}
		$this->data['branch']=$this->input->post('branch');
		$this->data['pass']=$this->input->post('pass');
		$this->db->where('id',$this->input->post('id'))->update('users',$this->data);
		 redirect(base_url('dashboard/users/'));
	}

	public function add_users_data()
	{
		$this->data['name']=$this->input->post('name');
		if($this->input->post('tag')==1)
		{
			 $this->data['tag']=1;	
		}
		else
		{
			 $this->data['tag']=0;
		}
       
		$this->data['email']=$this->input->post('email');
		$this->data['branch']=$this->input->post('branch');
		$this->data['pass']=$this->input->post('pass');
		$this->data['dt']=date('Y-m-d');
		$this->data['level']='editor';
		$this->db->insert('users',$this->data);
		 redirect(base_url('dashboard/users/'));
	}

	public function add_log_data()
	{
		$this->data['user']=$this->input->post('name');
		$this->data['activity']=$this->input->post('activity');
		$this->data['dt']=$this->input->post('dt');
		
		$this->data['tm']=$this->input->post('tm');
		$this->data['pid']=$this->input->post('id');
		$this->db->insert('contract_log',$this->data);
		
		if($this->input->post('url_type')=='single')
		{
			 redirect(base_url('dashboard/contract_detail/'.$this->input->post('id').'/'.$this->input->post('url')));	
		}
		else
		{ redirect(base_url('dashboard/tracking_log/'));	
			
		}
		
	}
	
	public function tracking_log()
	{
		$access = $this->access('tracking_log');
		if($access!=1)



		{
			redirect(base_url('dashboard'));
		}
		if($this->input->get('search'))
		{
			$this->data['pid'] =$this->input->get('search');
		}
		
		$this->data['rec'] = $this->__pagination_data('dashboard/tracking_log/','contract_log',$this->data, 50,3); 
		$this->page('contract_log',$this->data);
	}

	public function add_limit_data()
	{
		$this->data['name']=$this->input->post('name');
		$this->data['url']=$this->input->post('url');
		$this->db->insert('limitations',$this->data);
		redirect(base_url('dashboard/limitations/'));	
		
	}
	public function update_limit_data()
	{
		$this->data['name']=$this->input->post('name');
		$this->data['url']=$this->input->post('url');
		$this->db->where('id',$this->input->post('id'))->update('limitations',$this->data);
		redirect(base_url('dashboard/limitations/'));	
		
	}
	public function update_users_role_data()
	{
		
		$user_id = $this->input->post('user_id');
		$page_id = $this->input->post('page_id');
		$this->db->where('user_id',$user_id)->delete('user_roles');
		for($i=0; $i<count($page_id); $i++)
		{
			$data = array(
				'user_id'=>$user_id,
				'page_id'=>$page_id[$i],
			);
			$this->db->insert('user_roles',$data);
		}
		redirect(base_url('dashboard/users/'));	
	}

	public function printing()
	{
		$access = $this->access('printing');
		if($access!=1)
		{
			redirect(base_url('dashboard'));
		}
		if($this->input->get('search'))
		{
			
			  $q = $this->input->get('search');
			$query = "SELECT * FROM submitted_form WHERE  status = 2  and payment_status != 0 and author_sign = 1 and  correction_status=2 and inner_design_st=2 and cover_status=2 and final_book_status=2 and printing_prototype_status = 2 and  ministry_status =2  and  final_book_status2 =2  and publish_status =2  and printing_status !=2 and (`cid` LIKE '%".$q."%') OR (`book_name` LIKE '%".$q."%') OR (`name` LIKE '%".$q."%');";
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
			$this->data['printing_status!=']=2;
			
			$this->data['rec'] =  $this->__pagination_data('dashboard/printing/','submitted_form',$this->data, 50,3);	
		}
		
		$this->page('printing',$this->data);
	}

	public function update_old_book_data_data()
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
			
			$this->db->where('id',$this->input->post('id'))->update('submitted_form',$this->data);
			redirect(base_url('dashboard/old-books'));
			
	}


	public function update_price_data()
	{
		$this->data['sale_price']= $this->input->post('sale_price');
		$this->data['publisher']= $this->input->post('publisher');
		$this->db->where('id',$this->input->post('id'))->update('submitted_form',$this->data);
		redirect(base_url('dashboard/book-list'));
	}

	public function shelf_data()
	{
		$access = $this->access('book_shelf');
		if($access!=1)
		{
			redirect(base_url('dashboard'));
		}
		$this->data['shelf_id']= $this->uri->segment(3);
			$this->data['rec'] =  $this->__pagination_data('dashboard/shelf_data/'.$this->uri->segment(3),'shelfs_data',$this->data, 50,4);	
		$this->page('shelf_data',$this->data);
	}
	public function edit_shelfs_book_data()
	{
		$this->data['copies']=$this->input->post('copies');
		$this->db->where('id',$this->input->post('id'))->update('shelfs_data',$this->data);
		 redirect(base_url('dashboard/shelf_data/'.$this->input->post('shelf_id')));
	}

	public function add_shelfs_book_data()
	{
		$this->data['copies']=$this->input->post('copies');
		$this->data['book_id']=$this->input->post('book_id');
		$this->data['shelf_id']=$this->input->post('shelf_id');
		$this->db->insert('shelfs_data',$this->data);
		 redirect(base_url('dashboard/shelf_data/'.$this->input->post('shelf_id')));
	}


	public function start_printing_process()
	{
		
	   $this->data['printing_doc']=$this->input->post('printing_doc');
	   $this->data['paper_type']=$this->input->post('paper_type');
	   $this->data['printing_status']=2;
	   $this->data['printing_dt']=date('Y-m-d');
	   
		$this->db->where('id', $this->input->post('id'))->update('submitted_form',$this->data);
		redirect(base_url('dashboard/contract_detail/printing/'.$this->input->post('id')));
		
	}

	public function update_other_book_data_data()
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
	   
		$this->db->where('id',$this->input->post('id'))->update('other_books',$this->data);
		redirect(base_url('dashboard/available-other-books/'));
	}

	public function print_done()
	{
		$this->db->where('id',$this->uri->segment(3))->update('orders',array('status'=>1));
		redirect(base_url('dashboard/'.$this->input->get('url')));
	}
	public function update_payment_data()
	{
		
		  
		  if($this->input->post('paid_amount')==$this->input->post('total_amount'))
		  {
			   $this->data['payment_status']=1;
			    $this->data['payment_dt']=date('Y-m-d');
				$this->data['remaining_amount']=0;
				
				$this->db->insert('contract_payments',array('pid'=>$this->input->post('id'),'trans_id'=>$this->input->post('trans_id'),'paid_amount'=>$this->input->post('paid_amount')));
				$this->db->where('id',$this->input->post('id'))->update('submitted_form',$this->data);
		  }
		  elseif($this->input->post('paid_amount')<=$this->input->post('total_amount'))
		  {
			   $this->data['payment_status']=2;
			    $this->data['payment_dt']=date('Y-m-d');
				
				$this->data['remaining_amount']=$this->input->post('total_amount')-$this->input->post('paid_amount');
				$this->db->where('id',$this->input->post('id'))->update('submitted_form',$this->data);
				
				$this->db->insert('contract_payments',array('pid'=>$this->input->post('id'),'trans_id'=>$this->input->post('trans_id'),'paid_amount'=>$this->input->post('paid_amount'),'dt'=>date('Y-m-d')));
		  }
		  elseif($this->input->post('paid_amount')>=$this->input->post('total_amount'))
		  {
			  $this->session->set_flashdata('report',"Payment can't be bigger than Plan Price");
		  }

		redirect(base_url('dashboard/contract_detail/'.$this->input->post('url').'/'.$this->input->post('id')));
	}
	public function delete_inner_processing()
	{
		$this->db->where('id',$this->uri->segment(3))->delete('contract_processing');
		redirect(base_url('dashboard/contract_detail/'.$this->uri->segment(4).'/'.$this->uri->segment(5)));
	}
	public function delete_author_approval_data()
	{
		$this->db->where('id',$this->uri->segment(3))->delete('correction_log');
		redirect(base_url('dashboard/contract_detail/'.$this->uri->segment(4).'/'.$this->uri->segment(5)));
	}
	
	public function delete_user()
	{
		$this->db->where('id',$this->uri->segment(3))->delete('users');
		$this->db->where('user_id',$this->uri->segment(3))->delete('user_roles');
		redirect(base_url('dashboard/users/'));
	}



	public function delete_limitation_data()
	{
		$this->db->where('id',$this->uri->segment(3))->delete('limitations');
		$this->db->where('page_id',$this->uri->segment(3))->delete('user_roles');
		redirect(base_url('dashboard/limitations/'));
	}

	public function delete_shelf_books_data()
	{
		$this->db->where('id',$this->uri->segment(3))->delete('shelfs_data');
		redirect(base_url('dashboard/shelf_data/'.$this->uri->segment(4)));
	}
	public function delete_msg()
	{
		$this->db->where('id',$this->uri->segment(3))->delete('msgs');
		redirect(base_url('dashboard/inbox/'));
	}
	
	public function filter()
	{
		if($this->uri->segment(3)=='all_contracts')
		{
			$this->data['rec'] = $this->db->where('status!=',3)->get('submitted_form')->result_array();
		}
		if($this->uri->segment(3)=='pending_contracts')
		{
			$this->data['rec'] = $this->db->where('status',1)->get('submitted_form')->result_array();
			$this->data['rec'] = $this->db->where('status',0)->get('submitted_form')->result_array();
		}
		if($this->uri->segment(3)=='inprocess_contracts')
		{
			$this->data['rec'] = $this->db->where('status',2)->get('submitted_form')->result_array();
		}
		if($this->uri->segment(3)=='print_contracts')
		{
			$this->data['rec'] = $this->db->where(array('type'=>0,'status!='=>3))->get('submitted_form')->result_array();
		}
		if($this->uri->segment(3)=='electronic_contracts')
		{
			$this->data['rec'] =$this->db->where(array('type'=>1,'status!='=>3))->get('submitted_form')->result_array() ;
		}
		if($this->uri->segment(3)=='total_payment')
		{
			$this->data['rec'] =  $this->db->query('select *  from submitted_form  where  status= 2')->result_array(); ;
		}
		if($this->uri->segment(3)=='pending_payment')
		{
			$this->data['rec'] = $this->db->query('select * from submitted_form  where status= 2 and payment_status = 0')->result_array();
		}
		if($this->uri->segment(3)=='clear_payment')
		{
			$this->data['rec'] = $this->db->query('select * from submitted_form  where  status= 2 and payment_status != 0')->result_array();;
		}
		if($this->uri->segment(3)=='awaiting_books')
		{
			$this->data['rec'] = $this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>0))->get('submitted_form')->result_array();
		}
		if($this->uri->segment(3)=='correction')
		{
			$this->data['rec'] = $this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status!='=>2))->get('submitted_form')->result_array();
		}
		if($this->uri->segment(3)=='inner_design')
		{
			$this->data['rec'] = $this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'inner_design_st!='=>2))->get('submitted_form')->result_array() ;
		}
		if($this->uri->segment(3)=='cover_design')
		{
			$this->data['rec'] = $this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'inner_design_st'=>2,'cover_status!='=>2))->get('submitted_form')->result_array();
		}
		if($this->uri->segment(3)=='final_books')
		{
			$this->data['rec'] = $this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'cover_status'=>2,'final_book_status!='=>2))->get('submitted_form')->result_array();
		}
		if($this->uri->segment(3)=='printing_prototype')
		{
			$this->data['rec'] = $this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'cover_status'=>2,'final_book_status'=>2,'printing_prototype_status!='=>2))->get('submitted_form')->result_array();
		}
		if($this->uri->segment(3)=='ministry')
		{
			$this->data['rec'] = $this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'cover_status'=>2,'final_book_status'=>2,'printing_prototype_status'=>2,'ministry_status!='=>2))->get('submitted_form')->result_array();
		}
		if($this->uri->segment(3)=='final_books2')
		{
			$this->data['rec'] = $this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'cover_status'=>2,'final_book_status'=>2,'printing_prototype_status'=>2,'ministry_status'=>2,'final_book_status2!='=>2))->get('submitted_form')->result_array();
		}
		if($this->uri->segment(3)=='published') 
		{
			$this->data['rec'] = $this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'cover_status'=>2,'final_book_status'=>2,'printing_prototype_status'=>2,'ministry_status'=>2,'final_book_status2'=>2,'publish_status'=>2))->get('submitted_form')->result_array();
		}
		if($this->uri->segment(3)=='printing') 
		{
			$this->data['rec'] = $this->db->where(array('status'=>2,'payment_status!='=>0,'author_sign'=>1,'correction_status'=>2,'cover_status'=>2,'final_book_status'=>2,'printing_prototype_status'=>2,'ministry_status'=>2,'final_book_status2'=>2,'publish_status'=>2,'printing_status'=>2))->get('submitted_form')->result_array();
		}
		if($this->uri->segment(3)=='branch')
		{
			$this->data['rec'] = $this->db->where(array('branch_id'=>$this->uri->segment(4),'status!='=>3))->get('submitted_form')->result_array();
		}
		$this->page('filter',$this->data);
	}

	public function reply_contract_msg_data()
	{
	   $this->data['admin_msg']=$this->input->post('admin_msg');
	   $this->data['status']=1;
	   if( $_FILES['admin_doc']['name'])
       {
      	
			$folder  = 'upload/';
			$nn = $_FILES['admin_doc']['name'];
			$extension = pathinfo($_FILES["pdf"]["name"], PATHINFO_EXTENSION);
			$a = explode($extension,$nn);
			$t1 = str_replace(' ','',$a[0]);
			$t1 = str_replace('.','',$t1);
			$file_name = strtolower($t1.rand(0,1000000).md5($nn).'.'.$extension);
			$this->data['admin_doc'] = $folder.$file_name ;
			$pic = $folder.$file_name ;
			move_uploaded_file($_FILES['admin_doc']['tmp_name'],$folder.$file_name); 
       }
		$this->db->where('id',$this->input->post('id'))->update('contract_messages',$this->data);
		redirect(base_url('dashboard/contract-messages/'));
	}
	public function delete_contract_msg()
	{
		$this->db->where('id',$this->uri->segment(3))->delete('contract_messages');
		redirect(base_url('dashboard/contract-messages/'));
	}
    public function reply_contact_data()
    {
		$rec = $this->db->where('id',$this->input->post('id'))->get('msgs')->result_array();
        $this->data['admin_sub']=$this->input->post('admin_sub');
        $this->data['admin_msg']=$this->input->post('admin_msg');
	   $this->data['status']=1;
       $this->data['reply_dt']=date('Y-m-d');
	   if( $_FILES['admin_doc']['name'])
       {
      	
			$folder  = 'upload/';
			$nn = $_FILES['admin_doc']['name'];
			$extension = pathinfo($_FILES["pdf"]["name"], PATHINFO_EXTENSION);
			$a = explode($extension,$nn);
			$t1 = str_replace(' ','',$a[0]);
			$t1 = str_replace('.','',$t1);
			$file_name = strtolower($t1.rand(0,1000000).md5($nn).'.'.$extension);
			$this->data['admin_doc'] = $folder.$file_name ;
			$file = $folder.$file_name ;
			move_uploaded_file($_FILES['admin_doc']['tmp_name'],$folder.$file_name); 
       }

		$this->db->where('id',$this->input->post('id'))->update('msgs',$this->data);
		
		$this->email($rec[0]['email'],$this->input->post('admin_sub'),$this->input->post('admin_msg'),base_url().$file);
		
		redirect(base_url('dashboard/inbox/'));
    }
	public function reset_contract()
	{
		 
		$data = array(
			'status'=>0,
			'publisher'=>'',
			'tags'=>'',
			'process_user'=>'',
			'pending_dt'=>'',
			'processing_dt'=>'',
			'pending_note'=>0,
			'payment_status'=>0,
			'payment_dt'=>'',
			'paid_amount'=>0,
			'remaining_amount'=>0,
			'trans_id'=>'',
			'author_sign'=>0,
			'book_doc'=>'',
			'book_dt'=>'',
			'correction_status'=>0,
			'correction_dt'=>'',
			'inner_design_st'=>0,
			'innser_design_doc'=>'',
			'inner_design_dt'=>'',
			'cover_status'=>0,
			'cover_doc'=>'',
			'cover_dt'=>'',
			'final_book_status'=>0,
			'final_book_dt'=>'',
			'final_book_doc'=>'',
			'printing_prototype_status'=>0,
			'printing_prototype_dt'=>'',
			'printing_prototype_doc'=>'',
			'ministry_status'=>0,
			'ministry_id'=>'',
			'ministry_dt'=>'',
			'ministry_doc'=>'',
			'ministry_step_status'=>0,
			'final_book_status2'=>0,
			'final_book_dt2'=>'',
			'final_book_doc2'=>'',
			'publish_status'=>0,
			'publish_dt'=>'',
			'printing_status'=>0,
			'printing_dt'=>'',
			'printing_doc'=>'',
			'printed_copies'=>0,
			'sale_price'=>0,
			'paper_type'=>'',
			'remaining_free_copies'=>0,
			'remaining_printed_copies'=>0,
			'correction_task'=>0,
			'cover_task'=>0,
			'inner_design_task'=>0
		);
		
		$this->db->where('id',$this->uri->segment(3))->update('submitted_form',$data);
		$this->db->where('pid',$this->uri->segment(3))->delete('contract_log');
		$this->db->where('pid',$this->uri->segment(3))->delete('contract_payments');
		$this->db->where('pid',$this->uri->segment(3))->delete('contract_processing');
		$this->db->where('book_id',$this->uri->segment(3))->delete('orders');
		$this->db->where('book_id',$this->uri->segment(3))->delete('shelfs_data');
		
		redirect(base_url('dashboard/contract_detail/processing/'.$this->uri->segment(3)));
	}
	public function delete_contract()
	{
		$this->db->where('id',$this->uri->segment(3))->delete('submitted_form');
		$this->db->where('pid',$this->uri->segment(3))->delete('contract_log');
		$this->db->where('pid',$this->uri->segment(3))->delete('contract_payments');
		$this->db->where('pid',$this->uri->segment(3))->delete('contract_processing');
		$this->db->where('pid',$this->uri->segment(3))->delete('correction_log');
		$this->db->where('book_id',$this->uri->segment(3))->delete('orders');
		$this->db->where('book_id',$this->uri->segment(3))->delete('shelfs_data');
		
		redirect(base_url('dashboard/contracts/'.$this->uri->segment(4)));
	}

  public function regenerate_pdf()
  {
	  $rec = $this->db->where('status!=',2)->get('submitted_form')->result_array();
	  foreach($rec as $rr)
	  {
			$pdf = $this->db->where('type',$rr['type'])->get('pdf_contract')->result_array();
			
			$pdf = str_replace('*book_name*',$rr['book_name'],$pdf[0]['contract']);
			
			$pdf = str_replace('*percentage*',$rr['discount'],$pdf);
			$pdf = str_replace('*price*',$rr['price'],$pdf);
			$pdf = str_replace('*allowed_copies*',$rr['allowed_copies'],$pdf);
			$contract = str_replace('*free_copies*',$rr['free_copies'],$pdf);
			$this->db->where('id',$rr['id'])->update('submitted_form',array('contract'=>$contract));
			redirect(base_url('dashboard/pdf-contract/'));
	  }
  }

  public function delete_order_print()
  {
	  $this->db->where('id',$this->uri->segment(3))->delete('printing_orders');
	  redirect(base_url('dashboard/available-books/'));
  }
  public function user_contract()
  {
	  $access = $this->access('user_contract');
		if($access!=1)
		{
			redirect(base_url('dashboard'));
		}
		$this->data['admin_id']= $this->uri->segment(3);
		if($this->uri->segment(4)=='dt')
		{
			$this->data['dt'] = $this->uri->segment(5) ;
			$this->data['rec'] =  $this->__pagination_data('dashboard/user_contract/'.$this->uri->segment(3).'/dt/','submitted_form',$this->data, 50,6);
		}
		else
		{
			$this->data['rec'] =  $this->__pagination_data('dashboard/user_contract/'.$this->uri->segment(3),'submitted_form',$this->data, 50,4);	
		}
			
		$this->page('user_contract',$this->data);
  }
  public function mark_task_complete()
  {
	  $this->db->where('id',$this->uri->segment(4))->update('submitted_form',array($this->input->get('task')=>$this->input->get('status')));
	  
	  if($this->input->get('status')==1)
	  {
			$note = 'Correction Start';  
	  }
	  else
	  {
		  $note = 'Correction Completed';  
	  }
	  $this->db->insert('contract_processing',array('pid'=>$this->uri->segment(4),'dt'=>date('Y-m-d'),'type'=>$this->input->get('type'),'note'=>$note));
	  
	  redirect(base_url('dashboard/contract_detail/'.$this->uri->segment(3).'/'.$this->uri->segment(4)));
  }
  
  public function reset_all()
	{
		 
		$data = array(
			'status'=>0,
			'publisher'=>'',
			'tags'=>'',
			'process_user'=>'',
			'pending_dt'=>'',
			'processing_dt'=>'',
			'pending_note'=>0,
			'payment_status'=>0,
			'payment_dt'=>'',
			'paid_amount'=>0,
			'remaining_amount'=>0,
			'trans_id'=>'',
			'author_sign'=>0,
			'book_doc'=>'',
			'book_dt'=>'',
			'correction_status'=>0,
			'correction_dt'=>'',
			'inner_design_st'=>0,
			'innser_design_doc'=>'',
			'inner_design_dt'=>'',
			'cover_status'=>0,
			'cover_doc'=>'',
			'cover_dt'=>'',
			'final_book_status'=>0,
			'final_book_dt'=>'',
			'final_book_doc'=>'',
			'printing_prototype_status'=>0,
			'printing_prototype_dt'=>'',
			'printing_prototype_doc'=>'',
			'ministry_status'=>0,
			'ministry_id'=>'',
			'ministry_dt'=>'',
			'ministry_doc'=>'',
			'ministry_step_status'=>0,
			'final_book_status2'=>0,
			'final_book_dt2'=>'',
			'final_book_doc2'=>'',
			'publish_status'=>0,
			'publish_dt'=>'',
			'printing_status'=>0,
			'printing_dt'=>'',
			'printing_doc'=>'',
			'printed_copies'=>0,
			'sale_price'=>0,
			'paper_type'=>'',
			'remaining_free_copies'=>0,
			'remaining_printed_copies'=>0,
			'correction_task'=>0,
			'cover_task'=>0,
			'inner_design_task'=>0
		);
		
		$this->db->update('submitted_form',$data);

	}
}


































