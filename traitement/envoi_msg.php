<?php session_start();
include('../config/db.php');


$err = 0;
$msg = 'Erreur de connexion au serveur';
if (!empty($_POST['nom']) && !empty($_POST['prenoms']) && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['msg'])) {

    $nom = trim(strip_tags($_POST['nom']));
    $prenoms = trim(strip_tags($_POST['prenoms']));
    $email = trim(strip_tags($_POST['email']));
    $tel = trim(strip_tags($_POST['tel']));
    $msg = trim(strip_tags($_POST['msg']));

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $err = 0;
        $msg = 'Email incorrect';
    } elseif (!is_numeric($tel) || strlen($tel) < 8) {
        $err = 0;
        $msg = 'Numéro incorrect';
    } else {
        $q = $db->prepare("insert into message (nom_pers,prenoms_pers,email_pers,tel_pers,msg_pers) values (?,?,?,?,?)");
        $q->execute([$nom, $prenoms, $email, $tel, $msg]);
        $msg = 'Message envoyé';
        $err = 1;
    }
} else {
    $err = 0;
    $msg = 'Veuillez remplir tous les champs ';
}

$tab = ['err' => $err, 'msg' => $msg];
echo json_encode($tab);
