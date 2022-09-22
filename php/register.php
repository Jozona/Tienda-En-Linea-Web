<?php
    session_start();
    //Agarramos todos los datos
    $user = $_POST['usuario'];
    $password = $_POST['password'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    $fecha = $_POST['fecha'];
    $fechaSQL=date("Y-m-d",strtotime($fecha));

    
    if($_POST['sexo'] == '1'){
        $sexo = 'm';
    }else{
        $sexo = 'f';
    }


    if($_POST['rol'] == '1'){
        $rol = 'c';
    }else{
        $rol ='v';
    }
        

    if(isset($_POST['privado']))
    {
        $privado = 1;
    }else{
        $privado = 0;
    }

    //Conexion a la base de datos
    $conn = new mysqli('localhost', 'root', 'root', 'boutlig_db');

    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into users(username, password, email, rol, full_name, birthday, sex, private)
            values('$user', '$password', '$email', '$rol', '$nombre', '$fechaSQL', '$sexo', '$privado')");
            // echo "('$user', '$password', '$email', '$rol', '$nombre', '$fechaSQL', '$sexo', '$privado')";
        
        if($stmt->execute()){
            $_SESSION["user"] = $user;
            echo $_SESSION["user"];
        }
        
        $stmt->close();
        $conn->close();     
    }
