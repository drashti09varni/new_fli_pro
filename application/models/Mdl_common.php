<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_common extends CI_Model
{
	
	/*=================================================================================
	Get Record
	==================================================================================*/

	public function get_record($table_name, $where, $field = '*', $order_by = array())
	{
		$this->db->select($field,false);
		$this->db->from($table_name);
		if(!empty($order_by))
		{
			foreach($order_by as $key=>$val)
			{
				$this->db->order_by($key, $val);
			}
		}
		if($where != '')
		{
			if(is_array($where))
			{
				foreach($where as $key=>$val)
				{
					$this->db->where($key, $val);
				}
			}
			else
			{
				$this->db->where($where);
			}
		}
		return $this->db->get()->result_array();

	}

	public function get_single_record($table_name, $where, $field = '*', $order_by = array())
	{
		$this->db->select($field,false);
		$this->db->from($table_name);
		if(!empty($order_by))
		{
			foreach($order_by as $key=>$val)
			{
				$this->db->order_by($key, $val);
			}
		}
		if($where != '')
		{
			if(is_array($where))
			{
				foreach($where as $key=>$val)
				{
					$this->db->where($key, $val);
				}
			}
			else
			{
				$this->db->where($where);
			}
		}
		return $this->db->get()->row_array();

	} 

	public function get_no_record($table_name, $where, $field = '*', $order_by = array())
	{
		$this->db->select($field,false);
		$this->db->from($table_name);
		if(!empty($order_by))
		{
			foreach($order_by as $key=>$val)
			{
				$this->db->order_by($key, $val);
			}
		}
		if($where != '')
		{
			if(is_array($where))
			{
				foreach($where as $key=>$val)
				{
					$this->db->where($key, $val);
				}
			}
			else
			{
				$this->db->where($where);
			}
		}
		return $this->db->get()->num_rows();

	} 

	/*=================================================================================
	Insert Record
	==================================================================================*/

	public function insert_record($table_name, $insert_data)
	{
		$this->db->insert($table_name, $insert_data);
		return $this->db->affected_rows();
	}

	public function insert_record_id($table_name, $insert_data)
	{
		$this->db->insert($table_name, $insert_data);
		$id = $this->db->insert_id();
		return $id;
	}

	/*=================================================================================
	Update Record
	==================================================================================*/

	public function update_record($table_name, $where, $update_data)
	{
		if(is_array($where)){
			foreach($where as $key=>$val){
				$this->db->where($key, $val);
			}
		}
		else
		{
			$this->db->where($where);
		}

		return $this->db->update($table_name, $update_data);
		// echo $this->db->last_query();die();
	}


	/*=================================================================================
	Delete Record
	==================================================================================*/

	public function delete_record($table_name, $where)
	{
		if(is_array($where))
		{
			foreach($where as $key=>$val)
			{
				$this->db->where($key, $val);
			}
		}
		else
		{
			$this->db->where($where);
		}

		return $this->db->delete($table_name);
	}

	/*=================================================================================
	base64_to_jpeg
	==================================================================================*/

	public function base64_to_jpeg($base64_string, $output_file)
	{
		$ifp = fopen($output_file, "wb");
		$data= explode(',', $base64_string);
		fwrite($ifp, base64_decode($data[1]));
		fclose($ifp);
		//	$success = file_put_contents($file, $data);
		//	print_r($output_file); die;
		return $output_file;
	}

	/*=================================================================================
	Curl
	==================================================================================*/

	public function curl($url,$post)
	{
		$data_string = json_encode($post);
	    $curl = curl_init($url);

	    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
	    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		    'Content-Type: application/json',
		    'Content-Length: ' . strlen($data_string))
	    );

	    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);

	    $result = curl_exec($curl);
	    curl_close($curl);
	    return $result;
	}

	/*=================================================================================
	pass ept or dpt
	==================================================================================*/

	public function ept($temp_pass)
	{
		$cryptKey = 'hyHJyj8745y4j7867HJj5gj';
		$method   = "AES-128-ECB";
		$qEncoded = base64_encode(openssl_encrypt($temp_pass,$method,$cryptKey,$option   = 0,$iv       = ''));
		//$qEncoded = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), $temp_pass, MCRYPT_MODE_CBC, md5(md5($cryptKey))));
		$qEncoded = strtr($qEncoded,
			array(
				'+'=> '.',
				'='=> '-',
				'/'=> '~'
			)
		);
		return $qEncoded;
	}

	public function dpt($temp_pass)
	{
		$temp_pass = strtr(
			$temp_pass,
			array(
				'.'=> '+',
				'-'=> '=',
				'~'=> '/'
			)
		);
		$cryptKey = 'hyHJyj8745y4j7867HJj5gj';
		$method   = "AES-128-ECB";
		$qDecoded = openssl_decrypt(base64_decode($temp_pass),$method,$cryptKey,$option   = 0,$iv       = '');
		//$qDecoded = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($cryptKey), base64_decode($temp_pass), MCRYPT_MODE_CBC, md5(md5($cryptKey))), "\0");
		return $qDecoded;
	}

	/*=================================================================================
	Login
	==================================================================================*/

	public function admin_login()
	{
		if(@$this->session->userdata('suratnext_admin_login') == true)
		{
			redirect('admin/dashboard');
		}
	}

	public function logged_in()
	{
		if($this->session->userdata('shopno_login') == true)
		{
			if(@$this->session->userdata['site_id']['admin_login'] == SITE_ID){
				redirect('admin/dashboard');
			}else{
				$this->session->sess_destroy();
				redirect('admin','refresh');
			}
		}
	}
	
	public function set_barcode2($code)
	{
	    return $code;
	}

	public function set_barcode($code)
	{
		$this->load->library('zend');
        $this->zend->load('Zend/Barcode');

        $bar_code = Zend_Barcode::render('code128', 'image', array('text'=>$code), array('imageType' => 'jpg'))->draw();
        return $bar_code;
	}
}