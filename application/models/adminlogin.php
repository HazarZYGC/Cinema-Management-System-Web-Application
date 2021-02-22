<?php
defined('BASEPATH') OR exit('No direct script access allowed');
    Class Adminlogin extends CI_Model
    {
       public function isadminavailable($email, $password)
        {   

            $result = $this->db->select('*')->from('admin')->where('email',$email)->where('password',$password)->get()->row();
            return $result;
        }
      

    }

?>