<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    Class Loginvt extends CI_Model
    {
       public function isuseravailable($email, $password)
        {   

            $result = $this->db->select('*')->from('customer')->where('email',$email)->where('password',md5($password))->get()->row();
            return $result;
        }
      

    }

?>