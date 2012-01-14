<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MY_Model extends CI_Model {
    /** Set this to the table name that the model is mapped to */
    protected $tableName;
    /** Set this to the primary key of the table for this model.*/
    protected $primaryKey;

    
    function __construct() {
        parent::__construct();
    }


    /** Fetches a record by it's primary key id */
    function getById($id, $fields="*") {
        $this->db->select($fields);
        $this->db->from($this->tableName);
        $this->db->where($this->primaryKey, $id);
        $query = $this->db->get();
        if ($query && ($query->num_rows > 0)) {
            return $query->row();
        }
        return false;
    }
    
	

    /** Fetches all records */
    function getAll($fields="*", $orderby='') {
        $this->db->select($fields, false);
		if ($orderby != ''){
			$this->db->order_by($orderby);
		}
        $query = $this->db->get($this->tableName);
        if ($query) {
        	return $query;
        }
        return false;
    }

	
}