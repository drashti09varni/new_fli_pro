<?php 

class Home extends Web_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('mdl_common');
		$this->data['web_settings'] = $this->db->select('*')->from('web_settings')->where('id',1)->get()->row_array();
	}	
	public function index()
	{	$this->data['site_name'] = $this->data['web_settings']['site_name'];
		$this->data['title'] = $this->data['web_settings']['meta_title'];
        $this->data['keywords'] = $this->data['web_settings']['meta_keyword'];
        $this->data['description'] = $this->data['web_settings']['meta_description'];
        $this->data['slider1'] = $this->data['web_settings']['slider1'];
        $this->data['slider2'] = $this->data['web_settings']['slider2'];
        $this->data['slider3'] = $this->data['web_settings']['slider3'];
        $this->data['logo'] = $this->data['web_settings']['logo'];

        $this->data['images'] = $this->db->select('id,image,name')->get('tbl_categories')->result_array();

        // echo "<pre>";
        // print_r($this->data['images']);exit;
        // $pro = $this->db->select('id,image,product_name,cancle_price,off_per,price')->limit(100)->order_by('categories_id','desc')->get('tbl_products')->result_array();
      // Define the category IDs you want to filter by
       $id = [31, 28, 32, 29];

// Retrieve products that belong to the specified category IDs
// $pro = $this->data['product'] = $this->db->select('*')->where_in('categories_id', $id)->get('tbl_products')->result_array();
$pro = $this->data['product'] = $this->db->select('*')
                                                ->where_in('categories_id', $id)
                                                ->order_by('FIELD(categories_id, ' . implode(',', $id) . ')', null, false)
                                                ->get('tbl_products')
                                                ->result_array();

        $this->data['product_list'] = array_chunk($pro,2);
        $this->load->view('website/home',$this->data);
	}

    public function category_products($id = '')
    {
        $pros = $this->data['product'] = $this->db->select('*')->where('categories_id',$id)->get('tbl_products')->result_array();
        $this->data['product'] = array_chunk($pros,2);
        $this->load->view('website/category_product',$this->data);
        
      
    }

	public function single_category($id = '')
	{	
		$this->data['title'] = $this->data['web_settings']['meta_title'];
        $this->data['keywords'] = $this->data['web_settings']['meta_keyword'];
        $this->data['description'] = $this->data['web_settings']['meta_description'];
        
        $pro = $this->db->select('id,image,product_name,cancle_price,off_per,price')->where('categories_id',$id)->limit(100)->order_by('id','desc')->get('tbl_products')->result_array();
        $this->data['product_list'] = array_chunk($pro,2);
        $this->load->view('website/single_category',$this->data);
	}



    public function terms()
	{	
        $this->data['logo'] = $this->data['web_settings']['logo'];
        $this->data['title'] = $this->data['web_settings']['site_name'];
        $this->data['site_link'] = $this->data['web_settings']['site_link'];
        $this->load->view('website/terms-conditions',$this->data);
	}

    public function about()
	{	
        $this->data['logo'] = $this->data['web_settings']['logo'];
        $this->data['title'] = $this->data['web_settings']['site_name'];
        $this->load->view('website/about_us',$this->data);
	}

    public function policy()
	{	
        $this->data['logo'] = $this->data['web_settings']['logo'];
        $this->data['title'] = $this->data['web_settings']['site_name'];
        $this->data['site_link'] = $this->data['web_settings']['site_link'];
        $this->data['email'] = $this->data['web_settings']['email'];
        $this->load->view('website/privacy-policy',$this->data);
	}

    public function refund()
	{	
        $this->data['logo'] = $this->data['web_settings']['logo'];
        $this->data['title'] = $this->data['web_settings']['site_name'];
        $this->data['site_link'] = $this->data['web_settings']['site_link'];
        $this->data['email'] = $this->data['web_settings']['email'];
        $this->load->view('website/refund',$this->data);
	}

    public function contact()
	{	
        $this->data['email'] = $this->data['web_settings']['email'];
		$this->data['contact'] = $this->data['web_settings']['contact_no']; 
        $this->data['address'] = $this->data['web_settings']['address']; 
        $this->load->view('website/contact',$this->data);
	}

    
    
	
	public function single_products($id = '')
	{	

		$this->data['title'] = $this->data['web_settings']['meta_title'];
        $this->data['keywords'] = $this->data['web_settings']['meta_keyword'];
        $this->data['description'] = $this->data['web_settings']['meta_description'];
        $this->data['product'] = $this->db->select('*')->where('id',$id)->get('tbl_products')->row_array();
        $this->data['color'] = $this->db->select('*')->where('product_id',$id)->get('tbl_innovative_other')->result_array();
        $this->data['size'] = $this->db->select('*')->where('product_id',$id)->get('tbl_size')->result_array();
        $this->data['storage'] = $this->db->select('*')->where('product_id',$id)->get('tbl_storage')->result_array();
        $this->session->unset_userdata('product_details');
        $this->session->set_userdata('product_details',$this->data['product']);
        $this->load->view('website/single_products',$this->data);
	}
    public function ajax_add_to_cart(){
        $this->session->unset_userdata('add_to_cart');  
        $add_to_cart = array(
            'product_id' => $_POST['product_id'],
            'storage_id' => $_POST['storage_id'],
            'color_id' => $_POST['color_id'],
            'size_id' => $_POST['size_id']
        );                    
        $this->session->set_userdata('add_to_cart',$add_to_cart); 
        if($_SESSION['add_to_cart']){
            $response = array(); 
            $response['success'] = "success";                                  
            echo json_encode($response);
        }else{
            $response = array(); 
            $response['error'] = "error";                       
            echo json_encode($response);
        }
    }
    
    public function add_to_address(){

        $this->data['title'] = $this->data['web_settings']['meta_title'];
        $this->data['keywords'] = $this->data['web_settings']['meta_keyword'];
        $this->data['description'] = $this->data['web_settings']['meta_description'];

        $this->load->view('website/address_page',$this->data);
    }
    
    public function add_to_cart(){
        $this->session->set_userdata('address',$_POST); 
        $this->data['product_details'] = $this->session->userdata('product_details');
        $this->data['address'] = $this->session->userdata('address');
        if(!$this->data['product_details']){
            redirect('/', 'refresh');
        }
        $this->data['title'] = $this->data['web_settings']['meta_title'];
        $this->data['keywords'] = $this->data['web_settings']['meta_keyword'];
        $this->data['description'] = $this->data['web_settings']['meta_description'];
      
        $this->load->view('website/cart_page',$this->data);
    }
    
    public function payment_page(){
        $this->data['product_details'] = $this->session->userdata('product_details');
        if(!$this->data['product_details']){
            redirect('/', 'refresh');
        }
        $this->data['title'] = $this->data['web_settings']['meta_title'];
        $this->data['keywords'] = $this->data['web_settings']['meta_keyword'];
        $this->data['description'] = $this->data['web_settings']['meta_description'];

        $this->load->view('website/payment_page',$this->data);
    }
}