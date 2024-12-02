<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>Suporte</title>
     
    <style>
        .login {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 90vh;
            margin: 10;
        }
        .login-container {
            width: 400px;
            padding: 20px;
            background-image: linear-gradient(180deg, black, #2d0059);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .error {
            color: red;
            margin-top: 10px;
            display: none;
        }
        .hero.is-primary {
          
          background-image: linear-gradient(180deg, #2d0059,black);

}
.button{

  background-color: black  ;
}
.controle{
  background-color: black;

}

    </style>

</head>
<body class="controle">


<section class="hero is-primary is-small">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io"></a>
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
    <a class="navbar-item has-text-white" href="pagnaprincipal.php">
        Home
      </a>

      <a class="navbar-item has-text-white" href="cursos.php">
        Cursos
      </a>

      <a class="navbar-item has-text-white" href="novo-usuario.php">
        Cadastrar-se
      </a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link has-text-white">
          Mais
        </a>

        <div class="navbar-dropdown">
          <a class="navbar-item has-text-white" href="criadores.php">
            Criadores
          </a>
          <a class="navbar-item is-selected has-text-white">
            Contato
          </a>
          <a class="navbar-item has-text-white" href="login.php">
            Logar
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item has-text-white" href="suporte.php">
            Suporte
          </a>
        </div>
      </div>
    </div>

    </div>
  </div>
</nav>
</div>

<!-- Hero content: will be in the middle -->
<div class="hero-body">
    <div class="container has-text-centered">
      <p class="title has-text-white">On Training</p>
      <p class="subtitle has-text-white">O treinamento gestativo que você precisava!!</p>
    </div>
</div>
</section>


<!-- Login -->

<div class="login">
    <div class="login-container">

    <div class="field">
  <label class="label">Digite seu nome:</label>
  <div class="control">
  <input  class="color-text"type="text" name="username" placeholder="Username">
  </div>
</div>

<div class="field">
  <label class="label">Digite seu email:</label>
  <div class="control">
    <input class="color-text" type="text" placeholder="Email" >
  </div>

</div>

<div class="field">
  <label class="label">Diga a sua dúvida:</label>
  <div class="control">
    <input class="color-text" type="password" name="password" placeholder="Password">
  </div>
</div>

<div class="field">
  <div class="control">
    <label class="checkbox">
      <input type="checkbox">
     Conseguimos te ajudar?
    </label>
  </div>
</div>

<div class="field is-grouped">
  <div class="control">
    <button class="button is-link" type="submit">Enviar dúvida</button> 
  </div>
  <div class="control">
    <button class="button is-link ">Cancelar</button>
  </div>
</div>
</div>
</div>
<?php require __DIR__ . "/footer.php"; ?>
