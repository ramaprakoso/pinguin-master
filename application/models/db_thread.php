<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Db_thread extends CI_Model{	

	function tampil($id)
	{
	$per=$this->db->query("SELECT forum_thread.*, user.*
FROM forum_thread
    JOIN user
        ON user.id = forum_thread.user_id
   where id_thread = '$id'");
	return $per->result();
	}
	function hitungpost($id_user)
	{
		$query = $this->db->query("SELECT * FROM forum_thread where user_id = '$id_user'");
		return $query->result();
	}

}