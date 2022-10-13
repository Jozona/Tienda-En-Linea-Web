<?php
    // Start the session
    session_start();
    require_once './wishlistsAPI.php';

    $API = new API_Wishlists;
    //Llamamos a la api de insertar una wishlist y si es exitosa avisamos a la terminal
    if($API->InsertWishlist()){
        echo "creado";
        return 1;
    }
?>