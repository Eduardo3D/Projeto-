<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css">
    <title>Cursos</title>
     
    <style>
        
        .hero.is-primary {
          
          background-image: linear-gradient(180deg, #2d0059,black);

}
.controle{

  background-color: black;

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


  .carousel{
        max-width: 500px; /* Define a largura máxima do card */
        margin: 0 auto; /* Centraliza os cards no carrossel */  
    }

    .card-image figure {
        height: 300px; /* Altura menor para a imagem */
       
       
    }

     .card-image figure img {
        width: 100%; /* Garante que a imagem ocupe toda a largura */
        height: 100%; /* Ajusta a altura para preencher */
        object-fit: cover; /* Garante que a imagem mantenha proporções */
    }

    .carousel .card-content {
        padding: 10px; /* Reduz o espaçamento interno */
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

    <div class="has-text-centered">
        <p class="title">Cursos em Destaque</p>
    </div>




    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script>
    $(document).ready(function () {
        $('.carousel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true,
        });
    });
</script>

<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
/>
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
/>

<div class="carousel">
    <!-- Card 1 -->
    <div class="card">
        <div class="card-image">
            <figure class="image">
                <img
                    src="https://www.unicesumar.edu.br/blog/wp-content/uploads/2017/07/engenharia-de-software-mercado.jpg"
                    alt="Placeholder image"
                />
            </figure>
        </div>
      
        <div class="card-content">
            <div class="media">
                <div class="media-left">
                </div>
                <div class="media-content">
                    <p class="title is-4">Gestão Financeira</p>
                    <p class="subtitle is-6">2 Horas</p>
                </div>
            </div>

        </div>
    </div>

    <!-- Card 2 -->
    <div class="card">
       
    <div class="content">

<br>
<strong>Gestão Financeira:</strong>
<br>
A gestão financeira é um conjunto de práticas e ferramentas utilizadas para planejar, monitorar e controlar os recursos financeiros de uma pessoa, empresa ou organização. Ela desempenha um papel essencial na sustentabilidade e no crescimento de qualquer atividade econômica, garantindo que os recursos disponíveis sejam usados de forma eficiente e estratégica. Aqui está um resumo detalhado sobre o tema:
<br>
<br>
<strong>Objetivos da Gestão Financeira:</strong>
<br>
<br>
<strong>Planejamento Financeiro:</strong> Estabelecer metas de curto, médio e longo prazo, alinhando receitas e despesas ao orçamento disponível.
<br>
<br>
<strong>Controle de Fluxo de Caixa:</strong> Monitorar entradas e saídas de recursos para manter a liquidez e evitar déficits.
<br>
<br>
<strong>Tomada de Decisão:</strong> Basear decisões em análises financeiras para aumentar a rentabilidade e reduzir riscos.
<br>
<br>
<strong>Análise de Investimentos:</strong> Identificar e avaliar oportunidades de investimento que maximizem os retornos.
<br>
<br>
<strong>Prevenção de Riscos Financeiros:</strong> Antecipar e mitigar possíveis crises financeiras por meio de reservas e estratégias eficazes.
<br>
<br>

<strong>Orçamento:</strong>
<br>
Um guia detalhado que projeta as receitas e despesas dentro de um período específico.


A gestão financeira é, acima de tudo, um processo contínuo e dinâmico que exige conhecimento técnico e disciplina. Seja para indivíduos ou organizações, dominar os princípios dessa área pode fazer toda a diferença no sucesso econômico e na estabilidade a longo prazo.
<br>
<br />
</div>
        </div>
    </div>
</div>

  

</section>



<div class="columns">
  <div class="column">
    <div class="card">
        
  <div class="card-image">
    <figure class="image">
      <img
        src="https://setting.com.br/wp-content/uploads/2015/04/dicas-gestao-financeira.jpg"
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
    Descrição: Ideal para iniciantes, este curso oferece uma introdução à organização financeira, abordando conceitos como planejamento de orçamento, controle de despesas e fluxo de caixa. Com exercícios práticos, você aprenderá a identificar e corrigir gargalos financeiros para garantir estabilidade e crescimento.
    <br>

  
      <p>Conclusão em 15 dias</p>
    </div>
    <a class="button is-primary is-rounded" href="pagamento.php">Mais info aqui</a>
  </div>
</div>
</div>


<div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image">
      <img
        src="https://blog.ipog.edu.br/wp-content/uploads/2018/06/Gest%C3%A3o-Financeira-920x368.jpg"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="media-content">
        <p class="title is-4">Gestão para pequenas empresas</p>
        <p class="subtitle is-6">50 horas</p>
      </div>
    </div>

    <div class="content">
    Descrição: Voltado para empreendedores, este curso foca na administração eficiente das finanças de pequenos negócios. Temas como precificação, gestão de capital de giro e análise de lucratividade são abordados de forma prática e adaptada à realidade de micro e pequenas empresas.
    <br>


    
    
      <p>Conclusão em 30 Dias</p>
    </div>
    <a class="button is-primary is-rounded" href="Cursopequenas.php">Mais info aqui</a>
  </div>
</div>
</div>

<div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image">
      <img
        src="https://blog.bcntreinamentos.com.br/wp-content/uploads/2018/07/220775-voce-entende-a-importancia-da-gestao-financeira-para-sua-empresa-veja-nesse-artigo.jpg"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="media-content">
        <p class="title is-4">Gestão Pessoal</p>
        <p class="subtitle is-6">75 horas</p>
      </div>
    </div>

    <div class="content">
    Descrição: Este curso foi criado para quem deseja tomar o controle de suas finanças pessoais. Nele, você aprenderá a criar e gerenciar orçamentos, identificar gastos desnecessários e investir de maneira consciente para alcançar metas financeiras de curto e longo prazo.
    <br>
      <br />
      <p>Conclusão em 2 Meses</p>
    </div>
    <a class="button is-primary is-rounded" href="Cursopessoal.php">Mais info aqui</a>
  </div>
</div>
</div>

<div class="column">
    <div class="card">
  <div class="card-image">
    <figure class="image">
      <img
        src="https://pwrgestao.com/wp-content/uploads/2023/03/AdobeStock_570921123-compressed-2048x1365.jpg"
        alt="Placeholder image"
      />
    </figure>
  </div>
  <div class="card-content">
    <div class="media">
      <div class="media-left">

      </div>
      <div class="media-content">
        <p class="title is-4">Gestão de tecnologia</p>
        <p class="subtitle is-6">70 horas</p>
      </div>
    </div>

    <div class="content">
    Descrição: Este curso combina fundamentos de gestão financeira com o uso de ferramentas tecnológicas. Aprenda a utilizar softwares de controle financeiro, plataformas de análise de dados e aplicativos que facilitam a tomada de decisão em tempo real.
    <br>
    <br>
    <br>
      <p>Conclusão em 3 meses</p>
    </div>
    <a class="button is-primary is-rounded" href="Cursoetecnologia.php">Mais info aqui</a>
  </div>
</div>
</div>
</div>


<?php require __DIR__ . "/footer.php"; ?>
