<?php
use UserBanco;

class ValidarLogar
{
    public function retornar()
    {

        if ($_POST['id'] == "") {
            $mensagem = '
        <div class="notification is-danger">
            <button class="delete"></button>
                Id Vazio
        </div>';
            die($mensagem);
        }
        if ($_POST['nome'] == "") {
            $mensagem = '
        <div class="notification is-danger">
            <button class="delete"></button>
                Nome não registrado
        </div>';
            die($mensagem);
        }


        $loginExiste = (new UserBanco())->verificarSeExiste($_POST['logar'], $_POST['nome']);

        if (empty($loginExiste)) {
            die("Este login não existe!");
        }

        $mensagem = '
    <div class="notification is-success">
        <button class="delete"></button>
            Login realizado
    </div>';
        echo $mensagem;
    }
}
