<?php 
class Model_foto extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function get()
    {
        return $this->db->get('foto');
    }


    function insert($data)
    {
        $this->db->insert('foto', $data);
    }
}   