<?php
require('config/db.php');
$req1 = $bdd -> query("SELECT * FROM users");
if (isset($_GET['id_admin'])){
    $id_admin = intval($_GET['id_admin']);
    if (isset($_POST['ajouter'])){
        if (!empty($_POST['email'] && $_POST['nom'] && $_POST['pass'] && $_POST['passconf'])){
            $email =htmlspecialchars($_POST['email']);
            $nom =htmlspecialchars($_POST['nom']);
            $pass =htmlspecialchars($_POST['pass']);
            $passconf =htmlspecialchars($_POST['passconf']);

            if ($pass == $passconf){
                $req = $bdd -> query("INSERT INTO users VALUES ('', '$nom', '$email', '$pass')");
                header("Location: add_user.php?id_admin=".$id_admin);
            }
            else{
                $message = "Les mots de passe ne concordent pas";
            }

        }
        else{
            $message = "Veuillez remplir les champs";
        }
    }
}else{
    header("Location: index.php");
}

require('views/add_user.php');

?>