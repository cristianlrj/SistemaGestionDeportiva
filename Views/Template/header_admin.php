<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?= media() ?>/css/plugins/css@3.css">
        <link rel="stylesheet" href="<?= media() ?>/css/plugins/bootstrap.min.css">
        <link rel="stylesheet" href="<?= media() ?>/css/dashboard.css">
        <link rel="stylesheet" href="<?= media() ?>/css/styles.css">
		<link rel="stylesheet" href="<?= media() ?>/css/plugins/datatables.min.css">
		<title><?= $data['page_title'] ?></title>
    </head>
    <body>

    <!-- <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <i class="fas fa-circle-half-stroke"></i>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <i class="fa-solid fa-sun"></i>
            <span>&nbsp;Claro</span>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <i class="fa-solid fa-moon"></i>&nbsp;
            <span>Oscuro</span>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <i class="fa-solid fa-circle-half-stroke"></i>&nbsp;
            <span>Auto</span>
          </button>
        </li>
      </ul>
    </div> -->


<header class="navbar sticky-top bg-primary flex-md-nowrap p-0 shadow" data-bs-theme="dark">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#"><?= $data['page_title'] ?></a>

  <ul class="navbar-nav flex-row d-md-none">
    <li class="nav-item text-nowrap">
      <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
    </li>
  </ul>
</header>

<div class="container-fluid">
  <div class="row">
    <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
      <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="sidebarMenuLabel"><?= $data['page_title'] ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
          <?php navAdmin($data) ?>
        </div>
      </div>
    </div>

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-primary"><?= $data['page_name'] ?></h1>
</div>
