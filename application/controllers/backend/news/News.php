<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	class News extends CI_Controller
	{
		function __construct()
		{
			parent :: __construct();
			$this->user_model->checkLogin();
			$this->load->model('news_model');
			$this->load->library('form_validation');
			$this->load->library('pagination');
			$this->load->model('images_model');
			$this->load->model('logger_model');
			$this->load->library('upload');
			$this->load->library('text_lib');
		}
		
		function index()
		{
			$limit = 2;
			$page = $this->uri->segment(4)>1?$this->uri->segment(4):1;
			$config['base_url'] = base_url('admin/news/page/');
			$config['total_rows'] = $this->news_model->countRows();
			$config['uri_segment']  = 4;
			$config['per_page'] = $limit;
			$config['use_page_numbers'] = TRUE;
			$config['full_tag_open'] = '<div class="pagenav">';
			$config['full_tag_close'] = '</div>';
			$this->pagination->initialize($config);
			$result = $this->news_model->getRows($limit,($page-1)*$limit);
			$data = array('news' => $result);
			
			
			$this->load->view('backend/layout/header');
			$this->load->view('backend/news/index',$data);
			$this->load->view('backend/layout/footer');
		}
		function add()
		{
			$this->form_validation->set_rules('title','Tiêu Đề','required');
			$this->form_validation->set_rules('description','Mô Tả','required');
			$this->form_validation->set_rules('detail','Chi Tiết','required');
			$this->form_validation->set_message('required','%s không được để trống');
			$data = array('error' => '');
			if($this->input->post('submitForm'))
			{
				if($this->form_validation->run() == true)
				{
					$config = array();
					$config['upload_path']   = UPLOADPATH.'/news';
					$config['allowed_types'] = 'jpg|png|gif';
					$config['max_size']      = '5120';//5mb
					$config['encrypt_name']  = true;//Tạo Tên
					$this->upload->initialize($config);
					
					if($_FILES['image']['name'])
					{
						
						if($this->upload->do_upload('image'))
						{
							$data = $this->upload->data();
							
							$user_login = $this->session->userdata('user_login');
							
							$post = array(
								'title' => $this->input->post('title'),
								'url' => $this->text_lib->clean_url($this->input->post('title')),
								'image' => $data['file_name'],
								'raw_name' => $data['raw_name'],
								'file_ext' => $data['file_ext'],
								'description' => $this->input->post('description'),
								'detail' => $this->input->post('detail'),
								'user_id' => $user_login['id_user']
							);
							$id = $this->news_model->addRow($post);
							//Thumb
							$config_thumb = array();
							$config_thumb['image_library'] = 'gd2';
							$config_thumb['source_image'] = UPLOADPATH.'/news/'.$data['file_name'];
							$config_thumb['create_thumb'] = TRUE;
							$config_thumb['maintain_ratio'] = TRUE;
							$config_thumb['width']     = 220;
							$config_thumb['height']   = 180;
							$this->load->library('image_lib', $config_thumb); 
							$this->image_lib->resize();
							if($id)
							{	
								$this->logger_model->addRow('Đã thêm mới tin tức : '.$this->input->post('title'));
								redirect(base_url('admin/news/show/'.$id));
							}
						}
						else
						{
							$data['error'] = $this->upload->display_errors();
						}
					}
					else
					{
						$data['error'] = 'Vui lòng chọn hình dại diện';	
					}
				}
			}
			$data['news'] =  $this->news_model->defaultRow();
			
			$this->load->view('backend/layout/header');
			$this->load->view('backend/news/add',$data);
			$this->load->view('backend/layout/footer');
		}
		function edit($id = NULL)
		{
			$this->form_validation->set_rules('title','Tiêu Đề','required');
			$this->form_validation->set_rules('description','Mô Tả','required');
			$this->form_validation->set_rules('detail','Chi Tiết','required');
			$this->form_validation->set_message('required','%s không được để trống');
			$data = array('error' => '');
			$result = $this->news_model->getRow($id);
			$data['news'] =  $result;
			if(!$result)
			{
				redirect('admin/news');
			}
			if($this->input->post('submitForm'))
			{
				if($this->form_validation->run() == true)
				{
					$config = array();
					$config['upload_path']   = UPLOADPATH.'/news';
					$config['allowed_types'] = 'jpg|png|gif';
					$config['max_size']      = '5120';//5mb
					$config['encrypt_name']  = true;//Tạo Tên
					$this->upload->initialize($config);
					
					if($_FILES['image']['name'])
					{
						if($this->upload->do_upload('image'))
						{
							$data = $this->upload->data();
							$post = array(
								'title' => $this->input->post('title'),
								'url' => $this->text_lib->clean_url($this->input->post('title')),
								'image' => $data['file_name'],
								'raw_name' => $data['raw_name'],
								'file_ext' => $data['file_ext'],
								'description' => $this->input->post('description'),
								'detail' => $this->input->post('detail')
							);
							$result_row = $this->news_model->editRow($id,$post);
							//Thumb
							$config_thumb = array();
							$config_thumb['image_library'] = 'gd2';
							$config_thumb['source_image'] = UPLOADPATH.'/news/'.$data['file_name'];
							$config_thumb['create_thumb'] = TRUE;
							$config_thumb['maintain_ratio'] = TRUE;
							$config_thumb['width']     = 220;
							$config_thumb['height']   = 180;
							$this->load->library('image_lib', $config_thumb); 
							$this->image_lib->resize();
							//print_r(base_url('upload/news/'.$data['news']['image']));exit;
							
							
							if($id)
							{
								
								unlink(UPLOADPATH.'/news/'.$result['image']);
								unlink(UPLOADPATH.'/news/'.$result['raw_name'].'_thumb'.$result['file_ext']);
								//lưu logger
								$this->logger_model->addRow('Đã chỉnh sửa tin tức : '.$this->input->post('title'));
								
								redirect(base_url('admin/news/show/'.$id));
							}
						}
						else
						{
							$data['error'] = $this->upload->display_errors();
						}
					}
					else
					{
						$post = array(
						'title' => $this->input->post('title'),
						'url' => $this->text_lib->clean_url($this->input->post('title')),
						'description' => $this->input->post('description'),
						'detail' => $this->input->post('detail')
						);
						$result_row = $this->news_model->editRow($id,$post);
						if($result_row)
						{
							$this->logger_model->addRow('Đã chỉnh sửa tin tức : '.$this->input->post('title'));
							
							redirect(base_url('admin/news/show/'.$id));
							
						}
					}
					
					
				}
			}
			
			$this->load->view('backend/layout/header');
			$this->load->view('backend/news/edit',$data);
			$this->load->view('backend/layout/footer');
			
			
		}
		
		function delete($id = NULL)
		{
			$result = $this->news_model->getRow($id);
			if(!$result)
			{
				redirect('admin/news');
			}
			$del = $this->news_model->deleteRow($id);
			if($del)
			{
				$this->logger_model->addRow('Đã xóa tin tức : '.$result['title']);
			}
			redirect(base_url('admin/news'));
		}
		
		
		function show($id = NULL)
		{
			$result = $this->news_model->getRow($id);
			if(!$result)
			{
				redirect(base_url('admin/news'));
			}
			$data = array('news' => $this->news_model->convert($result));
			
			$this->load->view('backend/layout/header');
			$this->load->view('backend/news/show',$data);
			$this->load->view('backend/layout/footer');
		}
		function search()
		{
			if($this->input->post('keyword'))
			{
				
				$this->session->set_userdata('keyword_news',$this->input->post('keyword'));
			}
			$limit = 2;
			$page = $this->uri->segment(5)>1?$this->uri->segment(5):1;
			$config['base_url'] = base_url('admin/news/search/page');
			$config['total_rows'] = $this->news_model->countRows($this->session->userdata('keyword_news'));
			$config['uri_segment']  = 5;
			$config['per_page'] = $limit;
			$config['use_page_numbers'] = TRUE;
			$config['full_tag_open'] = '<div class="pagenav">';
			$config['full_tag_close'] = '</div>';
			$this->pagination->initialize($config);
			$result = $this->news_model->getRows($limit,($page-1)*$limit,$this->session->userdata('keyword_news'));
			$data = array('news' => $result);
			
			
			$this->load->view('backend/layout/header');
			$this->load->view('backend/news/index',$data);
			$this->load->view('backend/layout/footer');
		}
		
		
	}
?>