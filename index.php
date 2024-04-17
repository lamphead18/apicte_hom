<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="utf-8" />
    <title>APICTE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="ApiCTE Plataforma Saas para download de XML das CTE´s emitidas à sua Empresa" name="description" />
    <meta content="APICTE" name="author" />
    
    <!-- Theme favicon -->
    <link rel="shortcut icon" href="assets2/favicon-b2cb7bc5.ico">
    <!--  Head js -->
    
  <script type="module" crossorigin src="assets2/theme-3a535b87.js"></script>
  <link rel="stylesheet" href="assets2/theme-e2a9673d.css">
  
  <style>
      .modal {
          display: none; /* Esconder o modal por padrão */
          position: fixed; /* Ficar na mesma posição na página */
          z-index: 1; /* Ficar acima de todo o conteúdo */
          left: 0;
          top: 0;
          width: 100%; /* Largura total */
          height: 100%; /* Altura total */
          overflow: auto; /* Habilitar rolagem se necessário */
          background-color: rgba(0, 0, 0, 0.4); /* Fundo semi-transparente */
        }
        
        /* Conteúdo do modal */
        .modal-content {
          background-color: #fefefe;
          margin: 15% auto; /* Centralizar verticalmente e deixar um pouco de margem nas laterais */
          padding: 20px;
          border: 1px solid #888;
          width: 60%; /* Largura padrão - dispositivos móveis */
        }
        
        /* Media query para dispositivos com largura maior que 768px (desktop e tablet) */
        @media screen and (min-width: 768px) {
          .modal-content {
            width: 30%; /* Largura para desktop e tablet */
          }
        
        /* Botão de fechar (x) */
        .close {
          color: #aaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: black;
          text-decoration: none;
          cursor: pointer;
        }
        
        #modalMessage {
          text-align: center; /* Centralizar o texto */
        }
  </style>
  
</head>

<body class="">

    <!-- Main Navigation Menu -->
    <header id="navbar" class="fixed inset-x-0 top-0 z-60 transition-all duration-500 py-4 flex items-center [&.nav-sticky]:bg-white/90 [&.nav-sticky]:backdrop-blur-3xl [&.nav-sticky]:shadow-md dark:[&.nav-sticky]:bg-default-50/80">
        <div class="container">
            <div class="flex items-center justify-between flex-wrap lg:flex-nowrap gap-4">
                <div class="w-full lg:w-auto flex items-center justify-between">
                    <!-- Navbar Brand Logo -->
                    <a href="home.html">
                        <img src="assets2/img/logo.png" alt="logo" class="h-10 flex dark:hidden">
                        <img src="assets2/img/logob.png" alt="logo" class="h-10 hidden dark:flex">
                    </a>
    
                    <!-- Mobile Menu Toggle Button -->
                    <button class="hs-collapse-toggle lg:hidden inline-block" id="hs-unstyled-collapse" data-hs-collapse="#mobileMenu" data-hs-type="collapse">
                        <i data-lucide="menu" class="w-7 h-7 text-default-600 hover:text-default-900"></i>
                    </button>
                </div>
    
                <div id="mobileMenu" class="hs-collapse transition-all duration-300 lg:basis-auto basis-full grow hidden lg:flex items-center justify-center mx-auto mt-2 lg:mt-0 overflow-hidden">
                    <!-- Nevigation Menu -->
                    <ul class="menu flex lg:items-center justify-center flex-col lg:flex-row gap-y-2">
                        <li class="menu-item text-default-800 lg:mx-2 transition-all duration-500 hover:text-primary [&.active]:text-primary">
                            <a class="inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 rounded-full capitalize" href="#home">Home </a>
                        </li>
                        <li class="menu-item text-default-800 lg:mx-2 transition-all duration-500 hover:text-primary [&.active]:text-primary">
                            <a class="inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 rounded-full capitalize" href="#features">Recursos </a>
                        </li>
                        <li class="menu-item text-default-800 lg:mx-2 transition-all duration-500 hover:text-primary [&.active]:text-primary">
                            <a class="inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 rounded-full capitalize" href="#faq">Dúvidas </a>
                        </li>
                        <li class="menu-item text-default-800 lg:mx-2 transition-all duration-500 hover:text-primary [&.active]:text-primary">
                            <a class="inline-flex items-center text-sm lg:text-base font-medium py-0.5 px-2 rounded-full capitalize" href="#pricing">Preço </a>
                        </li>
                    </ul>
                </div>
                
                <div class="ms-auto shrink hidden lg:inline-flex gap-2">
                    <a href="login" class="py-1.5 px-6 inline-flex items-center gap-2 rounded-full text-base text-white bg-primary hover:bg-primary-700 transition-all duration-500">
                        <i data-lucide="monitor-check" class="h-4 w-4 fill-white/40"></i>
                        <span class="hidden sm:block">Contrate</span>
                    </a>
                </div>
            </div>
        </div>
    </header>
    <!-- Hero Section Start -->
    <section id="home" class="py-40 bg-cover bg-no-repeat bg-[url('../images/other/bg-lines-2.png')] dark:bg-[url('../images/other/bg-lines-2-dark.png')]">
        <div class="container">
            <div class="grid lg:grid-cols-2 gap-6 items-center">
                <div>
                    <div class="max-w-lg text-center lg:text-start">
                        <h2 class="lg:text-6xl/tight sm:text-5xl text-4xl font-medium text-default-950">Baixe todas suas Notas Fiscais e CTe´s.</h2>
                        <p class="text-base font-medium my-6"><strong>Faça seu Cadastro Gratuito</strong> e veja os XML´s emitidos para sua Empresa.</p>
                        <a href="login" class="inline-flex items-center justify-center gap-2 border border-primary/50 text-primary py-2 px-6 rounded-md bg-primary/10 hover:text-white hover:bg-primary transition-all duration-500">CADASTRO
                            <i data-lucide="arrow-up-right" class="h-6 w-6"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <img src="assets2/img/baner1.png" class="h-full w-full" alt="">
                </div>
            </div> <!-- grid End -->
        </div>
    </section>
    <!-- Hero end -->

    <!-- Start features -->
    <section id="features" class="lg:py-20 py-10">
        <div class="container">
            <div class="flex items-end justify-between mb-10">
                <div class="max-w-2xl mx-auto text-center">
                    <span class="py-1 px-3 rounded-md text-xs font-medium uppercase tracking-wider border border-default-300 text-default-950">Recursos Tecnológicos</span>
                    <h2 class="text-4xl font-medium capitalize text-default-950 my-4">Conheça os Recursos Tecnológicos disponíveis em nossa Plataforma.</h2>
                </div>
            </div><!-- flex End-->

            <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 items-center rounded-md overflow-hidden border border-default-200">
                <div class="group border-default-200">
                    <div class="sm:p-10 p-8">
                        <span>
                            <i data-lucide="component" class="h-14 w-14 text-default-950"></i>
                        </span>
                        <h2 class="text-2xl font-medium text-default-950 mb-4 mt-8">Repositório</h2>
                        <p class="text-base text-default-600 mb-6">Nossa API Baixa diariamente e de forma automática TODOS os XML´s emitidos para sua Empresa.</p>
                        <a href="login" class=" text-lg font-medium text-default-950">Contrate
                            <i data-lucide="move-right" class="group-hover:opacity-100 opacity-0 w-6 h-6 inline-block transition-all duration-500 group-hover:translate-x-2 will-change-transform"></i>
                        </a>
                    </div>
                </div><!-- end col -->

                <div class="group xl:border-s border-default-200">
                    <div class="sm:p-10 p-8">
                        <span>
                            <i data-lucide="message-circle" class="h-14 w-14 text-default-950"></i>
                        </span>
                        <h2 class="text-2xl font-medium text-default-950 mb-4 mt-8">Whatsapp</h2>
                        <p class="text-base text-default-600 mb-6">Envie notificações das mudanças de status dos produtos vendidos para o whatsapp de seus clientes.</p>
                        <a href="login" class=" text-lg font-medium text-default-950">Contrate
                            <i data-lucide="move-right" class="group-hover:opacity-100 opacity-0 w-6 h-6 inline-block transition-all duration-500 group-hover:translate-x-2 will-change-transform"></i>
                        </a>
                    </div>
                </div><!-- end col -->

                <div class="group md:border-s border-default-200">
                    <div class="sm:p-10 p-8">
                        <span>
                            <i data-lucide="receipt" class="h-14 w-14 text-default-950"></i>
                        </span>
                        <h2 class="text-2xl font-medium text-default-950 mb-4 mt-8">Receita</h2>
                        <p class="text-base text-default-600 mb-6">Veja quanto em Real a Mais sua Empresa pagou de Impostos durante o Ano para restituir este valor na Receita Federal</p>
                        <a href="login" class=" text-lg font-medium text-default-950">Contrate
                            <i data-lucide="move-right" class="group-hover:opacity-100 opacity-0 w-6 h-6 inline-block transition-all duration-500 group-hover:translate-x-2 will-change-transform"></i>
                        </a>
                    </div>
                </div><!-- end col -->
            </div><!-- grid End-->
        </div><!-- container End-->
    </section>
    <!-- End features -->

    <!-- Start Faq -->
    <section id="faq" class="lg:py-20 py-10">
        <div class="container">
            <div class="flex items-end justify-between mb-10">
                <div class="max-w-2xl mx-auto text-center">
                    <span class="py-1 px-3 rounded-md text-xs font-medium uppercase tracking-wider border border-default-300 text-default-950">Perguntas e Respostas</span>
                    <h2 class="text-3xl font-medium capitalize text-default-950 my-4">Tire suas dúvidas e obtenha maiores esclarecimentos da plataforma</h2>
                </div>
            </div><!-- flex End-->

            <div class="grid lg:grid-cols-2 grid-cols-1 gap-10 items-center">
                <div>
                    <img src="assets2/4-192467ab.svg" alt="">
                </div><!-- col End-->

                <div class="lg:pb-20">
                    <div class="hs-accordion-group space-y-4">
                        <div class="hs-accordion border border-default-200 rounded-lg overflow-hidden active" id="faq-1">
                            <button class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-accordion-1">
                                <h5 class="text-base font-semibold flex">
                                    Preciso pagar algo para Testar?
                                </h5>
                                <i data-lucide="chevron-up" class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                            </button>
                            <div id="faq-accordion-1" class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-1">
                                <div class="px-6 pb-4 pt-0">
                                    <p class="text-sm font-medium text-default-600">Não! <br>Faça seu Cadastro gratuitamente e obtenha uma amostra de como funciona nossa plataforma.</p>
                                </div>
                            </div>
                        </div><!-- col End-->

                        <div class="hs-accordion border border-default-200 rounded-lg overflow-hidden" id="faq-2">
                            <button class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-2">
                                <h5 class="text-base font-semibold flex">
                                    Pagarei algo para obter: Whatsapp e Receita?
                                </h5>
                                <i data-lucide="chevron-up" class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                            </button>
                            <div id="faq-2" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-2">
                                <div class="px-6 pb-4 pt-0">
                                    <p class="text-sm font-medium text-default-600">Demais recursos fora do plano gratuito sim.!<br>Temos além dos serviços prestados, auxílio no uso, suporte e integrações com outras API´s.</p>
                                </div>
                            </div>
                        </div><!-- col End-->

                        <div class="hs-accordion border border-default-200 rounded-lg overflow-hidden" id="faq-3">
                            <button class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-3">
                                <h5 class="text-base font-semibold flex">
                                    Posso integrar com meu ERP ou Sistema interno?
                                </h5>
                                <i data-lucide="chevron-up" class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                            </button>
                            <div id="faq-3" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-3">
                                <div class="px-6 pb-4 pt-0">
                                    <p class="text-sm font-medium text-default-600">Sim!<br>Temos API própria com documentação e você terá disponível para integrar com seus Sistema automaticamente via token de segurança</p>
                                </div>
                            </div>
                        </div><!-- col End-->

                        <div class="hs-accordion border border-default-200 rounded-lg overflow-hidden" id="faq-2">
                            <button class="hs-accordion-toggle capitalize px-6 py-4 inline-flex items-center justify-between gap-x-3 w-full text-left text-default-950 transition-all" aria-controls="faq-2">
                                <h5 class="text-base font-semibold flex">
                                    Ao contratar o Recurso de Receita, já recebo o valor?
                                </h5>
                                <i data-lucide="chevron-up" class="h-4 w-4 transition-all duration-500 hs-accordion-active:-rotate-180"></i>
                            </button>
                            <div id="faq-2" class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="faq-2">
                                <div class="px-6 pb-4 pt-0">
                                    <p class="text-sm font-medium text-default-600">Nossa plataforma mostra durante o prazo de 1 ano, quanto sua Empresa pagou A MAIOR de Impostos, para entrar com Recurso de Restituição nos órgãos Competentes.</p>
                                </div>
                            </div>
                        </div><!-- col End-->
                    </div>
                </div><!-- col End-->
            </div><!-- grid End-->
        </div><!-- container End-->
    </section>
    <!-- End faq -->


    <!-- Start Pricing -->
    <section id="pricing" class="lg:py-20 py-10">
        <div class="container">
            <div class="grid xl:grid-cols-5 gap-6">
                <div class="xl:col-span-2">
                    <span class="py-1 px-3 rounded-md text-xs font-medium uppercase tracking-wider border border-default-300 text-default-950">Preço</span>
                    <h2 class="text-4xl font-medium text-default-950 mt-6">Plano Gratuito:</h2>
                    <p class="text-base font-medium">Nesta versão você terá direito de ver e baixar até 10 Notas p/ mês.</p>
                    
                        <div class="p-6 py-8">
                            <h6 class="font-bold uppercase mb-5 text-primary">Plano Basic</h6>

                            <div class="flex mb-2 text-default-950">
                                <span class="text-xl font-semibold">R$</span>
                                <span class="price text-4xl font-semibold mb-0">120</span>
                                <span class="text-xl font-semibold self-end mb-1">/mês</span>
                            </div>
                            <p>+ o plano gratuito</p>

                            <ul role="list" class="mt-4 mb-5 -ms-3 text-sm text-default-white">
                                <li class="flex items-center gap-2 py-1">
                                    <!-- svg icon -->
                                    <i data-lucide="dot" class="inline-block h-8 w-8 stroke-primary"></i>
                                    <span class="text-base text-default-950">download de até 1.000 Notas p/ Mês</span>
                                </li>
                            </ul>
                            <a href="login" class="border inline-block  border-primary/50 text-primary py-2 px-6 rounded-md bg-primary/10 hover:text-white hover:bg-primary transition-all duration-500">Contrate</a>
                        </div>
                    
                </div>

                <div class="xl:col-span-3 mt-8 lg:mt-0">
                    <div class="lg:ms-8">
                        <div class="grid md:grid-cols-2 grid-cols-1 gap-x-10 gap-y-6">
                            <div class="group relative shadow rounded-md z-2 bg-default-100 dark:bg-default-50">
                                <div class="p-6 py-8">
                                    <h6 class="font-bold uppercase mb-5 text-primary">Plano Advanced</h6>

                                    <div class="flex mb-2 text-default-950">
                                        <span class="text-xl font-semibold">R$</span>
                                        <span class="price text-4xl font-semibold mb-0">290</span>
                                        <span class="text-xl font-semibold self-end mb-1">/mês</span>
                                    </div>
                                    <p>+ o plano gratuito e Basic</p>

                                    <ul role="list" class="mt-4 mb-5 -ms-3 text-sm text-default-white">
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i data-lucide="dot" class="inline-block h-8 w-8 stroke-primary"></i>
                                            <span class="text-base text-default-950">Download ilimitado de Notas</span>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i data-lucide="dot" class="inline-block h-8 w-8 stroke-primary"></i>
                                            <span class="text-base text-default-950">Dashboard de Acompanhamento</span>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i data-lucide="dot" class="inline-block h-8 w-8 stroke-primary"></i>
                                            <span class="text-base text-default-950">API do Whatsapp Notifications</span>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i data-lucide="dot" class="inline-block h-8 w-8 stroke-primary"></i>
                                            <span class="text-base text-default-950">Workflow de e-mail e Whatsapp</span>
                                        </li>
                                    </ul>
                                    <a href="login" class="border inline-block  border-primary/50 text-primary py-2 px-6 rounded-md bg-primary/10 hover:text-white hover:bg-primary transition-all duration-500">Contrate</a>
                                </div>
                            </div>

                            <div class="group relative shadow rounded-md z-3 bg-default-100 dark:bg-default-50">
                                <div class="p-6 py-8">
                                    <h6 class="font-bold uppercase mb-5 text-primary">Plano Enterprise</h6>

                                    <div class="flex mb-2 text-default-950">
                                        <span class="text-xl font-semibold">R$</span>
                                        <span class="price text-4xl font-semibold mb-0">690</span>
                                        <span class="text-xl font-semibold self-end mb-1">/mês</span>
                                    </div>
                                    <p>+ o plano Basic e Advanced</p>

                                    <ul role="list" class="mt-4 mb-5 -ms-3 text-sm text-default-white">
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i data-lucide="dot" class="inline-block h-8 w-8 stroke-primary"></i>
                                            <span class="text-base text-default-950">Controle Fiscal</span>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i data-lucide="dot" class="inline-block h-8 w-8 stroke-primary"></i>
                                            <span class="text-base text-default-950">Dashboard de Acompanhamento</span>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i data-lucide="dot" class="inline-block h-8 w-8 stroke-primary"></i>
                                            <span class="text-base text-default-950">Workflow automaizados</span>
                                        </li>
                                        <li class="flex items-center gap-2 py-1">
                                            <!-- svg icon -->
                                            <i data-lucide="dot" class="inline-block h-8 w-8 stroke-primary"></i>
                                            <span class="text-base text-default-950">Simulação em tempo real</span>
                                        </li>
                                    </ul>
                                    <a href="login" class="border inline-block  border-primary/50 text-primary py-2 px-6 rounded-md bg-primary/10 hover:text-white hover:bg-primary transition-all duration-500">Contrate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing -->



    <!-- Footer -->
    <footer>
        <div class="border-y border-default-200">
            <div class="container py-20">
                <div class="grid xl:grid-cols-5 md:grid-cols-3 gap-10 lg:gap-16">
                    <div class="xl:col-span-2 md:col-span-3">
                        <div>
                            <a href="#">
                                <img src="assets2/img/logo.png" alt="logo" class="h-10 flex dark:hidden">
                                <img src="assets2/img/logob.png" alt="logo" class="h-10 hidden dark:flex">
                            </a>
                            <p class="text-base font-medium  text-default-800 mt-6">Plataforma inteligente para download automática de Notas Fiscais e CTe´s e integração com Whatsapp para enviar o status de entrega de seus produtos vendidos aos seus clientes.</p>
                            <form method="post" action="index" class="space-y-2 mt-6">
                                <div class="relative">
                                    <input type="email" id="email" name="email" class="py-4 ps-4 pe-16 w-full h-12 placeholder:text-default-600 text-default-950 rounded-lg bg-default-100 border-default-200 focus:ring-0 focus:border-default-200" placeholder="Informe seu e-mail" name="email">
                                    <button type="submit" class="inline-flex items-center justify-center gap-2 px-6 absolute top-[6px] end-[6px] h-9 bg-primary/20 text-primary rounded-md transition-all duration-500 hover:bg-primary hover:text-white">
                                        <i data-lucide="move-right" class="h-6 w-6"></i>
                                    </button>
                                </div>
                            </form><!-- form End -->
                            <?php
                            
                                use PHPMailer\PHPMailer\PHPMailer;
                                use PHPMailer\PHPMailer\Exception;
                                
                                require 'PHPMailer/src/PHPMailer.php';
                                require 'PHPMailer/src/SMTP.php';
                                require 'PHPMailer/src/Exception.php';
                                
                                // Verifica se o formulário foi submetido
                                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                    // Verifica se o campo de e-mail está preenchido
                                    if (isset($_POST['email'])) {
                                        // Recupera o e-mail informado no formulário
                                        $email = $_POST['email'];
                                
                                        // Cria uma nova instância do PHPMailer
                                        $mail = new PHPMailer(true);
                                
                                        try {
                                            // Configuração do servidor SMTP
                                            $mail = new PHPMailer\PHPMailer\PHPMailer();
                                            $mail->isSMTP();
                                            $mail->Host = 'mail.gpsoft.com.br'; // Configure o servidor SMTP
                                            $mail->SMTPAuth = true;
                                            $mail->Username = 'geraldo@gpsoft.com.br'; // Configure o e-mail de onde será enviado
                                            $mail->Password = 'Odlareg2930'; // Configure a senha do e-mail
                                            $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
                                            $mail->Port = 587;
                                            
                                            // Define o remetente e o destinatário
                                            $mail->setFrom('nao-responda@gpsoft.com.br', 'GPSOFT Sistemas - CTE');
                                            $mail->addAddress($email);
                                            
                                            // Define o assunto e o conteúdo do e-mail
                                            $mail->Subject = 'Enviando dados do Cliente';
                                            $mail->Body    = 'E-mail do cliente: ' . $email;
                                
                                            // Envia o e-mail
                                            $mail->send();
                                            echo 'E-mail enviado com sucesso!';
                                        } catch (Exception $e) {
                                            echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
                                        }
                                    } else {
                                        echo 'O campo de e-mail está vazio.';
                                    }
                                }
                                ?>
                        </div>
                    </div><!-- col End -->
                    
                   <div id="myModal" class="modal" style="display: none;">
                      <div class="modal-content">
                        <!--<span class="close">&times;</span>-->
                        <p id="modalMessage">Email enviado com sucesso!</p>
                      </div>
                    </div>
                    
                    <script>
                      // Adicionar um event listener para o formulário
                      document.addEventListener("DOMContentLoaded", function() {
                        var form = document.querySelector("form");
                        form.addEventListener("submit", function(event) {
                          event.preventDefault(); // Evitar o comportamento padrão de envio do formulário
                          // Aqui você pode adicionar a lógica para enviar o email e, em seguida, exibir o modal
                          var modal = document.getElementById("myModal");
                          modal.style.display = "block";
                          setTimeout(function() {
                            modal.style.display = "none"; // Fechar o modal após meio segundo
                          }, 800);
                        });
                      });
                    
                      // Fechar o modal se o usuário clicar fora dele
                      window.addEventListener("click", function(event) {
                        var modal = document.getElementById("myModal");
                        if (event.target == modal) {
                          modal.style.display = "none";
                        }
                      });
                    </script>
    
                    <div class="">
                        <ul class="flex flex-col gap-3">
                            <h5 class="xl:text-xl lg:text-lg font-medium text-default-800 mb-2">Empresa</h5>
                            <li>
                                <a href="#features" class="text-base text-default-700 hover:text-default-950 transition-all">Recursos</a>
                            </li>
                            <li>
                                <a href="#faq" class="text-base text-default-700 hover:text-default-950 transition-all">Dúvidas</a>
                            </li>
                            <li>
                                <a href="#pricing" class="text-base text-default-700 hover:text-default-950 transition-all">Preços</a>
                            </li>
                            <li>
                                <a href="login" class="text-base text-default-700 hover:text-default-950 transition-all">Contrate</a>
                            </li>
                        </ul>
                    </div><!-- col End -->
    
                    <div class="">
                        <ul class="flex flex-col gap-3">
                            <h5 class="xl:text-xl lg:text-lg font-medium text-default-800 mb-2">Mídias Sociais</h5>
                            <ul class="space-y-3">
                                <li class="flex items-center gap-5 group">
                                    <a href="javascript:void(0);" class="h-10 w-10 inline-flex items-center justify-center border border-default-300 text-default-800 rounded-lg transition-all duration-700 group-hover:bg-primary group-hover:text-white group-hover:border-primary"><i data-lucide="facebook" class="h-5 w-5"></i></a>
                                    <h5 class="text-base font-medium text-default-800">Facebook</h5>
                                </li>
                                <li class="flex items-center gap-5 group">
                                    <a href="javascript:void(0);" class="h-10 w-10 inline-flex items-center justify-center border border-default-300 text-default-800 rounded-lg transition-all duration-700 group-hover:bg-primary group-hover:text-white group-hover:border-primary"><i data-lucide="instagram" class="h-5 w-5"></i></a>
                                    <h5 class="text-base font-medium text-default-800">Instagram</h5>
                                </li>
                                <li class="flex items-center gap-5 group">
                                    <a href="javascript:void(0);" class="h-10 w-10 inline-flex items-center justify-center border border-default-300 text-default-800 rounded-lg transition-all duration-700 group-hover:bg-primary group-hover:text-white group-hover:border-primary"><i data-lucide="twitter" class="h-5 w-5"></i></a>
                                    <h5 class="text-base font-medium text-default-800">Twitter</h5>
                                </li>
                                <li class="flex items-center gap-5 group">
                                    <a href="javascript:void(0);" class="h-10 w-10 inline-flex items-center justify-center border border-default-300 text-default-800 rounded-lg transition-all duration-700 group-hover:bg-primary group-hover:text-white group-hover:border-primary"><i data-lucide="linkedin" class="h-5 w-5"></i></a>
                                    <h5 class="text-base font-medium text-default-800">Linkedin</h5>
                                </li>
                            </ul>
                        </ul>
                    </div><!-- col End -->
    
                    <div class="">
                        <ul class="flex flex-col gap-3">
                            <h5 class="xl:text-xl lg:text-lg font-medium text-default-800 mb-2">Atendimento</h5>
                            <li>
                                <a href="https://wa.me/5585991508104" target="_blank" class="text-base text-default-700 hover:text-default-950 transition-all">Comercial</a>
                            </li>
                            <li>
                                <a href="https://wa.me/5585991508104" target="_blank" class="text-base text-default-700 hover:text-default-950 transition-all">Suporte</a>
                            </li>
                        </ul>
                    </div><!-- col End -->
                </div><!-- grid End -->
            </div><!-- Container End -->
        </div>
    
        <div class="py-4">
            <div class="container flex flex-wrap justify-center items-center h-full md:justify-between text-center md:text-start">
                <p class="text-base font-medium text-default-800">
                    <script>document.write(new Date().getFullYear())</script>
                    © apiCte - <a href="https://gpsoft.com.br">Desenvolvido por GPSOFT</a>
                </p>
                <p class="text-base font-medium text-default-800">
                    <a href="#">www.apicte.com.br</a>
                </p>
            </div><!-- Flex End -->
        </div>
    </footer>
    <div class="fixed bottom-5 end-5 flex flex-col gap-1 items-center z-[1000]">
        <!-- Back to Top -->
        <button class="h-10 w-10 bg-primary/20 backdrop-blur-3xl rounded-full text-primary flex justify-center items-center transition-all duration-500 translate-x-16 shadow-[inset_0px_0px_12px_0px] shadow-primary/40 z-10 " data-toggle="back-to-top">
            <i class="h-4 w-4" data-lucide="chevron-up"></i>
        </button>
        
        <!-- Light/Dark Toggle -->
        <button class="bg-primary text-white rounded-lg z-20">
            <span class="h-9 w-9 flex justify-center items-center"  id="light-theme">
                <i class="h-5 w-5" data-lucide="moon"></i>
            </span>
            <span class="h-9 w-9 flex justify-center items-center" id="dark-theme">
                <i class="h-5 w-5" data-lucide="sun"></i>
            </span>
        </button>
    </div>
    
    
        
</body>

</html>