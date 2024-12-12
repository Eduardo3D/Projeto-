<?php
require __DIR__ . "/app/Model/UserBanco.php";
require __DIR__ . "/app/Controller/ValidarLogar.php";
require __DIR__ . "/app/Controller/CadastrarLogar.php";
require __DIR__ . "/app/Controller/ExibirLogar.php";
require __DIR__ . "/app/Controller/EditarLogar.php";
require __DIR__ . "/app/Controller/AtualizarLogar.php";
require __DIR__ . "/app/Controller/ExcluirLogar.php";

require __DIR__ . "/header.php";

/*if (!isset($_POST['usuario']) || !isset($_POST['senha'])) {
    header("Location:./login.php");
}
*/

if (isset($_GET['acao'])) {

    if ($_GET['acao'] == "login") {
        (new ValidarLogar)->retornar();
    }

    if ($_GET['acao'] == "cadastrar") {
       echo (new CadastrarLogar)->retornar();
    }
    if ($_GET['acao'] == "consultar") {
        echo (new ExibirLogar)->retornar();
     }
     if ($_GET['acao'] == "editar") {
        echo (new EditarLogar)->retornar();
     }
     if ($_GET['acao'] == "atualizar") {
        echo (new AtualizarLogar)->retornar();
     }
     if ($_GET['acao'] == "excluir") {
        echo (new ExcluirLogar)->retornar();
     }
    require "./menu.php";

}

require __DIR__ . "/footer.php";