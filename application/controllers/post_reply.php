<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_reply extends CI_Controller{
	function __construct(){
		parent::__construct(); 
			$this->load->library(array('form_validation','session','template'));
			$this->load->model('loginModel');
			$this->load->model('db_forum');	
			$this->load->model('db_reply');		
	}
	function reply($id_thread)
	{
			$session = $this->session->userdata('isLogin');
		if($session==FALSE){
			redirect('dashboard/signin'); 
		}
		else{
		$data['trit'] = $this->db_reply->ambil($id_thread);
		$cap = $this->buat_captcha();
			$data['cap_img'] = $cap['image'];
			$this->session->set_userdata('kode_captcha',$cap['word']);
		$this->template->display('user/post_reply',$data);
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
	function post($id_thread)
	{
		$session = $this->session->userdata('isLogin');
		if($session==FALSE){
			redirect('dashboard/signin'); 
		}
		else{
			$id_user = $this->session->userdata('user_id');
			$title = $this->input->post('title');
			$isi = $this->input->post('isi');
			$this->db_reply->simpan($title,$isi,$id_thread,$id_user);

			redirect('thread/detail/'.$id_thread);

		}	
	}
	

}