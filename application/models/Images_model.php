<?php
	class Images_model extends CI_Model {
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		function addRow($data = array())
		{
			$query = $this->db->insert('image',$data);
			return $query;
		}
		
		function getRows($table_name, $table_id)
		{
			$user_login = $this->session->userdata('user_login');
			$this->db->where('user_id',$user_login['id_user']);
			$this->db->where('table_name',$table_name);
			$this->db->where('table_id',$table_id);
			$query  = $this->db->get('image');
			
			return $query->result_array();
			
		}
		function getRow($id = NULL)
		{
			 $this->db->where('id', $id);
			 $query = $this->db->get('image');
			return $query->row_array();
		}
		function createFolder($path = NULL)
		{
			if($path != NULL)
			{
				$path_arr = explode('/', $path);
				$dir = UPLOADPATH ;
				
				foreach($path_arr as $folder)
				{
					$dir .= '/'.$folder;
					if(!is_dir($dir))
					{
						mkdir($dir, 0777);
					}
				}
			}
			return true;
		}
		 function deleteRow($id = NULL)
		 {
			 $this->db->where('id',$id);
			 $query =  $this->db->delete('image');
			 return $query;
		 }
		
		function updateTable_id($table_id,$table_name)
		{
			
			$user_login = $this->session->userdata('user_login');
			$this->db->where('user_id',$user_login['id_user']);
			$this->db->where('table_name',$table_name);
			$this->db->where('table_id',0);
			$this->db->update('image',array('table_id' =>$table_id));
			return true;
		}
		
	}
?>