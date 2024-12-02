<?php


class ExibirPagamento{
    public function retornar(){
      $pagamentos = (new PagamentoBanco())->listarPagamento();       

      require __DIR__."/../../exibir-dados.php";
    }
}