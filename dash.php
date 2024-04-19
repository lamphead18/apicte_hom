<!doctype html>

<?php
// Inicia a sessão
session_start();

// Verifica se o usuário está autenticado
if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    // Se o usuário não estiver autenticado, redireciona para a página de login
    header("Location: login");
    exit();
}


$servername = "localhost"; // endereço do servidor
$username = "root"; // nome de usuário do banco de dados
$password = ""; // senha do banco de dados
$dbname = "cadastro"; // nome do banco de dados
    

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// CTe
$sql = "SELECT COUNT(*) AS qtd FROM cadastro WHERE tipo_nf = 'CTe'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Saída de cada linha
    while($row = $result->fetch_assoc()) {
        $qtd = $row["qtd"];
    }
}

// NFe
$sql2 = "SELECT COUNT(*) AS qtd FROM cadastro WHERE tipo_nf = 'NFe'";
$result2 = $conn->query($sql2);

if ($result2->num_rows > 0) {
    // Saída de cada linha
    while($row = $result2->fetch_assoc()) {
        $qtd2 = $row["qtd"];
    }
}

// NFSe
$sql3 = "SELECT COUNT(*) AS qtd FROM cadastro WHERE tipo_nf = 'NFSe'";
$result3 = $conn->query($sql3);

if ($result3->num_rows > 0) {
    // Saída de cada linha
    while($row = $result3->fetch_assoc()) {
        $qtd3 = $row["qtd"];
    }
}

// NFCe
$sql4 = "SELECT COUNT(*) AS qtd FROM cadastro WHERE tipo_nf = 'NFCe'";
$result4 = $conn->query($sql4);

if ($result4->num_rows > 0) {
    // Saída de cada linha
    while($row = $result4->fetch_assoc()) {
        $qtd4 = $row["qtd"];
    }
}

$conn->close();

?>


<html
  lang="en"
  class="light-style layout-navbar-fixed layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-semi-dark"
  data-assets-path="assets/"
  data-template="vertical-menu-template-semi-dark">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>GPSOFT - CTE</title>

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
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="assets/vendor/libs/swiper/swiper.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css" />
    <link rel="stylesheet" href="assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="assets/vendor/css/pages/cards-advance.css" />

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="assets/vendor/js/template-customizer.js"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php require("menu.php"); ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <?php require("nav.php"); ?>
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Notas</h4>

              <!-- Card Border Shadow -->
              <div class="row">
                <div class="col-sm-6 col-lg-3 mb-4">
                  <div class="card card-border-shadow-primary">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                          <span class="avatar-initial rounded bg-label-primary"><i class="ti ti-receipt ti-md"></i></span>
                        </div>
                        <h4 class="ms-1 mb-0"><?php echo $qtd; ?></h4>
                      </div>
                      <p class="mb-1">Total de CTe´s</p>
                      <p class="mb-0">
                        <small class="text-muted">Encontradas</small>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                  <div class="card card-border-shadow-warning">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                          <span class="avatar-initial rounded bg-label-warning"
                            ><i class="ti ti-clipboard ti-md"></i
                          ></span>
                        </div>
                        <h4 class="ms-1 mb-0"><?php echo $qtd2; ?></h4>
                      </div>
                      <p class="mb-1">Total de NFe´s</p>
                      <p class="mb-0">
                        <small class="text-muted">Encontradas</small>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                  <div class="card card-border-shadow-danger">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                          <span class="avatar-initial rounded bg-label-danger"
                            ><i class="ti ti-file ti-md"></i
                          ></span>
                        </div>
                        <h4 class="ms-1 mb-0"><?php echo $qtd3; ?></h4>
                      </div>
                      <p class="mb-1">Total de NFSe´s</p>
                      <p class="mb-0">
                        <small class="text-muted">Encontradas</small>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3 mb-4">
                  <div class="card card-border-shadow-info">
                    <div class="card-body">
                      <div class="d-flex align-items-center mb-2 pb-1">
                        <div class="avatar me-2">
                          <span class="avatar-initial rounded bg-label-info"><i class="ti ti-files ti-md"></i></span>
                        </div>
                        <h4 class="ms-1 mb-0"><?php echo $qtd4; ?></h4>
                      </div>
                      <p class="mb-1">Total de NFCe´s</p>
                      <p class="mb-0">
                        <small class="text-muted">Encontradas</small>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <!--/ Card Border Shadow -->
              <div class="row">
                

                <div class="col-12 order-5">
                  <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Dashboard</h5>
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn p-0"
                          type="button"
                          id="routeVehicles"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false">
                          <i class="ti ti-dots-vertical"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="routeVehicles">
                          <a class="dropdown-item" href="javascript:void(0);">Todos</a>
                          <a class="dropdown-item" href="javascript:void(0);">Atualizar</a>
                          <a class="dropdown-item" href="javascript:void(0);">Compartilhar</a>
                        </div>
                      </div>
                    </div>
                    <div class="card-datatable table-responsive">
                    <table class="dash table">
                        <thead class="border-top">
                            <tr>
                                <th>ID</th>
                                <th>CNPJ</th>
                                <th>Nome</th>
                                <th>WhatsApp</th>
                                <th>Email</th>
                                <th>UF</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                    </table>
                    </div>
                  </div>
                </div>

                <!--/ On route vehicles Table -->
              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <?php require("footer.php"); ?>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>

      <!-- Drag Target Area To SlideIn Menu On Small Screens -->
      <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->

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
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="assets/vendor/libs/swiper/swiper.js"></script>
    <script src="assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <!-- Adicione o link para o seu script dash.js -->
    <script src="assets/js/dash.js"></script>
  </body>
</html>
