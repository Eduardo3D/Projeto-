<?php


class ValidarPagamento
{
    public function retornar()
    {

        if ($_POST['curso'] == "") {
            $mensagem = '
        <div class="notification is-danger">
            <button class="delete"></button>
                Usuário vazio
        </div>';
            die($mensagem);
        }
        if ($_POST['numerocartao'] == "") {
            $mensagem = '
        <div class="notification is-danger">
            <button class="delete"></button>
                Senha vazia
        </div>';
            die($mensagem);
        }


        $alunoExiste = (new PagamentoBanco())->verificarSeExiste($_POST['curso'], $_POST['numerocartao']);

        if (empty($alunoExiste)) {
            die("Este usuário não existe!");
        }

        $mensagem = '
    <div class="notification is-success">
        <button class="delete"></button>
            Usuário logado
    </div>';
        echo $mensagem;
    }
}
