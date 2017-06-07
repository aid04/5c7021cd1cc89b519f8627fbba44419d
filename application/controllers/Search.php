<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * require type,q
 * //	echo '<pre>';var_dump();echo '</pre>';
*/

class Search extends CI_Controller {
    
    private $method;
    private $keyword;
    
    public function __construct () {
        parent::__construct();
        $this->return_json = array('error'=>1);
    }
    
    public function index() {
    	$err = 0;
    	if(count($this->input->post()) == 2) {
	    	$arrReq = array(
	    		'type' => 'Invalid Type',
	    		'q'	   => 'Invalid data'
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
	    		$this->keyword = $this->input->post('q');
	    		if($this->method == 'look') {
	    			$this->return_json['data'] = $this->post_keyword();
	    		} else {
	    			$this->return_json['msg'] = 'Invalid Type option.';
	    		}
	    	}
    	}
        echo json_encode($this->return_json);
    }

    private function post_keyword () {
    	$this->load->model('searchmodel');
    	$var = $this->searchmodel->get_keyword($this->keyword);
    	return $var;
    }

}