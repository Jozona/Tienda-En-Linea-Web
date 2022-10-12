<?php
session_start();
require_once './usersAPI.php';

$API = new API_Users;
  if($API->updateUser()){
    echo 'true';
    return true;
  }