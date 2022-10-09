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
                ':foto1' => '.uploads/productos/' . uploadImage('foto1'),
                ':foto2' => '.uploads/productos/' . uploadImage('foto2'),
                ':foto3' => '.uploads/productos/' . uploadImage('foto3'),
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