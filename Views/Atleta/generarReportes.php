<?php headerAdmin($data) ?>
<form action="<?= BASE_URL ?>/Atleta/reporteAtletas" method="POST" target="_blank">
<div class="container">
    <div class="row">
        <div class="col">
            <label for="nombre">Titulo del reporte</label>
            <input type="text" name="nombre" class="form-control" value="Reporte de Atleta ">
        </div>
    </div>
    <div class="row mt-4">
        <div class="col">
            <label for="campos">Campos</label>
            <select class="form-select" id="campos" name="campos[]" data-placeholder="Click para seleccionar campos" multiple>
                <option selected value="cedula">Cedula</option>
                <option selected value="nombre">Nombre</option>
                <option selected value="disciplina">Disciplina</option>
                <option selected value="talla_franela">Talla franela</option>
                <option selected value="talla_pantalon">Talla pantalon</option>
                <option selected value="talla_zapato">Talla Zapato</option>
            </select>
        </div>
    </div>

    <div class="row mt-4 mb-4">
            <div class="col">
                <label for="tipo">Tipo de atleta</label>
            <select class="form-select" id="tipo" name="tipo">
                <option value="0 ">Todos</option>
                <option value="1">Estudiante</option>
                <option value="2">Obrero</option>
                <option value="3">Docente</option>
                <option value="4">Administrativo</option>
            </select>
        </div>
    </div>
    
    <div class="row mt-4 mb-4">
            <div class="col">
                <label for="filtro">Filtro</label>
            <select class="form-select" id="filtro" name="filtro">
                <option value="Ninguno">Ninguno</option>
                <option value="Sexo">Sexo</option>
                <option value="Disciplina">Disciplina</option>
                <option value="talla_franela">Talla Franela</option>
                <option value="talla_pantalon">Talla Pantalon</option>
                <option value="talla_zapato">Talla Zapato</option>
            </select>
        </div>
        <div class="col">
            <label for="inputCampo">Valor</label>
            <div id="inputContainer">
                <input type="text" class="form-control" disabled name="valor" id="inputCampo">
            </div>
        </div>
    </div>

    <div class="row mt-4 mb-4">
            <div class="col">
                <label for="filtro2">Filtro</label>
            <select class="form-select" id="filtro2" name="filtro2">
                <option value="Ninguno">Ninguno</option>
                <option value="Sexo">Sexo</option>
                <option value="Disciplina">Disciplina</option>
                <option value="talla_franela">Talla Franela</option>
                <option value="talla_pantalon">Talla Pantalon</option>
                <option value="talla_zapato">Talla Zapato</option>
            </select>
        </div>
        <div class="col">
            <label for="inputCampo">Valor</label>
            <div id="inputContainer2">
                <input type="text" class="form-control" disabled name="valor2" id="inputCampo2">
            </div>
        </div>
    </div>
    </div>

    <button class="btn btn-primary" id="Generar">Generar</button>
</div>
</form>
<?php footerAdmin($data) ?>