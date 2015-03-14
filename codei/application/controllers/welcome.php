<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function ins($data)
	{
		$conn=$this->load->database("default", true);
		$sql=$conn->insert('registered_courses',$data);
	}
	public function index()
	{
		$x=0;
		//echo 'no';
		$conn=$this->load->database("default", true);
		$sql=$conn->select()->from('backup')->get();
		$rows=$sql->result('array');

		$type= array("e"=>"2", "s"=>"1", "sb"=>"1");
		$x=0;
		foreach ($rows as $key => $row) 
		{
			$arr=json_decode($row['regular_courses'], true);
			$ins=array(
					'registered_id'=>$row['roll'],
					'structure_id' =>$row['structure_id'],
					'section'=>$row['sec'],
					'backlog'=>$row['backlog'],
					'registered_on'=>$row['registered_on'],
					'last_modified_on'=>$row['modified_on']
					);
				foreach ($arr as $key1 => $value) 
				{
					$ins['course_id']=$value['cid'];
					$ins['batch']=$value['batch'];
					if($ins['batch']===NULL)
					{
						$ins['batch']=0;
						echo $ins['registered_id'].'<br>';
					}
					$ins['mode']=$type[$value['type']];
					$sql1=$this->ins($ins);
					//print_r($ins);
					//echo "<br>";
					$x++;
				}
				//break;
			
		}
		echo $x;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */