<?php
/**
 * Fonctions pour l'application Euroforma
 *
 * PHP Version 7
 *
 * @category  Stage 2e année
 * @package   Euroforma
 * @author    Yael Haya Duieb
 */

/**
 * Teste si un quelconque utilisateur est connecté
 *
 * @return vrai ou faux
 */
function estConnecte()
{
    return isset($_SESSION['idUtilisateur']);
}

/**
* Ajoute le libellé d'une erreur au tableau des erreurs
*
* @param String $msg Libellé de l'erreur
*
* @return null
*/
function ajouterErreur($msg)
{
   if (!isset($_REQUEST['erreurs'])) {
       $_REQUEST['erreurs'] = array();
   }
   $_REQUEST['erreurs'][] = $msg;
}

/**
* Enregistre dans une variable session les infos d'un utilisateur
* @param String $nom        Nom de l'utilisateur
* @return null
*/
function connecter($nom)
{
  $_SESSION['nom'] = $nom;
}