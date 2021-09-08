<?php
class MainModel extends CI_Model{

public function add_user($data)
   {

	$query=$this->db->insert('accounts',$data);

    $id = $this->db->insert_id();
    $q = $this->db->get_where('accounts', array('id' => $id));
    
    return $q->row()->id;
}

public function verify_email($email)
   {
	$this->db->where('email', $email);
	$query=$this->db->get('accounts');
	if($query->num_rows() > 0){
		return $query->row();
	}else{

		return false;
	}
}

public function verify($email,$password)
   {
	$this->db->where('email', $email);
	$this->db->where('password', $password);
	$query=$this->db->get('accounts');

	if($query->num_rows() > 0){

		return $query->row()->id;
	}else{

		return false;
	}
}
   

}