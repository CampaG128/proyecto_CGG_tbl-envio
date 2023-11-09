<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/head.php");
    require_once("C:/xampp/htdocs/proyecto/controller/usernameController.php");
    $envio = new envioControlador();
    $user = $envio->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <input type="hidden" name="id_envio" value="<?= $user[0]?>">

    <h2>Modificando Registro</h2>


    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nuevo id del producto</label>
        <div class="col-sm-10">
        <input type="text" name="edit_idprod" class="form-control" id="staticEmail" value="<?= $user[1]?>">
        </div>
    </div>


    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva direccion de envío</label>
        <div class="col-sm-10">
            <input type="text" name="edit_dir" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nuevo pais de envío</label>
        <div class="col-sm-10">
        <input type="text" name="edit_pais" class="form-control" id="staticEmail" value="<?= $user[3]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo coste de envío</label>
        <div class="col-sm-10">
            <input type="text" name="edit_coste" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>
    </div>
    
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Nuevo precio total</label>
        <div class="col-sm-10">
        <input type="text" name="edit_precio" class="form-control" id="staticEmail" value="<?= $user[5]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nueva paquetería</label>
        <div class="col-sm-10">
            <input type="text" name="edit_paqueteria" class="form-control" id="inputPassword" value="<?= $user[6]?>">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputPassword" class="col-sm-2 col-form-label">Nuevo Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="edit_nombre" class="form-control" id="inputPassword" value="<?= $user[7]?>">
        </div>
    </div>

    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/footer.php");
?>