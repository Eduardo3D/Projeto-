<?php

use UserBanco;

class AtualizarLogar{
    public function retornar(){
      $logar = (new UserBanco())->atualizarLogar($_POST['id'],$_POST['nome'],$_POST['email'],$_POST['senha']);
      if($logar){
        return "Login atualizado";
      };
      return "Erro no login";
    }
}