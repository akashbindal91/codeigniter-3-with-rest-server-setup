<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
// require APPPATH."third_party/MX/Loader.php";
//require APPPATH . '/libraries/REST_Controller.php';

class Story extends Story_Controller {
	function __construct() {
        // Construct the parent class
        parent::__construct();
    }

    function index_get() {
    	$this->load->view('story');
    }

}