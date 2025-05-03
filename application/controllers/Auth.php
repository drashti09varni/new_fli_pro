<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends Admin_Controller 
{

	public function __construct()
	{
		parent::__construct();

		$this->load->model('model_auth');
    	$this->load->model('mdl_common');
	}

	/* 
		Check if the login form is submitted, and validates the user credential
		If not submitted it redirects to the login page
	*/
	public function login()
	{

		$this->logged_in();

		$this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {
            // true case

           	$email_exists = $this->model_auth->check_email($this->input->post('email'));
           	if($email_exists == 1) {

                $pass = $this->mdl_common->ept($this->input->post('password'));
           		$login = $this->model_auth->login($this->input->post('email'), $pass);
           		if($login){ $logged_in_sess = array(
             			'id' => $login['id'],
  				        'username' => $login['username'],
  				        'email' => $login['email'],
  				        'logged_shopper_in' => TRUE
  					);$this->admin_verify();$this->session->set_userdata('admin_login_sess',$logged_in_sess);
  					$this->session->set_flashdata('success',"Login Successfully.");redirect('dashboard', 'refresh');}else {
           			// $this->data['errors'] = 'Incorrect username/password combination';
           			$this->session->set_flashdata('error',"Incorrect username/password combination");
           			$this->load->view('admin/login', $this->data);}
           	}else {
           		$this->session->set_flashdata('error',"Email does not exists");
           		$this->load->view('admin/login', $this->data);
           	}	
        }else {
            // false case
            $this->load->view('admin/login');
        }	
	}

	/*
		clears the session and redirects to login page
	*/
	public function logout()
	{
		 $this->session->unset_userdata('admin_login_sess');  
		redirect('auth/login', 'refresh');
	}

	public function forgotpass()
	{

		$this->form_validation->set_rules('email', 'Email', 'required');

        if ($this->form_validation->run() == TRUE) {

        	$email_exists = $this->model_auth->check_email($this->input->post('email'));
        	if($email_exists == 1) {

        		$formail = $this->model_auth->sendmail($this->input->post('email'));

        		if($formail == true){
        			$response['success'] = true;
                	$response['messages'] = "Successfully Send Email.";

                	redirect('auth/login', 'refresh');
        		}else{
        			
        			$this->data['errors'] = 'Email does not send. Please try again';
           			$this->load->view('forgotpassword', $this->data);

        		}

        	}else{
        		$this->data['errors'] = 'Email does not exists';

           		$this->load->view('forgotpassword', $this->data);
        	}	
			
		}else{
			$this->load->view('forgotpassword');
		}
	}

	public function changepass()
	{	
		$this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == TRUE) {

  	        $token = $this->uri->segment(3);

  	        $password = $this->mdl_common->ept($this->input->post('password'));
  	        $data = array('password'=> $password,'token'=> '');

      	        		  $this->db->where('token',$token);	
      			$insert = $this->db->update('users', $data);
      			if($this->db->affected_rows() > 0){
      		
      	        	redirect('auth/login', 'refresh');	

      			}else{

      				$this->data['errors'] = 'Password does not Change';
      	      $this->load->view('changepassword', $this->data);

      			}

        }else{

          	$this->data['token'] = $this->uri->segment(3);
            
          			 $this->db->select('token');
          			 $this->db->where('token', $this->data['token']);
          	$query = $this->db->get('users');
          	$result = $query->result_array();

          	if($result){
          		$this->load->view('changepassword', $this->data);
          	}else{
          		echo "sorry this link has expired !";
          	}

           	
        }

	}


  // contact
  public function ajax_contact()
  {
    $config = Array(
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => SMTP_USER, // change it to yours
      'smtp_pass' => SMTP_PASS, // change it to yours
      'mailtype' => 'html',
      'charset' => 'iso-8859-1',
      'wordwrap' => TRUE
    );

    $data['site_name'] = FROM_NAME;

    $data['link'] = $message;
    $body = 'msg';

      
    $this->load->library('email', $config);
    $this->email->set_newline("\r\n");
    $this->email->from(FROM_MAIL); // change it to yours
    $this->email->to(TO_MAIL);// change it to yours
    $this->email->subject(FROM_NAME.' - admin forgot password');
    $this->email->message($body);

   
    if($this->email->send())
    {
        return true;
    }
    else
    {
        show_error($this->email->print_debugger());
    } 
  }



}
