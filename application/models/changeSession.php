<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    Class ChangeSession extends CI_Model
    {
        

        public function changeSession($data=array(), $where)
        {   
           $result =  $this->db->where('id',$data['id'])->update('sessions',$data);
           return $result;
        }

    }

?>