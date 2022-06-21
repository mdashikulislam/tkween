<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends CI_Controller 
{
	public $data = array();

	public function login_process()
	{
		$this->data['email'] = $this->input->post('email');
		$this->data['pass'] = $this->input->post('pass');
		$rec = $this->db->where($this->data)->get('cms-users')->result_array();
		if(count($rec))
		{
			$this->session->set_userdata(array('id'=>$rec[0]['id']));
			$this->session->set_userdata(array('level'=>$rec[0]['level']));
			$this->session->set_userdata(array('branch'=>$rec[0]['branch']));
			
				
					redirect(base_url('dashboard'));
				
			}
			else
			{
				redirect(base_url());
			}
	}
	

	public function index()
	{
		if($this->session->userdata('id'))
		{
			redirect(base_url('dashboard'));
		}
	  $this->load->view('dashboard/login');
	}
	public function send_msg()
	{
		$this->data['name']= $this->input->post('name');
		$this->data['email']= $this->input->post('email');
		$this->data['sub']= $this->input->post('sub');
		$this->data['msg']= $this->input->post('msg');
		$this->data['dt']= date('F d, Y h:i A');
		$this->db->insert('msgs',$this->data);
		redirect('http://tkweenonline.com/');
	}
	public function add_data()
	{
		$this->data['name']= $this->input->post('name');
		$this->data['type']= $this->input->post('type');
		$this->data['address']= $this->input->post('address');
		$this->data['email']= $this->input->post('email');
		$this->data['phone']= $this->input->post('phone');
		$this->data['pasport']= $this->input->post('id_or_pass');
		$this->data['country']= $this->input->post('contry');
		$this->data['nationality']= $this->input->post('nationality');
		$this->data['heading']= $this->input->post('heading');
		$this->data['title']= $this->input->post('nationality');
		$this->data['city']= $this->input->post('city');
		$this->data['bank_name']= $this->input->post('bank_name');
		$this->data['bank_account_ipan']= $this->input->post('bank_account_ipan');
		$this->data['book_name']= $this->input->post('book_name');
		$this->data['book_type']= $this->input->post('book_type1');
		$this->data['color']= $this->input->post('book_type2');
		$this->data['price']= $this->input->post('price');
		$this->data['ration']= $this->input->post('percentage');
		$this->data['branch']= 'Jeddah';
		$this->data['dt']=date('F d, Y');
		$this->data['tm']=date('H:i A');
		$this->db->insert('submitted_form',$this->data);
		$id =$this->db->insert_id();
		$this->db->where('id',$id)->update('submitted_form',array('cid'=>date('Y-m-').$id));
		
		$config['protocol'] = "mail";
		$config['smtp_host'] = "giowm1128.siteground.biz";
		$config['smtp_port'] = "465";
		$config['smtp_user'] = "thanks@tkweenonline.com"; 
		$config['smtp_pass'] = "Tkweenonline@7A";
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;
		$this->load->library('email');
		$this->email->initialize($config);	
		$this->email->from('thanks@tkweenonline.com','Tkween Online');
		$this->email->to($this->input->post('email'));
		$this->email->reply_to('info@tkweenonline.com','Tkween Online');
		$this->email->subject('Thankyou for submitting your Request');
		$view = $this->load->view('email',array('rec'=>''),true);
		$this->email->message($view);
		$this->email->send();
		
		
		redirect('http://tkweenonline.com/thanks.html');
	}
	
	

    
}
