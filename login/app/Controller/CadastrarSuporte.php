<?php

use AjudaBanco;

class CadastrarSuporte{
    public function retornar(){
      $suporte = (new AjudaBanco())->cadastrarSuporte($_POST['id_usuario'],$_POST['comentario'],$_POST['ativo']);
      if($suporte){
        return "Usuario cadastrado!";
      };
      return "Usuario não cadastrado!";
    }
}