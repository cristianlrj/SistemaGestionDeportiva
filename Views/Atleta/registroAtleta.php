<?php headerAdmin($data) ?>


<form id="formAtleta">
    <div class="row g-3">
        <div class="col-md-3">
            <label for="cedula" class="form-label">Cédula</label>
            <div class="input-group">
            <select name="letra" id="letra" class="form-select select-group">
                <option value="V">V</option>
                <option value="E">E</option>
            </select>
            <input type="number" class="form-control" id="cedula" max="99999999" required="">
            
            </div>
        </div>
        <div class="col-md-3">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" pattern="[A-Za-z]" required="">
            
        </div>
        <div class="col-md-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" pattern="[A-Za-z]" required="">
            
        </div>
        <div class="col-md-3">
            <label for="fechaNacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" id="fechaNacimiento" required="">
            
        </div>
        <div class="col-md-3">
            <label for="carrera" class="form-label">Carrera</label>
            <input type="text" class="form-control" id="carrera" required="">
            
        </div>
        <div class="col-md-3">
            <label for="trayecto" class="form-label">Trayecto</label>
            <input type="text" class="form-control" id="trayecto" required="">
            
        </div>
        <div class="col-md-3">
            <label for="seccion" class="form-label">Sección</label>
            <input type="text" class="form-control" id="seccion" required="">
            
        </div>
        <div class="col-md-3">
            <label for="Talla Zapato" class="form-label">Talla Zapato</label>
            <input type="number" class="form-control" id="Talla Zapato" max="50" required="">
            
        </div>
        <div class="col-md-3">
            <label for="Talla Franela" class="form-label">Talla Franela</label>
            <input type="text" class="form-control" id="Talla Franela" required="">
            
        </div>
        <div class="col-md-3">
            <label for="Talla Pantalon" class="form-label">Talla Pantalón</label>
            <input type="text" class="form-control" id="Talla Pantalon" required="">
            
        </div>
        <div class="col-md-3">
            <label for="Estatura" class="form-label">Estatura (cm)</label>
            <input type="number" class="form-control" id="Estatura" required="">
            
        </div>
        <div class="col-md-3">
            <label for="Peso" class="form-label">Peso (kg)</label>
            <input type="number" class="form-control" id="Peso" required="">
            
        </div>
        <div class="col-md-3">
            <label for="disciplina" class="form-label">Disciplina</label>
            <select class="form-select" id="disciplina" required="">
                <option value="">Selecciona...</option>
                <option value="1">Futbol sala</option>
                <option value="2">Basket</option>
                <option value="3">Tenis</option>
                <option value="4">Futbol campo</option>
                </select>
            
        </div>
        <div class="col-md-3">
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
            
        </div>
        <div class="col-md-12">
            <label for="alergias" class="form-label">Alergias (si aplica)</label>
            <textarea class="form-control" id="alergias" rows="2"></textarea>
        </div>
        <div class="col-md-12">
            <label for="patologias" class="form-label">Patologías (si aplica)</label>
            <textarea class="form-control" id="patologias" rows="2"></textarea>
        </div>
    </div>
    <div class="col-md-12 mt-2"><button class="btn btn-primary">Guardar</button></div>
</form>

<?php footerAdmin($data) ?>