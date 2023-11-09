<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Id del producto</label>
        <input type="text" name="id_producto" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Direccion de envío</label>
        <input type="text" name="direccion" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Pais de envío</label>
        <input type="text" name="pais" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Coste de envío</label>
        <input type="text" name="envio" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Precio total</label>
        <input type="text" name="precio" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Paquetería</label>
        <input type="text" name="paqueteria" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <label for="exampleInputEmail1" class="form-label">Nombre de la cuenta</label>
        <input type="text" name="nombre" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="index.php">Cancelar</a>
    </form>

<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/footer.php");
?>