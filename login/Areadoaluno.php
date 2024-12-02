<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>Areadoaluno</title>
     
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
    <figure class="image is-4by3">
      <img
        src="https://contasonline.blob.core.windows.net/arquivos/postagens/c-116-vv3.jpg"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="title-info">
        <p class="title is-4">Gestão Básica</p>
        <p class="subtitle is-6">20 horas</p>
      </div>
    </div>

    <div class="content">
    Este curso oferece uma introdução aos fundamentos da administração, proporcionando aos alunos uma visão geral das principais funções de gestão, como planejamento, organização, liderança e controle. Ideal para iniciantes, o curso aborda ferramentas essenciais de tomada de decisão e gestão eficiente de recursos. Ao final, os participantes estarão aptos a aplicar conceitos básicos em cenários reais, contribuindo para a eficácia de projetos e negócios.
    Indicado para iniciantes
    <br>
    2 semanas.
    </div>
  </div>
</div>
</div>


  <div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://media.treasy.com.br/media/2019/11/gestao-financeira-empresarial-1.jpg"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="title-info">
        <p class="title is-4">Gestão para pequenas startups </p>
        <p class="subtitle is-6">50 horas</p>
      </div>
    </div>

    <div class="content">
    Focado nas necessidades específicas de pequenos empreendedores, este curso ensina estratégias práticas para administrar recursos, gerenciar equipes e otimizar processos em empresas de pequeno porte. Os alunos aprenderão a desenvolver planos de negócios, controlar finanças e adotar práticas de marketing eficazes, com o objetivo de melhorar a competitividade e sustentabilidade de suas empresas.
    Indicado para pequenas startups
    <br>
    <br>
    4 semanas.
    </div>
  </div>
</div>
</div>

  <div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://www.sydle.com/blog/assets/post/gestao-financeira-escolar-6398efe440644b0c1f9ff3e9/gestao-financeira-escolar-capa.png"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="title-info">
        <p class="title is-4">Gestão Pessoal</p>
        <p class="subtitle is-6">75 horas</p>
      </div>
    </div>

    <div class="content">
    Este curso explora métodos para desenvolver habilidades pessoais de gestão, como organização do tempo, definição de metas e aprimoramento da produtividade. Os alunos aprenderão a equilibrar compromissos pessoais e profissionais, a lidar com o estresse e a tomar decisões assertivas. Ideal para aqueles que desejam melhorar sua eficácia individual e alcançar objetivos com mais clareza e confiança.
    Indicado a pessoas com metas e foco em produtividade.
    <br>
    <br>
    1 Mês.
    </div>
  </div>
</div>
</div>

  <div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image is-4by3">
      <img
        src="https://cdn.prod.website-files.com/6399c61683700ed8ab159d36/6399f262a2e50c66d9ae925c_Gestao-Financeira-Empresarial.png"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="title-info">
        <p class="title is-4">Gestão de tecnologia</p>
        <p class="subtitle is-6">70 horas</p>
      </div>
    </div>

    <div class="content">
    Voltado para o impacto da tecnologia na administração, este curso capacita os alunos a utilizarem ferramentas tecnológicas para otimizar processos e resolver problemas. Os tópicos incluem gerenciamento de dados, automação de tarefas, segurança cibernética e uso de softwares de gestão. Os alunos serão preparados para incorporar tecnologias emergentes em suas atividades, melhorando a eficiência organizacional e a tomada de decisões estratégicas.
    Voltado para grandes empresas.
    <br>
    2 Meses.
</div>
  </div>
</div>
</div>
</div>



<div class="columns">
<div class="column">
<article class="message is-dark">
  <div class="message-header">
    <p>Introdução ao curso:</p>
  </div>
  <div class="message-body">
<p class="is-size-5 has-text-weight-medium">
    
Bem-vindo ao curso de Gestão Financeira, desenvolvido especialmente pela nossa empresa para capacitar você a dominar as finanças de maneira estratégica e eficiente. Com foco em ferramentas práticas e conhecimento aplicado, este curso prepara você para gerenciar recursos financeiros, planejar orçamentos e tomar decisões que promovam o crescimento sustentável de negócios e projetos pessoais.

Ao longo do curso, você aprenderá:

Como interpretar relatórios financeiros e monitorar indicadores-chave de desempenho.
Técnicas para criar e gerenciar orçamentos eficazes.
Estratégias de controle de custos e maximização de lucros.
Princípios de investimentos e gestão de riscos financeiros.
Nosso objetivo é transformar a maneira como você lida com finanças, garantindo que você tenha o conhecimento necessário para alcançar estabilidade e sucesso financeiro, tanto no âmbito pessoal quanto empresarial. Este é o primeiro passo para assumir o controle de sua trajetória econômica!


</p>

  </div>

</article>
</div>


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

<section class="section">
  <h1 class="title">Nosso mais variável jeito de ensino e variedades de cursos pronto para você estudar de jeito fácil, prático e de acesso remoto.
</h1>
 
</section>






<?php require __DIR__."/footer.php"; ?>
