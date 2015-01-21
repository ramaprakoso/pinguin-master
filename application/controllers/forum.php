<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Forum extends CI_Controller{
	function __construct(){
		parent::__construct(); 
			$this->load->library(array('form_validation','session','template'));
			$this->load->model('loginModel');
			$this->load->model('db_forum');		
	}

	function index(){
		$session = $this->session->userdata('isLogin');
		$data['topic'] = $this->db_forum->topic();
		$data['category'] = $this->db_forum->get_category();
		$data['forum'] = $this->db_forum->m_forum(); 
		if($session==FALSE){
			
			$this->template->display('user/index',$data);
			
		} 
		else{
			$data['session'] = $this->session->userdata('isLogin');
			$username = $this->session->userdata('username');
			$data['user'] = $this->db_forum->get_user($username);
			$data['topic'] = $this->db_forum->topic();
			$data['category'] = $this->db_forum->get_category();
				$data['forum'] = $this->db_forum->m_forum(); 
			
			$this->template->display('user/index',$data);
		
		}
	}
	function write_thread(){
		$session = $this->session->userdata('isLogin');
		if($session==FALSE){
			redirect('dashboard/signin'); 
		}
		else{
			$cap = $this->buat_captcha();
			$data['cap_img'] = $cap['image'];
			$this->session->set_userdata('kode_captcha',$cap['word']);	
			$data['cat']=$this->db_forum->select_category(); 
			
			$this->template->display('user/form_thread',$data);
		}
	}
	function buat_captcha()
	{
		$vals = array(
		'img_path' => './captcha/',
		'img_url' => base_url().'captcha/',
		'font_path' => './font/timesbd.ttf',
		'img_width' => '200',
		'img_height' => 60,
		'expiration' => 90
		);
		$cap = create_captcha($vals);
		return $cap;
	}
	function cek_captcha($input)
	{
		if ($input === $this->session->userdata('kode_captcha')) {
			return TRUE;
		}else
		{
			$this->form_validation->set_message('cek_captcha','%s yang anda input salah');
			return FALSE;
		}
	}
	//input thread
	function posting(){
		$session=$this->session->userdata('isLogin');
		if($session=FALSE){
			redirect('dashboard/signin'); 
		} 
		else{

			$this->form_validation->set_rules('kode_captcha','kode_captcha','required|callback_cek_captcha');
			$this->form_validation->set_rules('title','title','required');
			$this->form_validation->set_rules('thread','thread','required');

		
			$this->form_validation->set_error_delimiters('<div class="alert alert-danger" role="alert">','</div>');

			if ($this->form_validation->run() == FALSE) {
				$cap = $this->buat_captcha();
				$data['cap_img'] = $cap['image'];
				$this->session->set_userdata('kode_captcha',$cap['word']);
				$data['cat']=$this->db_forum->select_category(); 
		
				
				$this->template->display('user/form_thread',$data);
			}else{



			$author=$this->session->userdata('user_id'); 
			$subforum=$this->input->post('forum'); 
			$judul=$this->input->post('title');
			$thread=$this->input->post('thread'); 
			$date= date("Y-m-d H:i:s");

			$cek = $this->db_forum->cekSub($subforum);

			foreach ($cek as $key) {
				$kategori = $key->id_kategori;
				$forum = $key->id_forum;
			
			}
			$data = array(
				
				'thread_title' => $judul,
				'thread_desc' => $thread,
				'thread_date' => $date,
				'sub_id' => $subforum,
				'forum_id' => $forum,
				'category_id' => $kategori,
				'user_id' => $author
				);

					$this->db_forum->createThread('forum_thread',$data);
					
					$notif = "<div class='alert alert-success'>DaThread berhasil dibuat</div>";
					$this->session->unset_userdata('kode_captcha');
					$this->session->set_userdata('user_id',$author);
					$this->session->set_flashdata('pesan',$notif);
				
					redirect('forum/post'); 
				//end posting controller
			}
		}

		}
		
		function post(){
				$session=$this->session->userdata('isLogin');
				if($session=FALSE){
					redirect('dashboard/signin'); 
				} 
				$id = $this->session->userdata('user_id');
				
				$data['newthread'] = $this->db_forum->tampil_thread($id);
				$this->template->display('user/posting',$data);   
			
				
			}
			function get_category($id){
				$data['get']=$this->db_forum->get_detail($id); 
				$this->load->view('main/header');
				$this->load->view('user/write_thread');
				$this->load->view('user/category',$data);
				$this->load->view('main/footer');
			}
			function get_sub($id){
				$data['get']=$this->db_forum->get_sub($id); 
				$this->load->view('main/header');
				$this->load->view('user/write_thread');
				$this->load->view('user/sub',$data);
				$this->load->view('main/footer');	
			}
			function get_thread($id){
				$data['thread'] = $this->db_forum->get_thread($id);
				$this->load->view('main/header');
				$this->load->view('user/thread',$data);
				$this->load->view('main/footer');
			}
			function detail_thread($id){
				$data['get']=$this->db_forum->detail_thread($id);
				$this->load->view('main/header');
				$this->load->view('user/write_thread');
				$this->load->view('user/detail_thread',$data);
				$this->load->view('main/footer');
			}
}
	
