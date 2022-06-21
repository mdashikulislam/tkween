<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class admin_work extends CI_Model 
{
	public function login($user_name , $pass)
	{
		$result = array(
						'name'=> $user_name ,
						'pass' => $pass,
						);		
		$record = $this->db->where($result)->get('users')->result_array();
		if(empty($record))
		 {
			 $this->session->set_flashdata('error','<span style="color:red;">Login Failed Try To Enter Correct User Name or Pass</span>');
		 }
		 else
		 {
			 return $record;
		 }
	}
	
	
	public function no_rows($table_name)
	{
		$q = $this->db->get($table_name)->num_rows();
		 return $q;	
	}
	public function get_pag_data($table_name,$limit , $offset,$v,$o)
	{
		$q = $this->db->limit($limit, $offset)->order_by($v,$o)->get($table_name)->result_array();
		 return $q;		
	}
	
	public function peg2($table_name,$data,$limit , $offset)
	{
		$q = $this->db->where($data)->group_by('user_id')->limit($limit, $offset)->order_by('id','desc')->get($table_name)->result_array();
		 return $q;		
	}
	
	public function peg($table_name,$data,$limit , $offset)
	{
		$q = $this->db->where($data)->limit($limit, $offset)->order_by('id','desc')->get($table_name)->result_array();
		 return $q;		
	}
	
	public function insert_rec($table,$data)
	{
		return $this->db->insert($table,$data);
	}
	public function get_by_arry( $table_name, $data)
	{
	   return $this->db->where($data)->get($table_name)->result_array();
	}
	public function get_by_arry_des( $table_name, $data)
	{
	   return $this->db->where($data)->order_by("id","desc")->get($table_name)->result_array();
	}
	public function get_by( $table_name)
	{
	   return $this->db->order_by("id","desc")->get($table_name)->result_array();
	}
	public function change($table_name ,$data, $id )
	{
		$id = array('id' => $id );
		return $this->db->where($id)->update($table_name, $data);
	}
	public function change_to($table_name ,$data, $id )
	{
		return $this->db->where($id)->update($table_name, $data);
	}
	public function delete($table_name , $data)
	{
		return $this->db->where($data)->delete($table_name);	
	}
	public function get_by_limit( $table_name,$limit)
	{
	   return $this->db->limit($limit)->order_by("id","desc")->get($table_name)->result_array();
	}
	public function get_by_arry_limit( $table_name,$data,$limit)
	{
	   return $this->db->where($data)->limit($limit)->order_by("id","desc")->get($table_name)->result_array();
	}
	public function get_by_limit1( $table_name,$limit)
	{
	   return $this->db->limit($limit)->get($table_name)->result_array();
	}
	public function search($table,$feild,$data)
	{
		return $this->db->from($table)->like($feild,$data)->get()->result_array();
	}
	public function report_daily($table_name,$data,$limit , $offset)
	{
		$q = $this->db->or_where($data)->limit($limit, $offset)->order_by("id","desc")->get($table_name)->result_array();
		 return $q;	
	}
	public function monthly_report($table_name,$data,$limit , $offset)
	{
		return $this->db->from($table_name)->or_like($data)->limit($limit, $offset)->order_by("id","desc")->get()->result_array();
	}
	public function two_condition($table_name,$data,$limit , $offset)
	{
		$q = $this->db->or_where($data)->limit($limit, $offset)->order_by("id","desc")->get($table_name)->result_array();
		 return $q;
	}

	

	
}











