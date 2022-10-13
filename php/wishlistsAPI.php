<?php

require_once __DIR__ . './config.php';
class API_Wishlists
{

    //Funcion de prueba, para verificar que si trae la tabla de la base de datos
    function Select()
    {
        //Conectamos a la base de datos 
        $db = new Connect;
        $users = array();
        $data = $db->prepare('SELECT * FROM wishlists ORDER BY username');
        $data->execute();

        //Guardamos las rows en el array de $data
        while ($OutputData = $data->fetch(PDO::FETCH_ASSOC)) {
            $users[$OutputData['idWishlist']] = array(
                'idWishlist' => $OutputData['idWishlist'],
                'user' => $OutputData['user'],
                'nombreWishlist' => $OutputData['nombreWishlist'],
                'privada' => $OutputData['privada']
            );
        }

        //Regresamos los resultados de select en formato json
        return json_encode($users);
    }


    //Funcion para crear una wishlist
    function InsertWishlist()
    {

        //Checamos si la quiere hacer privada
        $db = new Connect;
        if (isset($_POST['wishlistPrivada'])) {
            $privada = 1;
        } else {
            $privada = 0;
        }


        //Agregamos todos los datos aun array
        $wishlist = array(

            ':usuario' => $_SESSION['user'],
            ':nombre' => $_POST['nombreWSL'],
            ':descripcion' => $_POST['descWSL'],
            ':privada' => $privada

        );

        //Preparamos la query y si resulta exitosa regresamos un true
        $data = $db->prepare("INSERT INTO boutlig_db.wishlists(user, nombreWishlist, descripcion, privada)
                                  VALUES(:usuario, :nombre, :descripcion, :privada );");
        if ($data->execute($wishlist)) {
            return true;
        } else {
            return false;
        }
    }

    function PrintUserWishlists(){
        $conn = new mysqli('localhost', 'root', 'root', 'boutlig_db');
        $sql = "SELECT idWishlist, user, nombreWishlist, privada, descripcion FROM wishlists WHERE user='".$_SESSION['user']."'";
        $result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
        while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
            if($row['privada'] == 0 ){
                    echo '<div class="media text-muted pt-3">
                <font-awesome-icon icon="fa-solid fa-star" style="width: 32px; height: 32px;"/>
                  <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                      <div class="d-flex justify-content-between align-items-center w-100">
                        <a class="text-gray-dark" style="text-decoration: none; font-size:20px; color:#f9af23;"  href="perfil.php?seccion=wishlist&wishlist='.$row['idWishlist'].'"><strong class="text-gray-dark">'.$row['nombreWishlist'].'</strong></a>
                        <a href="#">Eliminar</a>
                      </div>
                    <span class="d-block">'.$row['descripcion'].'</span>
                    </div>
                  </div>';
                }
                else{
                    echo '<div class="media text-muted pt-3">
                <font-awesome-icon icon="fa-solid fa-star" style="width: 32px; height: 32px;"/>
                  <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                      <div class="d-flex justify-content-between align-items-center w-100">
                        <a  class="text-gray-dark" style="text-decoration: none; font-size:20px; color:#f9af23;"  href="perfil.php?seccion=wishlist&wishlist='.$row['idWishlist'].'"><strong class="text-gray-dark">'.$row['nombreWishlist'].'</strong></a>
                        <a href="#">Eliminar</a>
                      </div>
                      <font-awesome-icon icon="fa-solid fa-lock" />
                    <span class="d-block">'.$row['descripcion'].'</span>
                    </div>
                  </div>';

                }
        }
    }

    function PrintUserWishlistsShort(){
        $conn = new mysqli('localhost', 'root', 'root', 'boutlig_db');
        $sql = "SELECT idWishlist, user, nombreWishlist, privada, descripcion FROM wishlists WHERE user='".$_SESSION['user']."'";
        $result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
        while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
            if($row['privada'] == 0 ){
                    echo '<div class="media text-muted pt-3">
                <font-awesome-icon icon="fa-solid fa-star" style="width: 32px; height: 32px;"/>
                  <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                      <div class="d-flex justify-content-between align-items-center w-100">
                        <a class="text-gray-dark" style="text-decoration: none; font-size:20px; color:#f9af23;"  href="perfil.php?seccion=wishlist&wishlist='.$row['idWishlist'].'"><strong class="text-gray-dark">'.$row['nombreWishlist'].'</strong></a>
                        <a href="#">Eliminar</a>
                      </div>
                    <span class="d-block">'.$row['descripcion'].'</span>
                    </div>
                  </div>';
                }
                else{
                    echo '<div class="media text-muted pt-3">
                <font-awesome-icon icon="fa-solid fa-star" style="width: 32px; height: 32px;"/>
                  <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                      <div class="d-flex justify-content-between align-items-center w-100">
                        <a  class="text-gray-dark" style="text-decoration: none; font-size:20px; color:#f9af23;"  href="perfil.php?seccion=wishlist&wishlist='.$row['idWishlist'].'"><strong class="text-gray-dark">'.$row['nombreWishlist'].'</strong></a>
                        <a href="#">Eliminar</a>
                      </div>
                      <font-awesome-icon icon="fa-solid fa-lock" />
                    <span class="d-block">'.$row['descripcion'].'</span>
                    </div>
                  </div>';

                }
        }
    }
}
