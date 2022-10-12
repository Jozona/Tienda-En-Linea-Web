<?php

    require_once __DIR__ . './config.php';
    class API_Productos{
        function Select(){
            $db = new Connect;
            //Creamos el array donde vamos a guardar el resultado
            $productos = array();
            $data = $db->prepare('SELECT * FROM productos ORDER BY fechaCarga');
            $data->execute();
            //Mientras haya filas, seguir guardando en el array
            while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
                $users[$OutputData['numProducto']] = array(
                    'numProducto' => $OutputData['numProducto'],
                    'nombreProducto' => $OutputData['nombreProducto'],
                    'descripcion' => $OutputData['descripcion'],
                    'foto1' => $OutputData['foto1'],
                    'foto2' => $OutputData['foto2'],
                    'foto3' => $OutputData['foto3'],
                    'video' => $OutputData['video'],
                    'inventario' => $OutputData['inventario'],
                    'valoracion' => $OutputData['valoracion'],
                    'status' => $OutputData['status'],
                    'idUsuario' => $OutputData['idUsuario'],
                    'fechaCarga' => $OutputData['fechaCarga'],
                    'cotizable' => $OutputData['cotizable']
                );
            }
            return json_encode($productos);
        }

        function InsertProducto(){
            $db = new Connect;
            if(isset($_POST['checkCoti']))
            {
                $cotizable = 1;
            }else{
            $cotizable = 0;
            }


            $producto = array(
            
                ':nombreProducto' => $_POST['nomProducto'],
                ':descripcion' => $_POST['descPdt'],
                ':foto1' => 'uploads/productos/' . uploadImage('foto1'),
                ':foto2' => 'uploads/productos/' . uploadImage('foto2'),
                ':foto3' => 'uploads/productos/' . uploadImage('foto3'),
                ':video' => 'aaaa',
                ':precio' => $_POST['precioPdt'],
                ':inventario' => $_POST['existenciaPdt'],
                ':idUsuario' =>  $_SESSION["user"],
                ':cotizable' => $cotizable
                
            );

            $data = $db->prepare("INSERT INTO boutlig_db.productos(nombreProducto,descripcion,foto1,foto2,foto3,video,precio,inventario,idUsuario, cotizable)
                                  VALUES(:nombreProducto, :descripcion, :foto1, :foto2, :foto3, :video, :precio, :inventario, :idUsuario, :cotizable);");
            $data->execute($producto);
            return 1;
        }

        function PrintAllProducts(){
            $conn = new mysqli('localhost', 'root', 'root', 'boutlig_db');
            $sql = "SELECT * FROM productos";
            $result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
            while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
                echo "<div class='col'>
                    <div class='card shadow-sm'>
                      <a href='./pagProducto.php?producto=".$row['numProducto']."'><img src='".$row['foto1']."' role='img' preserveAspectRatio='xMidYMid slice' width='100%' height='225' focusable='false' alt='' style='object-fit: scale-down;width: 90%;height: 250px; cursor: pointer;'></a>
                      <div class='card-body'>
                        <p class='card-text'>". $row['nombreProducto'] ."</p>
                        <div class='d-flex justify-content-between align-items-center'>
                          <div class='btn-group'>
                            <button type='button' class='btn btn-sm btn-outline-secondary'>Comprar</button>
                            <button type='button' class='btn btn-sm btn-outline-secondary'>Detalles</button>
                          </div>
                          <small class='fw-bolder'>$".$row['precio']."</small>
                        </div>
                      </div>
                    </div>
                  </div>";
            }
        }

        function DisplayProduct($productNumber){
            $conn = new mysqli('localhost', 'root', 'root', 'boutlig_db');
            $sql = "SELECT * FROM productos WHERE numProducto = ".$productNumber." ";
            $result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
            while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
                echo '<div class="producto">
                <div class="card-wrapper">
                  <div class="card">
                    <!-- card left -->
                    <div class="product-imgs">
                      <div class="img-display">
                        <div class="img-showcase">
                          <img class="" src="'.$row['foto1'].'" alt="shoe image" id="imgProd1">
                          <img src="'.$row['foto2'].'" alt="shoe image">
                          <img src="'.$row['foto3'].'" alt="shoe image">
                          <div class="video" style="display:block; min-width:100%; width:100%;right:10%;">
                            <iframe width="647" height="647" src="https://www.youtube.com/embed/1aHV1CozxE8"
                              title="YouTube video player" frameborder="0"
                              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                              allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                      <div class="img-select">
                        <div class="img-item h-50">
                          <a href="#" data-id="1">
                            <img src="'.$row['foto1'].'" alt="shoe image">
                          </a>
                        </div>
                        <div class="img-item">
                          <a href="#" data-id="2">
                            <img src="'.$row['foto2'].'" alt="shoe image">
                          </a>
                        </div>
                        <div class="img-item">
                          <a href="#" data-id="3">
                            <img src="'.$row['foto3'].'" alt="shoe image">
                          </a>
                        </div>
                        <div class="img-item">
                          <a href="#" data-id="4">
                            <img src="./img/productos2/lucesyt.jpg" alt="shoe image">
                          </a>
                        </div>
                      </div>
                    </div>
                    <!-- card right -->
                    <div class="product-content">
                      <h2 class="product-title" id="nombreProd"></h2>
                      <a href="#" class="product-link"></a>
            
            
            
                      <div class="product-detail">
                        <h2>'.$row['nombreProducto'].' </h2>
                        <div class="product-price">
                          <p class="new-price">Precio: <span id="precioProd">$'.$row['precio'].'</span></p>
                        </div>
                        <div class="product-price">
                          <p class="new-price ">Valoración: <span id="precioProd">'.$row['valoracion'].'</span></p>
                        </div>
                        <p id="descripcionProd"></p>
                        <ul>
                          <li>Disponible: <span>En stock</span></li>
                          <li>Categoria: <span id="categoriaProd">n</span></li>
                          <li>Area de envio: <span>Todo México</span></li>
                          <li>Costo de envio: <span>Gratis</span></li>
                        </ul>
                      </div>
            
                      <div class="purchase-info">
                        <input type="number" min="0" value="1">
                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#mensajeModal">
                          Enviar mensaje a vendedor
                        </button>
                        <button class="btn btn-success">Agregar a wishlist</button>
                        <button type="button" class="btn">Comprar</button>
                        
                      </div>
                      
                      </br>
                      <div class="social-links">
                        <p>Compartelo en: </p>
                        <a href="#">
                          <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#">
                          <i class="fab fa-pinterest"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>';
            }
        }
    }

    function uploadImage($foto){
        //Subimos las fotos a la aplicacion
            //We create a global variable for the photo
            $file = $_FILES[$foto];
            
            //We get all of the file data
            $fileName = $_FILES[$foto]['name'];
            $fileTmpName = $_FILES[$foto]['tmp_name'];
            $fileSize = $_FILES[$foto]['size'];
            $fileError = $_FILES[$foto]['error'];
            $fileType = $_FILES[$foto]['type'];
            
            //We separate the extension of the file name name . jpg
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            
            //We type the allowed extensions
            $allowed = array('jpg', 'jpeg', 'png');
            
            //If the extension is allowed
            if(in_array($fileActualExt, $allowed)){
                //We check if there were any errors with the file upload
                if($fileError === 0){
                    //We set the size of the file
                    if($fileSize < 500000){
                        //We make the name of the file unique
                        $fileNameNew = uniqid('', true) . "." . $fileActualExt;
                    
                        //We select the place to upload it
                        $fileDestintion = '../uploads/productos/' . $fileNameNew;
                    
                        //We upload the file
                        move_uploaded_file($fileTmpName, $fileDestintion);
                        return $fileNameNew;
                        // echo "Success";
                    }else{
                        // echo "The file is too heavy";
                    }
                }else{
                    // echo "There was an error uploading your file";
                }
            }else{
                // echo "Wrong type of file";
            }
    }