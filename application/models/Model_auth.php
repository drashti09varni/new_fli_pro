<?php 

class Model_auth extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	/* 
		This function checks if the email exists in the database
	*/
	public function check_email($email) 
	{
		if($email) {
			$sql = 'SELECT * FROM users WHERE email = ?';
			$query = $this->db->query($sql, array($email));
			$result = $query->num_rows();
			// print_r($result);die;
			return ($result == 1) ? true : false;
		}

		return false;
	}

	/* 
		This function checks if the email and password matches with the database
	*/
	public function login($email, $password) {
		if($email && $password) {

			$sql="SELECT * FROM users WHERE email='$email' and password='$password'";
			$query = $this->db->query($sql, array($email));

			if($query->num_rows() == 1) {
				$result = $query->row_array();
				return $result;	
			}
			else {
				return false;
			}
		}
	}

	public function sendmail($email) {

		
		$token = md5($email).rand(10,100);
		$message = base_url(). 'auth/changepass/'.$token;

		// $message = "Click to change password : ".$data_link;
		$this->sendToMail($email,$message);

		$data = array('token'=> $token);

				  $this->db->where('email',$email);	
		$insert = $this->db->update('users', $data);
		if($this->db->affected_rows() > 0){
			return true;	
		}else{
			return false;
		}
		
		
	}

	function sendToMail($email,$message)
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
		$body = $this->load->view('mail/forgotpassword', $data ,TRUE);

			
	    $this->load->library('email', $config);
	    $this->email->set_newline("\r\n");
	    $this->email->from(FROM_MAIL); // change it to yours
	    $this->email->to($email);// change it to yours
	    $this->email->subject(FROM_NAME.'- admin forgot password');
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