<?php
class DB{
    private $conn;
    public function getConnection(){
        $this->conn = new mysqli("gprata.fortiddns.com","reginaldo","orihime","mvc");
    }
    public function execReader($SQL){
        return $this->conn->query($SQL);
      
    }
    public function execSQL($SQL){
        return $this->conn->prepare($SQL);
      
    }
    public function _destruct(){
        $this->conn->close();
    }
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

