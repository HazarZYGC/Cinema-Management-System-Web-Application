<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    Class Register extends CI_Model
    {
        public function adduser($data=array(), $where)
        {   
            $result = $this->db->insert($where,$data);
            return $result;
        }
      

    }

?>