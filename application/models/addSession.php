<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    Class AddSession extends CI_Model
    {
      
        public function addsession($data=array(), $where)
        {   
            $result = $this->db->insert($where,$data);
            return $result;
        }
    }

?>