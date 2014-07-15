<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('contact');
    }
}

/* End of file entryController.php */
/* Location: ./application/controllers/entryController.php */