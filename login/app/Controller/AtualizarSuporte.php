<?php

use AjudaBanco;

class AtualizarSuporte{
    public function retornar(){
      $suporte = (new AjudaBanco())->atualizarSuporte($_POST['id_usuario'],$_POST['comentario'],$_POST['ativo']);
      if($suporte){
        return "Comentário atualizado! ";
      };
      return "Comentário não atulizado! ";
    }
}