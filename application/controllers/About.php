<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('about');
    }
}

/* End of file entryController.php */
/* Location: ./application/controllers/entryController.php */