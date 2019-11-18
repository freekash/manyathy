<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Internship extends CI_Controller {

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
		$this->load->view('home/header');
		$this->load->view('home/internship');
		$this->load->view('home/footer');
	}
	public function form_validation()
	{
		$email=$this->input->post("email");
		$this->load->model('Main');
		if($this->Main->is_email($email))
		{
			redirect(base_url()."internship/emailexists");
		}
		else
		{
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
		$this->Main->intrenship_registration($data);
		$email=$this->input->post("email");
		$this->sendmail($this->input->post("email"));	
		}
		
	}
	
	public function sendmail($to)
	{
		
			$from="internship@manyathy.com";
			$name="Manyathy Business Solutions";
			$subject="Thank You For Registering";
			$body='
<a href="https://manyathy.com">
<div class="container">
<img class="img-fluid" src="https://manyathy.com/assets/img/mbstest.png">
<p>Manyathy Business Solutions</p>
<div class="single-feature-text">
	<h4>Registration Successful</h4>
	<p>Thank You For Registering Internship At Manyathy Business Solutions</p>
	<p>We Provide Internship On The Following Categories</p>
	<u><ol>Web Application Development</ol>
	<ol>Wordpress Plugin Development</ol>
	<ol>Wordpress Theme Development</ol>
	<ol>BlockChain Development</ol>
	<ol>Bootstrap Framework</ol></u>
</div>
</div>
 <div class="con-address">
        <div class="container">
            <div class="row ml-auto">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="single-con-address">
                        <div class="single-con-address-icon">
                        </div>
                        <div class="single-con-address-text">
                            <i class="fa fa-home"></i>
                            <p>Contact Us : <br>Thirthalli<br>Hubli<br>Bangalore<br>Mysore<br>Tumkur</p>
                            
                        </div>
                    </div>
                </div>
                <!-- end col -->
               
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="single-con-address">
                        <div class="single-con-address-icon">
                          
                        </div>
      
                        <div class="single-con-address-text">
                            <i class="fa fa-phone"></i>
                            <p>+91 9886168884</p>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-12">
                    <div class="single-con-address">
                        <div class="single-con-address-icon">
                         
                        </div>
						</a>
                        <div class="single-con-address-text">
                           <i class="fa fa-envelope-o"></i>
                            <p>info@manyathy.com</p>
                            
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!--- END ROW -->
        </div>
        <!--- END CONTAINER -->
    </div>
';
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
				//redirect(base_url()."internship/registered");
			}
			redirect(base_url()."internship/registered");
		
	}
	public function registered()
	{
		echo '<script>alert("Registration Successful")</script>';
		$this->index();
	}
	
	public function emailexists()
	{
		echo '<script>alert("Email Already Exists")</script>';
		$this->index();
	}
	
}
