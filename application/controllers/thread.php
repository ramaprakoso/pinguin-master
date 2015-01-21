<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thread extends CI_Controller{
	function __construct(){
		parent::__construct(); 
			$this->load->library(array('form_validation','session','template'));
			$this->load->model('loginModel');
			$this->load->model('db_forum');	
			$this->load->model('db_thread');	
			$this->load->model('db_reply');	
		}
	function detail($id)
	{

		$data['thread'] = $this->db_thread->tampil($id);
		$data['reply'] = $this->db_reply->tampilReply($id);
		$thread = $this->db_thread->tampil($id);
		foreach ($thread as $key) {
			$id_user = $key->user_id;
		
		$data['hitung'] = count($this->db_thread->hitungpost($id_user));
		}
		$this->template->display('user/tampil_thread',$data);

	}


}