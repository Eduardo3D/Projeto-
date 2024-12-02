<?php


class ExibirSuporte{
    public function retornar(){
      $suportes = (new AjudaBanco())->listarSuporte();       
     
      require __DIR__."/../../exibir-dados-Suporte.php";
    }
}