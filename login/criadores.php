<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>Criadores</title>
     
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
  margin: 0; 
  padding: 0;

}


.card {
    margin: 20px;
  }
  .card-image img {
    width: 100%;
    height: auto;
  }
  .card {
    margin: 20px;
  }
  .card-image img {
    width: 100%;
    height: auto;
  }

    </style>

</head>
<body class="controle">


<section class="hero is-primary is-small">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
  <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      

    </a>

    
  </div>

  <div id="navbarBasicExample" class="navbar-menu">
    <div class="navbar-start">
    <a class="navbar-item has-text-white" href="pagnaprincipal.php">
        Home
      </a>

      <a class="navbar-item has-text-white" href="cursos.php">
        Cursos
      </a>
      <a class="navbar-item has-text-white" href="Areadoaluno.php">
        Area Aluno
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
          <a class="navbar-item has-text-white" href="login.php">
            Logar
          </a>
          <hr class="navbar-divider">
          <a class="navbar-item has-text-white" href="novo-Suporte.php">
            Suporte
          </a>
        </div>
      </div>
    </div>

    </div>
  </div>
</nav>
</div>


<div class="hero-body">
    <div class="container has-text-centered">
      <p class="title has-text-white">On Training</p>
      <p class="subtitle has-text-white">O treinamento gestativo que você precisava!!</p>
    </div>
</div>
</section>






<div class="columns">
<div class="column">
    <div class="card">
  <div class="card-image">
   
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">      
      </div>
      <div class="media-content">
        <p class="title is-4">Eduardo Crevelande</p>
        <p class="subtitle is-6">RGI61</p>
      </div>
    </div>

    <div class="content">
      Fez a maioria da parte do design e ajudou parcialmente na confecção dos CRUDS.
      
      <br>
      <br>
      
    </div>
  </div>
</div>
</div>


<div class="column">
    <div class="card">
  <div class="card-image">
    
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        <figure class="image is-48x48">
         
        </figure>
      </div>
      <div class="media-content">
        <p class="title is-4">Kauã Lins</p>
        <p class="subtitle is-6">RGI61</p>
      </div>
    </div>

    <div class="content">
     Fez grande parte dos CRUDS e ajudou no que podia na parte do design.
      
      <br>
      <br>
      
    </div>
  </div>
</div>
</div>


<div class="column">
    <div class="card">
  <div class="card-image">
    
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">
        
      </div>
      <div class="media-content">
        <p class="title is-4">Vitor Gomes</p>
        <p class="subtitle is-6">RGI61</p>
      </div>
    </div>

    <div class="content">
     Ajudou na parte dos CRUDS e fez um box com texto e botão.
      
      <br>
      <br>
      
    </div>
  </div>
</div>
</div>


</div>











</div>
</div>
<?php require __DIR__ . "/footer.php"; ?>