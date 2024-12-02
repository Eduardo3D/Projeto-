<?php


class ExcluirSuporte{
    public function retornar(){
      $suportes = (new AjudaBanco())->excluirSuporte($_GET['id']);       

    }
}