<?php

    require_once __DIR__ . './config.php';
    class API_Users{
        function Select(){
            $db = new Connect;
            $users = array();
            $data = $db->prepare('SELECT * FROM users ORDER BY username');
            $data->execute();
            while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
                $users[$OutputData['username']] = array(
                    'username' => $OutputData['username'],
                    'password' => $OutputData['password'],
                    'email' => $OutputData['email'],
                    'rol' => $OutputData['rol'],
                    'profile_picture' => $OutputData['profile_picture'],
                    'full_name' => $OutputData['full_name'],
                    'birthday' => $OutputData['birthday'],
                    'sex' => $OutputData['sex'],
                    'join_date' => $OutputData['join_date'],
                    'private' => $OutputData['private']
                );
            }
            return json_encode($users);
        }

        function LoginSelect($username, $password){
            $db = new Connect;
            $users = array();
            $data = $db->prepare("SELECT * FROM users WHERE username= '".$username."' AND password= '".$password."'");
            $data->execute();
            while($OutputData = $data->fetch(PDO::FETCH_ASSOC)){
                $users[$OutputData['username']] = array(
                    'username' => $OutputData['username'],
                    'password' => $OutputData['password'],
                    'email' => $OutputData['email'],
                    'rol' => $OutputData['rol'],
                    'profile_picture' => $OutputData['profile_picture'],
                    'full_name' => $OutputData['full_name'],
                    'birthday' => $OutputData['birthday'],
                    'sex' => $OutputData['sex'],
                    'join_date' => $OutputData['join_date'],
                    'private' => $OutputData['private']
                );
            }
            if($users){
                $_SESSION['user'] = $username;
                echo $_SESSION['user'];
            }
            return $users;
        }

        function LoadUserProfile(){
            $conn = new mysqli('localhost', 'root', 'root', 'boutlig_db');
            $sql = "SELECT * FROM users WHERE username='".$_SESSION['user']."'";
            $result = mysqli_query($conn, $sql); // First parameter is just return of "mysqli_connect()" function
            while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..
                echo '<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
                <h3 class="mb-4">Tu informacion</h3>

                <div class="row">
                    <div class=" col-md-6 img-circle text-center mb-3">
                        <img id="imgPFP" src="'.$row['profile_picture'].'" alt="Image" class="shadow" style="cursor: pointer;">
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Cambiar foto de perfil</label>
                            <input type="file" name="PFP" onchange="onFileSelected(event)" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label> Nombre completo</label>
                            <input type="text" name="nombre" class="form-control" value="'.$row['full_name'].'">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="correo" class="form-control" value="'.$row['email'].'">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Constraseña</label>
                            <input type="password" name="pass" class="form-control" value="'.$row['password'].'">
                        </div>
                    </div>
                </div>
                <div>
                    <input type="submit" name="submit" class="btn btn-primary" value="Actualizar">
                    <button class="btn btn-light" onClick="window.location.reload();">Cancelar</button>
                </div>
            </div>';
            }
        }

        function updateUser(){
            $name = $_POST['nombre'];
            $email = $_POST['correo'];
            $pass = $_POST['pass'];

            $db = new Connect;

            if($_FILES['PFP']['name'] != ''){
                if(!uploadImage('PFP')){
                    echo 'false';
                    return false;
                }
                $data = $db->prepare("UPDATE users SET password='".$pass."', email='".$email."', full_name='".$name."', profile_picture='./uploads/pfps/".uploadImage('PFP')."'  WHERE username='".$_SESSION['user']."'");
                $data->execute();
                echo 'true';
            }else{
                $data = $db->prepare("UPDATE users SET password='".$pass."', email='".$email."', full_name='".$name."' WHERE username='".$_SESSION['user']."'");
                $data->execute();
                echo 'true';
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
                        $fileNameNew = $_SESSION['user'] . "." . $fileActualExt;
                    
                        //We select the place to upload it
                        $fileDestintion = '../uploads/pfps/' . $fileNameNew;
                    
                        //We upload the file
                        move_uploaded_file($fileTmpName, $fileDestintion);
                        return $fileNameNew;
                        // echo "Success";
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }else{
                return false;
            }
    }
