<?php

class produtoVO{
    private $id;
    private $nome;
    private $marca;
    private $preco;
    
    public function getId(){
        return $this->id;      
    }
    public function setId($id){
        $this->id = $id;      
    }
    public function getNome(){
        return $this->nome;      
    }
    public function setNome($nome){
        $this->nome = $nome;      
    }
    public function getMarca(){
        return $this->marca;      
    }
    public function setMarca($marca){
        $this->marca = $marca;      
    }
    public function getPreco(){
        return $this->preco;      
    }
    public function setPreco($preco){
        $this->preco = $preco;      
    }
      
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

