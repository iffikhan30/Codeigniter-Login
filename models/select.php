<?php
/**
 * Created by PhpStorm.
 * User: inspiron 3542
 * Date: 9/6/2018
 * Time: 1:53 AM
 */

class Select extends CI_Model {
    public function __construct(){
        parent::__construct();
    }
    
    public function checkuser_exits($tablename,$arg){
        $this->db->select('*');
        $this->db->from($tablename);
        $this->db->where('email',$arg['email']);
        $this->db->where('password',$arg['password']);
        return $this->db->get()->result();
    }
}
