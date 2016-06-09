<?php
session_start();
if(isset($_GET["Controller"])){
    include "Controller/".$_GET["Controller"]."Controller.php";
    
    $class = $_GET["Controller"]."Controller";
    
     eval("\$Controller = new $class();");
    
    if (isset($_GET["Action"])){
       eval("\$Controller->\$_GET['Action']();");
    }
}
/*  
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

