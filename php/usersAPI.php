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
    }
?>
