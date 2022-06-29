<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends CI_Controller 
{
	public $data = array();

	public function signup()
	{
		$this->load->view('header');
		$this->load->view('signup');
		$this->load->view('footer');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function authorguide()
	{
		$this->load->view('authorguid');
	}

    public function mails()
    {
        $this->load->view('mails/recovery');
    }
	public function email($to,$sub,$msg,$template = '')
	{
//        $config['useragent'] = 'WonderHouse';
//        $config['protocol'] = "mail";
//        $config['smtp_host'] = 'wonderhouse.com.sa';
//        $config['smtp_port'] = '465';
//        $config['smtp_timeout']=30;
//        $config['smtp_user'] = 'noreply@wonderhouse.com.sa';
//        $config['smtp_pass'] = 'b@cdp]:583*f';
//        $config['charset'] = "utf-8";
//        $config['mailtype'] = "html";
//        $config['newline'] = "\r\n";
//        $config['wordwrap'] = TRUE;
//        $this->load->library('email');
//        $this->email->initialize($config);
//        $this->email->to($to);
//        $this->email->from('noreply@wonderhouse.com.sa','WonderHouse');
//        $this->email->subject($sub);
//        $this->email->message($msg);
//        $this->email->send();


        $config['useragent'] = 'WonderHouse';
		$config['protocol'] = "smtp";
		$config['smtp_host'] = 'ssl://mail.shrewsburycup-appadmin.co.uk';
		$config['smtp_port'] = '465';
        $config['smtp_timeout']=30;
		$config['smtp_user'] = 'admin@shrewsburycup-appadmin.co.uk';
		$config['smtp_pass'] = 'Sumon11224411';
		$config['charset'] = "utf-8";
		$config['mailtype'] = "html";
		$config['newline'] = "\r\n";
		$config['wordwrap'] = TRUE;
		$this->load->library('email');
		$this->email->initialize($config);
		$this->email->to($to);
		$this->email->from('admin@shrewsburycup-appadmin.co.uk','WonderHouse');
		$this->email->subject($sub);
        if ($template == 'verification'){
            $view = $this->load->view('mails/verification',$msg,true);
            $this->email->message($view);
        }elseif ($template == 'recovery'){
            $view = $this->load->view('mails/recovery',$msg,true);
            $this->email->message($view);
        }else{
            $this->email->message($msg);
        }
		$this->email->send();
		
	}
	public function send_msg()
	{
		$this->data['name']= $this->input->post('name');
		$this->data['email']= $this->input->post('email');
		$this->data['sub']= $this->input->post('sub');
		$this->data['msg']= $this->input->post('msg');
		$this->data['dt']= date('Y-m-d');
		$this->data['tm']= date('H:i a');
		$this->db->insert('msgs',$this->data);
		redirect(base_url(''));	
		
	}
	public function login()
	{
		$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function login_process()
	{
		$rec = $this->db->where(array('email'=>$this->input->post('email'),'pass'=>$this->input->post('pass')))->get('users')->result_array();
		if(count($rec))
		{
			if($rec[0]['level']=='user')
			{
				if($rec[0]['status']==1)
				{

                    $mailData['name'] = $rec[0]['name'];
                    $mailData['url'] = base_url().'verification/'.$rec[0]['code'];
					$this->email($rec[0]['email'],'Thank you for creating account.',$mailData,'verification');
					$this->session->set_flashdata('report','Account not activated. Please verify your email address');
					redirect(base_url('login'));		
				}
				else
				{
					$this->session->set_userdata('id',$rec[0]['id']);
					$this->session->set_userdata('level',$rec[0]['level']);
					redirect(base_url('user'));		
				}
			}
			else
			{
				$this->session->set_userdata('id',$rec[0]['id']);
				$this->session->set_userdata('level',$rec[0]['level']);
				redirect(base_url('dashboard'));	
			}
		}
		else
		{
			$this->session->set_flashdata('report','Email / Password may be wrong');
			redirect(base_url('login'));	
		}
	}
	public function signup_process()
	{
		$rec = $this->db->where(array('email'=>$this->input->post('email')))->get('users')->result_array();
		if(count($rec))
		{
			$this->session->set_userdata('id',$rec[0]['id']);
			$this->session->set_userdata('level',$rec[0]['level']);
			if($rec[0]['level']=='user')
			{
				redirect(base_url('user'));	
			}
			else
			{
				redirect(base_url('dashboard'));	
			}
			
		}
		else
		{
			$code = md5($this->input->post('email'));
			$this->data['name']= $this->input->post('name');
			$this->data['email']= $this->input->post('email');
			$this->data['pass']= $this->input->post('pass');
			$this->data['dt']=date('Y-m-d');
			$this->data['level']='user';
			$this->data['status']=1;
			$this->db->insert('users',$this->data);
			$id = $this->db->insert_id();
						
			$this->db->where('id',$id)->update('users',array('code'=>$code.$id));
			
			$code = $code.$id;
            $mailData['name'] = $this->input->post('name');
            $mailData['url'] = base_url().'verification/'.$code;
			$this->email($this->input->post('email'),'Thank you for creating account.',$mailData,'verification');
			$this->session->set_flashdata('success','Registered Successfully.An email is sent to your email address, Please verify your email to activate your account.');
			redirect(base_url('login'));	
		}
	}
	public function verification_account()
	{
		$rec = $this->db->where('code',$this->uri->segment(2))->get('users')->result_array();
		if(count($rec))
		{
			$this->db->where('id',$rec[0]['id'])->update('users',array('status'=>0));
			
			$this->session->set_flashdata('success','Account activated successfully. Please login to continue');
			redirect(base_url('login'));	
		}
		else
		{
			$this->session->set_flashdata('report','Verification Fail. Try again.');
			redirect(base_url('login'));	
		}
	}
	public function forgot_pass()
	{
		$this->load->view('header');
		$this->load->view('forgot_pass');
		$this->load->view('footer');
	}
	public function forgot_pass_processing()
	{
		$rec = $this->db->where('email',$this->input->post('email'))->get('users')->result_array();
		if(count($rec))
		{
            $mailData['name'] =$rec[0]['name'];
            $mailData['email'] =$rec[0]['email'];
            $mailData['pass'] =$rec[0]['pass'];
            $this->email($rec[0]['email'],'Password Recovery',$mailData,'recovery');
			$this->session->set_flashdata('success','Your Password Recovery Information has been sent to your given email address.');
			redirect(base_url('forgot-password'));	
		}
		else
		{
			$this->session->set_flashdata('report','Email not found. Try Again');
			redirect(base_url('forgot-password'));	
		}
	}
	
	
	
	
    
}
