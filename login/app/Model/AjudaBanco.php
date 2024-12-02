<?php
use Ajuda;
class AjudaBanco{
    private $pdo;

    public function __construct()
    {
        require __DIR__."/../Database/Conectar.php";
        $this->pdo = $banco;
    }

    public function cadastrarSuporte($id_usuario,$comentario,$ativo){
        $sql = "INSERT INTO suporte(id_usuario,comentario,perfil_ativo) values (:i,:c,:a)";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$id_usuario);
        $comando->bindValue("c",$comentario);
        $comando->bindValue("a",$ativo,PDO::PARAM_BOOL);

        return $comando->execute();
    }

    public function editarSuporte($id_usuario,$comentario,$ativo){
        $sql = "INSERT INTO suporte(id_usuario,comentario,perfil_ativo) values (:i,:c,:a)";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$id_usuario);
        $comando->bindValue("c",$comentario);
        $comando->bindValue("a",$ativo,PDO::PARAM_BOOL);

        return $comando->execute();
    }

    public function buscarPorId_usuario($i){
        $sql = "SELECT * FROM suporte WHERE id_usuario =:i";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$i);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

        return $this->hidratar($resultado);
    }

    public function atualizarSuporte($id_usuario,$comentario,$ativo){
        $sql = "UPDATE suporte set id_usuario = :i, comentario = :c, perfil_ativo = :a where id_usuario = :i";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$id_usuario);
        $comando->bindValue("c",$comentario);
        $comando->bindValue("a",$ativo,PDO::PARAM_BOOL);

        return $comando->execute();
    }

    public function excluirSuporte($id_usuario){
        $sql = "DELETE FROM suporte WHERE id_usuario = :i";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$id_usuario);

        return $comando->execute();
    }

    public function verificarSeExiste($id_usuario,$comentario){
        $sql = "SELECT * FROM suporte WHERE id_usuario=:i and comentario = :c and perfil_ativo = TRUE";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i",$id_usuario);
        $comando->bindValue("c",$comentario);
        $comando->execute();

        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarSuporte(){
        $sql = "SELECT * FROM suporte";
        $comando = $this->pdo->prepare($sql);
        
        $comando->execute();
        $todosUsuarios = $comando->fetchAll(PDO::FETCH_ASSOC);
        
        return $this->hidratar($todosUsuarios) ;
    }

    public function hidratar($array){
        $todos = [];

        foreach($array as $dado){
            $objeto= new Ajuda();
            $objeto->setId_usuario($dado['id_usuario']);
            $objeto->setComentario($dado['comentario']);
            $objeto->setAtivo($dado['perfil_ativo']);
            $todos[]=$objeto;
        }
        return $todos;
    }

}