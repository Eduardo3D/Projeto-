<?php
require __DIR__ . "/app/Model/UserBanco.php";
require __DIR__ . "/app/Model/User.php";
require __DIR__ . "/app/Controller/ValidarUsuario.php";
require __DIR__ . "/app/Controller/CadastrarUsuario.php";
require __DIR__ . "/app/Controller/ExibirUsuario.php";
require __DIR__ . "/app/Controller/EditarUsuario.php";
require __DIR__ . "/app/Controller/AtualizarUsuario.php";
require __DIR__ . "/app/Controller/ExcluirUsuario.php";



require __DIR__ . "/app/Model/AjudaBanco.php";
require __DIR__ . "/app/Model/Ajuda.php";
require __DIR__ . "/app/Controller/ValidarSuporte.php";
require __DIR__ . "/app/Controller/CadastrarSuporte.php";
require __DIR__ . "/app/Controller/ExibirSuporte.php";
require __DIR__ . "/app/Controller/EditarSuporte.php";
require __DIR__ . "/app/Controller/AtualizarSuporte.php";
require __DIR__ . "/app/Controller/ExcluirSuporte.php";

require __DIR__ . "/app/Model/PagamentoBanco.php";
require_once 'app/Model/PagamentoU.php';
require __DIR__ . "/app/Controller/ValidarPagamento.php";
require __DIR__ . "/app/Controller/CadastrarPagamento.php";
require __DIR__ . "/app/Controller/ExibirPagamento.php";
require __DIR__ . "/app/Controller/EditarPagamento.php";
require __DIR__ . "/app/Controller/AtualizarPagamento.php";
require __DIR__ . "/app/Controller/ExcluirPagamento.php";

require __DIR__ . "/header.php";



if (isset($_GET['acao'])) {

    if ($_GET['acao'] == "login") {
        (new ValidarUsuario)->retornar();
    }

    if ($_GET['acao'] == "cadastrar") {
       echo (new CadastrarUsuario)->retornar();
    }
    if ($_GET['acao'] == "consultar") {
        echo (new ExibirUsuario)->retornar();
     }
     if ($_GET['acao'] == "editar") {
        echo (new EditarUsuario)->retornar();
     }
     if ($_GET['acao'] == "atualizar") {
        echo (new AtualizarUsuario)->retornar();
     }
     if ($_GET['acao'] == "excluir") {
        (new ExcluirUsuario)->retornar();
     }
     require "./menu.php";
   }

   


    if (isset($_GET['acaosup'])) {
    
        if ($_GET['acaosup'] == "login") {
            (new ValidarSuporte)->retornar();
        }
    
        if ($_GET['acaosup'] == "cadastrar") {
           echo (new CadastrarSuporte)->retornar();
        }
        if ($_GET['acaosup'] == "consultar") {
            echo (new ExibirSuporte)->retornar();
         }
         if ($_GET['acaosup'] == "editar") {
            echo (new EditarSuporte)->retornar();
         }
         if ($_GET['acaosup'] == "atualizar") {
            echo (new AtualizarSuporte)->retornar();
         }
         if ($_GET['acaosup'] == "excluir") {
            echo (new ExcluirSuporte)->retornar();
         }
         require "./menuSuporte.php";
      }

      
    if (isset($_GET['acaopag'])) {
    
      if ($_GET['acaopag'] == "login") {
          (new ValidarPagamento)->retornar();
      }
  
      if ($_GET['acaopag'] == "cadastrar") {
         echo (new CadastrarPagamento)->retornar();
      }
      if ($_GET['acaopag'] == "consultar") {
          echo (new ExibirPagamento)->retornar();
       }
       if ($_GET['acaopag'] == "editar") {
          echo (new EditarPagamento)->retornar();
       }
       if ($_GET['acaopag'] == "atualizar") {
          echo (new AtualizarPagamento)->retornar();
       }
       if ($_GET['acaopag'] == "excluir") {
          echo (new ExcluirPagamento)->retornar();
       }
       require "./menuPagamento.php";
    }
   
   
   




require __DIR__ . "/footer.php";