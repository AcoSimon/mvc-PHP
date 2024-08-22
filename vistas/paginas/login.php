<?php  ?>
<div class="body-login text-center">

<main class="form-signin">

<form method="post">
<h1 class="display-5 mb-4">MVC</h1>
<h4 class="mb-5 fw-normal">Ingresar</h4>

<div class="form-floating">
<input type="text" class="form-control" name="usuario" id="floatingInput" autocomplete="off"  placeholder="Usuario" required>
<label for="floatingInput">Usuario</label>
</div>

<div class="form-floating">
<input type="password" class="form-control" name="pass" id="floatingPassword" autocomplete="off" placeholder="Contrase&ntilde;a" required>
<label for="floatingPassword">Contrase&ntilde;a</label>
</div>

<button type="submit" class="w-100 btn btn-lg btn-primary">Ingresar</button>
<p class="mt-5 mb-3 text-muted">&copy; 2022</p>
</form>
<?php
$ingreso = new ControladorFormularios();
$ingreso->ctrIngreso();
?>

</main>
</div>

