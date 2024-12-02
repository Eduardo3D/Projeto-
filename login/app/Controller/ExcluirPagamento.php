<?php


class ExcluirPagamento{
    public function retornar(){
      $usuarios = (new PagamentoBanco())->excluirPagamento($_GET['id']);       

    }
}