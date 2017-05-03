<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 /**
 * 
 */
 class Insert_Model extends CI_Model
 {
 	
 	
 	 function insert()
	{
		$password = $this->input->post('password');
		$object = array(
				'nama' => $this->input->post('nama'), 
				'alamat' => $this->input->post('alamat'),
				'email' => $this->input->post('email'),  
				'username' => $this->input->post('username'), 
				'password' => md5($password), 
				);
		$this->db->insert('user', $object);
		//$this->db->insert('user', $data);
	}
	

 }

 ?>