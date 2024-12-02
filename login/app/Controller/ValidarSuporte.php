<?php


class ValidarSuporte
{
    public function retornar()
    {

        if ($_POST['id_usuario'] == "") {
            $mensagem = '
        <div class="notification is-danger">
            <button class="delete"></button>
                id vazio
        </div>';
            die($mensagem);
        }
        if ($_POST['comentario'] == "") {
            $mensagem = '
        <div class="notification is-danger">
            <button class="delete"></button>
                comentario vazio
        </div>';
            die($mensagem);
        }


        $suporteExiste = (new AjudaBanco())->verificarSeExiste($_POST['id_usuario'], $_POST['comentario']);

        if (empty($suporteExiste)) {
            die("Mensagem não enviada");
        }

        $mensagem = '
    <div class="notification is-success">
        <button class="delete"></button>
            Mensagem enviada
    </div>';
        echo $mensagem;
    }
}
