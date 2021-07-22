<?= $cabecera ?>

<div class="card">
    <div class="card-header">
        <h1>Formulario de crear</h1>
    </div>
    <div class="card-body">
        <h5 class="card-title">Ingrese los campos</h5>
        <!--Formulario-->
        <form method="POST" action="<?=site_url('/guardar')?>" enctype="multipart/form-data">
            <!--Formgruop-->
            <div class="form-group">
                <label for="nombre" class="form-label">Nombre </label>
                <input id="nombre" class="form-control" placeholder="Escriba un nombre" type="text" name="nombre" />
            </div>
            <!--Formgruop-->
            <div class="form-group">
                <label for="imagen" class="form-label">Imagen</label>
                <input id="imagen" class="form-control-file" type="file" name="imagen" />
            </div>
            <!--Formgruop-->
            <div class="form-group">
                <button class="btn btn-success" type="button">Guardar</button>
            </div>
        </form>
    </div>
</div>
<?= $piepagina ?>