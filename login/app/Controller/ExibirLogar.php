<?php
use UserBanco;

class ExibirLogar{
    public function retornar(){
      $logars = (new UserBanco())->listarLogar();       
     
      require __DIR__."/../../exibir-login.php";
    }
}