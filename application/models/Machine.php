<?php
class Machine extends CI_Model
{

    var $name = '';
    var $description = '';
    var $imageURL = '';
    var $videoURL = '';
    var $controller = '';

    function __construct()
    {
// Call the Model constructor
        parent::__construct();
    }

    function getMachines() {
        $query = $this->db->query('select * from machine');
        return $query->result_array();
    }

    function getMachineByName($machineName=""){
        $query = $this->db->query("select * from machine where name like '$machineName'");
        return $query->result_array();
    }
}