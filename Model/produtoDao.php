<?php
class ProdutoDAO {
    
    public function insert(produtoVO $value){
        $SQL = "Insert into produtos (nome,marca,preco) values (";
        $SQL.= "?,?,?)";
        $DB = new DB();
        $DB->getConnection();
        $pstm = $DB->execSQL($SQL);
        
     
        $pstm->bind_param("ssd",$value->getNome(),$value->getMarca(),$value->getPreco());
        
        if ($pstm->execute()){
            return true;
        }              
       else {
            return false;
       }        
    }
    public function update(produtoVO $value){
        $SQL = "UPDATE produtos SET nome=?,marca=?,preco=? where id=?";
        $DB = new DB();
        $DB->getConnection();
        $pstm = $DB->execSQL($SQL);
        $pstm->bind_param("ssdi",$value->getNome(),$value->getMarca(),$value->getPreco(),$value->getId());
       
        if ($pstm->execute()){
            return true;
        }              
       else {
            return false;
       }        
    }
    public function delete(produtoVO $value){
        $SQL = "delete from produtos  where id=?";
        $DB = new DB();
        $DB->getConnection();
        $pstm = $DB->execSQL($SQL);
        $pstm->bind_param("i",$value->getId());        
        if ($pstm->execute()){
            return true;
        }              
       else {
            return false;
       }        
    }
    public function getById($id){
        $SQL = "select * from produtos  where id=". $id;
        $DB = new DB();
        $DB->getConnection();
        $query = $DB->execReader($SQL);  
        $vo = new produtoVO;
        while ($reg = $query->fetch_array()){
            $vo->setId($reg["id"]);
            $vo->setNome($reg["nome"]);
            $vo->setMarca($reg["marca"]);
            $vo->setPreco($reg["preco"]);            
        }
        return $vo;       
    }
     public function getAll(){
        $SQL = "select * from produtos";
        $DB = new DB();
        $DB->getConnection();
        $query = $DB->execReader($SQL);  
        $array = array();
        while ($row = $query->fetch_array()){
            $array[] = array($row["id"],$row["nome"],$row["marca"],$row["preco"]);
        }
        return $array;       
    }
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

