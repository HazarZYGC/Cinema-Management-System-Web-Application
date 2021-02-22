<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    Class ChangeMovie extends CI_Model
    {
        public function changeMovie($data=array(), $where)
        {   
           $result =  $this->db->where('id',$data['id'])->update('movie',$data);
           return $result;
        }

     

    }

?>