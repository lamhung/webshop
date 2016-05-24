<?php
	class User_model extends CI_Model {
		public function __construct()
		{
			parent::__construct();
			$this->load->database();
			
		}
		
		function addRow($data = array())
		{
			$query = $this->db->insert('user',$data);
			$result = $this-> db-> insert_id();
			return $result;
		}
		function getRow($id)
		{
			$this->db->where('id',$id);
			$query = $this->db->get('user');
			$result = $query->row_array();
			return $result;
		}
		function countRows($keyword = NULL)
		{
			if($keyword != NULL)
			{
				$this->db->like('fullname',$keyword);
			}
			$this->db->from('user');
			return $this->db->count_all_results();
		}
		
		function getRows($limit,$offset,$keyword = NULL)
		{
			if($keyword != NULL)
			{
				$this->db->like('fullname',$keyword);
			}
			$this->db->limit($limit,$offset);
			$query = $this->db->get('user');
			$result = $query-> result_array();
			return $result;
		}
		function defaultRow()
		{
			return array(
				'id' => NULL,
				'fullname'=>'',
				'username' => '',
				'password' => '',
				'gender' => '',
				'phone' => '',
				'email' => '',
				'birthday' => ''
			);
		}
		function editRow($id= NULL,$post)
		{
			$this->db->where('id',$id);
			$query = $this->db->update('user',$post);
			return $query;
		}
		function deleteRow($id= NULL)
		{
			$this->db->where('id',$id);
			$query = $this->db->delete('user');
			return $query;
		}
		
		function login($username, $password)
		{
			$this->db->where('username',$username);
			$query = $this->db->get('user');
			$user = $query->row_array();
			
			if(!$user)
			{
				return "Tên đăng nhập không tồn tại!";
			}
			else
			{
				if($user['password'] != md5($password))
				{
					return "Mật khẩu không đúng!";
				}
				else
				{
					$session = array(
						'fullname' => $user['fullname'],
						'username' => $user['username'],
						'id_user'  => $user['id']
					);
					
					$this->session->set_userdata('user_login',$session);
					$this->logger_model->addRow('Đã đăng nhập vào hệ thống');
					/*$data = array(
						'user_id' => $user['id'],
						'username' => $username,
						'content' =>  'Đăng nhập vào hệ thống',
						'ip' => $_SERVER['REMOTE_ADDR'],
						'user_agent' => $_SERVER['HTTP_USER_AGENT'],
						'created_at' => time()
					);
					$this->db->insert('logger',$data);*/
					redirect(base_url('admin'));
				}
			}
		}
		
		function checkLogin()
		{
			if(!$this->session->userdata('user_login'))
			{
				redirect(base_url('admin/login'));
			}
			return true;
		}
		function logout()
		{
				$this->session->sess_destroy();
				redirect(base_url('admin/login'));			
		}
	}
?>