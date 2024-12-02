<?php
require __DIR__."/PagamentoU.php";

class PagamentoBanco{
    private $pdo;

    public function __construct()
    {
        require __DIR__."/../Database/Conectar.php";
        $this->pdo = $banco;
    }

    public function cadastrarPagamento($curso,$numerocartao,$preco){
        $sql = "INSERT INTO pagamento(curso,numerocartao,preco) values (:c,:n,:p)";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("c",$curso);
        $comando->bindValue("n",$numerocartao);
        $comando->bindValue("p",$preco,PDO::PARAM_BOOL);

        return $comando->execute();
    }

    public function editarPagamento($curso,$numerocartao,$preco){
        $sql = "INSERT INTO pagamento(curso,numerocarpreco,preco) values (:c,:n,:p)";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("c",$curso);
        $comando->bindValue("n",$numerocartao);
        $comando->bindValue("p",$preco,PDO::PARAM_BOOL);

        return $comando->execute();
    }

    public function buscarPorCurso($c){
        $sql = "SELECT * FROM pagamento WHERE curso=:c";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("c",$c);
        $comando->execute();
        $resultado = $comando->fetchAll(PDO::FETCH_ASSOC);

        return $this->hidratar($resultado);
    }

    public function atualizarPagamento($curso,$numerocartao,$preco){
        $sql = "UPDATE pagamento set curso = :c, numerocartao = :n, preco = :p where curso = :c";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("c",$curso);
        $comando->bindValue("n",$numerocartao);
        $comando->bindValue("p",$preco,PDO::PARAM_BOOL);

        return $comando->execute();
    }

    public function excluirPagamento($curso){
        $sql = "DELETE FROM pagamento WHERE curso = :c";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("c",$curso);

        return $comando->execute();
    }

    public function verificarSeExiste($curso,$numerocartao){
        $sql = "SELECT * FROM pagamento WHERE curso=:c and numerocartao = :n and perfil_ativo = TRUE";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("c",$curso);
        $comando->bindValue("n",$numerocartao);
        $comando->execute();

        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listarPagamento(){
        $sql = "SELECT * FROM pagamento";
        $comando = $this->pdo->prepare($sql);
        
        $comando->execute();
        $todosUsuarios = $comando->fetchAll(PDO::FETCH_ASSOC);
        
        return $this->hidratar($todosUsuarios) ;
    }

    public function hidratar($array){
        $todos = [];

        foreach($array as $dado){
            $objeto= new PagamentoU();
            $objeto->setCurso($dado['curso']);
            $objeto->setNumerocartao($dado['numerocartao']);
            $objeto->setPreco($dado['preco']);
            $todos[]=$objeto;
        }
        return $todos;
    }

}