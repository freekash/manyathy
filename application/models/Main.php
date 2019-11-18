<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Model {

	function intrenship_registration($data)
	{
		$this->db->insert("student_intrenship",$data);
	}
	
	function registered_students()
	{
		$students = $this->db->get("student_intrenship");
		return $students;
	}
	
	function contact_form($data)
	{
		$this->db->insert("contact_form",$data);
	}
	
	function display_contact_form()
	{
		$contact = $this->db->get("contact_form");
		return $contact;
	}
	
	function can_login($useremail,$userpassword)
	{
		$this->db->where('user_email',$useremail);
		$this->db->where('user_pass',$userpassword);
		$query = $this->db->get('manyathy');
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function username($email)
	{
		$this->db->select('user_name');
        //$this->db->from("manyathy");
        $this->db->where("user_email",$email);
        $query=$this->db->get('manyathy');
		foreach ($query->result() as $row)
		{
			return $row->user_name;
		}
	}
	
	function deletestudent($id)
	{
		$this->db->where("id", $id);
        $this->db->delete("student_intrenship");
	}
	
	function deleteform($id)
	{
		$this->db->where("id", $id);
        $this->db->delete("contact_form");
	}
	
	function deleteuser($id)
	{
		$this->db->where("id", $id);
        $this->db->delete("manyathy");
	}
	
	function emailstudent($id)
	{
		$this->db->select('email');
        $this->db->from("student_intrenship");
        $this->db->where("id",$id);
        return $this->db->get();
	}
	
	function emailform($id)
	{
		$this->db->select('email');
        $this->db->from("contact_form");
        $this->db->where("id", $id);
        return $this->db->get();
	}
	
	function get_student_info($id)
	{
		$this->db->select('*');
        $this->db->from("student_intrenship");
        $this->db->where("id",$id);
        return $this->db->get();
	}
	
	function get_user_info($email)
	{
		$this->db->select('*');
        $this->db->from("manyathy");
        $this->db->where("user_email",$email);
        return $this->db->get();
	}
	
	function update($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update("student_intrenship",$data);
	}
	
	function update_user($data,$id)
	{
		$this->db->where('id',$id);
		$this->db->update("manyathy",$data);
	}
	
	function is_email($email)
	{
		$this->db->where('email',$email);
		$query=$this->db->get('student_intrenship');
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function verifymail($email)
	{
		$this->db->where('user_email',$email);
		$query=$this->db->get('manyathy');
		if($query->num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	function registered_users()
	{
		$users = $this->db->get("manyathy");
		return $users;
	}
	
	function add_user($data)
	{
		$this->db->insert("manyathy",$data);
	}
	
	function change_pass($mail,$pass)
	{
		$this->db->where('user_email',$mail);
		$this->db->update("manyathy",$pass);
	}
}
