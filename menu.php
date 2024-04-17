<?php
// Obtém o nome do arquivo atual
$current_file = basename($_SERVER['PHP_SELF']);

// Define a classe 'active' com base no arquivo atual
$dashboard_class = ($current_file != 'NFe' && $current_file != 'MDFe' && $current_file != 'NFCe') ? 'active open' : '';
$nfe_class = ($current_file == 'NFe') ? 'active' : '';
$nfc_class = ($current_file == 'NFCe') ? 'active' : '';
$mdfe_class = ($current_file == 'MDFe') ? 'active' : '';
$nfse_class = ($current_file == 'NFSe') ? 'active' : '';
$cte_class = ($current_file == 'CTe') ? 'active' : '';
$gerenciamento_class = ($nfe_class == 'active' || $nfc_class == 'active' || $mdfe_class == 'active' || $nfse_class == 'active' || $cte_class == 'active' ) ? 'active open' : '';
?>

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="index" class="app-brand-link">
        <span class="app-brand-logo demo">
            <img src="assets/img/ico-api.png" width="30">
        </span>
        <span class="app-brand-text demo menu-text fw-bold">apiCte</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
      <i class="ti menu-toggle-icon d-none d-xl-block ti-sm align-middle"></i>
      <i class="ti ti-x d-block d-xl-none ti-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <li class="menu-item <?php echo $dashboard_class; ?>">
            <a href="dash" class="menu-link menu">
                <i class="menu-icon tf-icons ti ti-smart-home"></i>
                <div data-i18n="Dashboards">Dashboard</div>
            </a>
        </li>


    <!-- Menu Principal -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="Menu Principal">Menu Principal</span>
    </li>
    <li class="menu-item <?php echo $gerenciamento_class; ?>">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-settings"></i>
        <div data-i18n="Gerenciamento">Gerenciamento</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item <?php echo $nfe_class; ?>">
            <a href="NFe" class="menu-link">
                <div data-i18n="NF-e">NF-e</div>
            </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="NFC-e">NFC-e</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="MDF-e">MDF-e</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="NFS-e">NFS-e</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="#" class="menu-link">
            <div data-i18n="CT-e">CT-e</div>
          </a>
        </li>
      </ul>
    </li>
    <li class="menu-item">
      <a href="#" target="_blank" class="menu-link">
        <i class="menu-icon tf-icons ti ti-users"></i>
        <div data-i18n="Perfil">Perfil</div>
      </a>
    </li>

    <!-- Misc -->
    <li class="menu-header small text-uppercase">
      <span class="menu-header-text" data-i18n="Ajuda">Ajuda</span>
    </li>
    <li class="menu-item">
      <a href="https://wa.me/5585991508104" target="_blank" class="menu-link">
        <i class="menu-icon tf-icons ti ti-mail"></i>
        <div data-i18n="Suporte">Suporte</div>
      </a>
    </li>
    <li class="menu-item">
      <a
        href="#"
        target="_blank"
        class="menu-link">
        <i class="menu-icon tf-icons ti ti-file-description"></i>
        <div data-i18n="Documentação">Documentação</div>
      </a>
    </li>
  </ul>
</aside>