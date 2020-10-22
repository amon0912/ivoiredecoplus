<?php session_start();
include('../../config/db.php');


$err = 0;
$msg = 'Erreur de connexion au serveur';
if (!empty($_POST['pass']) && !empty($_POST['pseudo'])) {

    $pseudo = trim(strip_tags($_POST['pseudo']));
    $pass = trim(strip_tags($_POST['pass']));

    if (strlen($pseudo) < 4) {
        $err = 0;
        $msg = 'ERREUR';
    } elseif (strlen($pass) < 4) {
        $err = 0;
        $msg = 'ERREUR';
    } else {

        // creation du compte
        // $id = uniqid(time());
        // $hash = password_hash($pass, PASSWORD_DEFAULT);
        // $q = $db->prepare("insert into user (id_user, pseudo_user, pass_user) values (?,?,?)");
        // $q->execute([$id, $pseudo, $hash]);
        // $msg = 'ok';
        // $err = 1;


        // connexion au compte
        $q = $db->prepare("SELECT * FROM user WHERE pseudo_user = ?");
        $q->execute([$pseudo]);
        $cpt = $q->rowCount();
        if ($cpt) {
            while ($data = $q->fetch()) {
                $tab['id_user'] = $data['id_user'];
                $tab['pseudo_user'] = $data['pseudo_user'];
                $tab['pass'] = $data['pass_user'];
            }
            $hash = password_verify($pass, $tab['pass']);
            if ($hash) {
                
                $_SESSION['id_user'] = $tab['id_user'];
                $_SESSION['pseudo_user'] = $tab['pseudo_user'];
                // Ajout d'information apres la connexion
                $msg = 'connection...';
                $err = 1;
            } else {
                $err = 0;
                $msg = 'Mot de passe incorrect';
            }
        } else {
            $err = 0;
            $msg = "Le compte n'existe pas encore ou mot de passe incorrect";
        }
    }
} else {
    $err = 0;
    $msg = 'Veuillez remplir tous les champs ';
}

$tab = ['err' => $err, 'msg' => $msg];
echo json_encode($tab);
