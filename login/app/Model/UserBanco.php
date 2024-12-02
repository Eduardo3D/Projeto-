<?php

class UserBanco{
    private $pdo;

    public function __construct()
    {
        require __DIR__."/../Database/Conectar.php";
        $this->pdo = $banco;
    }

    public function cadastrarUsuario($nome,$senha,$ativo){
        $sql = "INSERT INTO usuarios(nome,senha,perfil_ativo) values (:n,:p,:a)";

        $comando = $this->pdo->prepare($sql);
       
        $comando->bindValue("n",$nome);
        $comando->bindValue("p",$senha);
        $comando->bindValue("a",$ativo,PDO::PARAM_BOOL);

        return $comando->execute();
    }

    public function editarUsuario($nome,$senha,$ativo){
        $sql = "INSERT INTO usuarios(nome,senha,perfil_ativo) values (:n,:p,:a)";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("n",$nome);
        $comando->bindValue("p",$senha);
        $comando->bindValue("a",$ativo,PDO::PARAM_BOOL);

        return $comando->execute();
    }

    public function buscarPorNome($n){
        $sql = "SELECT * FROM usuarios WHERE nome=:n";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("n",$n);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

        return $this->hidratar($resultado);
    }

    public function atualizarUsuario($nome,$senha,$ativo){
        $sql = "UPDATE usuarios set nome = :n, senha = :p, perfil_ativo = :a where nome = :n";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("n",$nome);
        $comando->bindValue("p",$senha);
        $comando->bindValue("a",$ativo,PDO::PARAM_BOOL);

        return $comando->execute();
    }

    public function excluirUsuario($nome){
        $sql = "DELETE FROM usuarios WHERE nome = :n";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("n",$nome);

        return $comando->execute();
    }

    public function verificarSeExiste($nome,$senha){
        $sql = "SELECT * FROM usuarios WHERE nome=:n and senha = :p and perfil_ativo = TRUE";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("n",$nome);
        $comando->bindValue("p",$senha);
        $comando->execute();

        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarUsuario(){
        $sql = "SELECT * FROM usuarios";
        $comando = $this->pdo->prepare($sql);
        
        $comando->execute();
        $todosUsuarios = $comando->fetchAll(PDO::FETCH_ASSOC);
        
        return $this->hidratar($todosUsuarios) ;
    }

    public function hidratar($array){
        $todos = [];

        foreach($array as $dado){
            $objeto= new User();
            $objeto->setNome($dado['nome']);
            $objeto->setSenha($dado['senha']);
            $objeto->setAtivo($dado['perfil_ativo']);
            $todos[]=$objeto;
        }
        return $todos;
    }

}