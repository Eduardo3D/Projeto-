<?php

use PagamentoBanco;

class CadastrarPagamento{
    public function retornar(){
      $pagamento = (new PagamentoBanco())->cadastrarPagamento($_POST['curso'],$_POST['numerocartao'],$_POST['preco']);
      if($pagamento){
        return "Pagamento cadastrado!";
      };
      return "Pagamento não cadastrado!";
    }
}