<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>OnTraining</title>
     
    <style>
        .login {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 110vh;
            margin: 10;
        }
        .login-container {
            width: 500px;
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
.color-text{
  background-color:black ;
}
.title{
  text-align: center;
}
.numeros{
  display: flex; /* Ativa o Flexbox */
    justify-content: center; /* Centraliza horizontalmente */
    align-items: center;
}
.card {
    margin: 20px;
  }
  .card-image img {
    width: 100%;
    height: auto;
  }









  .carousel {
    position: relative;
    width: 80%;
    margin: auto;
    overflow: hidden;
    border-radius: 10px;
}

.carousel-images {
    display: flex;
    transition: transform 0.5s ease-in-out;
}

.carousel-images img {
    width: 100%;
    height: auto;
}

button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    border-radius: 50%;
    padding: 10px;
    cursor: pointer;
    z-index: 2;
}

button.prev {
    left: 10px;
}

button.next {
    right: 10px;
}

button:hover {
    background: rgba(0, 0, 0, 0.8);
}


.pic-ctn {
  width: 100vw;
  height: 200px;
}

@keyframes display {
  0% {
    transform: translateX(200px);
    opacity: 0;
  }
  10% {
    transform: translateX(0);
    opacity: 1;
  }
  20% {
    transform: translateX(0);
    opacity: 1;
  }
  30% {
    transform: translateX(-200px);
    opacity: 0;
  }
  100% {
    transform: translateX(-200px);
    opacity: 0;
  }
}

.pic-ctn {
  position: relative;
  width: 100vw;
  height: 300px;
  margin-top: 15vh;
}

.pic-ctn > img {
  position: absolute;
  top: 0;
  left: calc(50% - 100px);
  opacity: 0;
  animation: display 10s infinite;
}

img:nth-child(2) {
  animation-delay: 2s;
}
img:nth-child(3) {
  animation-delay: 4s;
}
img:nth-child(4) {
  animation-delay: 6s;
}
img:nth-child(5) {
  animation-delay: 8s;
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

