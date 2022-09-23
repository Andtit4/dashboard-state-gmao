<?php 
require('./config/db/db.php');

if (isset($_POST['connexion'])){
    if (!empty($_POST['username'] && $_POST['password'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']); 
    }
    else{
        $message = "Username ou mot de passe incorrect!";
    }
}
// echo $now;

include('views/login.html');

?>