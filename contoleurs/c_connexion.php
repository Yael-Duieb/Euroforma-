<?php
/**
 * Gestion de la connexion 
 *
 * PHP Version 7
 *
 * @category  Stage 2e année
 * @package   Euroforma
 * @author    Yael Haya Duieb
 */
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
if (!$uc) {
    $uc = 'demandeconnexion';
}

switch ($action) {
case 'demandeConnexion':
    include 'vues/v_connexion.php';
    break;
case 'valideConnexion':
    $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
    $mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING);
    $utilisateur = $pdo->getInfosUtilisateur($login, $mdp);
 
    if (!is_array($utilisateur)){
        ajouterErreur('Login ou mot de passe incorrect');
        include 'vues/v_erreurs.php';
        include 'vues/v_connexion.php';
     } else {
       if (is_array($utilisateur)){
       $nom = $utilisateur['nom']; 
       }
           connecter($nom);
           header('Location: index.php');
       }
   break;
default:
    include 'vues/v_connexion.php';
    break;
}
