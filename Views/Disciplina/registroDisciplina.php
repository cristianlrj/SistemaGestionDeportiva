<?php headerAdmin($data) ?>

<form id="formDisciplina">
    <div class="row g-3">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre de la disciplina</label>
            <input type="text" class="form-control" name="nombre" id="nombre" required="">
        </div>
        <div class="col-md-12">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" name="descripcion" id="descripcion" required=""></textarea>
        </div>
    </div>
    <div class="col-md-12 mt-2"><button class="btn btn-primary" type="submit">Guardar</button></div>
</form>

<?php footerAdmin($data) ?>