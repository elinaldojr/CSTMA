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
    $errors = [];
    $errorMessage = '';
    $confirmacao = '';
    
    if (!empty($_POST)) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $mensagem = $_POST['mensagem'];

    
        if (empty($nome)) {
            $errors[] = 'Nome em branco';
        }
    
        if (empty($email)) {
            $errors[] = 'Email em branco';
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email inválido';
        }
    
        if (empty($mensagem)) {
            $errors[] = 'Memssagem em branco';
        }
    
        if (empty($cidade)) {
          $errors[] = 'Cidade em branco';
        }
        
        if (empty($errors)) {
            $toEmail = 'cerqueiramoura@hotmail.com, marcelokarate2003@yahoo.com.br';
            $emailSubject = 'Novo email do formulário de contato (Site)';
            $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];
    
            $bodyParagraphs = ["Nome: {$nome}", "<br>Email: {$email}", "<br>Cidade: {$cidade}", "<br><br>Menssagem:", $mensagem];
            $body = join(PHP_EOL, $bodyParagraphs);
    
            if (mail($toEmail, $emailSubject, $body, $headers)) {
                //header('Location: contato.html');
                $confirmacao = "Sua mensagem foi enviado com sucesso. Em breve entraremos em contato.";
            } else {
                $errorMessage = 'Oops, aconteceu algo de errado. Por favor tente novamente mais tarde';
            }
        } else {
            $allErrors = join('<br/>', $errors);
            $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
        }
      }
    }
    
    ?>
  <div id="contato" class="container">
    <h2 style="text-align: center;"><?php echo $confirmacao;?></h2>
  </div>

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