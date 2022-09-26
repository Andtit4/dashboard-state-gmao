<?php 
require('config/db.php');

if (isset($_POST['connexion'])){
    if (!empty($_POST['username'] && $_POST['password'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']); 
        $req = $bdd -> query("SELECT * FROM admins WHERE email = '$username' AND pass_admin = '$password'");
        $nb = $req -> rowCount();
        if ($nb > 0){
            $userInfo = $req -> fetch();
            $_SESSION['id_admin'] = $userInfo['id_admin'];
            header("Location: dashboard.php?id_admin=".$_SESSION['id_admin']);
        }
        else{
            $message = "Username ou mot de passe incorrect!";
        }

        // Checking if it supervisor
        $req1 = $bdd -> query("SELECT * FROM superviseur WHERE email_sup = '$username' AND pass_sup = '$password'");
        $nb1 = $req1 -> rowCount();
        if ($nb1 > 0){
            $userInfo = $req1 -> fetch();
            $_SESSION['id_sup'] = $userInfo['id_sup'];
            header("Location: stateboard.php?id_sup=".$_SESSION['id_sup']);
        }
        else{
            $message = "Username ou mot de passe incorrect!";
        }
    }
    else{
        $message = "Veuillez remplir tous les champs!";
    }
}

require('views/login.php');
?>