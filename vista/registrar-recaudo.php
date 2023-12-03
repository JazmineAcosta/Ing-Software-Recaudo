<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
require_once '../modelo/controlador/conectar_bd.php';
$conn = conectar_bd();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../librerias/assets/img/E-Billing.png" rel="icon">
  <link href="../librerias/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../librerias/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../librerias/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../librerias/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../librerias/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../librerias/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../librerias/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../librerias/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../librerias/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="home-r1.html" class="logo d-flex align-items-center">
        <img src="../librerias/assets/img/E-Billing.png" alt="">
        <span class="d-none d-lg-block">E-Billing</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Buscar" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              Tienenes 4 notificaciones
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Ver todo</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Se ha realizado un recado</h4>
                <p>La factura 8 tiene un nuevo recaudo</p>
                <p>30 min.</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Rechazo solicitud de compra</h4>
                <p>La solicitud de compra 3 ha sido desaprobada</p>
                <p>1 hr.</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Presupuesto aprobado</h4>
                <p>Se ha aprobado la solicitud de presupuesto 2</p>
                <p>2 hrs.</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Nueva solicitud de compra</h4>
                <p>Se ha generado una nueva solicitud de compra</p>
                <p>30 min.</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Ver todas las notificacaciones</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              Tienes 3 mensajes
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">Ver todo</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../librerias/assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Felipe Molano Jiménez</h4>
                  <p>Revisa la factura 8 y verifica el recaudo realizado</p>
                  <p>4 hrs.</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../librerias/assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Laura Posada Tobon</h4>
                  <p>Verifica el estado del presupuesto que solicitamos</p>
                  <p>6 hrs.</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="../librerias/assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Germán Garzón Pulgarín</h4>
                  <p>El stock de las papas fritas se está agotando</p>
                  <p>8 hrs.</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Ver todos los mensajes</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="../librerias/assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Andrea Moreno</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Andrea Moreno Restrepo</h6>
              <span>Gerente</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Mi perfil</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="settings-users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Configuración</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="../index.html">
                <i class="bi bi-box-arrow-right"></i>
                <span>Cerrar sesión</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link" href="home-r1.html">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li>
      <!-- End Home Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#nomina-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-credit-card-2-front"></i>
          <span>Nómina</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="nomina-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="admin-empleados.html">
              <i class="bi bi-circle"></i>
              <span>Empleados</span>
            </a>
          </li>
          <li>
            <a href="pagar-nomina.html">
              <i class="bi bi-circle"></i>
              <span>Pago de nóminas</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Nómina Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#facturacion-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-receipt-cutoff"></i>
          <span>Recaudo</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="facturacion-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="registrar-recaudo.php">
              <i class="bi bi-circle"></i>
              <span>Recaudo</span>
            </a>
          </li>
          <li>
            <a href="clientes.php">
              <i class="bi bi-circle"></i>
              <span>Clientes</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Facturación Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#compras-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cart3"></i>
          <span>Compras</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="compras-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="registrar-compra.php">
              <i class="bi bi-circle"></i>
              <span>Compras</span>
            </a>
          </li>
          <li>
            <a href="solicitar-compra.php">
              <i class="bi bi-circle"></i>
              <span>Solicitud de compra</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Compras Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#almacen-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-shop"></i>
          <span>Almacén</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="almacen-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="productos.php">
              <i class="bi bi-circle"></i>
              <span>Productos</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Almacén Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#gesProveedores-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-truck"></i>
          <span>Proveedores</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="gesProveedores-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="proveedores.php">
              <i class="bi bi-circle"></i>
              <span>Proveedores</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Proveedores Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#gesUsuarios-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person"></i>
          <span>Usuarios</span>
          <i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="gesUsuarios-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
          <li>
            <a href="crear-usuarios.php">
              <i class="bi bi-circle"></i>
              <span>Usuarios</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End Usuarios Nav -->
    </ul>
  </aside>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Recaudo</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home-r1.html">Home</a></li>
          <li class="breadcrumb-item active">Recaudo</li>
          <li class="breadcrumb-item active">Registrar Recaudo
          </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Registrar Recaudo</h5>

          <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
            <!-- Profile Edit Form -->
            <form class="row g-3 needs-validation" id="profileForm">

              <div class="col-md-3">
                <label for="idRecaudo" class="form-label">ID recaudo</label>
                <input type="number" class="form-control" id="idRecaudo" placeholder=" Valor autoincrementable" disabled="readonly" required />
              </div>

              <div class="col-md-3">
                <label for="idRecaudoCons" class="form-label">ID Cliente</label>
                <input type="number" class="form-control" id="idRecaudoCons" placeholder="CC del Cliente" required />
              </div>

              <div class="col-md-3">
                <label for="idRecaudo" class="form-label">ID Factura</label>
                <input type="number" class="form-control" id="idRecaudo" placeholder="Id de la factura" required />
              </div>

              <?php
              $id_stmtt = $conn->prepare("select id_med_pago , descrip_med_pago from medios_de_pago;");
              $id_stmtt->execute();
              $medPagos = $id_stmtt->get_result();
              ?>
              <div class="col-md-3">
                <label for="validarIdMedPago" class="form-label">Medio de pago</label>
                <select type="select" class="form-select" aria-label="default select example" id="validarIdMedPago" required>
                  <option value="0">Seleccione un medio de pago</option>
                  <?php while ($medPago = $medPagos->fetch_object()) { ?>
                    <option value=<?php echo $medPago->id_med_pago  ?>> <?php echo $medPago->id_med_pago  . " - " . $medPago->descrip_med_pago ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="col-md-6">
                <label for="validarValTotal" class="form-label">Valor Total</label>
                <input type="text" class="form-control" id="validarSubtotal" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-6">
                <label for="validarFechRec" class="form-label">Fecha de recaudo</label>
                <input type="datetime-local" class="form-control" id="validarFechRec" disabled="readonly" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="mb-3 d-flex justify-content-center">
                <button type="button" class="btn btn-success mx-1" data-bs-placement="bottom" data-bs-toggle="tooltip" title="Crear" id="saveChangesBtn" onclick="crearFactura()">
                  <i class="bi bi-file-earmark-plus"> Crear</i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Consulta y actualización de recaudo</h5>

          <div class="tab-pane fade show active profile-edit pt-3" id="profile-edit">
            <!-- Profile Edit Form -->
            <form class="row g-3 needs-validation" id="profileForm">

              <div class="input-group mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">ID recaudo</label>
                <div class="input-group-append">
                  <input type="text" class="form-control" id="idRecaudoCons" placeholder="Ingrese el dato" aria-describedby="basic-addon2">
                </div>
                <div class="input-group-append">
                  <button class="btn btn-info mx-2" type="button" data-bs-toggle="modal" data-bs-target="#consultarModal">
                    <i class="bi bi-person-check"></i> Consultar
                  </button>
                </div>
                <div class="input-group-append">
                  <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#actualizarModal">
                    <i class="bi bi-person-gear"></i> Actualizar
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Consultar Modal -->
    <div class="modal fade" id="consultarModal" tabindex="-1" role="dialog" aria-labelledby="consultarModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="consultarModalLabel">Consulta de Recaudo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Profile Edit Form -->
            <form class="row g-3 needs-validation" id="profileForm">

              <div class="col-md-6">
                <label for="idRecaudoModal" class="form-label">ID recaudo</label>
                <input type="number" class="form-control" id="idRecaudoModal" disabled="readonly" required />
              </div>

              <div class="col-md-6">
                <label for="idClienteModal" class="form-label">ID Cliente</label>
                <input disabled="readonly" type="number" class="form-control" id="idClienteModal" required />
              </div>

              <div class="col-md-6">
                <label for="idRecaudo" class="form-label">ID Factura</label>
                <input disabled="readonly" type="number" class="form-control" id="idRecaudo" required />
              </div>

              <?php
              $id_stmtt = $conn->prepare("select id_med_pago , descrip_med_pago from medios_de_pago;");
              $id_stmtt->execute();
              $medPagos = $id_stmtt->get_result();
              ?>
              <div class="col-md-6">
                <label for="validarIdMedPago" class="form-label">Medio de pago</label>
                <select disabled="readonly" type="select" class="form-select" aria-label="default select example" id="validarIdMedPago" required>
                  <option value="0">Seleccione un medio de pago</option>
                  <?php while ($medPago = $medPagos->fetch_object()) { ?>
                    <option value=<?php echo $medPago->id_med_pago  ?>> <?php echo $medPago->id_med_pago  . " - " . $medPago->descrip_med_pago ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="col-md-6">
                <label for="validarValTotal" class="form-label">Valor Total</label>
                <input disabled="readonly" type="text" class="form-control" id="validarSubtotal" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-6">
                <label for="validarFechRec" class="form-label">Fecha de recaudo</label>
                <input type="datetime-local" class="form-control" id="validarFechRec" disabled="readonly" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Actualizar Modal -->
    <div class="modal fade" id="actualizarModal" tabindex="-1" role="dialog" aria-labelledby="actualizarModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="actualizarModalLabel">Actualización de Recaudo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Profile Edit Form -->
            <form class="row g-3 needs-validation" id="profileForm">

              <div class="col-md-6">
                <label for="idRecaudo" class="form-label">ID recaudo</label>
                <input type="number" class="form-control" id="idRecaudo" disabled="readonly" required />
              </div>

              <div class="col-md-6">
                <label for="idRecaudoCons" class="form-label">ID Cliente</label>
                <input disabled="readonly" type="number" class="form-control" id="idRecaudoCons" required />
              </div>

              <div class="col-md-6">
                <label for="idRecaudo" class="form-label">ID Factura</label>
                <input disabled="readonly" type="number" class="form-control" id="idRecaudo" required />
              </div>

              <?php
              $id_stmtt = $conn->prepare("select id_med_pago , descrip_med_pago from medios_de_pago;");
              $id_stmtt->execute();
              $medPagos = $id_stmtt->get_result();
              ?>
              <div class="col-md-6">
                <label for="validarIdMedPago" class="form-label">Medio de pago</label>
                <select disabled="readonly" type="select" class="form-select" aria-label="default select example" id="validarIdMedPago" required>
                  <option value="0">Seleccione un medio de pago</option>
                  <?php while ($medPago = $medPagos->fetch_object()) { ?>
                    <option value=<?php echo $medPago->id_med_pago  ?>> <?php echo $medPago->id_med_pago  . " - " . $medPago->descrip_med_pago ?></option>
                  <?php } ?>
                </select>
              </div>

              <div class="col-md-6">
                <label for="validarValTotal" class="form-label">Valor Total</label>
                <input disabled="readonly" type="text" class="form-control" id="validarSubtotal" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>

              <div class="col-md-6">
                <label for="validarFechRec" class="form-label">Fecha de recaudo</label>
                <input type="datetime-local" class="form-control" id="validarFechRec" disabled="readonly" required />
                <div id="feedback-message" class="invalid-feedback"></div>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="guardarActualizacion()">Guardar</button>
          </div>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      function crearFactura() {
        // Obtener los datos del formulario (reemplaza con la lógica para obtener los valores del formulario)
        var fechaRecaudo = document.getElementById('validarFechRecaudo').value;
        var idMedPago = document.getElementById('validarIdTipoCliente').value;
        var clienteRecaudo = document.getElementById('validarIdCliente').value;
        var valRecaudo = document.getElementById('validarTotal').value;
        var descuentoFactura = document.getElementById('validarDto').value;
        var ivaFactura = document.getElementById('validarIVA').value;
        var subvalRecaudo = document.getElementById('validarSubtotal').value;
        var idFacRecaudo = document.getElementById('validarSaldo').value;
        var estadoFactura = document.getElementById('validarEstado').value;


        // Crear un objeto FormData y agregar los datos del formulario
        var formData = new FormData();
        formData.append('fechaRecaudo', fechaRecaudo);
        formData.append('idMedPago', idMedPago);
        formData.append('clienteRecaudo', clienteRecaudo);
        formData.append('valRecaudo', valRecaudo);
        formData.append('descuentoFactura', descuentoFactura);
        formData.append('ivaFactura', ivaFactura);
        formData.append('subvalRecaudo', subvalRecaudo);
        formData.append('idFacRecaudo', idFacRecaudo);
        formData.append('estadoFactura', estadoFactura);
        //console.log(fechaRecaudo);
        //console.log(formatearFechaParaBaseDatos(fechaRecaudo));

        // Realizar la solicitud 
        fetch('../modelo/crearfactura.php', {
            method: 'POST',
            body: formData
          })
          .then(response => response.json())
          .then(data => {
            // Procesar la respuesta del servidor si es necesario
            if (!data.hasOwnProperty('error')) {
              console.log(data);
              alert(data["success"]);
              window.location.reload();
            } else {
              alert(data["error"]);
            }
            // Cerrar el modal o realizar otras acciones según tus necesidades
            // Aquí asumo que estás utilizando Bootstrap para los modales
            $('#crearFacturaModal').modal('hide');
          })
          .catch(error => {
            console.error('Error:', error);
          });
      }

      function consultarFactura() {
        // Lógica para consultar la información y llenar el modal de consulta
        // Obtener el valor del campo idRecaudo
        var idRecaudo = document.getElementById('idRecaudoCons').value;

        if (idRecaudo != "" || idRecaudo >= 1) {
          //Crear FormData 
          var formData = new FormData();
          formData.append('idRecaudoCons', idRecaudo);
          // Realizar la solicitud fetch
          fetch('../modelo/consultafacturas.php', {
              method: 'POST',
              body: formData,
            })
            .then(response => response.json())
            .then(data => {
              // Procesar la respuesta del servidor si es necesario
              // Suponiendo que `data` contiene el objeto JSON recibido del servidor
              // Suponiendo que `data` contiene el objeto JSON recibido del servidor
              if (!data.hasOwnProperty('error')) {
                document.getElementById('idRecaudoModal').value = data["idRecaudo"];
                document.getElementById('validarFechRecModal').value = data["fechaRecaudo"];
                document.getElementById('validarIdMedPagoModal').value = data["idMedPago"];
                document.getElementById('validarIdClienteModal').value = data["clienteRecaudo"];
                document.getElementById('validarTotalModal').value = data["valRecaudo"];
                document.getElementById('validarDtoModal').value = data["descuentoFactura"];
                document.getElementById('validarIVAModal').value = data["ivaFactura"];
                document.getElementById('validarSubtotalModal').value = data["subvalRecaudo"];
                document.getElementById('validarSaldoModal').value = data["idFacRecaudo"];
                document.getElementById('validarEstadoModal').value = data["estadoFactura"];
              }

            })
            .catch(error => {
              console.error('Error:', error);
            });

        }
        // Abre el modal de consulta
        //$('#consultarModal').modal('show');

      }

      function cerrarModalConsulta() {

        document.getElementById('idRecaudoModal').value = "";
        document.getElementById('validarFechRecModal').value = "";
        document.getElementById('validarIdMedPagoModal').value = "";
        document.getElementById('validarIdClienteModal').value = "";
        document.getElementById('validarTotalModal').value = "";
        document.getElementById('validarDtoModal').value = "";
        document.getElementById('validarIVAModal').value = "";
        document.getElementById('validarSubtotalModal').value = "";
        document.getElementById('validarSaldoModal').value = "";
        document.getElementById('validarEstadoModal').value = "";

      }

      function actualizarInformacion() {
        // Lógica para cargar la información y llenar el modal de actualización        
        // Obtener el valor del campo idRecaudo
        var idRecaudo = document.getElementById('idRecaudoCons').value;

        if (idRecaudo != "" || idRecaudo >= 1) {
          //Crear FormData 
          var formData = new FormData();
          formData.append('idRecaudoCons', idRecaudo);
          // Realizar la solicitud fetch
          fetch('../modelo/consultafacturas.php', {
              method: 'POST',
              body: formData,
            })
            .then(response => response.json())
            .then(data => {
              // Procesar la respuesta del servidor si es necesario
              // Suponiendo que `data` contiene el objeto JSON recibido del servidor
              // Suponiendo que `data` contiene el objeto JSON recibido del servidor
              if (!data.hasOwnProperty('error')) {
                document.getElementById('idRecaudoAct').value = data["idRecaudo"];
                document.getElementById('validarFechRecaudoAct').value = data["fechaRecaudo"];
                document.getElementById('validarIdTipoClienteAct').value = data["idMedPago"];
                document.getElementById('validarIdClienteAct').value = data["clienteRecaudo"];
                document.getElementById('validarTotalAct').value = data["valRecaudo"];
                document.getElementById('validarDtoAct').value = data["descuentoFactura"];
                document.getElementById('validarIVAAct').value = data["ivaFactura"];
                document.getElementById('validarSubtotalAct').value = data["subvalRecaudo"];
                document.getElementById('validarSaldoAct').value = data["idFacRecaudo"];
                document.getElementById('validarEstadoAct').value = data["estadoFactura"];
              }

            })
            .catch(error => {
              console.error('Error:', error);
            });

        }
        // Abre el modal de actualización
        //$('#actualizarModal').modal('show');
      }

      function guardarActualizacion() {
        // Obtener el formulario
        // Obtener los valores de los campos del formulario
        var idRecaudo = document.getElementById('idRecaudoAct').value;
        var nuevaFecha = document.getElementById('validarFechRecaudoAct').value;
        var nuevoidMedPago = document.getElementById('validarIdTipoClienteAct').value;
        var nuevoclienteRecaudo = document.getElementById('validarIdClienteAct').value;
        var nuevovalRecaudo = document.getElementById('validarTotalAct').value;
        var nuevoDescuentoFactura = document.getElementById('validarDtoAct').value;
        var nuevoIvaFactura = document.getElementById('validarIVAAct').value;
        var nuevoSubvalRecaudo = document.getElementById('validarSubtotalAct').value;
        var nuevoidFacRecaudo = document.getElementById('validarSaldoAct').value;
        var nuevoEstadoFactura = document.getElementById('validarEstadoAct').value;


        // Crear un objeto FormData con los datos del formulario
        // Crear FormData 
        var formData = new FormData();
        formData.append('idRecaudoAct', idRecaudo);
        formData.append('FechaAct', nuevaFecha);
        formData.append('idMedPagoAct', nuevoidMedPago);
        formData.append('clienteRecaudoAct', nuevoclienteRecaudo);
        formData.append('valRecaudoAct', nuevovalRecaudo);
        formData.append('DescuentoFacturaAct', nuevoDescuentoFactura);
        formData.append('IvaFacturaAct', nuevoIvaFactura);
        formData.append('SubvalRecaudoAct', nuevoSubvalRecaudo);
        formData.append('idFacRecaudoAct', nuevoidFacRecaudo);
        formData.append('EstadoFacturaAct', nuevoEstadoFactura);

        // Realizar la solicitud fetch
        fetch('../modelo/Updatefactura.php', {
            method: 'POST',
            body: formData,
          })
          .then(response => response.json())
          .then(data => {
            if (!data.hasOwnProperty('error')) {
              console.log(data);
              alert(data["success"]);
              window.location.reload();
            } else {
              alert(data["error"]);
            }

            // Cerrar el modal después de la actualización            
          })
          .catch(error => {
            console.error('Error:', error);
          });
      }
    </script>

    <?php
    $stmt = $conn->prepare(
      "SELECT 
          r.id_recaudo,
          CONCAT(c.nombre_cliente, ' ', c.apellido_cliente) AS nombre_apellido_cliente,
          r.id_factura_recaudo,
          m.descrip_med_pago,
          r.valor_racaudo,
          r.fecha_recaudo
      FROM 
          recaudo r
      JOIN 
          medios_de_pago m ON r.id_med_pago = m.id_med_pago
      JOIN 
          cliente c ON r.id_cliente_recaudo = c.id_cliente;"
    );
    $stmt->execute();
    $recaudos = $stmt->get_result();
    ?>
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title d-flex justify-content-between align-items-center">
                Registro de recaudo
                <div class="ms-auto">
                  <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Exportar a PDF">
                    <i class="bi bi-file-earmark-pdf"> PDF</i>
                  </button>
                  <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Exportar a Excel">
                    <i class="bi bi-file-earmark-excel"> Excel</i>
                  </button>
                  <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Imprimir">
                    <i class="bi bi-printer"> Imprimir</i>
                  </button>
                </div>
              </h5>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">ID Re caudo</th>
                    <th scope="col">Cliente</th>
                    <th scope="col">Factura</th>
                    <th scope="col">Medio de pago</th>
                    <th scope="col">Valor total</th>
                    <th scope="col">Fecha del recaudo</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($recaudo = $recaudos->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $recaudo['id_recaudo'] ?></td>
                      <td><?php echo $recaudo['nombre_apellido_cliente'] ?></td>
                      <td><?php echo $recaudo['id_factura_recaudo'] ?></td>
                      <td><?php echo $recaudo['descrip_med_pago'] ?></td>
                      <td><?php echo $recaudo['valor_racaudo'] ?></td>
                      <td><?php echo $recaudo['fecha_recaudo'] ?></td>
                    </tr>
                  <?php } ?>
                  <!-- Add more rows as needed -->
                </tbody>
              </table>
              <!-- End Table with stripped rows -->
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- fechas igual al servidor  -->
    <script>
      function consultarInformacion() {
        // Obtener el valor del campo de fecha
        const fechaInput = document.getElementById('validarFechRecaudo').value;

        // Formatear la fecha al formato deseado (dd/mm/aaaa --:--)
        const fechaFormateada = formatearFechaParaBaseDatos(fechaInput);

        // Lógica para enviar la información al servidor
        // Puedes utilizar AJAX o Fetch para enviar la información al servidor

        // Por ejemplo, utilizando Fetch
        fetch('/ruta-del-servidor', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify({
              fecha: fechaFormateada
            }),
          })
          .then(response => response.json())
          .then(data => {
            // Procesar la respuesta del servidor si es necesario
            console.log(data);
          })
          .catch(error => {
            console.error('Error:', error);
          });

        // Abre el modal de consulta
        $('#consultarModal').modal('show');
      }

      function formatearFechaParaBaseDatos(fechaInput) {
        const fecha = new Date(fechaInput);
        const dia = ('0' + fecha.getDate()).slice(-2);
        const mes = ('0' + (fecha.getMonth() + 1)).slice(-2);
        const anio = fecha.getFullYear();
        const horas = ('0' + fecha.getHours()).slice(-2);
        const minutos = ('0' + fecha.getMinutes()).slice(-2);

        return `${dia}/${mes}/${anio} ${horas}:${minutos}`;
      }
    </script>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      Jazmine Acosta - Carrillo Carlos - Gómez Julián - Piza Juan - Ruiz Laura
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../librerias/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../librerias/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../librerias/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../librerias/assets/vendor/echarts/echarts.min.js"></script>
  <script src="../librerias/assets/vendor/quill/quill.min.js"></script>
  <script src="../librerias/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../librerias/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../librerias/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../librerias/assets/js/main.js"></script>

</body>

</html>