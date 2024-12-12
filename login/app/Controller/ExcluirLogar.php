<?php
use UserBanco;

class ExcluirLogar{
    public function retornar(){
      $logars = (new UserBanco())->excluirLogar($_GET['id']);       

    }
}