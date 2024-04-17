<!doctype html>
<?php

$sucesso_message = '';
$error_message = '';

require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Conexão com o banco de dados
    $servername = "localhost"; // endereço do servidor
    $username = "gpsoftco_user"; // nome de usuário do banco de dados
    $password = "Odlareg2930"; // senha do banco de dados
    $dbname = "gpsoftco_notas"; // nome do banco de dados
    
    // Estabelece a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Verifica se houve algum erro na conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }
    
    // Escapa caracteres especiais para prevenir SQL Injection
    $logo = $_FILES['logo']['name'];
    $cnpj = mysqli_real_escape_string($conn, $_POST['cnpj']);
    $login = mysqli_real_escape_string($conn, $_POST['login']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    $whatsapp = mysqli_real_escape_string($conn, $_POST['whatsapp']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $cert_senha = mysqli_real_escape_string($conn, $_POST['cert_senha']);
    $uf = mysqli_real_escape_string($conn, $_POST['uf']);
    
    // Cria uma pasta com o nome do CNPJ digitado
    $cnpj_folder = "cnpj/" . $cnpj;
    if (!file_exists($cnpj_folder)) {
        mkdir($cnpj_folder, 0777, true);
    }
    
    // Move o arquivo do logo para a pasta criada
    $logo_tmp = $_FILES['logo']['tmp_name'];
    $logo_destino = $cnpj_folder . '/' . basename($logo);
    move_uploaded_file($logo_tmp, $logo_destino);
    
    // Cria a pasta 'certificado' dentro da pasta do CNPJ
    $certificado_folder = $cnpj_folder . '/certificado';
    if (!file_exists($certificado_folder)) {
        mkdir($certificado_folder, 0777, true);
    }
    
    // Move o arquivo do certificado para a pasta criada
    $certificado_tmp = $_FILES['certificado']['tmp_name'];
    $certificado_destino = $certificado_folder . '/' . basename($_FILES['certificado']['name']);
    move_uploaded_file($certificado_tmp, $certificado_destino);
    
    // Query SQL para inserir os dados na tabela
    $sql = "INSERT INTO cadastro (logo, cnpj, login, senha, nome, whatsapp, email, certificado, cert_senha, uf) VALUES ('$logo_destino', '$cnpj', '$login', '$senha', '$nome', '$whatsapp', '$email', '$certificado_destino', '$cert_senha', '$uf')";
    
    if ($conn->query($sql) === TRUE) {
        // Envia e-mail de notificação
        enviarEmail("gpatricio.melo@gmail.com", "Cliente Novo", "Um novo cliente foi cadastrado. CNPJ: $cnpj");
        
       $sucesso_message = "Cadastro realizado com sucesso!";
    } else {
        $error_message = "Erro ao cadastrar: " . $conn->error;
    }
    
    // Fecha a conexão
    $conn->close();
}

// Função para enviar e-mail
function enviarEmail($destinatario, $assunto, $mensagem) {
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'mail.gpsoft.com.br'; // Configure o servidor SMTP
    $mail->SMTPAuth = true;
    $mail->Username = 'geraldo@gpsoft.com.br'; // Configure o e-mail de onde será enviado
    $mail->Password = 'Odlareg2930'; // Configure a senha do e-mail
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    
    // Define o remetente e o destinatário
    $mail->setFrom('nao-responda@gpsoft.com.br', 'Novo Cadastro');
    $mail->addAddress($destinatario);
    
    // Define o assunto e o conteúdo do e-mail
    $mail->Subject = $assunto;
    $mail->Body = $mensagem;
    
    // Envia o e-mail
    if (!$mail->send()) {
        echo "Erro ao enviar o e-mail: " . $mail->ErrorInfo;
    }
}
?>
<html
  lang="en"
  class="light-style layout-wide customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Cadastro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap"
      rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
    <!-- Vendor -->
    <link rel="stylesheet" href="assets/vendor/libs/@form-validation/form-validation.css" />

    <!-- Page CSS -->
    <!-- Page -->
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover authentication-bg">
      <div class="authentication-inner row">
        <!-- /Left Text -->
        <div class="d-none d-lg-flex col-lg-7 p-0">
          <div class="auth-cover-bg auth-cover-bg-color d-flex justify-content-center align-items-center">
            <img
              src="assets/img/illustrations/auth-register-illustration-light.png"
              alt="auth-register-cover"
              class="img-fluid my-5 auth-illustration"
              data-app-light-img="illustrations/auth-register-illustration-light.png"
              data-app-dark-img="illustrations/auth-register-illustration-dark.png" />

            <img
              src="assets/img/illustrations/bg-shape-image-light.png"
              alt="auth-register-cover"
              class="platform-bg"
              data-app-light-img="illustrations/bg-shape-image-light.png"
              data-app-dark-img="illustrations/bg-shape-image-dark.png" />
          </div>
        </div>
        <!-- /Left Text -->

        <!-- Register -->
        <div class="d-flex col-12 col-lg-5 align-items-center p-sm-5 p-4">
          <div class="w-px-400 mx-auto">
            <!-- Logo -->
            <div class="app-brand mb-4">
              <img src="assets2/img/logo.png" width="270">
            </div>
            <!-- /Logo -->
            <h3 class="mb-1">Cadastre-se 🚀</h3>
            <p class="mb-4">Deseja obter todas as CTEs de sua empresa? <br>Então efetue seu cadastro abaixo!</p>
            
            <?php if (!empty($error_message)): ?>
                <div class="col-12">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <?php echo $error_message; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            <?php endif; ?>

            <?php if (!empty($sucesso_message)): ?>
                <div class="col-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <?php echo $sucesso_message; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <div>
                    &nbsp; &nbsp; <a href="login">CLIQUE AQUI PARA LOGAR-SE</a>
                      <br>
                      <br>
                    </div>
                </div>
            <?php endif; ?>
            
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
              <div class="mb-3">
                <label for="username" class="form-label">Logomarca de sua Empresa <b>*</b></label>
                <input
                  type="file"
                  class="form-control"
                  id="logo"
                  name="logo"
                  autofocus required/>
              </div>

              <div class="mb-3">
                <label for="cnpj" class="form-label">CNPJ <b>*</b></label>
                <input type="text" class="form-control" id="cnpj" name="cnpj" required/>
              </div>

              <div class="mb-3">
                <label for="nome" class="form-label">Nome da Empresa <b>*</b></label>
                <input type="text" class="form-control" id="nome" name="nome" required/>
              </div>

              
              <div class="mb-3">
                <label for="login" class="form-label">Login <b>*</b></label>
                <input type="text" class="form-control" id="login" name="login" required/>
              </div>
              <div class="mb-3 form-password-toggle">
                <label class="form-label" for="senha">Senha</label>
                <div class="input-group input-group-merge">
                  <input
                    type="password"
                    id="senha"
                    class="form-control"
                    name="senha"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" required/>
                  <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
                </div>
              </div>


              <div class="mb-3">
                <label for="whatsapp" class="form-label">Whatsapp <b>*</b></label>
                <input type="text" class="form-control" id="whatsapp" name="whatsapp" required/>
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">E-Mail <b>*</b></label>
                <input type="email" class="form-control" id="email" name="email" required/>
              </div>
              
              <div class="mb-3">
                <label for="certificado" class="form-label">Certificado <b>*</b></label>
                <input type="file" class="form-control" id="certificado" name="certificado" required/>
              </div>

              <div class="mb-3">
                <label for="cert_senha" class="form-label">Senha do Certificado <b>*</b></label>
                <input type="password" class="form-control" id="cert_senha" name="cert_senha" required/>
              </div>

              <div class="mb-3">
                <label for="uf" class="form-label">UF <b>*</b></label>
                <input type="text" class="form-control" id="uf" name="uf" required/>
              </div>              

              <button class="btn btn-primary d-grid w-100">Cadastrar</button>
            </form>

            <p class="text-center">
              <span>Já tem cadastro?</span>
              <a href="login">
                <span>Logar-se</span>
              </a>
            </p>

            
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>

    <!-- / Content -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/libs/hammer/hammer.js"></script>
    <script src="assets/vendor/libs/i18n/i18n.js"></script>
    <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="assets/vendor/libs/@form-validation/auto-focus.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/pages-auth.js"></script>
  </body>
</html>
