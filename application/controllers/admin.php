<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library(array('form_validation','session'));
			$this->load->model('db_admin'); 		
	}	

	function index(){
		//if($this->session->userdata('level')=='admin'){
		$this->load->view('admin/header'); 
		$this->load->view('admin/side_menu');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer'); 
		/*
		}else{
			redirect('dashboard');
		}
		*/
	}
	function m_forum(){
		$data['get']=$this->db_admin->m_forum(); 
		$this->load->view('admin/header'); 
		$this->load->view('admin/side_menu');
		$this->load->view('admin/m_forum',$data);
		$this->load->view('admin/footer'); 		
	}
	function add_forum(){
		//form 
		$this->load->view('admin/header'); 
		$this->load->view('admin/side_menu');
		$this->load->view('admin/add_forum');
		$this->load->view('admin/footer'); 	
	}
	function add_forum_action(){
		$name=$this->input->post('forum_name'); 
		$insert=$this->db_admin->add_forum($name); 
			redirect('admin/m_forum'); 
	}
	function add_category(){
		$data['getforum']=$this->db_admin->getforum(); 
		$this->load->view('admin/header'); 
		$this->load->view('admin/side_menu');
		$this->load->view('admin/add_category',$data);
		$this->load->view('admin/footer'); 	
	}
	function add_sub(){
		$data['getforum']=$this->db_admin->getforum(); 
		$data['getcategory']=$this->db_admin->getcategory(); 	
		$this->load->view('admin/header');
		$this->load->view('admin/side_menu');
		$this->load->view('admin/add_sub',$data);
		$this->load->view('admin/footer'); 	 
	}
	function add_category_action(){
		$data=array(
				'id_category' => NULL,
				'category_desc' => $this->input->post('category'), 
				'forum_id' => $this->input->post('parent')
			); 
		$this->db_admin->add_category_forum($data); 
		redirect('admin/m_forum'); 
	}
	function edit_forum(){

	}
	function get_forum(){
		$data['getforum']=$this->db_forum->getforum(); 
	}	
	function get_category(){
		$data['getcategory']=$this->db_forum->getcategory(); 
	}
	function m_permis(){
	/*
		$this->load->view('admin/header'); 
		$this->load->view('admin/side_menu');
		$this->load->view('admin/m_permis');
		$this->load->view('admin/footer'); 	
	*/
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
