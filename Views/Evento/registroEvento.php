<?php headerAdmin($data) ?>

<form id="formEvento">
    <div class="row g-3">
        <div class="col-md-12">
            <label for="nombreEvento" class="form-label">Nombre del Evento</label>
            <input type="text" class="form-control" id="nombreEvento" required="">
            <div class="invalid-feedback">
                Por favor ingresa el nombre del evento.
            </div>
        </div>
        <div class="col-md-6">
            <label for="fechaInicio" class="form-label">Fecha de Inicio</label>
            <input type="date" class="form-control" id="fechaInicio" required="">
            <div class="invalid-feedback">
                Por favor ingresa la fecha de inicio.
            </div>
        </div>
        <div class="col-md-6">
            <label for="fechaFin" class="form-label">Fecha de Fin</label>
            <input type="date" class="form-control" id="fechaFin" required="">
            <div class="invalid-feedback">
                Por favor ingresa la fecha de fin.
            </div>
        </div>
        <div class="col-md-12">
            <label for="disciplinas" class="form-label">Disciplinas a Participar (selecciona varias si aplica)</label>
            <select class="form-select" id="disciplinas" multiple required="">
                <option value="1">Futbol sala</option>
                <option value="2">Basket</option>
                <option value="3">Tenis</option>
                <option value="4">Futbol campo</option>
                </select>
            <div class="invalid-feedback">
                Por favor selecciona al menos una disciplina.
            </div>
        </div>
        <div class="col-md-12">
            <label for="lugar" class="form-label">Lugar</label>
            <input type="text" class="form-control" id="lugar" required="">
            <div class="invalid-feedback">
                Por favor ingresa el lugar del evento.
            </div>
        </div>
    </div>
    <div class="col-md-12 mt-2"><button class="btn btn-primary">Guardar</button></div>
</form>

<?php footerAdmin($data) ?>
