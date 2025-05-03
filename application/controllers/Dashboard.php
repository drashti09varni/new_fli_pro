<?php 

class Dashboard extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();	
		$this->not_logged_in();	
		$this->data['page_title'] = 'Dashboard';
        $this->load->model('visitormodel', 'vm');
	}

	public function index()
	{
		$username = $_SESSION['admin_login_sess']['username'];
		if($username == 'admin'){
			$this->data['page_title'] = 'Dashboard | Admin & Dashboard';			
			$this->data['total_categories'] = $this->db->select('*')->get('tbl_categories')->num_rows();			
			$this->data['total_products'] = $this->db->select('*')->get('tbl_products')->num_rows();;
			$this->data['categories_list'] = $this->db->select('*')->get('tbl_categories')->result_array();
			$this->data['product_list'] = $this->db->select('*')->get('tbl_products')->result_array();
            
            $site_statics_today = $this->vm->get_site_data_for_today();
            
            $site_statics_last_week = $this->vm->get_site_today_users();
            //$this->data['visits_today'] = isset($site_statics_today['visits']) ? $site_statics_today['visits'] : 0;            
            $this->data['visits_today'] = isset($site_statics_last_week['visits']) ? $site_statics_last_week['visits'] : 0;
            
            //echo '<pre>';
            //print_r($this->vm->get_site_live_data());
            //echo '</pre>';
            //exit;
            
            $this->data['live_users'] = intval($this->vm->get_site_live_data()['visits']);
            
            //$this->data['chart_data_today'] = $this->vm->get_chart_data_for_today();
            //$this->data['chart_data_curr_month'] = $this->vm->get_chart_data_for_month_year();
            
			$this->render_template('dashboard', $this->data);
		}else{
			redirect('auth/login');
		}  
	}
}