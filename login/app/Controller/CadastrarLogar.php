<?php

use UserBanco;

class CadastrarLogar{
    public function retornar(){
      $logar = (new UserBanco())->cadastrarLogar($_POST['id'],$_POST['nome'],$_POST['email'],$_POST['senha']);
      if($logar){
        return "Login Realizado!";
      };
      return "Login não realizado!";
    }
}