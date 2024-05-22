<?php headerAdmin($data) ?>


<form id="formAtleta">
    <div class="row g-3">
        <div class="col-md-4">
            <label for="cedula" class="form-label">Cédula</label>
            <input type="text" class="form-control" id="cedula" required="">
            <div class="invalid-feedback">
                Por favor ingresa una cédula válida.
            </div>
        </div>
        <div class="col-md-4">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" required="">
            <div class="invalid-feedback">
                Por favor ingresa los nombres.
            </div>
        </div>
        <div class="col-md-4">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" required="">
            <div class="invalid-feedback">
                Por favor ingresa los apellidos.
            </div>
        </div>
        <div class="col-md-4">
            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fechaNacimiento" required="">
            <div class="invalid-feedback">
                Por favor ingresa la fecha de nacimiento.
            </div>
        </div>
        <div class="col-md-4">
            <label for="Talla" class="form-label">Talla</label>
            <input type="text" class="form-control" id="Talla" required="">
            <div class="invalid-feedback">
                Por favor ingresa una Talla válida.
            </div>
        </div>
        <div class="col-md-4">
            <label for="Estatura" class="form-label">Estatura</label>
            <input type="text" class="form-control" id="Estatura" required="">
            <div class="invalid-feedback">
                Por favor ingresa la Estatura.
            </div>
        </div>
        <div class="col-md-4">
            <label for="Peso" class="form-label">Peso</label>
            <input type="text" class="form-control" id="Peso" required="">
            <div class="invalid-feedback">
                Por favor ingresa el Peso.
            </div>
        </div>
        <div class="col-md-4">
            <label for="carrera" class="form-label">Carrera</label>
            <input type="text" class="form-control" id="carrera" required="">
            <div class="invalid-feedback">
                Por favor ingresa la carrera.
            </div>
        </div>
        <div class="col-md-4">
            <label for="trayecto" class="form-label">Trayecto</label>
            <input type="text" class="form-control" id="trayecto" required="">
            <div class="invalid-feedback">
                Por favor ingresa el trayecto.
            </div>
        </div>
        <div class="col-md-4">
            <label for="seccion" class="form-label">Sección</label>
            <input type="text" class="form-control" id="seccion" required="">
            <div class="invalid-feedback">
                Por favor ingresa la sección.
            </div>
        </div>
        <div class="col-md-4">
            <label for="disciplina" class="form-label">Disciplina</label>
            <select class="form-select" id="disciplina" required="">
                <option value="">Selecciona...</option>
                <option value="1">Futbol sala</option>
                <option value="2">Basket</option>
                <option value="3">Tenis</option>
                <option value="4">Futbol campo</option>
                </select>
            <div class="invalid-feedback">
                Por favor selecciona una disciplina.
            </div>
        </div>
        <div class="col-md-4">
            <label for="tipoSangre" class="form-label">Tipo de Sangre</label>
            <select class="form-select" id="tipoSangre" required="">
                <option value="">Selecciona...</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <div class="invalid-feedback">
                Selecciona un tipo de sangre.
            </div>
        </div>
        <div class="col-md-12">
            <label for="alergias" class="form-label">Alergias (si aplica)</label>
            <textarea class="form-control" id="alergias" rows="3"></textarea>
        </div>
    </div>
    <div class="col-md-12 mt-2"><button class="btn btn-primary">Guardar</button></div>
</form>

<?php footerAdmin($data) ?>