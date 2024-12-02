<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>Home</title>
     
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
          <a class="navbar-item has-text-white" href="novo-suporte.php">
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
<article class="message is-dark">
  <div class="message-header">
    <p>Introdução ao site:</p>
  </div>
  <div class="message-body">
<p class="is-size-5 has-text-weight-medium"">
    
Transforme sua relação com o dinheiro e conquiste a liberdade financeira que sempre desejou. Nosso site oferece uma ampla variedade de cursos completos e acessíveis, elaborados por especialistas renomados para ajudá-lo a gerenciar suas finanças pessoais e empresariais. Descubra como organizar seu orçamento, evitar dívidas, planejar investimentos e criar estratégias eficazes para alcançar seus objetivos de forma segura e eficiente.

Independentemente do seu nível de conhecimento, nossos conteúdos são práticos, atualizados e adaptados às suas necessidades. Além dos cursos, oferecemos materiais exclusivos, dicas personalizadas e uma comunidade engajada para apoiá-lo em sua jornada de aprendizado. Não importa se você está começando agora ou deseja aprimorar suas habilidades, estamos aqui para guiar cada passo do caminho.

Inscreva-se hoje mesmo, aproveite nossos descontos especiais e comece a construir um futuro mais próspero e equilibrado!


</p>

  </div>

</article>
</div>

<div class="column">
<article class="message is-dark">
  <div class="message-header">
    <p>Formulário de comentário:</p>
  </div>
  <div class="message-body">
  <article class="media">
  <div class="media-content">
    <div class="field">
      <p class="control">
        <textarea class="textarea" placeholder="Coloque um comentário..."></textarea><hr><hr><hr><hr>
      </p>
    </div>
    <nav class="level">
      <div class="level-left">
        <div class="level-item">
          Ao mudar de guia o formulário vai ser enviado, apenas marque a caixa ao lado para tal.
        </div>
      </div>
      <div class="level-right">
        <div class="level-item">
          <label class="checkbox">
            <input type="checkbox" /> Pressione aqui
          </label>
        </div>
      </div>
    </nav>
  </div>
</article>

  </div>

</article>
</div>
</div>

<section class="section">
  <h1 class="title">Nosso mais variável jeito de ensino e variedades de cursos pronto para você estudar de jeito fácil, prático e de acesso remoto.
</h1>
 
</section>

<div class="columns">
  <div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://www.globaltec.com.br/2022/wp-content/uploads/2023/07/tecnologia-gestao-financeira-1024x576.jpg"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="media-content">
        <p class="title is-4">Controle de Despesas e Redução de Custos</p>
        
      </div>
    </div>

    <div class="content">
    Ensina técnicas práticas para identificar, analisar e reduzir despesas, tanto no ambiente pessoal quanto empresarial. Inclui estratégias de economia, renegociação de contratos e eliminação de desperdícios para melhorar a eficiência financeira
      <br />
      
    </div>
  </div>
</div>
</div>


  <div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://grupofidere.com.br/wp-content/uploads/2021/05/gestao-financeira-3.jpeg"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="media-content">
        <p class="title is-4"> Gestão de Riscos Financeiros</p>
      </div>
    </div>

    <div class="content">
    Este curso aborda como identificar e mitigar riscos financeiros, desde flutuações de mercado até crises econômicas. Inclui o uso de ferramentas como seguros, diversificação e análise de cenários para proteger empresas e indivíduos contra perdas.
      <br />

    </div>
  </div>
</div>
</div>

  <div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://setracajo.com.br/site/wp-content/uploads/beneficios-de-um-sistema-gestao-financeira.png"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="media-content">
        <p class="title is-4">Gestão de Tesouraria</p>

      </div>
    </div>

    <div class="content">
    Focado na administração do caixa de empresas, este curso ensina como manter o equilíbrio entre entradas e saídas, administrar linhas de crédito e antecipar necessidades de liquidez. Ideal para empresas que desejam maximizar sua eficiência financeira diária.
      <br />
      
    </div>
  </div>
</div>
</div>

  <div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://blog.unoeste.br/wp-content/uploads/2019/10/curso-Gestao-Financeira-ead.jpg"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="media-content">
        <p class="title is-4">Planejamento Tributário e Fiscal</p>
      
      </div>
    </div>

    <div class="content">
    Um curso para ajudar indivíduos e empresas a otimizarem sua carga tributária de forma legal. Ensina a planejar pagamentos de impostos, aproveitar incentivos fiscais e cumprir as obrigações legais sem pagar mais do que o necessário.
      <br />

    </div>
  </div>
</div>
</div>
</div>





<?php require __DIR__."/footer.php"; ?>
