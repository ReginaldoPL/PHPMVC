<?php
interface IDAO{
    public function insert($value);
    public function update(produtoVO $value);
    public function delete($value); 
    public function getById($id);
    public function getALL();
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

