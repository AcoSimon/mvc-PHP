<?php  ?>
<div class="body-login text-center">

<main class="form-signin">

<form method="post">
<h1 class="display-5 mb-4">Error 404</h1>
<h4 class="mb-5 fw-normal">Pagina no encontrada</h4>

<a href="./?page=salir" class="w-100 btn btn-lg btn-primary">Regresar</a>
<p class="mt-5 mb-3 text-muted">&copy; 2022</p>
</form>
<?php
$ingreso = new ControladorFormularios();
$ingreso->ctrIngreso();
?>

</main>
</div>

