<!DOCTYPE html>
<html>

<head lang="pt-br">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=" A CSTMA (Consultoria e Assessoria em Segurança do Trabalho) é uma 
  empresa prestadora de serviços na área de Segurança do Trabalho, Saúde Ocupacional, Psicologia Clínica e Social, 
  Meio ambiente, entre outros, atendendo tanto a empresas de pequeno porte, quanto grandes organizações. ">

  <title>CSTMA - Consultoria e Assessoria em Segurança do Trabalho</title>
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">

  <!-- FontAwesome vector font -->
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,600' rel='stylesheet' type='text/css' />
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="css/home.css" rel="stylesheet" />
  <link href="css/menu.css" rel="stylesheet" />
  <link href="css/contact.css" rel="stylesheet" />
</head>

<body>
  <div class="topnav" id="myTopnav">
    <a href="index.html">Início</a>
    <a href="servicos.html#servicos">Serviços</a>
    <a href="treinamentos.html#treinamentos">Treinamentos</a>
    <a href="#" class="active">Contato</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <div class="section-container header-container" style="height:550px;">
    <div class="stripes-header"></div>
    <div class="section-content">
      <div class="subscribe-top-header">
        <div class="features-title" style="margin:auto; width:100%;">
          <h2>Assessoria em Saúde e Segurança do Trabalho.</h2>
        </div>
      </div>
      
      <div class="subscribe-content">
        <div class="subscribe-table-content">
          <div class="big-text">
            <h1>Melhore seu projeto de capital com nossas soluções de <strong>Gestão da Segurança</strong></h1>
          </div>
          <div class="small-text">
            <h1>Temos uma equipe capacitada pronta para lhe oferecer as melhores soluções.</h1>
          </div>
          <a href="servicos.html#servicos" data-ga-event="subscribe-cta-main" class="subscribe-button" >
            Nossos serviços
          </a>
        </div>
        <div class="subscribe-image-container">
          <img src="img/home/logo.png" />
        </div>
      </div>
    </div>
  </div>
  
  <?php
    $assunto = wordwrap($assunto,70);

    $assunto = "Nome: ".$nome."<br>Cidade: ".$cidade."<br>E-mail: ".$email."<br><br>".$assunto
    // send email
    mail("jrdulahan@gmail.com", "Contato pelo site", $assunto);
    ?>
  ?>

  <div class="section-container footer-container">
    <div class="section-content footer-content">
      <div class="geekieui-logo-header">
        <img src="img/home/cstma_logo.png" />
      </div>
      <div class="footer-text">
        &#169; <span>2016</span>-<span id="anoAtual"></span> CSTMA. Todos os Direitos Reservados.
      </div>
    </div>
  </div>
  
  <a href="https://api.whatsapp.com/send?phone=5573988377982&text=Oi, como podemos te ajudar?" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
  </a>

  <script>
    var d = new Date();
    var ano = d.getFullYear();
    document.getElementById("anoAtual").innerHTML = ano;
  </script>

  <!--Menu-->
  <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>

  <!--===== SCROLL REVEAL =====-->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!--===== MAIN JS =====-->
  <script src="js/main.js"></script>
</body>

</html>