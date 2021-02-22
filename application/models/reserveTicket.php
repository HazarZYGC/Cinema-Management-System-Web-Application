<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    Class ReserveTicket extends CI_Model
    {
        public function addticket($data=array(), $where)
        {   
            $result = $this->db->insert($where,$data);
            return $result;
        }
      

    }

?>