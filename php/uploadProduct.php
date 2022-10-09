<?php
    // Start the session
    session_start();
    require_once './productosAPI.php';

    $API = new API_Productos;
    //Llamamos a la api de insertar un producto
    if($API->InsertProducto()){
        echo "creado";
        return 1;
    }
?>