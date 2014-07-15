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
        $query = $this->db->get('machine');
        return $query->result_array();
    }
}