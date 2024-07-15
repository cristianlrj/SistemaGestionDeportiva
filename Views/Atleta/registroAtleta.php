<?php headerAdmin($data) ?>


<form id="formAtleta">
    <input type="hidden" id="id_atleta" name="id_atleta" value="<?= $data['id_atleta'] ?>">
    <div class="row g-3">
        <div class="col-md-3">
            <label for="cedula" class="form-label">Cédula</label>
            <div class="input-group">
            <select name="letra" id="letra" class="form-select select-group">
                <option value="V">V</option>
                <option value="E">E</option>
            </select>
            <input type="number" class="form-control" id="cedula" name="cedula" max="99999999" required="">
            
            </div>
        </div>
        <div class="col-md-6">
            <label for="nombreCompleto" class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" id="nombreCompleto" disabled>
        </div>

        <div class="col-md-3">
            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fechaNacimiento" disabled>
            
        </div>
        <div class="col-md-3">
            <label for="tipo" class="form-label">Condición</label>
            <input type="text" class="form-control" id="tipo" disabled>
            
        </div>
        <div class="col-md-3">
            <label for="carrera" class="form-label">PNF / Dependencia</label>
            <input type="text" class="form-control" id="carrera" disabled>
            
        </div>
        <div class="col-md-3">
            <label for="trayecto" class="form-label">Trayecto</label>
            <input type="text" class="form-control" id="trayecto" disabled>
            
        </div>
        <div class="col-md-3">
            <label for="seccion" class="form-label">Sección</label>
            <input type="text" class="form-control" id="seccion" disabled>
            
        </div>
        <div class="col-md-3">
            <label for="sexo" class="form-label">Sexo</label>
            <input type="text" class="form-control" id="sexo" disabled>
            
        </div>
        <div class="col-md-3">
            <label for="Talla Zapato" class="form-label">Talla Zapato</label>
            <input type="number" class="form-control" id="talla_zapato" name="talla_zapato" max="50" required="">
            
        </div>
        <div class="col-md-3">
            <label for="Talla Franela" class="form-label">Talla Franela</label>
            <input type="text" class="form-control" id="talla_franela"  name="talla_franela" required="">
            
        </div>
        <div class="col-md-3">
            <label for="Talla Pantalon" class="form-label">Talla Pantalón</label>
            <input type="text" class="form-control" id="talla_pantalon"  name="talla_pantalon" required="">
            
        </div>
        <div class="col-md-3">
            <label for="Estatura" class="form-label">Estatura (cm)</label>
            <input type="number" class="form-control" id="estatura" name="estatura" required="">
            
        </div>
        <div class="col-md-3">
            <label for="Peso" class="form-label">Peso (kg)</label>
            <input type="number" class="form-control" id="peso" name="peso" required="">
            
        </div>
        <div class="col-md-3">
            <label for="disciplina" class="form-label">Disciplina</label>
            <select class="form-select" id="disciplina" name="disciplina" required="">
                </select>
            
        </div>
        <div class="col-md-3">
            <label for="tipoSangre" class="form-label">Tipo de Sangre</label>
            <select class="form-select" id="tipo_sangre" name="tipo_sangre" required="">
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
            
        </div>
        <div class="col-md-12">
            <label for="federacion" class="form-label">Federacion</label>
            <div class="input-group">
            <div class="input-group-text">
            <input type="checkbox" class="form-check-input" name="" id="">
            </div>
            <input type="text" class="form-control" id="federacion">
            </div>
            
        </div>
        <div class="col-md-12">
            <label for="alergias" class="form-label">Alergias (si aplica)</label>
            <textarea class="form-control" id="alergias" name="alergias" rows="2"></textarea>
        </div>
        <div class="col-md-12">
            <label for="patologias" class="form-label">Patologías (si aplica)</label>
            <textarea class="form-control" id="patologias" name="patologias" rows="2"></textarea>
        </div>
    </div>
    <div class="col-md-12 mt-2"><button class="btn btn-primary" id="btnFinalizar">Guardar</button></div>
</form>

<?php footerAdmin($data) ?>