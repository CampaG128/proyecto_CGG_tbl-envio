<?php
    require_once("C:/xampp/htdocs/proyecto/controller/usernameController.php");
    $envio = new envioControlador();
    $envio->update($_POST['id_envio'],$_POST['edit_idprod'],$_POST['edit_dir'],$_POST['edit_pais'],$_POST['edit_coste'],$_POST['edit_precio'],$_POST['edit_paqueteria'],$_POST['edit_nombre']);
?>