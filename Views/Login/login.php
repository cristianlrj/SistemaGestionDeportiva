<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?= media() ?>/css/plugins/css@3.css">
        <link rel="stylesheet" href="<?= media() ?>/css/plugins/bootstrap.min.css">
        <link rel="stylesheet" href="<?= media() ?>/css/dashboard.css">
		<title><?= $data['page_title'] ?></title>
    </head>
    <body>

<header class="navbar sticky-top bg-primary flex-md-nowrap p-0 shadow">
  <span class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="#"><?= $data['page_title'] ?></span>

</header>
<main class="col-md-6 m-sm-auto col-lg-7">
<div class="d-flex justify-content-center align-items-center mt-4 shadow p-4">
	<div class="col-5">
		<img src="<?= media() ?>/images/logo.gif" alt="UPTOS" width="90%">
	</div>
<form id="formLogin" class="col-7">
    <!-- <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> -->
    <h1 class="h3 mb-3 fw-normal">Por favor, inicie sesión</h1>

    <div class="form-floating mb-2">
      <input type="email" class="form-control" id="email" name="email" required placeholder="email@ejemplo.com">
      <label for="email">Email</label>
    </div>
    <div class="form-floating mb-4">
      <input type="password" class="form-control" id="clave" name="clave" required placeholder="Clave">
      <label for="clave">Contraseña</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Iniciar sesión</button>
  </form>
</div>
</main>
  </div>
</div>

    <script src="<?= media() ?>/js/plugins/bootstrap.bundle.min.js"></script>
    <script src="<?= media() ?>/js/plugins/all.min.js"></script>
    <script src="<?= media() ?>/js/plugins/sweetalert2.js"></script>
	
	<script>
		const base_url = "<?= base_url() ?>";
	</script>

	<script src="<?= media() ?>/js/<?= $data['page_functions'] ?>"></script>
</body>
</html>