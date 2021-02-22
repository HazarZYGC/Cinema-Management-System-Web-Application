<?php

class Movielist extends CI_Model {

    function movielist() {
        $result = $this->db->select('*')->from('movie')->get()->result();
        return $result;
    }
    

    function movie_isexist($sef) {
        $result = $this->db->from('movie')->where('id' ,$sef)->get()->row();
        return $result;
    }
}