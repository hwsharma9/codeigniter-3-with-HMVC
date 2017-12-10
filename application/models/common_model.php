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
		$this->email->from("contact@globaltenders.com",'Global Tenders');
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($message);
		$this->email->bcc(array('admin@globaltenders.com','contact@globaltenders.com'));
		if($this->email->send())
		{
			return true;
		}else{
			return false;
		}
	}
	public function getMenus()
	{
		$cat = $this->common->getData("category");//,array("show"=>"1")
		$catby = $this->common->getData("category_by");
		$subcat = $this->common->getData("subcategory");
		foreach ($cat as $key => $value) {
			foreach ($subcat as $key1 => $value1) {
				if($value['c_id']==$value1['c_id'])
				{
					foreach ($catby as $key2 => $value2) {
						if($value2['cb_id']==$value1['cb_id'])
						{
							$cat[$key]['subcategory'][$value2['by_name']][] = $value1;
							$cat[$key]['cb'] = "1";
						}
					}
					if($value1['cb_id']==0)
					{
						$cat[$key]['subcategory'][] = $value1;
						$cat[$key]['cb'] = "0";
					}
				}
			}
		}
		return $cat;
	}
	public function getDropDowns($dropdowns=array())
	{
		foreach ($dropdowns as $key => $value) {
			$data[$value] = $this->getData($value);
		}
		return $data;
	}

	public function subscriptionStatus()
	{
		$id=0;
		if($this->userid!="")
		{
			$data = $this->common->getsData("user",array("userid"=>$this->userid),array("account_status"));
			$this->session->set_userdata(array('account_status'=>$data['account_status']));
			$id=$data['account_status'];
			setcookie('account_status',$id, time() + (60*60*24*30),'/','.globaltenders.com');
			setcookie('subscription',$id, time() + (60*60*24*30),'/','.globaltenders.com');
			//setcookie('account_status',$id, time() + (60*60*24*30),'/','www.globaltenders.com');
		}
		//setcookie('subscription',$id);
		return $id;
	}

	public function getUserLoginSubscriptionStatus()
	{
		$array = array();
		if(!$this->is_user_logged_in){
			$array = array("status"=>0,"action"=>base_url("tender-login/sign-up"));
		}else{
			$data = $this->common->getsData("user",array("userid"=>$this->userid),array("account_status","renewal_date","expiry_date"));
			/*if($data['account_status']==0)
			{*/
				$now = strtotime(date("Y:m:d H:i:s"));
				$start = strtotime($data['renewal_date']);
				$end = strtotime($data['expiry_date']);
				if($data['expiry_date']=="0000-00-00 00:00:00")
				{
					$array = array("status"=>1,"action"=>"http://www.globaltenders.com/global-tenders-upgrade.php");
				}else{
					if($start<=$now && $now<=$end)
					{
						$array = array("status"=>2,"action"=>"");
					}else{
						$array = array("status"=>1,"action"=>"http://www.globaltenders.com/global-tenders-upgrade.php");
					}
				}
			/*}else{
				$array = array("status"=>2,"action"=>"");
			}*/
		}
		return $array;
	}

	public function subscriptionTime()
	{
		$data = $this->common->getsData("user",array("userid"=>$this->userid),array("account_status","renewal_date","expiry_date"));
		$now = strtotime(date("Y-m-d H:i:s"));
		$start = strtotime($data['renewal_date']);
		$end = strtotime($data['expiry_date']);
		//echo "<pre>"; print_r($data);echo $now." ".$start." ".$end;die;
		if($data['account_status']==1){
			if($start!="-62170005208" && $end!="-62170005208"){
				if($start<=$now && $now<=$end)
				{
					setcookie('subtime',1, time() + (60*60*24*30),'/','.globaltenders.com');
					//setcookie('subtime',1, time() + (60*60*24*30),'/','www.globaltenders.com');
					return 1;
				}else{
					setcookie('subtime',0, time() + (60*60*24*30),'/','.globaltenders.com');
					//setcookie('subtime',0, time() + (60*60*24*30),'/','www.globaltenders.com');
					//setcookie('subtime',0);
					return 0;
				}
			}else{
				setcookie('subtime',0, time() + (60*60*24*30),'/','.globaltenders.com');
				return 0;
			}
		}else{
			setcookie('subtime',0, time() + (60*60*24*30),'/','.globaltenders.com');
			return 0;
		}
	}

    public function getCount($table,$limit, $start){
        $this->db->limit($limit, $start);
        $query = $this->db->get($table);
        $result = count($query->result());
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        }
        return false;   
    }
}
?>