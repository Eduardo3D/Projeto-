<?php
class EditarSuporte
{
    public function retornar()
    {
        $suportes = (new AjudaBanco)->buscarPorId_usuario($_GET['id']);
        require __DIR__."/../../editar-dados-Suporte.php";
       
        }
}
