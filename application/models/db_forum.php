<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Db_forum extends CI_Model{	
	function topic(){
		return $this->db->query("select*from category order by id_cat asc")->result();
	}
	/*
	function get_user_by_id(){
		return $this->db->query("select "); 
	}
*/
	function get_category(){
		return $this->db->query("select deskripsi,MAX(comment.time)as waktu_terakhir,username,count(thread.id_thread) as total_thread, COUNT(id_comment) as total_comment,category.id_cat,category from category left join thread on category.id_cat=thread.id_cat left join comment on comment.id_thread=thread.id_thread left join user on comment.id=user.id group by category.id_cat")->result();
	}
	function insert_user($data){
		$this->db->insert('user',$data);
	}

	function cek_username($username){
		return $this->db->query("select username from user where username='$username'")->num_rows();
	}

	function get_user($username){
		return $this->db->query("select*from user join user_level on user.level=user_level.id_level where username='$username'")->row();
	}
	function select_category(){
		return $this->db->query("select*from category")->result(); 
	}
	function insert_thread($author,$subforum,$kategori,$forum,$judul,$thread,$date){
		return $this->db->query("INSERT INTO `pinguin_master`.`forum_thread` (`id_thread`, `thread_title`, `thread_desc`, `thread_date`, `sub_id`, `forum_id`, `category_id`, `user_id`) 
			VALUES ('', '$judul', '$thread', '$date', '$subforum', '$forum', '$kategori', '$author');"); 
	}

	function createThread($table,$data){
		$this->db->insert($table,$data);
	}

	function cekSub($subforum)
	{
		$hasil = $this->db->query("SELECT*FROM forum_sub WHERE id_sub = '$subforum'");
		return $hasil->result();
	}



	function tampil_thread($id){
		$per = $this->db->query("SELECT forum_thread.*, user.*
				FROM forum_thread
    			JOIN user
      			  ON user.id = forum_thread.user_id
   				WHERE user_id = '$id'");
		return $per->result();
	}

	/* new development 
		Started : 03/12/2014
		Author : Ramadhan WP 
	*/ 
		//INSERT 
		function add_forum($name){
			$this->db->query("INSERT INTO `forum`(`id_forum`,`forum_name`) VALUES (NULL,'$name')"); 
		}
		function add_category_forum($data){
			$this->db->insert('forum_category',$data);
		}
		//SELECT 
		function category_forum(){
			return $this->db->query("SELECT * FROM `forum_category` ORDER BY id_category")->result(); 
		}
		function get_forum(){
			return $this->db->query("SELECT * FROM `forum` ORDER BY id_forum")->result(); 
		}
		function m_forum(){
			return $this->db->query("SELECT forum.id_forum,forum.forum_name,forum_category.category_desc,forum_category.forum_id FROM forum JOIN forum_category ON forum.id_forum=forum_category.forum_id")->result(); 
		}
		function get_detail($id){
			return $this->db->query("SELECT forum.id_forum, forum_category.id_category, forum_category.category_desc,forum_thread.id_thread,forum_thread.thread_title, forum_thread.forum_id, forum_thread.category_id
				FROM forum_thread
				JOIN forum ON forum_thread.forum_id = forum.id_forum
				JOIN forum_category ON forum_thread.category_id = forum_category.id_category WHERE forum.id_forum='$id'")->result(); 
		}
		function get_sub($id){
			return $this->db->query("SELECT user.id,user.username,forum_thread.user_id,forum_category.id_category,forum_category.forum_id,forum_sub.id_sub,forum_sub.subforum,forum_sub.id_kate,forum_thread.id_thread,forum_thread.thread_title FROM forum_sub 
			 INNER JOIN forum_thread ON forum_thread.id_thread=forum_sub.thread_id
			 INNER JOIN forum_category ON forum_category.id_category=forum_sub.id_kate	
			 INNER JOIN user ON forum_thread.user_id=user.id
			 WHERE id_kate='$id'")->result(); 
		}
		function get_thread($id){
			return $this->db->query("SELECT id_thread,thread_title FROM forum_thread WHERE sub_id='$id'")->result();
		}
		function detail_thread($id){
			return $this->db->query("SELECT user.username,forum_category.category_desc,forum_sub.subforum,forum.forum_name,forum_thread.thread_desc,forum_thread.thread_date FROM forum_thread
				INNER JOIN user ON forum_thread.user_id=user.id
				INNER JOIN forum_category ON forum_thread.category_id=forum_category.id_category
				INNER JOIN forum_sub ON forum_thread.sub_id=forum_sub.id_sub
				INNER JOIN forum ON forum_thread.forum_id=forum.id_forum
				WHERE id_thread='$id'"); 
		}
		function ambilForumm()
	{
		$forum = $this->db->query("SELECT*FROM forum");

		return $forum->result();
	}
	function ambilKat($id_forum)
	{
		$kat = $this->db->query("SELECT*FROM forum_category WHERE forum_id = '$id_forum'");
		return $kat->result();
	}
	function ambilSub($id_for,$id_kategori)
	{
		$subfrm = $this->db->query("SELECT*FROM forum_sub WHERE id_kategori = '$id_kategori' AND id_forum = '$id_for'");
		return $subfrm->result();
	}

	

}
?>