<?php 

class Admin extends Admin_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->not_logged_in();
	}
	public function categories()
	{	
		$this->data['page_title'] = 'Categories | Admin panel |  '. $this->data['web_settings']['meta_title'];		
		$this->render_template('categories/index', $this->data);
	}
	public function password()
	{	
		$this->render_template('password', 'refresh');
// 		redirect('password', 'refresh');
	}
	
	public function change_password(){
    if ($_POST) {
        // Check if the password field is not empty
        if (!empty($_POST['password'])) {
            // Hash the password using your custom function
            $data['password'] = $this->mdl_common->ept($_POST['password']);
            
            // Update the password in the database for the user with id 1
            $this->db->where("id", 1);
            $this->db->update("users", $data);
            
            // Set a flash message for success
            $this->session->set_flashdata('success', 'Password Changed Successfully');
            redirect('dashboard', 'refresh');
        } else {
            // Set a flash message for error if the password is empty
            $this->session->set_flashdata('error', 'Password cannot be empty');
            redirect('password', 'refresh');
        }
    }
    
    // Redirect to the dashboard
    
}

	
	public function add_categories($id='')
	{	
		$this->data['page_title'] = 'Add categories | Admin panel |  '. $this->data['web_settings']['meta_title'];		
		$this->data['categories'] = $this->db->select('*')->where('id',$id)->get('tbl_categories')->row_array();		
		$this->render_template('categories/add_categories', $this->data);		
	}
	public function insert_categories()
	{	
       	$id = $this->input->post('id'); 
	  	$data['name'] = $this->input->post('name');
	  	$data['image'] = single_image_upload('image','upload/categories/',$this->input->post('old_img'));      
	  	  	
	  	if($id){
	    	$this->db->where("id",$id);
			$this->db->update("tbl_categories",$data);	
			$this->session->set_flashdata('success', 'Successfully edit categories');
				redirect('categories', 'refresh');
	  	} else {		
	  		
    		$this->db->insert("tbl_categories",$data);
    		$this->session->set_flashdata('success', 'Successfully add categories');
    	   redirect('categories', 'refresh');	  		   
		}
		
	}
	public function fetch_web_categories()
	{
		$result = array('data' => array());
		$data = $this->db->select("*")->order_by("id",'desc')->get('tbl_categories')->result_array();
		foreach ($data as $key => $value)
		{
			$buttons = '';
			$image = '<img src="'.base_url($value['image']).'" alt="image" width="80px" height="80px">';
			$buttons .= '<a href="'.base_url('add-categories/').$value['id'].'" class="btn btn-outline-secondary btn-sm edit"><i class="fas fa-pencil-alt"></i></a> ';					
			$buttons .= ' <button type="button" class="btn btn-outline-danger btn-sm edit" onclick="removeFunc('.$value['id'].')" data-bs-toggle="modal" data-bs-target="#removeModal"><i class="fa fa-trash"></i></button>';	
			
			$result['data'][$key] = array(
				$image,												
				$value['name'],		
				$buttons
			);
		}
		echo json_encode($result);
	}
	public function remove_categories(){
		$id = $this->input->post('categories_id');
		$response = array();
		if($id) {
			
			$categories = $this->db->select('*')->where('id',$id)->get('tbl_categories')->row_array();
			@unlink($categories['image']);

			$this->db->where('id', $categories['id']);
			$this->db->delete('tbl_categories');
			
			$response['success'] = true;
			$response['messages'] = "Successfully removed";	
		}else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}

		echo json_encode($response);
	}
	
	public function products()
	{	
		$this->data['page_title'] = 'Products | Admin panel |  '. $this->data['web_settings']['meta_title'];		
		$this->render_template('products/index', $this->data);
	}
	public function add_products($id='')
	{	
		$this->data['page_title'] = 'Add Products | Admin panel |  '. $this->data['web_settings']['meta_title'];		
		$this->data['products'] = $this->db->select('*')->where('id',$id)->get('tbl_products')->row_array();		
		$this->data['categories'] = $this->db->select('*')->get('tbl_categories')->result_array();		
		$this->render_template('products/add_products', $this->data);		
	}
	public function insert_products()
	{	
       	$id = $this->input->post('id'); 
	  	$data['categories_id'] = $this->input->post('categories_id'); 	  	
	  	$data['product_name'] = $this->input->post('product_name');		  	
	  	$data['off_per'] = $this->input->post('off_per');	  	
	  	$data['price'] = $this->input->post('price');
	  	
	  	// $discountAmount = $this->input->post('price') * ($this->input->post('off_per') / 100);
    //     // Calculate the discounted price
    //     $discountedPrice = $this->input->post('price') - $discountAmount;
        
	  	// $data['cancle_price'] = $discountedPrice;	  	
	  	$data['cancle_price'] = $this->input->post('cancle_price');	
	  	$data['description'] = $this->input->post('description');	 
	  	
	  	if($_FILES['image']['name']){
	  		$data['image'] = single_image_p_upload('image','upload/product/',$this->input->post('old_img'));	  	
	  	}
	  	if($_FILES['image2']['name']){
	  		$data['image2'] = single_image_p_upload('image2','upload/product/',$this->input->post('old_img2'));	  	
	  	}
	  	if($_FILES['image3']['name']){
	  		$data['image3'] = single_image_p_upload('image3','upload/product/',$this->input->post('old_img3'));	  	
	  	}
	  	if($_FILES['image4']['name']){
	  		$data['image4'] = single_image_p_upload('image4','upload/product/',$this->input->post('old_img4'));	  	
	  	}
	  	if($_FILES['image5']['name']){
	  		$data['image5'] = single_image_p_upload('image5','upload/product/',$this->input->post('old_img5'));	  	
	  	}
	  	if($_FILES['image6']['name']){
	  		$data['image6'] = single_image_p_upload('image6','upload/product/',$this->input->post('old_img6'));	  	
	  	}
	  	
	  	if($id){
	    	$this->db->where("id",$id);
			$this->db->update("tbl_products",$data);			
			$this->session->set_flashdata('success', 'Successfully edit products');
				redirect('products', 'refresh');
	  	} else {		
	  		
    		$this->db->insert("tbl_products",$data);
    		$this->session->set_flashdata('success', 'Successfully add products');
    	   redirect('products', 'refresh');	  		   
		}
		
	}
	public function fetch_web_products()
	{
		$result = array('data' => array());
		$data = $this->db->select("p.*,c.name AS category_name")			
						->join('tbl_categories AS c','c.id = p.categories_id','left')			
						 ->order_by("p.id",'desc')
						 ->get('tbl_products AS p')
						 ->result_array();
		foreach ($data as $key => $value)
		{
			$buttons = '';	
			$image = '<img src="'.base_url($value['image']).'" alt="image" width="80px" height="80px">';		
			$buttons .= '<a href="'.base_url('add-products/').$value['id'].'" class="btn btn-outline-secondary btn-sm edit"><i class="fas fa-pencil-alt"></i></a> ';					
			$buttons .= ' <button type="button" class="btn btn-outline-danger btn-sm edit" onclick="removeFunc('.$value['id'].')" data-bs-toggle="modal" data-bs-target="#removeModal"><i class="fa fa-trash"></i></button>';	

			$aabuttons = '';
			$aabuttons .= '<a href="'.base_url('admin/add_products_variant/').$value['id'].'" class="btn btn-outline-secondary btn-sm plus"><i class="fas fa-plus-alt"></i> Add variant</a> ';
			$result['data'][$key] = array(	
				$image,
				$value['category_name'],	
				$value['product_name'],			
				$value['off_per'],			
				$value['price'],			
				$value['cancle_price'],			
				$aabuttons,			
				$buttons
			);
		}
		echo json_encode($result);
	}
	public function remove_products(){
		$id = $this->input->post('products_id');
		$response = array();
		if($id) {
			
			$products = $this->db->select('*')->where('id',$id)->get('tbl_products')->row_array();
			@unlink($products['image']);

			$this->db->where('id', $products['id']);
			$this->db->delete('tbl_products');
			
			$response['success'] = true;
			$response['messages'] = "Successfully removed";	
		}else {
			$response['success'] = false;
			$response['messages'] = "Refersh the page again!!";
		}

		echo json_encode($response);
	}
	public function add_products_variant($id = ''){
		$this->data['page_title'] = 'Website Setting | Admin panel |  '. $this->data['web_settings']['meta_title'];	
		$this->data['product_id'] = $id;
		$this->data['innovative_other'] = $this->db->select('*')->where('product_id',$id)->get('tbl_innovative_other')->result_array();	
		$this->data['size'] = $this->db->select('*')->where('product_id',$id)->get('tbl_size')->result_array();	
		$this->data['storage'] = $this->db->select('*')->where('product_id',$id)->get('tbl_storage')->result_array();	
		$this->render_template('products/add_products_variant', $this->data);
	}
	
	public function insert_innovative_images(){	
		if(@$_POST){
		  //  pr($_POST);die;
		    if(@$_POST['remove_innn']){
    			$remove_location_id = explode(',',$this->input->post('remove_innn'));
    	        if($remove_location_id)
    	        {
    	            for ($i = 0; $i < count($remove_location_id); $i++) { 
    	            	$imag = $this->db->select('image')->where('id',$remove_location_id[$i])->get('tbl_innovative_other')->row_array(); 
    	            	unlink($imag['image']);
    	                $this->db->where('id',$remove_location_id[$i]);
    	                $this->db->delete('tbl_innovative_other');
    	            } 
    	        }
		    }

            if(@$_POST['edit_innovative_other']){
    	        $locationCount = count(@$_POST['edit_innovative_other']);
    	        for($i = 0; $i < @$locationCount; $i++){ 
    	            if($_POST['edit_innovative_other'][$i])
    	            { 
    	                $data_innovative_old['product_id'] = $_POST['product_id']; 
    	                $data_innovative_old['title'] = $_POST['edit_dy_title'][$i]; 
    	                $data_innovative_old['image'] = multiple_image_upload('edit_image','upload/innovative/',$i,$_POST['edit_old_image'][$i]);
    	                $this->db->where('id',$_POST['edit_innovative_other'][$i]);           
    	                $this->db->update('tbl_innovative_other',$data_innovative_old); 
    	            }
    	        } 
            }

            if(@$_POST['dy_title']){
    	        $innovativeCount = count(@$_POST['dy_title']);
    	        for($i = 0; $i < @$innovativeCount; $i++){ 
    	            if(@$_POST['dy_title'][$i])
    	            {
    	            	$data_4['product_id'] = $_POST['product_id']; 
    	                $data_4['title'] = $_POST['dy_title'][$i]; 
    	                $data_4['image'] = multiple_image_upload('image','upload/innovative/',$i,'');
    	                $this->db->insert('tbl_innovative_other',$data_4); 
    	            }
    	        }
            }

			$this->session->set_flashdata('success', 'Successfully edit color variant');
		}
		redirect('admin/add_products_variant/'.$_POST['product_id'], 'refresh');
	}

	public function insert_size(){	

		if($_POST){
		    if(@$_POST['remove_size']){
    			$remove_location_id = explode(',',$this->input->post('remove_size'));
    	        if($remove_location_id)
    	        {
    	            for ($i = 0; $i < count($remove_location_id); $i++) { 	            	
    	                $this->db->where('id',$remove_location_id[$i]);
    	                $this->db->delete('tbl_size');
    	            } 
    	        }
		    }

            if(@$_POST['edit_size_other']){
    	        $locationCount = count(@$_POST['edit_size_other']);
    	        for($i = 0; $i < @$locationCount; $i++){ 
    	            if($_POST['edit_size_other'][$i])
    	            { 
    	                $data_innovative_old['product_id'] = $_POST['product_id']; 
    	                $data_innovative_old['title'] = $_POST['edit_size_title'][$i]; 
    	                $this->db->where('id',$_POST['edit_size_other'][$i]);           
    	                $this->db->update('tbl_size',$data_innovative_old); 
    	            }
    	        } 
            }

            if(@$_POST['size_title']){
    	        $innovativeCount = count(@$_POST['size_title']);
    	        for($i = 0; $i < @$innovativeCount; $i++){ 
    	            if(@$_POST['size_title'][$i])
    	            {
    	            	$data_4['product_id'] = $_POST['product_id']; 
    	                $data_4['title'] = $_POST['size_title'][$i]; 
    	                $this->db->insert('tbl_size',$data_4); 
    	            }
    	        }	
            }

			$this->session->set_flashdata('success', 'Successfully edit size variant');
		}
		redirect('admin/add_products_variant/'.$_POST['product_id'], 'refresh');
	}

	public function insert_storage(){	

		
		if($_POST){
		    if(@$_POST['remove_storage']){
    			$remove_location_id = explode(',',$this->input->post('remove_storage'));
    	        if($remove_location_id)
    	        {
    	            for ($i = 0; $i < count($remove_location_id); $i++) { 	            	
    	                $this->db->where('id',$remove_location_id[$i]);
    	                $this->db->delete('tbl_storage');
    	            } 
    	        }
		    } 

            if(@$_POST['edit_storage_other']){
    	        $locationCount = count(@$_POST['edit_storage_other']);
    	        for($i = 0; $i < @$locationCount; $i++){ 
    	            if($_POST['edit_storage_other'][$i])
    	            { 
    	                $data_innovative_old['product_id'] = $_POST['product_id']; 
    	                $data_innovative_old['title'] = $_POST['edit_storage_title'][$i]; 
    	                $this->db->where('id',$_POST['edit_storage_other'][$i]);           
    	                $this->db->update('tbl_storage',$data_innovative_old); 
    	            }
    	        } 
            } 

            if(@$_POST['storage_title']){
    	        $innovativeCount = count(@$_POST['storage_title']);
    	        for($i = 0; $i < @$innovativeCount; $i++){ 
    	            if(@$_POST['storage_title'][$i])
    	            {
    	            	$data_4['product_id'] = $_POST['product_id']; 
    	                $data_4['title'] = $_POST['storage_title'][$i]; 
    	                $this->db->insert('tbl_storage',$data_4); 
    	            }
    	        }
            } 

			$this->session->set_flashdata('success', 'Successfully edit storage variant');
		}
		redirect('admin/add_products_variant/'.$_POST['product_id'], 'refresh');
	}
	public function web_setting(){
		$this->data['page_title'] = 'Website Setting | Admin panel |  '. $this->data['web_settings']['meta_title'];		
		$this->data['web_settings'] = $this->db->select('*')->where('id',1)->get('web_settings')->row_array();		
		$this->render_template('web_settings', $this->data);
	}
	public function insert_web_setting_segement_count(){
		if($_POST){
			$data['slider1'] = single_image_upload('slider1','upload/categories/',$this->input->post('old_slider1'));  
		  	$data['slider2'] = single_image_upload('slider2','upload/categories/',$this->input->post('old_slider2'));  
		  	$data['slider3'] = single_image_upload('slider3','upload/categories/',$this->input->post('old_slider3'));  
			  $data['logo'] = single_image_upload('logo','upload/logo/',$this->input->post('logo'));  
		  	$data['site_name'] = $_POST['site_name'];
		  	$data['upi_id'] = $_POST['upi_id'];
		  	$data['pixel_code'] = $_POST['pixel_code'];
		  	$data['meta_title'] = $_POST['meta_title'];
		  	$data['meta_keyword'] = $_POST['meta_keyword'];
		  	$data['meta_description'] = $_POST['meta_description'];
			  $data['contact_no'] = $_POST['contact_no'];
			  $data['email'] = $_POST['email'];
			  $data['address'] = $_POST['address'];
			  $data['site_link'] = $_POST['site_link'];
	    	$this->db->where("id",1);
			$this->db->update("web_settings",$data);	
			$this->session->set_flashdata('success', 'Successfully edit setting');
		}
		redirect('web-setting', 'refresh');
	}
	
	

	
}