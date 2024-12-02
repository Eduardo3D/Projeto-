<?php

use PagamentoBanco;

class atualizarPagamento{
    public function retornar(){
      $pagamento = (new PagamentoBanco())->atualizarPagamento($_POST['curso'],$_POST['numerocartao'],$_POST['preco']);
      if($pagamento){
        return "Pagamento atualizado! ";
      };
      return "Pagamento não atulizado! ";
    }
}