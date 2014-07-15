<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Machines extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Machine', 'machine', TRUE);
    }

    public function index($machineName = '')
    {
//        if ($machineName != '') {
//            var $machines = $this->machine->getMachines();
//
//        } else {
            $data['machines'] = $this->machine->getMachines();
//        }
        $this->load->view('machines', $data);
    }


}

/* End of file entryController.php */
/* Location: ./application/controllers/entryController.php */