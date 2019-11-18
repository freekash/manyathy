<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	
	
	
	public function index()
	{
		
		if($this->session->userdata('useremail') != '')
		{
			
			$this->load->model("Main");
			$students["registered_students"] = $this->Main->registered_students();
			$contact["display_contact_form"] = $this->Main->display_contact_form();
			$this->load->view('admin/header',$contact);
			$this->load->view('admin/home',$students);
			$this->load->view('admin/footer');
			  
		}
		else
		{
			redirect(base_url().'admin/login');
		}
		
		
	}
	
	//login start
	public function login()
	{
		if($this->session->userdata('useremail') != '')
		{
			redirect(base_url().'admin');
		}
		else
		{
		$this->load->view('admin/header');
		$this->load->view('admin/login');
		$this->load->view('admin/footer');	
		}
		
	}
	public function login_validation()
	{
		$this->form_validation->set_rules('useremail', 'Email' , 'required');
		$this->form_validation->set_rules('userpassword', 'Password' , 'required');
		if($this->form_validation->run())
		{
			$salt = "sanath";
			$useremail = $this->input->post('useremail');
			$pass = $this->input->post('userpassword');
			$userpassword = hash("sha256",$pass.$salt);
			$this->load->model("Main");
			$username = $this->Main->username($useremail);
			if($this->Main->can_login($useremail,$userpassword))
			{
				 $session_data = array(
					'useremail' => $useremail,
					 'username' => $username
				);
				$this->session->set_userdata($session_data);
				redirect(base_url().'admin');
			}
			else
			{
				$this->session->set_flashdata('error','Invalid Username Or Password');
				redirect(base_url().'admin/login');
			}
		}
		else
		{
			$this->login();
		}
	}
	
	public function logout()
	{
		$this->session->unset_userdata('useremail','username');
		redirect(base_url().'admin');
	}
	//login end
	
	public function deletestudent($para="")
	{
		if($this->session->userdata('useremail') != '')
		{
			$this->load->model("Main");
			$this->Main->deletestudent($para);
			redirect(base_url().'admin/studentdeleted');
		}
		else
		{
			$this->login();
		}
	}
	
	public function studentdeleted()
	{
		if($this->session->userdata('useremail') != '')
		{
			echo "<script>alert('Student Details Deleted Successfully')</script>";
			$this->index();
		}
		else
		{
			$this->login();
		}
		
	}
	
	public function deleteform($para="")
	{
		if($this->session->userdata('useremail') != '')
		{
			$this->load->model("Main");
			$this->Main->deleteform($para);
			redirect(base_url().'admin/formdeleted');
		}
		else
		{
			$this->login();
		}
	}
	
	public function formdeleted()
	{
		if($this->session->userdata('useremail') != '')
		{
			echo "<script>alert('Contact Form Deleted Successfully')</script>";
			$this->index();
		}
		else
		{
			$this->login();
		}
		
	}
	
	public function sendmailstudent($para="")
	{
		if($this->session->userdata('useremail') != '')
		{
			$this->load->model("Main");
			$mail["email"]=$this->Main->emailstudent($para);
			$this->load->view('admin/header',$mail);
			$this->load->view('admin/sendmail');
			$this->load->view('admin/footer');
		}
		else
		{
			$this->login();
		}
	}
	
	public function sendmailform($para="")
	{
		if($this->session->userdata('useremail') != '')
		{
			$this->load->model("Main");
			$mail["email"]=$this->Main->emailform($para);
			$this->load->view('admin/header',$mail);
			$this->load->view('admin/sendmail');
			$this->load->view('admin/footer');
		}
		else
		{
			$this->login();
		}
	}
	
	public function sendmail()
	{
		if($this->session->userdata('useremail') != '')
		{
			$from=$this->input->post("from");
			$name=$this->input->post("name");
			$to=$this->input->post("to");
			$subject=$this->input->post("subject");
			$body=$this->input->post("body");
			//mail
			$config=array(
			'protocol' => 'smtp',
			'smtp_host' => 'mail.manyathy.com',
			'smtp_port' => '587',
			'smtp_user' => 'internship@manyathy.com',
			'smtp_pass' => 'manyathy@admin',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
			);
			$this->load->library('email',$config);
			$this->email->set_newline("\r\n");
			$this->email->from($from,$name);
			$this->email->to($to);
			$this->email->subject($subject);
			$this->email->message($body);
			if($this->email->send())
			{
				//redirect(base_url().'admin/mailsent');
			}
			redirect(base_url().'admin/mailsent');
			
		}
		else
		{
			$this->login();
		}
	}
	
	public function mailsent()
	{
		if($this->session->userdata('useremail') != '')
		{
			echo "<script>alert('Mail Sent Successfully')</script>";
			$this->index();
		}
		else
		{
			$this->login();
		}
		
	}
	
	public function edit($para="")
	{
		if($this->session->userdata('useremail') != '')
		{
			$this->load->model("Main");
			$student["registered_student"] = $this->Main->get_student_info($para);
			$this->load->view('admin/header',$student);
			$this->load->view('admin/edit_student');
			$this->load->view('admin/footer');
		}
		else
		{
			$this->login();
		}
	}
	
	public function update($para="")
	{
		if($this->session->userdata('useremail') != '')
		{
			$this->load->model("Main");
			$data = array(
		"name" =>$this->input->post("name"),
		"phone" =>$this->input->post("phone"),
		"email" =>$this->input->post("email"),
		"branch" =>$this->input->post("branch"),
		"degree" =>$this->input->post("degree"),
		"college" =>$this->input->post("college"),
		"intrenship" =>$this->input->post("intrenship"),
		"project" =>$this->input->post("project"),
		"area" =>$this->input->post("area"),
		"address" =>$this->input->post("address")
		);
			$this->Main->update($data,$para);
			redirect(base_url().'admin/updated');
			
		}
		else
		{
			$this->login();
		}
	}
	
	public function update_user($para="")
	{
		if($this->session->userdata('useremail') != '')
		{
			$salt="sanath";
			$pass=$this->input->post("password");
			$confirmpass=$this->input->post("confirmpassword");
			if($pass!='')
			{
				if($pass==$confirmpass)
				{
					$this->load->model("Main");
					$data = array(
						"user_name" =>$this->input->post("name"),
						"user_email" =>$this->input->post("email"),
						"user_pass" =>hash("sha256",$pass.$salt)
					);
					$this->Main->update_user($data,$para);
					redirect(base_url().'admin/updated');
				}
				else
				{
					redirect(base_url().'admin/nomatch');
					
				}
			}
			else
			{
				redirect(base_url().'admin/edit_profile');
			}	
		}
		else
		{
			$this->login();
		}
	}
	
	public function nomatch()
	{
		if($this->session->userdata('useremail') != '')
		{
			echo("<script>alert('Password Does Not Match')</script>");
			$this->edit_profile();
		}
		else
		{
			$this->login();
		}
		
	}
	
	public function updated()
	{
		if($this->session->userdata('useremail') != '')
		{
			echo("<script>alert('Updated Successfully')</script>");
			$this->index();
		}
		else
		{
			$this->login();
		}
		
	}
	
	
	
	public function users()
	{
		if($this->session->userdata('useremail') != '')
		{
			$this->load->model("Main");
			$users["registered_users"] = $this->Main->registered_users();
			$this->load->view('admin/header',$users);
			$this->load->view('admin/users');
			$this->load->view('admin/footer');
		}
		else
		{
			$this->login();
		}
		
	}
	
	public function deleteuser($para="")
	{
		if($this->session->userdata('useremail') != '')
		{
			$this->load->model("Main");
			$this->Main->deleteuser($para);
			redirect(base_url().'admin/userdeleted');
		}
		else
		{
			$this->login();
		}
	}
	
	public function userdeleted()
	{
		if($this->session->userdata('useremail') != '')
		{
			echo "<script>alert('User Deleted Successfully')</script>";
			$this->users();
		}
		else
		{
			$this->login();
		}
		
	}
	
	public function add_user()
	{
		if($this->session->userdata('useremail') != '')
		{
			$salt="sanath";
			$pass=$this->input->post("password");
			$confirmpass=$this->input->post("confirmpassword");
			if($pass!='')
			{
				if($pass==$confirmpass)
				{
					$this->load->model("Main");
					$data = array(
					"user_name" =>$this->input->post("name"),
					"user_pass" =>hash("sha256",$pass.$salt),
					"user_email" =>$this->input->post("email")
					);
					$this->Main->add_user($data);
					redirect(base_url().'admin/added');
				}
				else
				{
					redirect(base_url().'admin/doesnotmatch');
					
				}
			}
			else
			{
				redirect(base_url().'admin/users');
			}
			
		}
		else
		{
			$this->login();
		}
		
	}
	
	public function added()
	{
		if($this->session->userdata('useremail') != '')
		{
			echo("<script>alert('New User Added Successfully')</script>");
			$this->users();
		}
		else
		{
			$this->login();
		}
		
	}
	
	public function doesnotmatch()
	{
		if($this->session->userdata('useremail') != '')
		{
			echo("<script>alert('Password Does Not Match')</script>");
			$this->users();
		}
		else
		{
			$this->login();
		}
		
	}
	
	public function edit_profile()
	{
		if($this->session->userdata('useremail') != '')
		{
			$email=$this->session->userdata('useremail');
			$this->load->model("Main");
			$user["registered_user"] = $this->Main->get_user_info($email);
			$this->load->view('admin/header',$user);
			$this->load->view('admin/edit_user');
			$this->load->view('admin/footer');
		}
		else
		{
			$this->login();
		}
		
	}
	
	public function forgot_pass()
	{
		$this->load->view('admin/header');
		$this->load->view('admin/forgot_pass');
		$this->load->view('admin/footer');
	}
	
	public function otp()
	{
		//verify mail and allow
		$mail=$this->input->post('email');
		$this->load->model('Main');
		$can=$this->Main->verifymail($mail);
		if($can)
		{
			$otp=rand(10000,100000);
			$session_data = array(
					 'otp' => $otp,
					'mail'=> $mail
				);
			$this->session->set_userdata($session_data);
			$this->mail_otp($mail,$otp);
			redirect(base_url().'admin/enter_otp');
		}
		else
		{
			redirect(base_url().'admin/nouser');
		}
	}
	
	public function mail_otp($mail,$otp)
	{
		if($this->session->userdata('otp') != '')
		{
			$from="internship@manyathy.com";
			$name="Password Reset";
			$to=$mail;
			$subject="Otp For Changing Password";
			$body="Your Otp For Restting Password Is : ".$otp;
			//mail
			$config=array(
			'protocol' => 'smtp',
			'smtp_host' => 'mail.manyathy.com',
			'smtp_port' => '587',
			'smtp_user' => 'internship@manyathy.com',
			'smtp_pass' => 'manyathy@admin',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
			);
			$this->load->library('email',$config);
			$this->email->set_newline("\r\n");
			$this->email->from($from,$name);
			$this->email->to($to);
			$this->email->subject($subject);
			$this->email->message($body);
			if($this->email->send())
			{
				//
			}
		}
		else
		{
			$this->login();
		}
	}
	
	public function enter_otp()
	{
		if($this->session->userdata('otp') != '')
		{
			
			echo("<script>alert('Otp Sent To Mail')</script>");
			$this->load->view('admin/header');
			$this->load->view('admin/enter_otp');
			$this->load->view('admin/footer');
		}
		else
		{
			$this->login();
		}
		
	}
	
	public function nouser()
	{
		echo("<script>alert('Email Does Not Exist')</script>");
		$this->login();
	}
	
	public function reset_pass()
	{
		if($this->session->userdata('otp') != '')
		{
			$entered_otp=$this->input->post('otp');
			$otp=$this->session->userdata('otp');
			if($entered_otp==$otp)
			{
				$session_data = array(
					 'otp' => 1
				);
				$this->session->set_userdata($session_data);
				$this->load->view('admin/header');
				$this->load->view('admin/reset_pass');
				$this->load->view('admin/footer');
			}
			else
			{
				echo("<script>alert('Otp Does Not Match')</script>");
				$this->enter_otp();
			}
		}
		else
		{
			$this->login();
		}
	}
	
	public function change_pass()
	{
		if($this->session->userdata('otp') == 1)
		{
			$pass=$this->input->post('password');
			$confirmpass=$this->input->post('confirmpassword');
			if($pass==$confirmpass)
			{
				$salt="sanath";
				$password=array(
				'user_pass'=>hash("sha256",$pass.$salt)
				);
				$mail=$this->session->userdata('mail');
				$this->load->model('Main');
				$this->Main->change_pass($mail,$password);
				echo("<script>alert('Password Changed Successfully')</script>");
				$this->session->unset_userdata('otp','mail');
				$this->login();
			}
			else
			{
				echo("<script>alert('Password Does Not Match. Try Again')</script>");
				$this->forgot_pass();
			}
			
		}
		else
		{
			$this->login();
		}
	}
	
}
		
