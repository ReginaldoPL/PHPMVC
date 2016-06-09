<?php
//session_start();
include("Model/ProdutoModel.php");
include("Model/produtoVO.php");
include("Model/produtoDAO.php");
include("Model/DB.php");
class ProdutoController {
    //put your code here
    public function ProdutoController(){
        
    }
    public function salvar(){
        $model = new ProdutoModel();
        $vo = new produtoVO();
        $vo->setNome($_POST["txtNome"]);
        $vo->setMarca($_POST["txtMarca"]);
        $vo->setPreco($_POST["txtPreco"]);
        
        if ($model->insertModel($vo)){
            $_SESSION["msg"] = "Produto cadastrado com sucesso.";
        }else{
            $_SESSION["msg"] = "Erro ao cadastrar Produto.";
        }
        header("Location: View/produtos/retorno.php");                
    }
    public function novo(){
        include("View/produtos/insert.php");
        
    }
     public function update(){
        $model = new ProdutoModel();
        $vo = new produtoVO();
        $vo->setId($_GET["id"]);
        $vo->setNome($_POST["txtNome"]);
        $vo->setMarca($_POST["txtMarca"]);
        $vo->setPreco($_POST["txtPreco"]);
        
        if ($model->updateModel($vo)){
            $_SESSION["msg"] = "Produto Atualizado com sucesso.";
            header("Location: ../../produto");                
        }else{
            $_SESSION["msg"] = "Erro ao Atualizado Produto.";
            header("Location: ../../View/produtos/retorno.php");                
        }
       // header("Location: ../../View/produtos/retorno.php");                
    }
    public function listar(){
        $model = new ProdutoModel();
        $_SESSION["data"] = $model->getAllModel();
        
        include("View/produtos/list.php");
        
    }
    public function editar(){
        $model= new ProdutoModel();
        $vo = $model->getByIdModel($_GET["id"]);
        //var_dump($vo);
        $_SESSION["id"]=$vo->getId();
        $_SESSION["nome"] = $vo->getNome();
        $_SESSION["marca"] = $vo->getMarca();
        $_SESSION["preco"] = $vo->getPreco();   
        
        echo $_SESSION["nome"];               
       
        header("Location: View/produtos/editar.php");
        
    }
    public function delete(){
        $model= new ProdutoModel();
        $vo = $model->getByIdModel($_GET["id"]);
        if ($model->deleteModel($vo)){
            header("Location: ?Controller=produto&Action=listar");
        }else{
            include("View/produtos/error.php");
        }       
        
    }
    
    
}
