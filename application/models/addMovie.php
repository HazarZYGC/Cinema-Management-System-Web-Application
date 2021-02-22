<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    Class AddMovie extends CI_Model
    {
        public function addmovie($data=array(), $where)
        {   
            $result = $this->db->insert($where,$data);
            return $result;
        }
      
        
    }

?>