<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require('PHPExcel.php');
class Dashboard extends CI_Controller 
{
	
	public function __construct()
	{
		parent::__construct();
		
		
		$con = $this->db->get('cms-config')->result_array();	
		$this->config->set_item('site_name', $con[0]['site_name']); 
		$this->config->set_item('logo', $con[0]['url'].$con[0]['logo']);   
		$this->config->set_item('fev', $con[0]['url'].$con[0]['fev']);
		 
		if(!$this->session->userdata('id'))
		{
			redirect(base_url().'');
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
		$this->session->unset_userdata('branch');
		redirect(base_url().'');
	}
	private function page($page,$data=false)
	{
		$this->load->view('dashboard/header');
		$this->load->view('dashboard/'.$page , $data);
		$this->load->view('dashboard/footer');
	}
	public function index()
	{
		$this->page('home',$this->data);
	}
	public function submitted_form()
	{	
	
		
		
		if($this->uri->segment(3)=='new')
		{
			
			
			if($this->session->userdata('level')!='admin')
			{
				$page = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>1))->get('users_role')->result_array();
				if(count($page)==0)
				{
					redirect(base_url('dashboard'));
				}
			}
			
			if($this->session->userdata('branch')=='Riyadh')
			{
				$this->data['branch'] = 'Riyadh';
			}
			
			$this->data['status'] =0;
			if($this->input->get('author'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('name'=>$this->input->get('author')))->get('submitted_form')->result_array();
			}
			elseif($this->input->get('book'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('book_name'=>$this->input->get('book')))->get('submitted_form')->result_array();
			}
			else
			{
				$this->data['rec'] =  $this->__pagination_data('dashboard/submitted_form/'.$this->uri->segment(3),'submitted_form',$this->data, 20,4);	
			}
			
			
			$this->page('submitted_form',$this->data);
		}
		if($this->uri->segment(3)=='pending')
		{
			
			
			if($this->session->userdata('level')!='admin')
			{
				$page = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>1))->get('users_role')->result_array();
				if(count($page)==0)
				{
					redirect(base_url('dashboard'));
				}
			}
			
			if($this->session->userdata('branch')=='Riyadh')
			{
				$this->data['branch'] = 'Riyadh';
			}
			
			$this->data['status'] =1;
			if($this->input->get('author'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('name'=>$this->input->get('author')))->get('submitted_form')->result_array();
			}
			elseif($this->input->get('book'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('book_name'=>$this->input->get('book')))->get('submitted_form')->result_array();
			}
			else
			{
				$this->data['rec'] =  $this->__pagination_data('dashboard/submitted_form/'.$this->uri->segment(3),'submitted_form',$this->data, 20,4);	
			}
			
			
			$this->page('submitted_form',$this->data);
		}
		elseif($this->uri->segment(3)=='paid')
		{
			
			
			if($this->session->userdata('level')!='admin')
			{
				$page = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>2))->get('users_role')->result_array();
				if(count($page)==0)
				{
					redirect(base_url('dashboard'));
				}
			}
			if($this->session->userdata('branch')=='Riyadh')
			{
				$this->data['branch'] = 'Riyadh';
			}
			$this->data['status'] =2;
			if($this->input->get('author'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('name'=>$this->input->get('author')))->get('submitted_form')->result_array();
			}
			elseif($this->input->get('book'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('book_name'=>$this->input->get('book')))->get('submitted_form')->result_array();
			}
			else
			{
				$this->data['rec'] =  $this->__pagination_data('dashboard/submitted_form/'.$this->uri->segment(3),'submitted_form',$this->data, 20,4);	
			}
			$this->page('submitted_form',$this->data);
		}
		elseif($this->uri->segment(3)=='paid2')
		{
			
			
			if($this->session->userdata('level')!='admin')
			{
				$page = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>3))->get('users_role')->result_array();
				if(count($page)==0)
				{
					redirect(base_url('dashboard'));
				}
			}
			
			if($this->session->userdata('branch')=='Riyadh')
			{
				$this->data['branch'] = 'Riyadh';
			}
			$this->data['status'] =2;
			$this->data['step1'] =0;
			$this->data['step2'] =0;
			$this->data['step3'] =0;
			$this->data['step4'] =0;
			if($this->input->get('author'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('name'=>$this->input->get('author')))->get('submitted_form')->result_array();
			}
			elseif($this->input->get('book'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('book_name'=>$this->input->get('book')))->get('submitted_form')->result_array();
			}
			else
			{
				$this->data['rec'] =  $this->__pagination_data('dashboard/submitted_form/'.$this->uri->segment(3),'submitted_form',$this->data, 20,4);	
			}
			$this->page('forms',$this->data);
		}
		
		elseif($this->uri->segment(3)=='paid3')
		{
			
			
			if($this->session->userdata('level')!='admin')
			{
				$page = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>4))->get('users_role')->result_array();
				if(count($page)==0)
				{
					redirect(base_url('dashboard'));
				}
			}
			
			if($this->session->userdata('branch')=='Riyadh')
			{
				$this->data['branch'] = 'Riyadh';
			}
			$this->data['status'] =2;
			$this->data['step1'] =1;
			if($this->input->get('author'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('name'=>$this->input->get('author')))->get('submitted_form')->result_array();
			}
			elseif($this->input->get('book'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('book_name'=>$this->input->get('book')))->get('submitted_form')->result_array();
			}
			else
			{
				$this->data['rec'] =  $this->__pagination_data('dashboard/submitted_form/'.$this->uri->segment(3),'submitted_form',$this->data, 20,4);	
			}
			$this->page('forms',$this->data);
		}
		elseif($this->uri->segment(3)=='paid4')
		{
			
			
			if($this->session->userdata('level')!='admin')
			{
				$page = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>5))->get('users_role')->result_array();
				if(count($page)==0)
				{
					redirect(base_url('dashboard'));
				}
			}
			
			if($this->session->userdata('branch')=='Riyadh')
			{
				$this->data['branch'] = 'Riyadh';
			}
			$this->data['status'] =2;
			$this->data['step2'] =1;
			if($this->input->get('author'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('name'=>$this->input->get('author')))->get('submitted_form')->result_array();
			}
			elseif($this->input->get('book'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('book_name'=>$this->input->get('book')))->get('submitted_form')->result_array();
			}
			else
			{
				$this->data['rec'] =  $this->__pagination_data('dashboard/submitted_form/'.$this->uri->segment(3),'submitted_form',$this->data, 20,4);	
			}
			$this->page('forms',$this->data);
		}
		elseif($this->uri->segment(3)=='paid5')
		{
			
			
			if($this->session->userdata('level')!='admin')
			{
				$page = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>6))->get('users_role')->result_array();
				if(count($page)==0)
				{
					redirect(base_url('dashboard'));
				}
			}
			if($this->session->userdata('branch')=='Riyadh')
			{
				$this->data['branch'] = 'Riyadh';
			}
			$this->data['status'] =2;
			$this->data['step3'] =1;
			if($this->input->get('author'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('name'=>$this->input->get('author')))->get('submitted_form')->result_array();
			}
			elseif($this->input->get('book'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('book_name'=>$this->input->get('book')))->get('submitted_form')->result_array();
			}
			else
			{
				$this->data['rec'] =  $this->__pagination_data('dashboard/submitted_form/'.$this->uri->segment(3),'submitted_form',$this->data, 20,4);	
			}
			$this->page('forms',$this->data);
		}
		elseif($this->uri->segment(3)=='finish')
		{
			
			
			if($this->session->userdata('level')!='admin')
			{
				$page = $this->db->where(array('user_id'=>$this->session->userdata('id'),'page_id'=>7))->get('users_role')->result_array();
				if(count($page)==0)
				{
					redirect(base_url('dashboard'));
				}
			}
			if($this->session->userdata('branch')=='Riyadh')
			{
				$this->data['branch'] = 'Riyadh';
			}
			$this->data['status'] =2;
			$this->data['step4'] =1;
			if($this->input->get('author'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('name'=>$this->input->get('author')))->get('submitted_form')->result_array();
			}
			elseif($this->input->get('book'))
			{
				$this->data['rec'] = $this->db->where($this->data)->like(array('book_name'=>$this->input->get('book')))->get('submitted_form')->result_array();
			}
			else
			{
				$this->data['rec'] =  $this->__pagination_data('dashboard/submitted_form/'.$this->uri->segment(3),'submitted_form',$this->data, 20,4);	
			}			
			$this->page('forms',$this->data);
		}
		
		
		
		
		
	}
	public function download_excel()
	{
		
		if($this->uri->segment(3)=='pending')
		{
			$this->data['status'] =0;
		}
		elseif($this->uri->segment(3)=='paid')
		{
			$this->data['status'] =1;
		}
		
		$rec = $this->__pagination_data('dashboard/download_excel/'.$this->uri->segment(3),'submitted_form',$this->data, 20,4);
		
		$phpExcel = new PHPExcel;
		$phpExcel->getDefaultStyle()->getFont()->setName('Arial');
		$phpExcel->getDefaultStyle()->getFont()->setSize(10);
		$phpExcel ->getProperties()->setTitle("list");
		$phpExcel ->getProperties()->setCreator("Robert");
		$phpExcel ->getProperties()->setDescription("Excel SpreadSheet in PHP");
		$writer = PHPExcel_IOFactory::createWriter($phpExcel, "Excel2007");
		$sheet = $phpExcel ->getActiveSheet();
		$sheet->setTitle('Record');
		
		
		$sheet->getCell('A1')->setValue('تاريخ الدفع');

		$sheet->getCell('B1')->setValue('الحالة');
		$sheet->getCell('C1')->setValue('تاريخ');
		$sheet->getCell('D1')->setValue('نسبة المؤلف');
		$sheet->getCell('E1')->setValue('سعر الباقة');
		$sheet->getCell('F1')->setValue('الألوان');
		$sheet->getCell('G1')->setValue('نوع الكتاب');
		$sheet->getCell('H1')->setValue('إسم الكتاب');
		$sheet->getCell('I1')->setValue('رقم الايبان');
		$sheet->getCell('J1')->setValue('إسم البنك');
		$sheet->getCell('K1')->setValue('الدولة');
		$sheet->getCell('L1')->setValue('المدينة');
		$sheet->getCell('M1')->setValue('الجنسية');
		$sheet->getCell('N1')->setValue('العنوان');
		$sheet->getCell('O1')->setValue('رقم الهوية أو الجواز');
		$sheet->getCell('P1')->setValue('رقم الهاتف');
		$sheet->getCell('Q1')->setValue('البريد الإلكتروني');
		$sheet->getCell('R1')->setValue('الإسم');
		$sheet->getCell('S1')->setValue('رقم العقد');
		$sheet->getStyle('A1:Z1')->getFont()->setBold(true)->setSize(10);
		
		$xxx=2;
		foreach($rec as $x)
		{
		
			if($x['status']==0)
			{
				$st = 'غير مدفوع';
				$dt = '---';

			}
			else
			{
			$st = 'مدفوع';
			$date=date_create($x['pay_dt']);
			$dt = date_format($date,"d/m/Y");
			}
			
			$date=date_create($x['dt']);
			$sdt =  date_format($date,"d/m/Y");

		$sheet->getCell('A'.$xxx)->setValue($dt);
		$sheet->getCell('B'.$xxx)->setValue($st);
		$sheet->getCell('C'.$xxx)->setValue($sdt);
		$sheet->getCell('D'.$xxx)->setValue($x['ration']);
		$sheet->getCell('E'.$xxx)->setValue($x['price']);
		$sheet->getCell('F'.$xxx)->setValue($x['color']);
		$sheet->getCell('G'.$xxx)->setValue($x['book_type']);
		$sheet->getCell('H'.$xxx)->setValue($x['book_name']);
		$sheet->getCell('I'.$xxx)->setValue($x['bank_account_ipan']);
		$sheet->getCell('J'.$xxx)->setValue($x['bank_name']);
		$sheet->getCell('K'.$xxx)->setValue($x['country']);
		$sheet->getCell('L'.$xxx)->setValue($x['city']);
		$sheet->getCell('M'.$xxx)->setValue($x['title']);
		$sheet->getCell('N'.$xxx)->setValue($x['address']);
		$sheet->getCell('O'.$xxx)->setValue($x['pasport']);
		$sheet->getCell('P'.$xxx)->setValue($x['phone']);
		$sheet->getCell('Q'.$xxx)->setValue($x['email']);
		$sheet->getCell('R'.$xxx)->setValue($x['name']);
		$sheet->getCell('S'.$xxx)->setValue(date('Y-m-').'00'.$x['id'] );
		$xxx++;
		}
		
		
		$sheet->getColumnDimension('A')->setAutoSize(true);
		$sheet->getColumnDimension('B')->setAutoSize(true);
		$sheet->getColumnDimension('C')->setAutoSize(true);
		
		
		
		
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="Excel File.xlsx"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output');
	}
	
	public function delete_submitted_form()
	{
		$this->db->where('id',$this->uri->segment(3))->delete('submitted_form');
		redirect(base_url().'dashboard/submitted_form/'.$this->uri->segment(4));
	}
	public function contract()
	{
		$this->load->view('dashboard/contract',$this->data);
	}
	public function econtract()
	{
		$this->load->view('dashboard/econtract',$this->data);
	}
	public function users()
	{
		if($this->session->userdata('level')!='admin')
			{
				redirect(base_url('dashboard'));
			}
		$this->page('users',$this->data);
	}
	public function add_user_data()
	{
		
		$this->data['name']= trim($this->input->post('name'));
		$this->data['email']= trim($this->input->post('email'));
		$this->data['pass']= trim($this->input->post('pass'));
		$this->data['branch']= trim($this->input->post('branch'));
		$this->data['level']='user';
		$this->data['status']=1;
		$this->data['dt']=date('d F Y');
		
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
	   else
	   {
		$this->data['pic'] =   'cms-admin/image.jpg';
	   }
		
		 $this->db->insert('cms-users',$this->data);
		   redirect(base_url().'dashboard/users');
	}
	public function update_user_data()
	{
		
		$this->data['name']= trim($this->input->post('name'));
		$this->data['email']= trim($this->input->post('email'));
		$this->data['pass']= trim($this->input->post('pass'));



		$this->data['branch']= trim($this->input->post('branch'));
		
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
	   else
	   {
		$this->data['pic'] =  $this->input->post('path');
	   }
		
		 $this->db->where('id',$this->input->post('id'))->update('cms-users',$this->data);
		  redirect(base_url().'dashboard/users');
	}
	public function delete_user()
	{
		$this->db->where('id',$this->uri->segment(3))->delete('cms-users');
		 redirect(base_url().'dashboard/users');
	}
	public function change_status()
	{
		$this->db->where('id',$this->uri->segment(4))->update('submitted_form',array('status'=>$this->uri->segment(3)));
		 redirect(base_url().'dashboard/submitted_form/'.$this->uri->segment(5));
	}
  public function set_date_paid()
  {
    $this->data['pay_dt'] = $this->input->post('pay_dt');
    $this->data['status']=2;
	$this->data['step_start_dt'] =date('Y-m-d');
    $this->db->where('id',$this->input->post('id'))->update('submitted_form',$this->data);
  redirect(base_url().'dashboard/submitted_form/'.$this->input->post('url'));
  }
	public function update_contract_data()
	{
		
		$this->data['user_id'] = $this->session->userdata('id');
		$this->data['branch'] = $this->session->userdata('branch');
		$this->data['type'] = trim($this->input->post('type'));

		
		
		$this->data['name']= trim($this->input->post('name'));
		$this->data['email']= trim($this->input->post('email'));
		$this->data['phone']= trim($this->input->post('phone'));
		$this->data['pasport']= trim($this->input->post('pasport'));
		$this->data['title']= trim($this->input->post('title'));
		$this->data['nationality']= trim($this->input->post('nationality'));
		$this->data['city']= trim($this->input->post('city'));
		$this->data['country']= trim($this->input->post('country'));
		$this->data['bank_name']= trim($this->input->post('bank_name'));
		$this->data['book_name']= trim($this->input->post('book_name'));
		$this->data['book_type']= trim($this->input->post('book_type'));
		$this->data['color']= trim($this->input->post('color'));
		$this->data['price']= trim($this->input->post('price'));
		$this->data['ration']= trim($this->input->post('ration'));
		$this->data['heading']= trim($this->input->post('heading'));
		$this->data['bank_account_ipan']= trim($this->input->post('bank_account_ipan'));
		$this->data['dt']= date('F d, Y');
			$this->data['tm']= date('H:i a');
		$this->db->insert('submitted_form',$this->data);
		$id =$this->db->insert_id();
		$this->db->where('id',$id)->update('submitted_form',array('cid'=>date('Y-m-').$id));
		 redirect(base_url().'dashboard/submitted_form/'.$this->input->post('url'));
		
	}
	public function update_roles()
	{
		
		$this->db->where('user_id',$this->input->post('user_id'))->delete('users_role');
		$role = $this->input->post('roles');
		
		$id = trim($this->input->post('user_id'));
		for($i=0; $i<count($role); $i++)
		{
			$this->db->insert('users_role',array('user_id'=>$id,'page_id'=>$role[$i]));
		}
		 redirect(base_url().'dashboard/users/');
	}
  public function update_person_name()
  {
	  
    $this->data['person_name'] = $this->input->post('person_name');
	$this->data['person_dt'] = date('Y-m-d');
    $this->db->where('id',$this->input->post('id'))->update('submitted_form',$this->data);
     redirect(base_url().'dashboard/submitted_form/'.$this->input->post('url'));
  }
  public function update_person_name2()
  {
	  
    $this->data['person_name2'] = $this->input->post('person_name2');
	$this->data['person_dt2'] = date('Y-m-d');
    $this->db->where('id',$this->input->post('id'))->update('submitted_form',$this->data);
     redirect(base_url().'dashboard/submitted_form/'.$this->input->post('url'));
  }
  public function update_person_name3()
  {
	  
    $this->data['person_name3'] = $this->input->post('person_name3');
	$this->data['person_dt3'] = date('Y-m-d');
    $this->db->where('id',$this->input->post('id'))->update('submitted_form',$this->data);
     redirect(base_url().'dashboard/submitted_form/'.$this->input->post('url'));
  }
   public function goto_next_step()
  {
	   $this->db->where('id',$this->uri->segment(4))->update('submitted_form',array('step1'=>1,'step2'=>1,'step3'=>1,'person1_date'=>date('Y-m-d')));
		 redirect(base_url().'dashboard/submitted_form/'.$this->uri->segment(5));
  }
   public function goto_final_1()
  {
	   $this->db->where('id',$this->uri->segment(4))->update('submitted_form',array('step1'=>2,'person2_date'=>date('Y-m-d')));
		 redirect(base_url().'dashboard/submitted_form/'.$this->uri->segment(5));
  }
    public function goto_final_2()
  {
	   $this->db->where('id',$this->uri->segment(4))->update('submitted_form',array('step2'=>2,'person3_date'=>date('Y-m-d')));

		 redirect(base_url().'dashboard/submitted_form/'.$this->uri->segment(5));
  }
  public function goto_finish()
  {
	   $this->db->where('id',$this->uri->segment(4))->update('submitted_form',array('step4'=>1));
		 redirect(base_url().'dashboard/submitted_form/'.$this->uri->segment(5));
  }
  public function contact_messages()
	{
		$this->data['rec'] = $this->__pagination_data('dashboard/contact_messages','msgs',$this->data, 100,3);
		$this->page('contact_messages',$this->data);
	}
	public function read_message()
	{
		$this->db->where('id',$this->uri->segment(3))->update('msgs',array('status'=>1));
		$this->data['rec'] = $this->db->where('id',$this->uri->segment(3))->get('msgs')->result_array();;
		$this->page('read_message',$this->data);
	}
	
	public function delete_msg()
	{
		$this->db->where('id',$this->uri->segment(3))->delete('msgs');
		 $this->session->set_flashdata('success','Message Deleted');
		 redirect(base_url().'dashboard/contact_messages');
	}
	public function dd()
	{
		$rec = $this->db->get('submitted_form')->result_array();
		foreach($rec as $rr)
		{
			$date=date_create($rr['dt']);
			$dd =  date_format($date,"Y-m-").$rr['id'];
			$this->db->where('id',$rr['id'])->update('submitted_form',array('cid'=>$dd));
				
		}
		
	}
	
	
}



















