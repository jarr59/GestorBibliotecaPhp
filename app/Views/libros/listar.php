<?php print_r($cabecera) ?>
<h1>Lista de libros</h1>
<a href="<?= base_url('crear') ?>">Crear un libro</a>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Identificador</th>
            <th>Nombre</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($libros as $libro) : ?>
            <tr>
                <th><?= $libro['id'] ?></th>
                <th><?= $libro['nombre'] ?></th>
                <th><?= $libro['imagen'] ?></th>
                <th>Editar/Borrar</th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php print_r($piepagina) ?>
