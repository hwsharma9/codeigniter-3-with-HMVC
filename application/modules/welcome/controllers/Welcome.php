<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('directory');
		$this->candidates = $this->db->query("select cvname,candidateid from candidate_cv")->result_array();
	}

	private function testPrivate()
	{
		echo "string";die;
	}

	public function index()
	{
		echo "<pre>";
		/*print_r ($this->candidates);
		echo "</pre>";
		die;
		echo "<pre>";*/
		$data = $this->db->query("select cvname,candidateid from candidate_cv")->result_array();
		foreach ($data as $key => $value) {

			$file_path = "assets/candidates-cvs/".$value['candidateid'];//."/".$value['cvname'];
			echo $file_path."<br>";
			if(!is_dir($file_path)){
				mkdir($file_path,0777);
			}
			//$this->common->updateData("attachments",array("candidate_cv"=>$file_path),array("cancvid"=>$value['cancvid']));
		}
		//print_r($data);
		die;
	}

	public function updateCountry()
	{
		echo "<pre>";
		$c = $this->common->getData("countries",array(),array("id","name"));
		$i = $this->common->getData("industries",array(),array("id","name"));
		$country = array_column($c, "name","id");
		$industries = array_column($i, "name","id");
		$contacts = $this->common->getData("contacts");
		foreach ($contacts as $key => $value) {
			if($value['country']!=""){
				if(array_key_exists($value['country'], $country)){
					//print_r($value);
					echo $country[$value['country']]."<br>";
					//$this->common->updateData("contacts",array("country"=>$country[$value['country']]),array("canid"=>$value['canid']));
				}
			}

			if($value['industry_id']!=""){
				if(array_key_exists($value['industry_id'], $industries)){
					echo $industries[$value['industry_id']]."<br>";
					//$this->common->updateData("contacts",array("industry"=>$industries[$value['industry_id']]),array("canid"=>$value['canid']));
				}
			}
		}
	}

	public function scanDirectory($path='./assets/attachments/000/034/')
	{
        echo "<pre>";
        $map = directory_map($path);
        $candidates = array_column($this->candidates, "cvname","candidateid");
        $c=0;
        if($map){
        	foreach ($map as $key => $value) {
        		$c++;
        		if(is_array($value)){
        			$p = str_replace('\\', "/", $path.$key);
        			echo $p."<br>";
        			$this->scanDirectory($p);
        		}else{
        			$p = str_replace('\\', "/", $path);
        			echo $p.$value."<br>";
        			$np = str_replace("/0/", "/", $p."/".$value);
        			if(false !== $k = array_search($value, $candidates)){
        				echo $k." equal <br>";
        				echo "assets/candidates-cvs/".$k."/".$value."<br>";
        				copy($np,"assets/candidates-cvs/".$k."/".$value);
        			}
			        /*foreach ($this->candidates as $key1 => $value1) {
			        	if($value1['cvname']!=""){
				        	echo $value."==".$value1['cvname']."<br>";
				        	if($value==$value1['cvname']){
				        		//if(!is_dir("assets/candidates-cvs/".$value1['candidateid'])){
				        		//	mkdir("assets/candidates-cvs/".$value1['candidateid'],0777);
				        		//}
				        		//echo "assets/candidates-cvs/".$value1['candidateid']."/".$value."<br>";
				        		//copy($np,"assets/candidates-cvs/".$value1['candidateid']."/".$value);
				        		break;
				        	}
			        	}
			        }*/
        		}
        	}
        }
        //print_r($map);die;
	}

	public function updateQuestions()
	{
		echo "<pre>";
		$answers = $this->common->getData("answers");
		$questions = array();
		foreach ($answers as $key => $value) {
			$questions[$value['contact_id']]['candidateid'] = $value['contact_id'];
			if($value['question_id']==1){
				$questions[$value['contact_id']]['question3'] = $value['value'];
			}
			if($value['question_id']==2){
				$questions[$value['contact_id']]['question4'] = $value['value'];
			}
			if($value['question_id']==3){
				$questions[$value['contact_id']]['question5'] = ($value['value']=="true")?1:0;
			}
			if($value['question_id']==4){
				$questions[$value['contact_id']]['question6'] = $value['value'];
			}
			if($value['question_id']==5){
				$questions[$value['contact_id']]['question7'] = $value['value'];
			}
			if($value['question_id']==6){
				$questions[$value['contact_id']]['question8'] = $value['value'];
			}
			if($value['question_id']==7){
				$questions[$value['contact_id']]['question9'] = $value['value'];
			}
			if($value['question_id']==8){
				$questions[$value['contact_id']]['question10'] = $value['value'];
			}
			if($value['question_id']==9){
				$questions[$value['contact_id']]['question11'] = $value['value'];
			}
			if($value['question_id']==10){
				$questions[$value['contact_id']]['question12'] = $value['value'];
			}
			if($value['question_id']==11){
				$questions[$value['contact_id']]['question13'] = $value['value'];
			}
			if($value['question_id']==13){
				$questions[$value['contact_id']]['question14'] = $value['value'];
			}
			if($value['question_id']==14){
				$questions[$value['contact_id']]['question1'] = $value['value'];
			}
			if($value['question_id']==15){
				$questions[$value['contact_id']]['question2'] = $value['value'];
			}
		}
		//print_r($questions);die;
		foreach ($questions as $key => $value) {
			print_r($value);
			//$this->common->insertData("candidate_questions",$value);
		}die;
	}
}
