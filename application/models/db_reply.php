<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Db_reply extends CI_Model{	

	function ambil($id_thread)
	{
		$query = $this->db->query("SELECT * FROM forum_thread where id_thread = '$id_thread'");
		return $query->result();
	}
	function simpan($title,$isi,$id_thread,$id_user)
	{
		$query = $this->db->query("INSERT INTO `pinguin_master`.`forum_reply` (`id_reply`, `isi_reply`, `title_reply`, `id_user`, `id_thread`) 
			VALUES ('', '$isi', '$title', '$id_user', '$id_thread');");
		return $query;
	}
	function tampilReply($id)
	{
		$per = $this->db->query("SELECT forum_reply.*, user.*
				FROM forum_reply
    			JOIN user
      			  ON user.id = forum_reply.id_user
   				where id_thread = '$id'");
		return $per->result();
	}

}