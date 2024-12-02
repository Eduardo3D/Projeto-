<?php

class EditarUsuario
{
    public function retornar()
    {
        $usuario = (new UserBanco)->buscarPorNome($_GET['id']);
        require __DIR__."/../../editar-usuario.php";
       
        }
}
