<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('pr'))
{
	function pr($array){
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}
}
if ( ! function_exists('stdToArray'))
{
	function stdToArray($obj){
	  $reaged = (array)$obj;
	  foreach($reaged as $key => &$field){
	    if(is_object($field))$field = stdToArray($field);
	  }
	  return $reaged;
	}
}

if( ! function_exists('sendResponse')){
	function sendResponse($data = array()){
		echo json_encode(array('error' => (count($data) > 0) ? 0 : 1, 'data' => (count($data) > 0) ? $data : array(), 'msg' => ''));
	}
}
function single_image_p_upload($file_name = '',$path = '',$old_photo = '')
{
	$C = & get_instance();
	if($_FILES[$file_name]['name']){			
        $config['upload_path'] = $path;
        $config['allowed_types'] = '*';
        $newname = rand(1,10000).date('ymdHis');
        $config['file_name'] = $newname;                
        $C->load->library('upload');
        $C->upload->initialize($config);                
        if(!$C->upload->do_upload($file_name)){
         $error = $C->upload->display_errors();
        }
        else{
            $uploadData = $C->upload->data();              
            $profile_img = $path.$uploadData['file_name'];    
            @unlink($old_photo);        
        }
    }
    return $profile_img;
}
function single_image_upload($file_name = '',$path = '',$old_photo = '')
{
	$C = & get_instance();
	if(!empty($_FILES[$file_name]['name'])){			
        $config['upload_path'] = $path;
        $config['allowed_types'] = '*';
        $newname = rand(1,10000).date('ymdHis');
        $config['file_name'] = $newname;                
        $C->load->library('upload');
        $C->upload->initialize($config);                
        if(!$C->upload->do_upload($file_name)){
         $error = $C->upload->display_errors();
        }
        else{
            $uploadData = $C->upload->data();              
            $profile_img = $path.$uploadData['file_name'];
            @unlink($old_photo);
        }
    } else {
       $profile_img = '';
    }  
    return  ($profile_img) ? $profile_img  : $old_photo;
}
function single_resume_upload($file_name = '',$path = '',$old_photo = '')
{
	$C = & get_instance();
	if(!empty($_FILES[$file_name]['name'])){			
        $config['upload_path'] = $path;
        $config['allowed_types'] = '*';
        $newname = rand(1,10000).date('ymdHis');
        $config['file_name'] = $newname;                
        $C->load->library('upload');
        $C->upload->initialize($config);                
        if(!$C->upload->do_upload($file_name)){
         $error = $C->upload->display_errors();
        }
        else{
            $uploadData = $C->upload->data();              
            $profile_img = $path.$uploadData['file_name'];
            @unlink($old_photo);
        }
    } else {
       $profile_img = '';
    }  
    return  ($profile_img) ? $profile_img  : $old_photo;
}
function multiple_image_upload($file_name = '',$path = '',$i = '',$old_photo = '')
{
	$C = & get_instance();
	$product_image = '';
	if(!empty($_FILES[$file_name]['name'][$i] != '')){
		$_FILES['file']['name']     = rand(1,1000000000).'.'.pathinfo($_FILES[$file_name]['name'][$i], PATHINFO_EXTENSION);
		$_FILES['file']['type']     = $_FILES[$file_name]['type'][$i];
		$_FILES['file']['tmp_name'] = $_FILES[$file_name]['tmp_name'][$i];
		$_FILES['file']['error']     = $_FILES[$file_name]['error'][$i];
		$_FILES['file']['size']     = $_FILES[$file_name]['size'][$i];
		$uploadPath = $path;
		$config['upload_path'] = $uploadPath;
		$config['allowed_types'] = '*';
		$C->load->library('upload', $config);
		$C->upload->initialize($config);
		if($C->upload->do_upload('file')){
			$fileData = $C->upload->data();
			if($fileData['file_name']){
				$product_image = $path.$fileData['file_name'];
				unlink($old_photo);
			}					
		}
	}else{
		$product_image = $old_photo;
	}
	return  $product_image;
}