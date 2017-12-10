<?php  if (!defined('BASEPATH'))  exit('No direct script access allowed');
class Common_Model extends CI_Model
{
	public $data=array();
	
	function __construct()
	{
		parent::__construct();
	}

	public function getData($tablename='', $where = array(), $field = array(),$order=array(),$limit=array(),$count='0')
	{
		if(!empty($field))
		{
			$this->db->select($field);
		}else{
			$this->db->select('*');
		}
		$this->db->from($tablename);
		if(!empty($where))
		{
			$this->db->where($where);
		}
		if($order)
		{
			$this->db->order_by($order['field'],$order['by']);
		}
		if(isset($limit['limit']) && isset($limit['offset']))
		{
			$this->db->limit($limit['limit'],$limit['offset']);
		}

		if(isset($limit['limit']) && !isset($limit['offset']))
		{
			$this->db->limit($limit['limit']);
		}
		$query = $this->db->get();
		if($count==0){
			$result = $query->result_array();
		}else{
			$result = $query->num_rows();
		}
		if($result)
		{
			return $result;
		}else{
			return false;
		}
	}

	public function getsData($tablename='', $where = array(), $field = array(),$order=array(),$limit=array(),$count='0')
	{
		if(!empty($field))
		{
			$this->db->select($field);
		}else{
			$this->db->select('*');
		}
		$this->db->from($tablename);
		if(!empty($where))
		{
			$this->db->where($where);
		}
		if($order)
		{
			$this->db->order_by($order['field'],$order['by']);
		}
		if(isset($limit['limit']) && isset($limit['offset']))
		{
			$this->db->limit($limit['limit'],$limit['offset']);
		}

		if(isset($limit['limit']) && !isset($limit['offset']))
		{
			$this->db->limit($limit['limit']);
		}
		$query = $this->db->get();
		if($count==0){
			$result = $query->result_array();
		}else{
			$result = $query->num_rows();
		}
		if($result)
		{
			return $result[0];
		}else{
			return false;
		}
	}

	public function updateData($tablename='',$data=array(),$where=array())
	{
		return $this->db->update($tablename, $data, $where);
	}

	function getField($tablename,$post)
	{
		$content = array();
		$result = $this->db->list_fields($tablename);
		foreach($result as $field)
		{
			$data[] = $field;
		}
		foreach ($post as $key => $value) {
			if(in_array($key, $data))
			{
				$content[$key] = $value;
			}
		}
		return $content;
	}

	public function insertData($tablename='',$data=array())
	{
		return $this->db->insert($tablename, $data);
	}

	public function where_in($colname='',$in='')
	{
		if(isset($colname) && isset($in))
		{
		 $this->db->where_in($colname ,$in);
		  return $this;
		}
	}
	public function jsonEncode($data=array())
	{
		header('Content-type:"application/json; charset=utf-8"');
		return json_encode($data);
	}

	public function deletedata($tablename='',$where=''){
		if(!empty($tablename) && !empty($where)):
			$this->db->where($where);
			$this->db->delete($tablename);
		else: return "Invalid Input Provided";
		endif;
	}

	public function sendMail($message='',$email='',$subject='')
	{
		$this->email->from("",'');
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->bcc();
		if($this->email->send())
		{
			return true;
		}else{
			return false;
		}
	}

	public function getDropDowns($dropdowns=array())
	{
		foreach ($dropdowns as $key => $value) {
			$data[$value] = $this->getData($value);
		}
		return $data;
	}
}
?>