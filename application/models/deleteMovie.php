<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    Class DeleteMovie extends CI_Model
    {
        public function deleteMovie($name)
        {   
            echo $name;
            $result = $this->db->where('name', $name)->delete('movie');
            return $result;
        }
      
        public function deleteCustomer($name)
        {   
            $result = $this->db->where('name', $name)->delete('customer');
            return $result;
        } 

        public function deleteSession($id)
        {   
            $result = $this->db->where('id', $id)->delete('sessions');
            return $result;
        } 
    }

?>