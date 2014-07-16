<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Machines extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Machine', 'machine', TRUE);
    }

    public function machine($machineName = '')
    {
        if ($machineName != '') {
            $machines = $this->machine->getMachineByName(rawurldecode($machineName));
            if(sizeof($machines)==1){
                $data['machine'] = $machines[0];
                $this->load->view('machine', $data);
                return;
            }
        }
        $data['machines'] = $this->machine->getMachines();
        $this->load->view('machines', $data);

    }
}