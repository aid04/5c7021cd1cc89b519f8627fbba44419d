<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * require type
 * require for create_member/put_member require email, password, date_register, activation_code, type, status
 * //	echo '<pre>';var_dump();echo '</pre>';
*/

class User extends CI_Controller {

	private $method;

    public function __construct () {
        parent::__construct();
        date_default_timezone_set('Asia/Manila');
        $this->datetime = date('Y-m-d h:i:s');
        $this->return_json = array('error'=>1);
    }

	public function index() {
		$err = 0;
		$arrReq = array(
    		'type' => 'Invalid Type'
		);
		foreach($arrReq as $k => $v) {
    		if(!$this->input->post($k)) {
    			$this->return_json['msg'] = $arrReq[$k];
    			$err++;
    			break;
    		}
    	}
    	if(!$err) {
    		$this->method = $this->input->post('type');
    		if($this->method == 'create') {
    			$this->return_json['data'] = $this->create_member();
    		} else {
    			$this->return_json['msg'] = 'Invalid Type option.';
    		}
    	}
    	echo json_encode($this->return_json);
	}

	private function create_member() {
		// create user
		// require email, password, date_register, activation_code, type, status
		$this->load->model('usermodel');
		$activation_code = $this->encryptingmodel->encrypt_decrypt('encrypt', $this->input->post('email').$this->input->post('password'));
		$password = $this->encryptingmodel->encrypt_decrypt('encrypt', $this->input->post('password'));
		$item_array = array(
			'email' 		  => $this->input->post('email'),
			'password'        => $password,
			'date_register'   => $this->datetime,
			'activation_code' => $activation_code,
			'type'			  => 0,
			'status'		  => 0
		);
		return $this->usermodel->create_member($item_array);
	}

	private function post_member() {
		// get member by id
	}

	private function put_member() {
		// edit user
	}

	private function delete_member() {
		// delete user
	}

}