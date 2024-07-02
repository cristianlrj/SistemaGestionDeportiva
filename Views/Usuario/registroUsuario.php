<?php headerAdmin($data) ?>

<form id="formUsuario">
    <input type="hidden" name="id_usuario" id="id_usuario" value="<?= $data['id_usuario'] ?>">
    <div class="row g-3 me-4 pe-4">
        <div class="col-md-5">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required="">
        </div>
        <div class="col-md-5">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" required="">
        </div>
        <div class="col-md-5">
            <label for="contrasena" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="contrasena" id="contrasena" required="">
        </div>
        <div class="col-md-5">
            <label for="rol" class="form-label">Rol</label>
            <select class="form-control" name="rol" id="rol" required="">
                <option value="">Seleccione un rol</option>
                <option value="admin">Administrador</option>
                <option value="user">Usuario</option>
            </select>
        </div>
    </div>
    <div class="col-md-12 mt-2"><button class="btn btn-primary" type="submit" id="finalizar">Guardar</button></div>
</form>

<?php footerAdmin($data) ?>