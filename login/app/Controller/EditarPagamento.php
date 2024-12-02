<?php
use PagamentoBanco;

class EditarPagamento
{
    public function retornar()
    {
        $pagamento = (new PagamentoBanco)->buscarPorCurso($_GET['id']);
        require __DIR__."/../../editar-usuario.php";
       
        }
}
