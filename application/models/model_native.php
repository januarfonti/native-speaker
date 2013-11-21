<?php


class Model_native extends CI_Model{
    function __construct(){
        parent::__construct();
    }

//    GET DATA
    
  
  function get_contact(){
        
        return $this->db->get('tbl_contactus')->result();


    }      
                                
   function get_about(){
        
        return $this->db->get('tbl_about')->result();
        
    }

    function get_facilities(){
        
        return $this->db->get('tbl_facilities')->result();
        
    }

    function get_class(){
        
        return $this->db->get('tbl_classstudy')->result();
        
    }

    function get_featured(){
        
        return $this->db->get('tbl_featured')->result();
        
    }

    function get_quote(){
        
        return $this->db->get('tbl_quote')->result();
        
    }

    function get_chooseus(){
        
        return $this->db->get('tbl_chooseus')->result();
        
    }

    function get_left_footer(){
        
        return $this->db->get('tbl_footer_1')->result();
        
    }

    function get_right_footer(){
        
        return $this->db->get('tbl_footer_3')->result();
        
    }

    function get_profile(){
        
        return $this->db->get('tbl_user_login')->result();
        
    }
}