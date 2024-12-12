<?php
require __DIR__."/User.php";

use User;
class UserBanco{
    private $pdo;

    public function __construct()
    {
        require __DIR__."/../Database/Conectar.php";
        $this->pdo = $banco;
    }

    public function cadastrarLogar($id,$nome,$email,$senha){
        $sql = "INSERT INTO logar(id,nome,email,senha) values (:i,:n,:e,:s)";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$id);
        $comando->bindValue("n",$nome);
        $comando->bindValue("e",$email);
        $comando->bindValue("s",$senha);

        return $comando->execute();
    }

    public function editarLogar($id,$nome,$email,$senha){
        $sql = "INSERT INTO logar(id,nome,email,senha) values (:i,:n,:e,:s)";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$id);
        $comando->bindValue("n",$nome);
        $comando->bindValue("e",$email);
        $comando->bindValue("s",$senha);

        return $comando->execute();
    }

    public function buscarPorId($i){
        $sql = "SELECT * FROM logar WHERE id=:i";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$i);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

        return $this->hidratar($resultado);
    }

    public function atualizarLogar($id,$nome,$email,$senha){
        $sql = "UPDATE logar set id = :i, nome = :n, email = :e, senha = :s, where nome = :n  ";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$id);
        $comando->bindValue("n",$nome);
        $comando->bindValue("e",$email);
        $comando->bindValue("s",$senha);

        return $comando->execute();
    }

    public function excluirLogar($id){
        $sql = "DELETE FROM logar WHERE id = :i";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$id);

        return $comando->execute();
    }

    public function verificarSeExiste($logar,$nome){
        $sql = "SELECT * FROM logar WHERE id=:i and nome = :n ";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("l",$logar);
        $comando->bindValue("n",$nome);
        $comando->execute();

        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarLogar(){
        $sql = "SELECT * FROM logar";
        $comando = $this->pdo->prepare($sql);
        
        $comando->execute();
        $todosUsuarios = $comando->fetchAll(PDO::FETCH_ASSOC);
        
        return $this->hidratar($todosUsuarios) ;
    }

    public function hidratar($array){
        $todos = [];

        foreach($array as $dado){
            $objeto= new User();
            $objeto->setId($dado['id']);
            $objeto->setNome($dado['nome']);
            $objeto->setEmail($dado['email']);
            $objeto->setsenha($dado['senha']);
            $todos[]=$objeto;
        }
        return $todos;
    }

}