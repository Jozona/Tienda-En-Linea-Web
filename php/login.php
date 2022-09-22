<?php
    // Start the session
    session_start();

    $user = $_POST['user'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', 'root', 'boutlig_db');

    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
    }else{
        $query = mysqli_query($conn, "SELECT * FROM users WHERE username= '".$user."' AND password= '".$password."'");
        $nr = mysqli_num_rows($query);
        
        if($nr){
            $_SESSION["user"] = $user;
            echo $_SESSION["user"];
        }
        
        $conn->close();
    }     
?>