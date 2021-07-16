<?php
ini_set("log_errors", 1);
ini_set("error_log", $_SERVER['DOCUMENT_ROOT'] . "/logs/php-error.log");

class Value_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        // set pacific time zone
        date_default_timezone_set('America/Phoenix');
        $this->tableName = 'tblvalues'; 
    }

    public function insert($data)
    {        
        $this->db->insert($this->tableName, $data);
        return $this->db->insert_id();
    }

    public function updateRow($ID, $data)
    {  
        $this->db->where('ID', $ID);
        return $this->db->update($this->tableName, $data);
    }

    public function getRows($ID = '')
    { 
        $this->db->select(''); 
        $this->db->from($this->tableName); 
        if ($ID) { 
            $this->db->where('ID',$ID); 
            $query = $this->db->get(); 
            $result = $query->row_array(); 
        }else{ 
            $this->db->order_by('ID','asc'); 
            $query = $this->db->get(); 
            $result = $query->result_array(); 
        } 
        return !empty($result) ? $result : false; 
    } 

    public function deleteRow($ID) {        
        $this->db->where('ID', $ID);
        $this->db->delete($this->tableName);
    }

    public function getRowsByType($Type) {
        $this->db->select('');
        $this->db->from($this->tableName);
        $this->db->where('Type', $Type);
        return $this->db->get()->result_array();
    }
}