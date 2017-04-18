<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

/* load the MX_Loader class */
// require APPPATH."third_party/MX/Loader.php";
require APPPATH . '/libraries/REST_Controller.php';

class Story_Controller extends REST_Controller {
	function __construct() {
        // Construct the parent class
        parent::__construct();
    }
}