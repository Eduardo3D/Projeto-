<?php
use UserBanco;

class EditarLogar
{
    public function retornar()
    {
        $logar = (new UserBanco)->buscarPorId($_GET['id']);
        require __DIR__."/../../editar-login.php";
       
        }
}
